<?php
class Liquid_model extends Master_model
{
  protected $_tablename = 'liquid';
  protected $_tablename_version = 'liquid_version';
  
  function __construct() {
      parent::__construct();
  }
  
  public function update( $type, $content ){
    
    $version = 1.0;
    
    // Get the latest version of type
    $this->db->select( 'version' );
    $this->db->where( 'type', $type );
    $this->db->order_by( 'version', 'DESC' );
    
    $query = $this->db->get( $this->_tablename );
    
    if( $query->num_rows() > 0 ){
      $row = $query->result();
      
      $version = round( $row[0]->version + 0.1, 1 );
    }
    
    // Insert to table
    $data = array(
      'type' => $type,
      'content' => $content,
      'version' => number_format($version, 1, '.', '' ),
    );
    
    $this->db->insert( $this->_tablename, $data );
  }
  
  /**
  * Get the List of content for that type
  * 
  * @param mixed $type
  */
  public function getList( $type, $version = '' ){
    
    $this->db->where( 'type', $type );
    if($version != '') $this->db->where( 'version', $version );
    $this->db->order_by( 'version', 'DESC' );
    $query = $this->db->get( $this->_tablename );
    
    $return = array();
    if( $query->num_rows() > 0 )
    foreach( $query->result() as $row ){
      $return[ $row->version ] = $row->content;
    }
    
    return $return;
  }
  
  /**
  * Get the liquid content for certain shop, type
  * 
  * @param mixed $shop
  * @param mixed $type
  */
  public function getMyContent( $shop, $type ){
    
    // Get the list of version
    $arrContent = $this->getList( $type );
    
    // Get the version
    $this->db->select( 'version' );
    $this->db->where( 'type', $type );
    $this->db->where( 'shop', $shop );
    $query = $this->db->get( $this->_tablename_version );
    
    // Get the Content from the version list
    $return = '';
    if( $query->num_rows() > 0 ){
      $row = $query->result();
      
      if( array_key_exists( $row[0]->version, $arrContent) ) $return = $arrContent[ $row[0]->version ];
    }
    
    return $return;
  }  
  
  /**
  * Set the version for that store
  * 
  * @param mixed $shop
  * @param mixed $type
  * @param mixed $version
  */
  public function setVersion( $shop, $type, $version ){
    
    // Get the current version
    $id = '';
    
    $this->db->select( 'id' );
    $this->db->where( 'shop', $shop );
    $this->db->where( 'type', $type );
    
    // Update the data
    $data['version'] = $version;
    
    $query = $this->db->get( $this->_tablename_version );
    if( $query->num_rows() > 0 ){
      $row = $query->result();
      
      $this->db->where( 'id', $row[0]->id );
      $this->db->update( $this->_tablename_version, $data );
    }
    else
    {
      $data['shop'] = $shop;
      $data['type'] = $type;
      
      $this->db->insert( $this->_tablename_version, $data );
    }
  }
  
  public function publish( $shop, $access_token, $target_schema_type = '', $target_version = ''){
    
    $CI =& get_instance();
    $CI->load->model('Shopify_model');
    
    // Get the liquid content
    foreach( $this->config->item('LIQUID_TYPE') as $schema_type => $item ){
      
      // Check the schema type
      if($target_schema_type != '' && $schema_type != $target_schema_type) continue;
      
      // Get the top version
      $arrContent = $this->getList($schema_type, $target_version);
      
      if( count( $arrContent ) == 0 ) continue;
      
      $flagStart = true;
      $version = '';
      $content = '';
      foreach( $arrContent as $key => $val ){
        if( $flagStart ){
          $version = $key;
          $content = $val;
          break;
        }
      }
      
      $CI->Shopify_model->rewriteParam( $shop, $access_token );
      
      // Update the product.liquid file
      $themeInfo = $CI->Shopify_model->accessAPI( "themes.json" );
      
      if( isset( $themeInfo->themes) )
      {
        foreach( $themeInfo->themes as $theme )
        {
          if( $theme->role != 'main' ) continue;
          
          foreach( $item['file'] as $file ){
            
            // Get the products liquid
            $returnInfo = $CI->Shopify_model->accessAPI( "themes/" . $theme->id . "/assets.json?asset[key]=templates/" . $file . "&fields=value" );
            
            if( isset( $returnInfo->asset->value ) ){
              
              // Get the Value
              $liquid = $returnInfo->asset->value;  
              
              // Remove the old code
              $pos = strpos( $liquid, $this->config->item('SCHEMA_HEADER') );
              if( $pos !== false ){
                $pos1 = strpos( $liquid, $this->config->item('SCHEMA_FOOTER') );
                $liquid = substr( $liquid, 0, $pos ) . substr( $liquid, $pos1 + strlen( $this->config->item('SCHEMA_FOOTER') ) );
              }
              
              // Add the custom code            
              $liquid .= $this->config->item('SCHEMA_HEADER') . "\r\n";
              $liquid .= '<meta name="schemaappversion" content="' . $version . '">' . "\r\n";
              $liquid .= '<script type="application/ld+json">' . "\r\n";
              $liquid .= $content . "\r\n";
              $liquid .= '</script>' . "\r\n";
              $liquid .= $this->config->item('SCHEMA_FOOTER');
                
              $arrParam = array(
                "asset" => array(
                  "key" => "templates/" . $file,
                  "value" => $liquid
                )
              );
              
              $returnInfo = $CI->Shopify_model->accessAPI( "themes/" . $theme->id . "/assets.json", $arrParam, 'PUT' );
            }
          }

        }
        
        // Update the version
        $this->setVersion( $shop, $schema_type, $version );
      }        
    }    
  }
}  
?>