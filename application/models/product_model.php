<?php
class Product_model extends Master_model
{
  protected $_tablename = 'product';
  private $_total_count = 0;
  private $_arrProductKey = array();

  function __construct() {
    parent::__construct();

    // Get the variant id list
    $query = parent::getList();

    if( $query->num_rows > 0 )
    foreach( $query->result() as $row )
    {
      $this->_arrProductKey[] = $row->variant_id;
    }
  }

  public function getTotalCount(){ return $this->_total_count; }

  /**
  * Get the list of product/ varints
  * array(
  *     'supplier' => '',   // String
  *     'name' => '',       // String
  *     'sku' => '',        // String
  *     'supplier_category' => '',   // String
  *     'price' => '',               // String "{from} {to}"
  *     'product_id' => '',             // String
  *     'variant_id' => '',             // String
  *     'sort' => '',                   // String "{column} {order}"
  *     'product_only' => '',           // Boolean true/false : default :false
  *     'page_number' => '',            // Int, default : 0
  *     'page_size' => '',              // Int, default Confing['PAGE_SIZE'];
  *     'is_imported' => '',            // Int, 0: all, 1: published, 2: not-published / default : 0
  *     'is_queue' => '',               // Int, 0: all, 1: queue, 2: not-queue, / default : 0
  *     'is_stock' => '',               // Int, 0: all, 1: in stock, 2: out of stock / default 0
  );
  */
  public function getList( $arrCondition )
  {
      $where = array( 'shop' => $this->_shop );

      // Build the where clause
      if( !empty( $arrCondition['name'] ) ) $where["title LIKE '%" . str_replace( "'", "\\'", $arrCondition['name'] ) . "%'"] = '';

      // Product only - Group by, Get total records
      if( isset( $arrCondition['page_number'] ) )
      {
        // Get the count of records
        foreach( $where as $key => $val )
        if( $val == '' )
            $this->db->where( $key );
        else
            $this->db->where( $key, $val );
        $query = $this->db->get( $this->_tablename);
        $this->_total_count = $query->num_rows();
      }

      // Sort
      if( isset( $arrCondition['sort'] ) ) $this->db->order_by( $arrCondition['sort'] );
      $this->db->order_by( 'product_id', 'DESC' );

      // Limit
      if( isset( $arrCondition['page_number'] ) )
      {
          $page_size = isset( $arrCondition['page_size'] ) ? $arrCondition['page_size'] : $this->config->item('PAGE_SIZE');
          $this->db->limit( $page_size, $arrCondition['page_number'] );
      }

      foreach( $where as $key => $val )
      if( $val == '' )
          $this->db->where( $key );
      else
          $this->db->where( $key, $val );
      $query = $this->db->get_where( $this->_tablename );

      $arrReturn = array();
      foreach( $query->result() as $row )
      {
        $arrReturn[] = $row;
      }

      return $arrReturn;
  }

  // Get last updated date
  public function getLastUpdateDate()
  {
      $return = '';

      $this->db->select( 'updated_at' );
      $this->db->order_by( 'updated_at DESC' );
      $this->db->limit( 1 );
      $this->db->where( 'shop', $this->_shop );

      $query = $this->db->get( $this->_tablename );

      if( $query->num_rows() > 0 )
      {
          $res = $query->result();

          $return = $res[0]->updated_at;
      }

      return $return;
  }

  // Add product to database
  public function addProduct( $product )
  {
    // Get the images as array
    $arrImage = array();
    if( isset($product->images) && is_array($product->images) )
    {
      foreach( $product->images as $item ) $arrImage[ $item->id ] = $item->src;
    }

    if( isset( $product->variants ) && is_array( $product->variants ) )
    foreach( $product->variants as $variant )
    {
      // Get image id
      $image_url = '';
      if( !empty($variant->image_id) ) $image_url = $arrImage[$variant->image_id];
      if( $image_url == '' && isset( $product->image->src ))
      {
        $image_url = $product->image->src;
      }

      // Remove the existing product
      /*if( in_array( $variant->id, $this->_arrProductKey ))
      {
        return;
      }*/

      // Add the new variant
      $newProductInfo = array(
        'title' => $product->title,
        'product_id' => $product->id,
        'variant_id' => $variant->id,
        'sku' => $variant->sku,
        'handle' => $product->handle,
        'price' => $variant->price,
        'updated_at' =>  str_replace('T', ' ', $variant->updated_at) ,
        'published_at' => isset($product->published_at)? "Yes" : "No",
        'image_url' => $image_url,
        'data' => base64_encode( json_encode( $product ) ),
      );

      $query = parent::getList('variant_id = \'' . $variant->id. '\'');

      if( $query->num_rows() > 0 ){
          $items = $query->result();
          $id = $items[0]->id;
          parent::update( $id, $newProductInfo );
        }
      elseif($product->vendor == 'KanvasKreations')
        parent::add( $newProductInfo );
    }
  }

  // Delete the product from product_id
  public function deleteProduct( $product_id )
  {
    $this->db->delete( $this->_tablename, array( 'product_id' => $product_id, 'shop' => $this->_shop ) );
    if( $this->db->affected_rows() > 0 )
        return true;
    else
        return false;

  }

  public function getImageFromHandle( $product_handle )
  {
    $return = '';

    $query = parent::getList( 'handle=\'' . $product_handle . '\'' );
    if( $query->num_rows() > 0 )
    {
      $result = $query->result();
      $return = array(
        'product_name' => $result[0]->title,
        'image_url' => $result[0]->image_url,
      );
    }

    return $return;

  }

  public function getImageFromVaraint( $variant_id )
  {
    $return = '';

    $query = parent::getList( 'variant_id=\'' . $variant_id . '\'' );
    if( $query->num_rows() > 0 )
    {
      $result = $query->result();
      $return = $result[0]->image_url;
    }

    return $return;

  }

  public function getProductFromHandle( $product_handle )
  {
    $return = '';

    $query = parent::getList( 'handle=\'' . $product_handle . '\'' );
    if( $query->num_rows() > 0 )
    {
      $result = $query->result();
      $return = json_decode( base64_decode( $result[0]->data ));
    }

    return $return;
  }

  // ********************** //
}
?>
