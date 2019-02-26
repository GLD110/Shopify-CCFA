<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Custom Products</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="<?PHP echo base_url(); ?>asset/template/css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <style type="text/css">
		.upload-cancel {
			background-color: #525252;
			color: #F7F7F7;
			font-weight: 700;
			font-family: Arial,Helvetica,sans-serif;
			border-radius: 12px;
			border: 0;
			height: 22px;
			width: 22px;
			padding: 4px;
			right: -5px;
			top: -6px;
			margin: 0;
			line-height: 17px;
			cursor: pointer;
			font-size: 12px;
			vertical-align: middle;
            margin-top: -30px;
            margin-left: -10px;
		}
	 </style>
    <!--end of page level css-->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="<?PHP echo base_url(); ?>home" class="logo">
            <img src="<?PHP echo base_url(); ?>asset/template/img/logo.png" alt="Logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="livicon" data-name="message-flag" data-loop="true" data-color="#42aaca" data-hovercolor="#42aaca" data-size="28"></i>
                            <span class="label label-success">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages pull-right">
                            <li class="dropdown-title">4 New Messages</li>
                            <li class="unread message">
                                <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                    <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>Riot Zeast</strong>
                                        <br>Hello, You there?
                                        <br>
                                        <small>8 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                    <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>John Kerry</strong>
                                        <br>Can we Meet ?
                                        <br>
                                        <small>45 minutes ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>Jenny Kerry</strong>
                                        <br>Dont forgot to call...
                                        <br>
                                        <small>An hour ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="unread message">
                                <a href="javascript:;" class="message">
                                    <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">
                                        <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>
                                    </i>
                                    <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                    <div class="message-body">
                                        <strong>Ronny</strong>
                                        <br>Hey! sup Dude?
                                        <br>
                                        <small>3 Hours ago</small>
                                    </div>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Just Now
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Few seconds ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            8 minutes ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            An hour ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            3 Hours ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Yesterday
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            2 July 2014
                                        </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar3.jpg" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Riot
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar3.jpg" width="90" class="img-circle img-responsive" height="90" alt="User Image" />
                                <p class="topprofiletext">Riot Zeast</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="view_user.html">
                                    <i class="livicon" data-name="user" data-s="18"></i> My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="adduser.html">
                                    <i class="livicon" data-name="gears" data-s="18"></i> Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i> Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="login.html">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i> Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="<?PHP echo base_url(); ?>home">
                                    <i class="livicon" data-name="home" title="Advanced tables" data-c="#418BCA" data-hc="#418BCA" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>product/manage">
                                    <i class="livicon" data-c="#EF6F6C" title="Gallery" data-hc="#EF6F6C" data-name="image" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>order">
                                    <i class="livicon" data-c="#F89A14" title="Tasks" data-hc="#F89A14" data-name="tasks" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>settings">
                                    <i class="livicon" data-c="#00bc8c" title="Medal" data-hc="#00bc8c" data-name="medal" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li>
                            <a href="<?PHP echo base_url(); ?>home">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="<?PHP echo base_url(); ?>product/manage">
                                <i class="livicon" data-name="image" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?PHP echo base_url(); ?>order">
                                <i class="livicon" data-name="list-ul" data-size="18" data-c="#EF6F6C" data-hc="#EF6F6C" data-loop="true"></i>
                                <span class="title">Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?PHP echo base_url(); ?>settings">
                                <i class="livicon" data-name="medal" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Settings</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Custom Product</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?PHP echo base_url(); ?>home">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li class="active">New Product</li>
                </ol>
            </section>
            <section class="content" id="typography">
                <!--row-->
                <div class="row">
                  <div class="col-xs-1"></div>
                  <div class="col-xs-3">
                    <div class="form-group">
                      <label>Product Title</label>
                      <input id="product-title" name="product_title" class="form-control" placeholder="Enter Text">
                      <label>Product Price</label>
                      <input id="product-price" name="product_price" class="form-control" placeholder="Enter Number">
                    </div>
                  </div>
                  <div class="col-xs-7">
                    <div class="form-group">
                        <label>Product Description</label>
                        <textarea id="product-des" name="product_description" class="form-control resize_vertical" rows="4"></textarea>
                    </div>
                  </div>
                  <div class="col-xs-1"></div>
                </div>
                <!--/row-->
                <!-- Headings & Paragraph Copy -->
                <div class="row">
                  <div class="col-xs-1"></div>
                  <div class="col-xs-3">
                    <div class="tabbable"> <!-- Only required for left/right tabs -->
                      <!-- Image Upoad Tab -->
                      <div class="tab tab-image" >
                        <form class="well" id="submit_form" action="" method="post" enctype="multipart/form-data">
                          <div class="form-group">
                            <label for="file">Upload Image</label>
                            <input type="file" name="file">
                            <p class="help-block">(Images must be PNGs, JPGs, GIFs that are at least 1024px wide and are less than 50 Mb.)</p>
                          </div>
                          <input type="submit" id="upload_button" class="btn btn-lg btn-primary" value="Upload">
                          <div id="avatarlist" style="margin-top: 20px;">
                          <?php
                            $folder = "product/server/php/uploaded_images/" . $shop;
                            $results = scandir($folder);
                            $i=0;
                            foreach ($results as $result) {
                              if ($result === '.' or $result === '..') continue;

                              if (is_file($folder . '/' . $result)) {
                                echo '<img style="cursor:pointer; max-width: 100%;" id="img-polaroid-'.$i.'" class="img-polaroid" src="'. 'server/php/uploaded_images/' . $shop . '/' . $result.'">';
                                echo '<button type="button " title="Delete this image from the server." class="upload-cancel" data-img="img-polaroid-'.$i.'">X</button>';
                                $i++;
                              }
                            }
                          ?>
                          </div>
                        </form>
                      </div><!-- End of Image Upload Tab -->
                    </div>
                  </div>
                  <div class="col-xs-7">
                    <div class="form-group col-xs-4">
                        <select id="sel-template" class="form-control" onchange="canvas_change(this);">
                          <?php $sno = 0; foreach ($templates as $t): $sno ++; ?>
                            <option id="template-<?php echo $sno;?>" value="<?PHP echo base_url() . $t['image']; ?>"><?PHP echo basename($t['image'], ".png"); ?></option>
                          <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-xs-4" align="center" style="min-height: 32px;">
                      <div class="clearfix">
                        <button id="remove-selected" class="btn btn-success btn_sizes" title="Delete selected item"><span class="glyphicon glyphicon-remove-circle"></span> Remove Image </button>
                      </div>
                    </div>
                    <div class="col-xs-4" align="right" style="min-height: 32px;">
                      <div class="clearfix">
                        <button style="" type="button" class="btn btn-danger btn_sizes" name="addToTheBag" id="addToTheBag">Create</button>
                      </div>
                    </div>

                    <!--  EDITOR      -->
                    <div style=" margin: 15px auto; width: 100%; overflow: hidden;">
                          <div id="shirtDiv" class="page" style="position: relative; text-align: center;">
                            <img id="tshirtFacing" src="<?PHP echo base_url() . $templates[0]['image']; ?>" style="width: 100%;"></img>
                              <div id="drawingArea" style="position: absolute;top: 0; z-index: 10;width: 850px; height: 1050px;">
                                <canvas id="tcanvas" width="850" height="1050" class="hover" style="-webkit-user-select: none;"></canvas>
                              </div>
                            </div>
                    </div>

                    <div class="container" style="margin-top:30px;">
                        <div id="img-out"></div>
                    </div>
                  </div>
                  <div class="col-xs-1"></div>
                </div>
             </section>
        </aside>
        <!-- right-side -->
    </div>
        <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
            <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
        </a>
        <!-- global js -->
        <script src="<?PHP echo base_url(); ?>asset/template/js/app.js" type="text/javascript"></script>
        <!-- end of global js -->
        <!-- begining of page level js -->
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/canvas/js/fabric.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/canvas/js/tshirtEditor.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/canvas/js/jquery.miniColors.min.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/canvas/js/html2canvas.js"></script>
        <script src="<?PHP echo base_url(); ?>asset/canvas/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                var element = $("#shirtDiv"); // global variable
                var getCanvas = ""; // global variable

                // Upload Whole Image
                $("#addToTheBag").on('click', function () {
                      html2canvas($("#shirtDiv"), {
                        onrendered: function(canvas) {
                                /*$("#img-out").append("<img width='100px' style='border:1px solid #efefef;margin-left:30px' height='100px' src='"+canvas.toDataURL()+"' />");
                                alert("Image Created. See below.");*/
                                $.ajax({

                                    type: "POST",
                                    url: "<?PHP echo base_url(); ?>product/upload_order",
                                    data: {img: canvas.toDataURL(), product_title: $('#product-title').val(), product_price: $('#product-price').val(), product_description: $('#product-des').val(), action: "save"},
                                    success: function(data){
                                        alert(data);
                                        location.href = "<?PHP echo base_url(); ?>product/manage";
                                    }
                                });
                            }
                    });
                });

                // Cancel Upload
                $("body").on('click', ".upload-cancel", function () {
                    var ok_delete = confirm("Really, do you want to delete this image?");
                      if(ok_delete == true){
                      $(this).remove();
                      var img_id = $(this).attr('data-img');
                      var img_url = $('#'+img_id).attr('src');
                      console.log(img_url);
                      $.ajax({
                          type: "POST",
                          url: "<?PHP echo base_url(); ?>product/delete_image",
                          data: {img: img_url, action: "delete"},
                          success: function(data){
                              console.log(data);
                              $('#'+img_id).remove();
                          }

                      });
                  }
                });

                // Image Upload for avatar
                $("#submit_form").on('submit',(function(e) {
                  e.preventDefault();
                  $.ajax({
                         url: "<?PHP echo base_url(); ?>product/upload_image",
                         type: "POST",
                         data:  new FormData(this),
                         contentType: false,
                         cache: false,
                         processData:false,
                         success: function(data)
                              {
                                var intRegex = "server/php/uploaded_images/" + "<?php echo $shop;?>" + "/";
                                if(data.search(intRegex) == -1 ){
                                    alert(data);
                                }else{
                                    $("#avatarlist").append("<img style='cursor:pointer; max-width:100%;' id=\"img-polaroid-" + $("#avatarlist").find(".img-polaroid").length + "\" class='img-polaroid' src='"+data+"'><button type=\"button\" class=\"upload-cancel\" data-img=\"img-polaroid-" + $("#avatarlist").find(".img-polaroid").length + "\">X</button>");
                                }
                              },
                          error: function(e)
                              {

                              }
                    });
                 }));

                 $('#sel-template').on('change', function() {
                    $('#tshirtFacing').attr('src', this.value);
                  });
            });
        </script>
        <!-- end of page level js -->
    </body>

</html>
