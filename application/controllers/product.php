<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model( 'Product_model' );

    // Define the search values
    $this->_searchConf  = array(
        'name' => '',
        'sku' => '',
        'page_size' => $this->config->item('PAGE_SIZE'),
        'sort_field' => 'product_id',
        'sort_direction' => 'DESC',
    );
    $this->_searchSession = 'product_app_page';
  }

  public function index(){
    $this->is_logged_in();

    $this->manage();
  }

  public function manage( $page =  0 ){
    // Check the login
    $this->is_logged_in();

    // Init the search value
    $this->initSearchValue();

    // Get data
    $arrCondition =  array(
         'name' => $this->_searchVal['name'],
         'sort' => $this->_searchVal['sort_field'] . ' ' . $this->_searchVal['sort_direction'],
         'page_number' => $page,
         'page_size' => $this->_searchVal['page_size'],
    );
    $data['query'] =  $this->Product_model->getList( $arrCondition );
    $data['total_count'] = $this->Product_model->getTotalCount();
    $data['page'] = $page;
    $data['shop'] = $this->session->userdata('shop');

    // Define the rendering data
    $data = $data + $this->setRenderData();

    // Load Pagenation
    $this->load->library('pagination');
    $this->load->library( 'LiquidLib' );

    //$this->load->view('view_header');
    $this->load->view('view_product', $data );
    //$this->load->view('view_footer');
  }

  public function template( $page =  0 ){
    // Check the login
    $this->is_logged_in();

    $directory = "product/server/php/files/";
    $images = glob($directory . "*.png");

    $templates = array();

    foreach($images as $image)
    {
        list($width, $height, $type, $attr) = getimagesize($image);

        if($width > $height)
            $dimension = 'landscape';
        else
            $dimension = 'studio';

        $temp = array('image'=>$image, 'dimension'=>$dimension);
        array_push($templates, $temp);
    }

    $data['templates'] = $templates;

    //$this->load->view('view_header');
    $this->load->view('view_templates', $data );
    //$this->load->view('view_footer');
  }

  public function upload_template( $page =  0 ){
    // Check the login
    $this->is_logged_in();

    $data = array();

    //$this->load->view('view_header');
    $this->load->view('view_templates_upload', $data );
    //$this->load->view('view_footer');
  }

  public function new_product( $page =  0 ){
    // Check the login
    $this->is_logged_in();

    $data = array();
    $data['shop'] = $this->session->userdata('shop');
    $base_url = $this->config->item('base_url');
    $app_path = $this->config->item('app_path');

    //product Image Folder
    $product_img_dir = $app_path . 'product/server/php/orders/' . $data['shop'];
    if (!file_exists($product_img_dir)) {
      mkdir($product_img_dir);
    }
    //Upload Skilled IMage Folder
    $upload_img_dir = $app_path . 'product/server/php/uploaded_images/' . $data['shop'];
    if (!file_exists($upload_img_dir)) {
      mkdir($upload_img_dir);
    }
    //Templates Folder
    $directory = "product/server/php/files/";
    $images = glob($directory . "*.png");

    $templates = array();

    foreach($images as $image)
    {
        list($width, $height, $type, $attr) = getimagesize($image);

        if($width > $height)
            $dimension = 'landscape';
        else
            $dimension = 'studio';

        $temp = array('image'=>$image, 'dimension'=>$dimension);
        array_push($templates, $temp);
    }

    $data['templates'] = $templates;

    //$this->load->view('view_header');
    $this->load->view('view_newproduct', $data );
    //$this->load->view('view_footer');
  }

  public function upload_image(){
    // Check the login
    $this->is_logged_in();

    $data = array();
    $data['shop'] = $this->session->userdata('shop');
    $base_url = $this->config->item('base_url');
    $app_path = $this->config->item('app_path');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  	   if($_FILES['file']['name'] == '') {
          echo "Please choose the image file !";
      }
      else{
          $name     = $_FILES['file']['name'];
          $tmpName  = $_FILES['file']['tmp_name'];
          $error    = $_FILES['file']['error'];
          $size     = $_FILES['file']['size'];
          $fileinfo = getimagesize($_FILES["file"]["tmp_name"]);
          $filewidth = $fileinfo[0];
          $fileheight = $fileinfo[1];
          $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
          switch ($error) {
              case UPLOAD_ERR_OK:
                  $valid = true;
                  //validate file extensions
                  if ( !in_array($ext, array('jpg','jpeg','png','gif')) ) {
                      $valid = false;
                      $response = 'Invalid file extension.';
                  }
                  //validate file size
                  if ( $size/1024/1024 > 50 ) {
                      $valid = false;
                      $response = 'File size is exceeding maximum allowed size.';
                  }

                  if ( $filewidth < 1024 || $fileheight < 1024 ) {
                      $valid = false;
                      $response = 'Image Width and Height is not valid.';
                  }

                  //upload file
                  if ($valid) {
                      $header_url= $base_url . 'product/server/php/';
                      $response= 'server/php/uploaded_images/' . $data['shop'] . "/". $name;
                      $upload_img_dir = $app_path . 'product/server/php/uploaded_images/' . $data['shop'];
                      $targetPath =  $upload_img_dir . '/' . $name;
                      move_uploaded_file($tmpName, $targetPath);
                  }
                  break;
              case UPLOAD_ERR_INI_SIZE:
                  $response = 'The uploaded file exceeds the upload_max_filesize directive in php.ini.';
                  break;
              case UPLOAD_ERR_PARTIAL:
                  $response = 'The uploaded file was only partially uploaded.';
                  break;
              case UPLOAD_ERR_NO_FILE:
                  $response = 'No file was uploaded.';
                  break;
              case UPLOAD_ERR_NO_TMP_DIR:
                  $response = 'Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.';
                  break;
              case UPLOAD_ERR_CANT_WRITE:
                  $response = 'Failed to write file to disk. Introduced in PHP 5.1.0.';
                  break;
              default:
                  $response = 'Unknown error';
              break;
          }
          echo $response;
      }
  	}
  }

  public function delete_image()
  {
    // Check the login
    $this->is_logged_in();

    $base_url = $this->config->item('base_url');
    $app_path = $this->config->item('app_path');

    $img = $_POST['img'];
    if ($_POST['action'] == 'delete'){
      @unlink($app_path . 'product/' . $img);
      echo $app_path . 'product/' . $img ;
    }
  }

  public function upload_order()
  {
    // Check the login
    $this->is_logged_in();

    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: POST");

    $data['shop'] = $this->session->userdata('shop');
    $base_url = $this->config->item('base_url');
    $app_path = $this->config->item('app_path');

    $img_dir = $app_path . 'product/server/php/orders/' . $data['shop'];

    $img = $_POST['img'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];

    if($_POST['action'] == 'save'){
      //$img = str_replace('data:image/png;base64,', '', $img);
      $img = str_replace('[removed]', '', $img);
      $img = str_replace(' ', '+', $img);
      $data = base64_decode($img);
      $file = $img_dir . '/' . uniqid() . '.png';
      //print_r(str_replace('[removed]', '', $img));
      //$success = file_put_contents($file, $data);

      $this->load->model( 'Shopify_model' );
      $action = 'products.json';
      $products_array = array(
          'product' => array(
              'title' => $product_title,
              'body_html' => "<p>" . $product_description . "<\/p>",
              'vendor' => "KanvasKreations",
              "published" => false ,
              'variants' => array(
                array(
                  "price" => $product_price
                )
              ),
              'images' => array(
                  array('attachment' => $img)
              )
          )
      );
      // Retrive Data from Shop
      $productInfo = $this->Shopify_model->accessAPI( $action, $products_array, 'POST' );

      if(!isset($productInfo->product)){
        echo "Title can't be blank.";
      }
      else{
        // Store to database
        $this->Product_model->addProduct( $productInfo->product );
        echo 'Successfully saved!';
      }
    }
  }

  public function sync( $page = 1 )
  {
    $this->load->model( 'Shopify_model' );

    // Get the lastest day
    $last_day = $this->Product_model->getLastUpdateDate();

    // Retrive Data from Shop
    $count = 0;

    // Make the action with update date or page
    $action = 'products.json?';
    if( $last_day != '' && $last_day != $this->config->item('CONST_EMPTY_DATE') && $page == 1 )
    {
      $action .= 'limit=250&updated_at_min=' . urlencode( $last_day );
    }
    else
    {
      $action .= 'limit=10&page=' . $page;
    }

    // Retrive Data from Shop
    $productInfo = $this->Shopify_model->accessAPI( $action );

    // Store to database
    if( isset($productInfo->products) && is_array($productInfo->products) )
    {
      foreach( $productInfo->products as $product )
      {
        $this->Product_model->addProduct( $product );
      }
    }

    // Get the count of product
    if( $last_day != '' && $last_day != $this->config->item('CONST_EMPTY_DATE') && $page == 1 )
    {
      $count = 0;
    }
    else
    {
      if( isset( $productInfo->products )) $count = count( $productInfo->products );
      $page ++;
    }

    if( $count == 0 )
      echo 'success';
    else
      echo $page . '_' . $count;
  }
}
