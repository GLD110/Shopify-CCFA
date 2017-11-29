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
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/fancybox/jquery.fancybox.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/buttons.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/colReorder.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/dataTables.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/rowReorder.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/buttons.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/vendors/datatables/css/scroller.bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?PHP echo base_url(); ?>asset/template/css/pages/tables.css" />
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
                <h1>Custom Products</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="<?PHP echo base_url(); ?>home">
                            <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="<?PHP echo base_url(); ?>product/manage">Products</a>
                    </li>
                    <li class="active">Custom Products</li>
                </ol>
            </section>
            <section class="content">
                <!--/row-->
                <div class="row">
                    <div class="col-lg-12">
                        <a href="<?PHP echo base_url(); ?>product/new_product" class="btn btn-success pull-right"><span class="glyphicon glyphicon-plus"></span> New Product </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-success filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="tasks" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Custom Templates
                                </h3>
                            </div>
                            <div class="panel-body table-responsive">
                                <table class="table table-striped table-bordered" id="table2" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Image</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Published</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sno = 0;
                                        foreach ($query as $row):
                                            $sno ++;
                                             ?>
                                             <tr class="tbl_view text-center" >
                                                <td style="width:10px;">
                                                    <?php echo $sno; ?>
                                                </td>
                                                <td>
                                                  <a class="fancybox img-responsive" href="<?= $row->image_url ?>" data-fancybox-group="gallery">
                                                      <img src="<?= $row->image_url ?>" class="all" alt="gallery" width = "100">
                                                  </a>
                                                </td>
                                                <td><?=$row->title ?></td>
                                                <td><?=$row->price ?></td>
                                                <td><?=$row->published_at ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/jeditable/js/jquery.jeditable.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.buttons.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.colReorder.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.responsive.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.rowReorder.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/buttons.colVis.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/buttons.html5.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/buttons.print.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/buttons.bootstrap.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/pdfmake.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/vfs_fonts.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/datatables/js/dataTables.scroller.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/js/pages/table-advanced.js"></script>
        <script type="text/javascript" src="<?PHP echo base_url(); ?>asset/template/vendors/fancybox/jquery.fancybox.js"></script>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
        </script>
        <!-- end of page level js -->
    </body>

</html>
