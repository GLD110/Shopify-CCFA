<?php
class Order_model extends Master_model
{
    protected $_tablename = 'orderlist';
    private $_total_count = 0;
    private $_map_property = array(
      'House number/name and street',
      'Postcode',
      'Year',
      'Message',
      'Map Address',
      'Times',
      'custom address',
      'custom city',
      'custom State',
      'custom zip'
    );
    function __construct() {
        parent::__construct();
    }

    public function getTotalCount(){ return $this->_total_count; }
    public function getMapProperties(){ return $this->_map_property; }

    public function checkMapProduct( $properties )
    {
      $return = false;
      if( count($properties) > 0 )
      foreach( $properties as $item )
      {
        $return = true; // If there is any property, we consider it as Map Product : 2017.05.12 : By Jubin Ri
        if( in_array($item->name, $this->_map_property ) ){
          $return = true;
          break;
        }
      }
      return $return;
    }

    /**
    * Get the list of product/ varints
    * array(
    *     'customer_name' => '',       // String
    *     'sort' => '',                   // String "{column} {order}"
    *     'page_number' => '',            // Int, default : 0
    *     'page_size' => '',              // Int, default Confing['PAGE_SIZE'];
    *     'is_coupon' => '',              // Int, 0: all, 1: discount, 2: other / default : 0);
    */
    public function getList( $arrCondition )
    {
        $where = array();

        // Build the where clause
        $where['shop'] = $this->_shop;

        /*if( !empty( $arrCondition['customer_name'] ) ) $where["customer_name LIKE '%" . str_replace( "'", "\\'", $arrCondition['customer_name'] ) . "%'"] = '';
        if( !empty( $arrCondition['order_name'] ) ) $where["order_name LIKE '%" . str_replace( "'", "\\'", $arrCondition['order_name'] ) . "%'"] = '';
        if( !empty( $arrCondition['created_at'] ) ) $where["created_at LIKE '" . str_replace( "'", "\\'", $arrCondition['created_at'] ) . "%'"] = '';*/

        // Get the count of records
        foreach( $where as $key => $val )
        if( $val == '' )
            $this->db->where( $key );
        else
            $this->db->where( $key, $val );
        $query = $this->db->get( $this->_tablename);
        $this->_total_count = $query->num_rows();

        // Select fields
        $select = !empty( $arrCondition['is_all'] ) ? '*' : "id, order_id, order_name, created_at, customer_name, amount, fulfillment_status, num_products, country, product_name, variant_id, financial_status, shipping_address, shop";
        $this->db->select( $select );

        // Sort
        if( isset( $arrCondition['sort'] ) ) $this->db->order_by( $arrCondition['sort'] );
        $this->db->order_by( 'created_at', 'DESC' );

        // Limit
        $this->db->limit( 50 );
        /*if( isset( $arrCondition['page_number'] ) )
        {
            $page_size = isset( $arrCondition['page_size'] ) ? $arrCondition['page_size'] : $this->config->item('PAGE_SIZE');
            $this->db->limit( $page_size, $arrCondition['page_number'] );
        }*/

        foreach( $where as $key => $val )
        if( $val == '' )
            $this->db->where( $key );
        else
            $this->db->where( $key, $val );

        $query = $this->db->get( $this->_tablename );
        return $query;
    }

    // Get the lastest order with varaint_id
    public function getLastOrder($variant_id = '')
    {
        $return = '';

        $this->db->select( '*' );
        $this->db->order_by( 'created_at DESC' );
        $this->db->limit( 1 );
        $this->db->where( 'shop', $this->_shop );
        if($variant_id != ''){
            $this->db->where( 'shop', $this->_shop );
        }
        $query = $this->db->get( $this->_tablename );

        if( $query->num_rows() > 0 )
        {
            $res = $query->result();
            $return = $res[0];
        }
        return $return;
    }

    // Get the lastest order date
    public function getLastOrderDate()
    {
        $return = '';

        $this->db->select( 'created_at' );
        $this->db->order_by( 'created_at DESC' );
        $this->db->limit( 1 );
        $this->db->where( 'shop', $this->_shop );

        $query = $this->db->get( $this->_tablename );

        if( $query->num_rows() > 0 )
        {
            $res = $query->result();

            $return = $res[0]->created_at;
        }
        return $return;
    }

    /**
    * Add order and check whether it's exist already
    *
    * @param mixed $order
    */
    public function add( $order )
    {
        $customer_name = '';
        if( isset( $order->customer)) $customer_name = $order->customer->first_name . ' ' . $order->customer->last_name;

        $country = '';
        $shipping_address = '';

        if( isset($order->shipping_address->country_code)) {
          $country = $order->shipping_address->country_code;

          $shipping_address .= $order->shipping_address->first_name
          .'<br>'. $order->shipping_address->address1
          .'<br>'. $order->shipping_address->phone
          .'<br>'. $order->shipping_address->city
          .'<br>'. $order->shipping_address->zip
          .'<br>'. $order->shipping_address->province
          .'<br>'. $order->shipping_address->country
          .'<br>'. $order->shipping_address->last_name
          .'<br>'. $order->shipping_address->company
          .'<br>'. $order->shipping_address->latitude
          .'<br>'. $order->shipping_address->longitude
          .'<br>'. $order->shipping_address->name
          .'<br>'. $order->shipping_address->country_code
          .'<br>'. $order->shipping_address->province_code;
      }

        // Get the number of map products
        foreach( $order->line_items as $line_item )
        {
            // Insert data
            $data = array(
                'order_id' => $order->id,
                'customer_name' => $customer_name,
                'variant_id' => $line_item->variant_id,
                'product_name' => $line_item->name,
                'order_name' => $order->name,
                'created_at' =>  str_replace('T', ' ', $order->updated_at) ,
                'amount' => $line_item->price,
                'country' => $country,
                'num_products' => $line_item->quantity,
                'fulfillment_status' => empty($line_item->fulfillment_status) ? '' :  $line_item->fulfillment_status,
                'data' => base64_encode( json_encode( $line_item ) ),
                'financial_status' => empty($order->financial_status) ? '' :  $order->financial_status,
                'shipping_address' => $shipping_address
            );

            // Check the order is exist already
            $query = parent::getList('order_id = \'' . $order->id . '\'' . ' AND ' . 'variant_id = \'' . $line_item->variant_id . '\'');

            if( $query->num_rows() > 0 ){
                $items = $query->result();
                $id = $items[0]->id;
                parent::update( $id, $data );
              }
            elseif ($line_item->vendor == "KanvasKreations")
                parent::add( $data );
        }
        return true;
    }

    // ********************** //
}
?>
