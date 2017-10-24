<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {
  
  public function __construct() {
    parent::__construct();
    $this->load->model( 'Order_model' );
    
    // Define the search values
    $this->_searchConf  = array(
      'customer_name' => '',
      'order_name' => '',
      'shop' => $this->_default_store,
      'page_size' => $this->config->item('PAGE_SIZE'),
      'is_map' => '0',
      'is_download' => '0',
      'rate' => '1.32',
      'created_at' => '',
      'sort_field' => 'created_at',
      'sort_direction' => 'DESC',
    );
    $this->_searchSession = 'order_sels';
  }
  
  private function _checkDispatchCode( $code1, $code2 )
  {
    // if the first code is empty or both are same, return code2
    if( $code1 == '' || $code1 == $code2 ) return $code2;
    
    // If the second code is empty, return code1
    if( $code2 == '' ) return $code1;
    
    $arrRule = array( 'HH', 'YH', 'GM', 'SU', 'SF', 'FR', 'AP', 'JM', 'AO', 'AJ', 'NO' );
    
    $pos1 = array_search( $code1, $arrRule );
    $pos2 = array_search( $code2, $arrRule );
    
    if( $pos2 !== false && $pos1 < $pos2 ) return $code1;
    
    return $code2;
  }
  
  public function index(){
      $this->is_logged_in();
      
      $this->manage();
  }
  
  public function manage( $page =  0 ){
            
    $this->_searchVal['shop'] = trim( $this->_searchVal['shop'], 'http://' );
    $this->_searchVal['shop'] = trim( $this->_searchVal['shop'], 'https://' );
    
    // Check the login
    $this->is_logged_in();

    // Init the search value
    $this->initSearchValue();

    // Get data
    $arrCondition =  array(
       'customer_name' => $this->_searchVal['customer_name'],
       'order_name' => $this->_searchVal['order_name'],
       /*'page_number' => $page,
       'page_size' => $this->_searchVal['page_size'],  */            
       'is_map' => $this->_searchVal['is_map'],         
       'is_download' => $this->_searchVal['is_download'],         
       'created_at' => $this->_searchVal['created_at'],         
       'sort' => $this->_searchVal['sort_field'] . ' ' . $this->_searchVal['sort_direction'],
    );
      
    $this->Order_model->rewriteParam($this->_searchVal['shop']);
    $data['query'] =  $this->Order_model->getList( $arrCondition );
    $data['total_count'] = $this->Order_model->getTotalCount();
    $data['page'] = $page;  
    
    // Define the rendering data
    $data = $data + $this->setRenderData();

    // Store List    
    $arr = array();
    foreach( $this->_arrStoreList as $shop => $row ) $arr[ $shop ] = $shop;
    $data['arrStoreList'] = $arr;
    
    // Rate
    //$data['sel_rate'] = $this->_arrStoreList[ $this->_searchVal['shop'] ]->rate;

    // Load Pagenation
    $this->load->library('pagination');

    // Renter to view
    $this->load->view('view_header');
    $this->load->view('view_order1', $data );
    $this->load->view('view_footer1');
  }
  
  public function clear( $file_no )
  {
      $this->Order_model->clear( $file_no );
  }
  
  public function download( $shop, $file_no = 0, $rate = 1, $sel_ids = '' )
  {
    $shop = trim( $shop, 'http://' );
    $shop = trim( $shop, 'https://' );

    $this->Order_model->rewriteParam($shop);

    // Get the Store Object
    $objStore = $this->_arrStoreList[ $shop ];
      
    // Get the sku list
    $this->load->model( 'Dispatch_model' );
    $this->Dispatch_model->rewriteParam($shop);
    $arrDispatch = $this->Dispatch_model->getSkuList();     
    
    // Get data according to the givin file no
    $arrCondition =  array(
       'is_all' => 1,
    );

    if( $file_no == 0 )
    {
      // New download
      $file_no = $this->Order_model->getNewFileNo();  // Generate the file no
      $arrCondition['arr_id'] =  str_replace( '_', ',', trim( $sel_ids, '_' ) ); // Get the ids
    }
    else
    {
      // Exist download
      $arrCondition['file_no'] = $file_no;
    }
      
    $query =  $this->Order_model->getList( $arrCondition );
    
    // Zero padding for file no
    $file_no = sprintf( '%08d', $file_no );
    
    // Define the header        
    Header('Content-Description: File Transfer');
    Header('Content-Type: application/force-download;charset=UTF-8');
    Header('Content-Disposition: attachment; filename=' . $objStore->partner_code . '_' . $file_no . '.txt' );
    
    $lines = 0;
    
    // File Header
    echo $objStore->partner_code . '|';
    echo '|';
    echo $file_no . '|';
    echo date('dmYhis') . '|';
    echo "\r\n";

    foreach( $query->result() as $row )
    {
      $order = json_decode( base64_decode($row->data));
         
      // If some objects are empty
      if( !isset( $order->shipping_address ) )
      {
        $order->shipping_address = $order->billing_address;
      }
      if( !isset( $order->customer ) ) 
      {
        $order->customer = new stdClass();
        $order->customer->id = '';
        $order->customer->email = '';
      }
      if( count( $order->shipping_lines ) == 0 )
      {
        $temp = new stdClass();
        $temp->title = 'Standard shipping';
        $order->shipping_lines[] = $temp;
      }
      
      // Check fab.com
      $is_fab = false;
      if( $objStore->is_fab == "1" ){
        if( $order->total_price * 1 == 0 ) $is_fab = true;
      }
      
      // Order Rate
      $order_rate = $order->currency == 'USD' ? $rate : 1;
                        
      // ********** Product Line ********** //
      $productLine = '';
      $despatchMethod = '';
      $lineIndex = 0;
      $subtotal_price = 0;
      $subtotal_price_vat = 0;
      $subtotal_price_without_vat = 0;
      $total_vat_rate = 1;
      
      foreach( $order->line_items as $line_item )
      {
        // Get the person info and check it
        $personInfo = '';
        foreach( $line_item->properties as $item )
        {
          // We don't keep the 'thumb' property
          //  if( !in_array($item->name, $this->Order_model->getMapProperties() ) ) continue;
          $personInfo .= ';' . $item->value;
        }
        if( strlen( $personInfo ) > 1 ) $personInfo = substr( $personInfo, 1 );
        
        //  if( $personInfo == '' ) continue;
        
        // Increase the line number
        $lines ++;
        $lineIndex ++;

        // Get the despatchMethod
        $temp = isset( $arrDispatch[ trim($line_item->sku) ] ) ? $arrDispatch[ trim($line_item->sku) ]['code'] : '';
        $despatchMethod = $this->_checkDispatchCode( $despatchMethod, $temp );
        $vat_rate = ( isset( $arrDispatch[ trim($line_item->sku) ] ) && $arrDispatch[ trim($line_item->sku) ]['vat'] == '1' ) ? 1.2 : 1; // Check the vat
        if( $total_vat_rate == 1 && $vat_rate > 1 ) $total_vat_rate = $vat_rate;
        
        // unit price & total price
//        $unit_price = round( $line_item->price * $vat_rate / $order_rate, 2 ) * 100;
//        $unit_price_vat = round( $line_item->price * ( $vat_rate - 1 ) / $order_rate, 2 ) * 100;
        
        $unit_price = round( $line_item->price * $line_item->quantity / $order_rate, 2 ) * 100;
        $unit_price_vat = round( $line_item->price * $line_item->quantity * ( ( $vat_rate - 1 ) / $vat_rate ) / $order_rate, 2 ) * 100;
        
        $unit_price_without_vat = $unit_price - $unit_price_vat;

        $subtotal_price += round( $unit_price );
        $subtotal_price_vat += round( $unit_price_vat );
        $subtotal_price_without_vat += $unit_price_without_vat;
        
        $arrLine = array(
          '1' => $order->name,
          '2' => sprintf( '%03d', $lineIndex ),
          '3' => $line_item->sku,
          '4' => '',
          '5' => '',
          '6' => '',
          '7' => '',
          '8' => $line_item->quantity,
          '9' => '',
          '10' => '',
          '11' => '',
          '12' => $is_fab ? '' : $unit_price_without_vat,
          '13' => '',
          '14' => $is_fab ? '' : $unit_price_vat,
          '15' => $is_fab ? '' : $unit_price,
          '16' => '',
          '17' => '',
          '18' => '',
          '19' => $personInfo,
          '20' => '',
          '21' => '',
        );    
        
        foreach( $arrLine as $key => $val )
        {
          $value = '';
          switch( $key )
          {
            default:
              $value = $val;
              break;
          }
          
          $productLine .= ($value) . '|';
        }
        $productLine .= "\r\n";
      }
      
      // If Dispatch method is blank, set it as 'NO'
      if( $despatchMethod == '' && $objStore->delivery_method != '' ) $despatchMethod = $objStore->delivery_method;;
      if( $despatchMethod == '' ) $despatchMethod = 'NO';
      
      // ********** Order Header ********** //
      
      $mediaCode = $objStore->media_code;
      $paymentMethod = 'WP';
      
      // Dispatch Method
      if( $order->shipping_address->country_code == 'GB' )
      {
        $despatchMethod = trim( $despatchMethod, "\r\n" ); 
      }
      elseif( strpos( strtolower($order->shipping_lines[0]->title ), 'standard' ) !== false )
      {
        $despatchMethod = 'OV';
      }
      else
      {
        // $despatchMethod = 'UX';
        $despatchMethod = 'OV';
      }
      
      // For fab.com    
      if( $is_fab )
      {
        $mediaCode = 'N006';
        $paymentMethod = 'FR';
        $despatchMethod = 'UZ';
      }
      
      // USA Store, we define the custom delivery method
      if( $shop == 'yoghurt-direct.myshopify.com' && strtolower($order->shipping_lines[0]->title ) == 'tracked shipping' )
      {
        $despatchMethod = 'UX';
      }
      
      // shipping price
      $shipping_price = round( ( $order->total_price - $order->subtotal_price ) / $order_rate, 2 ) * 100;
      $shipping_price_vat = round( $shipping_price * ( $total_vat_rate - 1 ) / $total_vat_rate );
      $shipping_price_without_vat = $shipping_price - $shipping_price_vat;

      if( !isset( $order->shipping_address->first_name ) && isset( $order->billing_address->first_name ) ) $order->shipping_address = $order->billing_address;
      if( !isset( $order->billing_address->first_name ) && isset( $order->shipping_address->first_name ) ) $order->billing_address = $order->shipping_address;
      
      $arrLine = array(
        '1' => $order->name,
        '2' => isset( $order->customer->id ) ? $order->customer->id : '',
        '3' => '',
        '4' => $order->billing_address->first_name . ' ' . $order->billing_address->last_name,
        '5' => $order->billing_address->company,
        '6' => $order->billing_address->address1 . (!empty(trim($order->shipping_address->address2)) ? ', ' . $order->shipping_address->address2 : ''),
        '7' => $order->billing_address->city,
        '8' => $order->billing_address->province,
        '9' => $order->billing_address->country,
        '10' => $order->billing_address->zip,
        '11' => $order->billing_address->phone,
        '12' => '',
        '13' => '',
        '14' => isset( $order->customer->email ) ? $order->customer->email : '',
        '15' => '2',
        '16' => '',
        '17' => '',
        '18' => $order->shipping_address->first_name . ' ' . $order->shipping_address->last_name,
        '19' => $order->shipping_address->company,
        '20' => $order->shipping_address->address1 . (!empty(trim($order->shipping_address->address2)) ? ', ' . $order->shipping_address->address2 : ''),
        '21' => $order->shipping_address->city,
        '22' => $order->shipping_address->province,
        '23' => $order->shipping_address->country,
        '24' => $order->shipping_address->zip,
        '25' => $order->shipping_address->phone,
        '26' => '',
        '27' => '',
        '28' => isset( $order->customer->email ) ? $order->customer->email : '',
        '29' => '1',
        '30' => '',
        '31' => '',
        '32' => '',
        '33' => '',
        '34' => '',
        '35' => '',
        '36' => '',
        '37' => '',
        '38' => '',
        '39' => '',
        '40' => '',
        '41' => '',
        '42' => '',
        '43' => '',
        '44' => '',
        '45' => $paymentMethod,
        '46' => '',
        '47' => $is_fab ? '' : $subtotal_price + $shipping_price, // Total Price
        '48' => '',
        '49' => '',
        '50' => '',
        '51' => '',
        '52' => '',
        '53' => $despatchMethod,
        '54' => '',
        '55' => $mediaCode,
        '56' => '',
        '57' => '',
        '58' => '',
        '59' => '',
        '60' => '',
        '61' => '',
        '62' => '',
        '63' => '',
        '64' => '',
        '65' => '',
        '66' => 'N',
        '67' => $is_fab ? '' : 0,
        '68' => '',
        '69' => 'N',
        '70' => '',
        '71' => 'N',
        '72' => $is_fab ? '' : 0,
        '73' => '',
        '74' => '',
        '75' => '',
        '76' => '',
        '77' => '',
        '78' => '',
        '79' => '',
        '80' => '',
        '81' => '',
        '82' => '',
        '83' => '',
        '84' => '',
        '85' => '',
        '86' => '',
        '87' => '',
        '88' => '',
        '89' => '',
        '90' => '',
        '91' => '',
        '92' => '',
        '93' => '',
        '94' => '',
        '95' => 'N',
        '96' => $is_fab ? '' : $subtotal_price_without_vat,   // Subtotal
        '97' => $is_fab ? '' : $subtotal_price_vat,           // Subtotal VAT
        '98' => '',
        '99' => '',
        '100' => $is_fab ? '' : $shipping_price_without_vat,  // Shipping
        '101' => $is_fab ? '' : $shipping_price_vat,                // Shipping VAT
        '102' => '',
        '103' => '',
        '104' => '',
        '105' => '',
        '106' => '',
        '107' => '',
        '108' => '',
        '109' => '',
        '110' => '',
        '111' => '',
        '112' => '',
        '113' => '',
        '114' => '',
      );
      
      $orderLine = '';
      foreach( $arrLine as $key => $val )
      {
        $value = '';
        switch( $key )
        {
          case '1120' :
            // Discount value, We ignore it
            if( count( $order->discount_codes) > 0 )
            foreach(  $order->discount_codes as $item )
            {
                $value .= ';' . $item->amount . '-' . $item->type;
            }
            if( strlen( $value ) > 1 ) $value = substr( $value, 1 );
            break;
          default:
            $value = $val;
            break;
        }
        
        $orderLine .= strtoupper($value) . '|';
      }
      $orderLine .= "\r\n";
                  
      // If there is a personalized product, we show this order
      if( $productLine != '' )
      {
        $lines ++;  // Increase for order header
        echo $orderLine;
        echo $productLine;
        
        // Update the order with file download
        $data = array(
            'file_no' => $file_no,
            'down_date' => date($this->config->item('CONST_DATE_FORMAT')),
        );
        $this->Order_model->update( $row->id, $data );
      }
    }
    
    // ********** File Footer ********** //
    echo $lines;
    echo "\r\n";        
  }
  
  function adjust()
  {
    // Fixing the order map info
    $query = $this->Order_model->getList( array( 'is_all' => true ) );
    
    foreach( $query->result() as $row )
    {
      $order = json_decode( base64_decode($row->data));

      $num_products_map = 0; 

      if( isset( $order->line_items ) && count( $order->line_items ) > 0 )                       
      foreach( $order->line_items as $line_item )
      {
        if( $this->Order_model->checkMapProduct( $line_item->properties ) ) $num_products_map ++;
      }
      
      $this->Order_model->update( $row->id, array( 'num_products_map' => $num_products_map ) );
    }
  }
  
  public function sync( $shop )
  {
    $this->load->model( 'Process_model' );
    
    $this->load->model( 'Shopify_model' );
    $this->Shopify_model->setStore( $shop, $this->_arrStoreList[$shop]->app_id, $this->_arrStoreList[$shop]->app_secret );
    
    // Get the lastest day
    $this->Order_model->rewriteParam( $shop );
    $last_day = $this->Order_model->getLastOrderDate();   
    
    $param = 'status=any&limit=250';
    if( $last_day != '' ) $param .= '&processed_at_min=' . ( urlencode( $last_day ) );
    $action = 'orders.json?' . $param;
      
    // Retrive Data from Shop
    $orderInfo = $this->Shopify_model->accessAPI( $action );
      
     // var_dump($orderInfo);
    
    foreach( $orderInfo->orders as $order )
    {
      $this->Process_model->order_create( $order, $this->_arrStoreList[$shop] );
    }
    
    echo 'success';
  }    
}                                                                