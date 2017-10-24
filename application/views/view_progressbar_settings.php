<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Josh Admin Template</title>
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
    <link href="<?PHP echo base_url(); ?>asset/template/vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="<?PHP echo base_url(); ?>asset/template/css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" media="all" href="<?PHP echo base_url(); ?>asset/template/vendors/bower-jvectormap/css/jquery-jvectormap-1.2.2.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/animate/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/only_dashboard.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/ion.rangeslider/css/ion.rangeSlider.skinFlat.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/ion.rangeslider/css/ion.rangeSlider.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-slider/css/bootstrap-slider.min.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/css/pages/ion.css" />
    <link href="<?PHP echo base_url(); ?>asset/template/vendors/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />  
    <link href="<?PHP echo base_url(); ?>asset/template/css/pages/icon.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/starability/css/starability-all.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/starrating/css/star-rating.min.css">
    <!--end of page level css-->
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/css/pages/ratings.css">    
    <!--mytimer css -->
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/mytimer/mytimer.css" />    
    <!--end of mytimer css -->
</head>

<body class="skin-josh">
    <header class="header">
        <a href="index.html" class="logo">
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
                                <a href="<?PHP echo base_url(); ?>progressbar/settings">
                                    <i class="livicon" data-c="#EF6F6C" title="Tasks" data-hc="#EF6F6C" data-name="list-ul" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>purchases/settings">
                                    <i class="livicon" data-name="barchart" title="Gallery" data-c="#F89A14" data-hc="#F89A14" data-size="25" data-loop="true"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?PHP echo base_url(); ?>countdown/settings">
                                    <i class="livicon" data-name="calendar" title="Users List" data-size="25" data-c="#01bc8c" data-hc="#01bc8c" data-loop="true"></i>
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
                                <i class="livicon" data-name="list-ul" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Progress Bar</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="active">
                                    <a href="<?PHP echo base_url(); ?>progressbar/settings">
                                        <i class="fa fa-angle-double-right"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?PHP echo base_url(); ?>progressbar/styles">
                                        <i class="fa fa-angle-double-right"></i> Styles
                                    </a>
                                </li>
                                <li>
                                    <a href="<?PHP echo base_url(); ?>progressbar/advanced">
                                        <i class="fa fa-angle-double-right"></i> Advanced
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="barchart" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Purchases</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?PHP echo base_url(); ?>purchases/settings">
                                        <i class="fa fa-angle-double-right"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?PHP echo base_url(); ?>purchases/styles">
                                        <i class="fa fa-angle-double-right"></i> Styles
                                    </a>
                                </li>
                                <li>
                                    <a href="<?PHP echo base_url(); ?>purchases/advanced">
                                        <i class="fa fa-angle-double-right"></i> Advanced
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="calendar" data-size="18" data-c="#00bc8c" data-hc="#00bc8c" data-loop="true"></i>
                                <span class="title">Countdown</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?PHP echo base_url(); ?>countdown/settings">
                                        <i class="fa fa-angle-double-right"></i> Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="<?PHP echo base_url(); ?>countdown/styles">
                                        <i class="fa fa-angle-double-right"></i> Styles
                                    </a>
                                </li>
                                <li>
                                    <a href="<?PHP echo base_url(); ?>countdown/advanced">
                                        <i class="fa fa-angle-double-right"></i> Advanced
                                    </a>
                                </li>
                            </ul>
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
                <h1>Progress Bar Settings</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?PHP echo base_url(); ?>home">
                            <i class="livicon" data-name="home" data-size="14" data-color="#333" data-hovercolor="#333"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">Progress Bar</a>
                    </li>
                    <li class="active">Settings</li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3" style="margin-top:5%;">                        
                    <div id="mytimer_container" style="width:100%; background: white; border-radius: 5px; padding: 10px;">
                        <div id="text_above_timer" style="font-family: &quot;Open Sans&quot;; font-weight: normal; font-size: 22px; line-height: 22px; color: rgb(0, 0, 0); text-align: center; display: block;">Hurry! Only 7 left in stock
                        </div>
                        <div class="progress progress-striped" style="margin-top:10px;">
                            <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="40" aria-valuenow="40" style="width: 40%;">
                            </div>
                        </div>
                        <div id="just_bought" class="col-md-12" style="width:100%;">
                            <div class="col-md-3">
                                <img src="<?=$lastorder->image ?>" style="width: 100%;">
                            </div> 
                            <div class="col-md-6">
                                <?php $order = $lastorder; ?>
                                <p><?=$order->customer_name ?></p>
                                <p> From <?=$order->country ?></p>
                                <p>Just Bought a <?=substr($order->product_name, 0, 50).'...'  ?></p>
                            </div>    
                            <div class="pad10 col-md-3">

                                <div class="starability-basic">
                                    <input type="radio" id="rate5" name="rating" value="5" />
                                    <label for="rate5" title="Amazing"></label>
                                    <input type="radio" id="rate4" name="rating" value="4" />
                                    <label for="rate4" title="Very good"></label>
                                    <input type="radio" id="rate3" name="rating" value="3" />
                                    <label for="rate3" title="Average"></label>
                                    <input type="radio" id="rate2" name="rating" value="2" />
                                    <label for="rate2" title="Not good"></label>
                                    <input type="radio" id="rate1" name="rating" value="1" />
                                    <label for="rate1" title="Terrible"></label>
                                </div>

                            </div>
                        </div>
                        <div id="mytime-counter" class="simple-timer clock" style="clear:both;">
                              <div class="mycountdown">
                                <div class="timer-hour value">11</div>
                                <div class="label">hours</div>
                              </div>
                              <div class="mycountdown">
                                <div class="timer-minute value">00</div>
                                <div class="label">minutes</div>
                              </div>
                              <div class="mycountdown">
                                <div class="timer-second value">00</div>
                                <div class="label">seconds</div>
                              </div>
                              <div style="clear:both"></div>
                        </div>
                    </div>
                    </div>    
                </div>  
                <div class="row">
                    <div class="col-md-12" style="margin-top:5%;">
                        <div class="panel panel-success">
                            <div class="panel-body" id="slim2">
                                <!--slider-->
                                <div class="row">
                                    <form role="form" class="form-horizontal form-bordered" method="POST" action="<?PHP echo base_url(); ?>progressbar/updateSlider">
                                        <div class="form-body">
                                            <div class="form-group" style="display:none;">
                                                <label class="col-md-2 control-label">Color Range</label>
                                                <div class="col-md-10">
                                                    <div class="well">
                                                        <p>
                                                            <b>R</b>
                                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="RC" id="R" data-slider-tooltip="hide" data-slider-handle="square" />
                                                        </p>
                                                        <p>
                                                            <b>G</b>
                                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="GC" id="G" data-slider-tooltip="hide" data-slider-handle="round" />
                                                        </p>
                                                        <p>
                                                            <b>B</b>
                                                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="255" data-slider-step="1" data-slider-value="128" data-slider-id="BC" id="B" data-slider-tooltip="hide" data-slider-handle="triangle" />
                                                        </p>
                                                        <div id="RGB"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                <div class="form-group">
                                                    <label class="col-md-offset-1 col-md-2 control-label">Top Margin</label>
                                                    <div class="col-md-6">
                                                        <?php if(isset($settings->slider_margin)) { ?>
                                                        <input id="ex8" name="slider_margin" class="slider form-control" data-slider-id='ex8' type="text" data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="<?=$settings->slider_margin ?>" />
                                                        <?php } else { ?>
                                                        <input id="ex8" name="slider_margin" class="slider form-control" data-slider-id='ex8' type="text" data-slider-min="0" data-slider-handle="square" data-slider-max="20" data-slider-step="1" data-slider-value="10" />         <?php } ?>  
                                                    </div>
                                                    <style>.col-md-6 .slider { width: 100%; }</style>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label  class="col-md-offset-1 col-md-2 control-label">Text Above Bar</label>
                                                <?php if(isset($settings->slider_margin)) { ?>
                                                <div class="col-md-6">
                                                    <input id="above_text" name="above_text" value="<?=$settings->above_text ?>" class="form-control" placeholder="Enter text">
                                                    <p class="help-block">To have the text include your actual stock, enter [STOCK]</p>
                                                    <p class="help-block">To have the text include a fake countdown number, enter [NUMBER]</p>
                                                </div>  
                                                <?php } else { ?>
                                                <div class="col-md-6">
                                                    <input id="above_text" name="above_text" value="Hurry! Only [7] left in stock" class="form-control" placeholder="Enter text">
                                                    <p class="help-block">To have the text include your actual stock, enter [STOCK]</p>
                                                    <p class="help-block">To have the text include a fake countdown number, enter [NUMBER]</p>
                                                </div>         
                                                <?php } ?>                                                  
                                            </div>
                                            <div class="panel-body" id="panel-bg">
                                                <div class="form-group">
                                                    <label class="col-md-offset-1 col-md-2 control-label">Font Color</label>
                                                    <div class="col-md-6">
                                                        <?php if(isset($settings->slider_margin)) { ?>
                                                        <input type="text" class="form-control colorpicker-element" id="picker1" value="<?=$settings->font_color ?>" name="font_color">
                                                        <?php } else { ?>
                                                        <input type="text" class="form-control colorpicker-element" id="picker1" value="#000" name="font_color">
                                                        <?php } ?>                                                          
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-offset-1 col-md-2 control-label">Select Font</label>
                                                <?php if(isset($settings->text_font)) { ?>
                                                <input type="hidden" id="pre_font" value="<?=$settings->text_font ?>">
                                                <?php } else { ?>
                                                <input type="hidden" id="pre_font" value="1">
                                                <?php } ?>                                                 
                                                <div class="col-md-6">
                                                    <select class="form-control" name="text_font"   >
                                                        <option value="cusive">Cusive</option>
                                                        <option value="fantasy">Fantasy</option>
                                                        <option value="inherit">Inherit</option>
                                                        <option value="initial">Initial</option>
                                                        <option value="monospace">Monospace</option>
                                                        <option value="sans-serif">Sans-serif</option>
                                                        <option value="serif">Serif</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-group">
                                                <button type="submit" class="col-md-offset-3 col-md-6 btn btn-primary btn-sm">Save</button>
                                            </div>    
                                        </div>
                                    </form>
                                </div>
                                <!--slider ends-->
                            </div>
                        </div>
                    </div>
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
    <!-- EASY PIE CHART JS -->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/jquery.easy-pie-chart/js/easypiechart.min.js"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/jquery.easy-pie-chart/js/jquery.easypiechart.min.js"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/js/jquery.easingpie.js"></script>
    <!--end easy pie chart -->
    <!--for calendar-->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/moment/js/moment.min.js" type="text/javascript"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/fullcalendar/js/fullcalendar.min.js" type="text/javascript"></script>
    <!--   Realtime Server Load  -->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/flotchart/js/jquery.flot.js" type="text/javascript"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/flotchart/js/jquery.flot.resize.js" type="text/javascript"></script>
    <!--Sparkline Chart-->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/sparklinecharts/jquery.sparkline.js"></script>
    <!-- Back to Top-->
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/countUp.js/js/countUp.js"></script>
    <!--   maps -->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/bower-jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/bower-jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/chartjs/Chart.js"></script>
    <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <!--  todolist-->
    <script src="<?PHP echo base_url(); ?>asset/template/js/pages/todolist.js"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/js/pages/dashboard.js" type="text/javascript"></script>
    <!--slider-->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/ion.rangeslider/js/ion.rangeSlider.js"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/bootstrap-slider/js/bootstrap-slider.js"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/js/pages/sliders.js" type="text/javascript"></script>    
    <!--color picker slider-->
    <script src="<?PHP echo base_url(); ?>asset/template/vendors/colorpicker/js/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <script src="<?PHP echo base_url(); ?>asset/template/js/pages/color-picker.js" type="text/javascript"></script>    
    <!-- end of page level js -->
    <!-- my timer-->
    <script src="<?PHP echo base_url(); ?>asset/mytimer/simpletimer.js" type="text/javascript"></script>
    <script src="<?PHP echo base_url(); ?>asset/mytimer/timer.admin.js" type="text/javascript"></script>     
</body>

</html>        

