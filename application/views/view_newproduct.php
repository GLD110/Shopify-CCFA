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
/*
		 .footer {
			padding: 70px 0;
			margin-top: 70px;
			border-top: 1px solid #E5E5E5;
			background-color: whiteSmoke;
			}
	      .color-preview {
	      	border: 1px solid #CCC;
	      	margin: 2px;
	      	zoom: 1;
	      	vertical-align: top;
	      	display: inline-block;
	      	cursor: pointer;
	      	overflow: hidden;
	      	width: 20px;
	      	height: 20px;
	      }
	      .rotate {
		    -webkit-transform:rotate(90deg);
		    -moz-transform:rotate(90deg);
		    -o-transform:rotate(90deg);
		    -ms-transform:rotate(90deg);
		}
		.Arial{font-family:"Arial";}
		.Helvetica{font-family:"Helvetica";}
		.MyriadPro{font-family:"Myriad Pro";}
		.Delicious{font-family:"Delicious";}
		.Verdana{font-family:"Verdana";}
		.Georgia{font-family:"Georgia";}
		.Courier{font-family:"Courier";}
		.ComicSansMS{font-family:"Comic Sans MS";}
		.Impact{font-family:"Impact";}
		.Monaco{font-family:"Monaco";}
		.Optima{font-family:"Optima";}
		.HoeflerText{font-family:"Hoefler Text";}
		.Plaster{font-family:"Plaster";}
		.Engagement{font-family:"Engagement";}
*/

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
                            <a href="#">
                                <i class="livicon" data-name="image" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Products</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?PHP echo base_url(); ?>product/template">
                                        <i class="fa fa-angle-double-right"></i> Templates
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="<?PHP echo base_url(); ?>product/manage">
                                        <i class="fa fa-angle-double-right"></i> Custom Products
                                    </a>
                                </li>
                            </ul>
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
                <!--/row-->
                <div class="row">
                    <div class="page-header col-xs-12" style="background: url('<?PHP echo base_url(); ?>asset/canvas/img/top_up_12.jpg' );">
                      <a href="" class="tab-selector" data-target = "text" style="display:none;"><img src="<?PHP echo base_url(); ?>asset/canvas/img/top_up_02.jpg" /></a>
                      <a href="" class="tab-selector" data-target = "image" ><img style="margin-left: -4px;" src="<?PHP echo base_url(); ?>asset/canvas/img/top_up_03.jpg" /></a>
                      <div class="btn-group inline pull-right" id="texteditor" style=" display:none; margin-right: 486px;margin-top: 19px; width: 30%; ">
                        <button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
                          <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
                          <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
                        </ul>
                        <button id="text-bold" class="btn" data-original-title="Bold"><img src="<?PHP echo base_url(); ?>asset/canvas/img/font_bold.png" height="" width=""></button>
                        <button id="text-italic" class="btn" data-original-title="Italic"><img src="<?PHP echo base_url(); ?>asset/canvas/img/font_italic.png" height="" width=""></button>
                        <button id="text-strike" class="btn" title="Strike" style=""><img src="<?PHP echo base_url(); ?>asset/canvas/img/font_strikethrough.png" height="" width=""></button>
                        <button id="text-underline" class="btn" title="Underline" style=""><img src="<?PHP echo base_url(); ?>asset/canvas/img/font_underline.png"></button>
                        <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
                        <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
                        <!--<button  type="button" onclick="zoomin()" class="btn btn-lg btn-primary">Zoom In</button>
                        <button type="button" onclick="zoomout()" class="btn btn-lg btn-primary">Zoom Out</button> -->
                      </div>
                        <div class="pull-right" align="" id="imageeditor" style=" margin-top: 20px; margin-right: 20px;">
                        <div class="btn-group">
                          <button class="btn" id="bring-to-front" title="Bring to Front" style="display:none;"><i class="icon-fast-backward rotate" ></i></button>
                          <button class="btn" id="send-to-back" title="Send to Back" style="display:none;"><i class="icon-fast-forward rotate" ></i></button>
                          <button id="flip" type="button" class="btn" title="Show Back View" style="display:none;"><i class="icon-retweet" ></i></button>
                          <button id="remove-selected" class="btn" title="Delete selected item"><span class="glyphicon glyphicon-remove-circle"></span> Remove Image </button>
                        </div>
                      </div>
                    </div>
                </div>
                <!-- Headings & Paragraph Copy -->
                <div class="row">
                    <div class="col-xs-1"></div>
                  <div class="col-xs-2">
                    <div class="tabbable"> <!-- Only required for left/right tabs -->

                      <!-- Text Tab -->
                      <div style="border: 1px solid rgb(200, 202, 201); display:none;" class="tab tab-text">
                        <div style="width: 250px;margin-left: 9px;">
                          <h3 style="background-color: rgb(56, 69, 79);color: white;text-align: center;">Enter Text Here</h3>
                        </div>
                        <div class="tab-pane">
                          <div class="well" style="background: none; border: none; box-shadow: none; margin: 0px;">
                            <div class="input-append">
                              <input class="span2" id="text-string" type="text" placeholder="add text here...">
                              <button id="add-text" class="btn" title="Add text"><i class="icon-share-alt"></i></button>
                              <hr>
                            </div>
                          </div>
                        </div>
                      </div><!-- End of Text Tab -->

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
                            $folder = "product/server/php/uploaded_images";
                            $results = scandir($folder);
                            $i=0;
                            foreach ($results as $result) {
                              if ($result === '.' or $result === '..') continue;

                              if (is_file($folder . '/' . $result)) {
                                echo '<img style="cursor:pointer; max-width: 100%;" id="img-polaroid-'.$i.'" class="img-polaroid" src="'. 'server/php/uploaded_images' . '/' . $result.'">';
                                echo '<button type="button " title="Delete this image from the server." class="upload-cancel" data-img="img-polaroid-'.$i.'">X</button>';
                                $i++;
                              }
                            }
                          ?>
                          </div>
                        </form>
                      </div><!-- End of Image Upload Tab -->

                      <!-- Image Color Area -->
                      <div style="display:none;">
                        <ul class="nav nav-tabs">
                          <li class="active"><a href="#tab1" data-toggle="tab">T-Shirt Options</a></li>
                        </ul>
                        <div class="tab-content">
                          <div class="tab-pane active" id="tab1">
                            <div class="well">
                              <ul class="nav">
                                <li class="color-preview" title="White" style="background-color:#ffffff;"></li>
                                <li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
                                <li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
                                <li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
                                <li class="color-preview" title="Black" style="background-color:#222222;"></li>
                                <li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
                                <li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
                                <li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
                                <li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
                                <li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
                                <li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
                                <li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
                                <li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
                                <li class="color-preview" title="Iris  h Green" style="background-color:#1f6522;"></li>
                                <li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
                                <li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
                                <li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
                                <li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
                                <li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
                                <li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>
                                <li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div><!-- End of Image Color Area -->
                    </div>
                  </div>
                  <div class="col-xs-8">

                        <div align="center" style="min-height: 32px;">
                          <div class="clearfix">
                            <button style="" type="button" class="btn btn-large btn-block btn-success" name="addToTheBag" id="addToTheBag">Save Image</button>
                          </div>
                        </div>

                        <!--  EDITOR      -->
                        <div style=" margin: 15px auto; width: 80%; overflow: hidden;">
                              <div id="shirtDiv" class="page" style="position: relative; text-align: center;">
                                <img id="tshirtFacing" src="<?PHP echo base_url(); ?>product/server/php/files/Template 16x20.png" style="width: 100%;"></img>
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
                                    url: "<?PHP echo base_url(); ?>product/server/php/upload_order.php",
                                    data: {img: canvas.toDataURL(), action: "save"},
                                    success: function(data){
                                        console.log(data);
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
                                var intRegex = "server/php/uploaded_images/";
                                if(data.search(intRegex) == -1 ){
                                    alert(data);

                                }else{

                                    $("#avatarlist").append("<img style='cursor:pointer; max-width:100%;' id=\"img-polaroid-" + $("#avatarlist").find(".img-polaroid").length + "\" class='img-polaroid' src='"+data+"'><button type=\"button\" class=\"upload-cancel\" data-img=\"img-polaroid-" + $("#avatarlist").find(".img-polaroid").length + "\">X</button>");

                                }

                                //console.log(data);
                              },
                          error: function(e)
                              {

                              }
                    });
                 }));
            });
        </script>
        <!-- end of page level js -->
    </body>

</html>
