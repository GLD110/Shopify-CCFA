<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Upload Templates</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <!-- global css -->
    <link href="<?PHP echo base_url(); ?>asset/template/css/app.css" rel="stylesheet" type="text/css" />
    <!-- end of global css -->
    <!--page level css -->
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-gallery-with-desc/css/blueimp-gallery.min.css" />
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/css/jquery.fileupload.css" />
    <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/css/jquery.fileupload-ui.css" />
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript>
        <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/css/jquery.fileupload-noscript.css" />
        <link rel="stylesheet" href="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/css/jquery.fileupload-ui-noscript.css" />
    </noscript>
    <!--end of page level css-->
</head>

<body class="skin-josh">
<header class="header">
    <a href="<?PHP echo base_url(); ?>home" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        <img src="<?PHP echo base_url(); ?>asset/template/img/logo.png" alt="logo">
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
                                <div class="message-body"> <strong>Riot Zeast</strong>
                                    <br>Hello, You there?
                                    <br> <small>8 minutes ago</small> </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read"><span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span></i>
                                <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar1.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body"> <strong>John Kerry</strong>
                                    <br>Can we Meet ?
                                    <br> <small>45 minutes ago</small> </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">                                         <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>                                     </i>
                                <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar5.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body"> <strong>Jenny Kerry</strong>
                                    <br>Dont forgot to call...
                                    <br> <small>An hour ago</small> </div>
                            </a>
                        </li>
                        <li class="unread message">
                            <a href="javascript:;" class="message"> <i class="pull-right" data-toggle="tooltip" data-placement="top" title="Mark as Read">                                         <span class="pull-right ol livicon" data-n="adjust" data-s="10" data-c="#287b0b"></span>                                     </i>
                                <img src="<?PHP echo base_url(); ?>asset/template/img/authors/avatar4.jpg" class="img-responsive message-image" alt="icon" />
                                <div class="message-body"> <strong>Ronny</strong>
                                    <br>Hey! sup Dude?
                                    <br> <small>3 Hours ago</small> </div>
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
                            <a href="view_user.html"> <i class="livicon" data-name="user" data-s="18"></i> My Profile </a>
                        </li>
                        <li role="presentation"></li>
                        <li>
                            <a href="adduser.html"> <i class="livicon" data-name="gears" data-s="18"></i> Account Settings </a>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="lockscreen.html"> <i class="livicon" data-name="lock" data-s="18"></i> Lock </a>
                            </div>
                            <div class="pull-right">
                                <a href="login.html"> <i class="livicon" data-name="sign-out" data-s="18"></i> Logout </a>
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
                                <a href="<?PHP echo base_url(); ?>">
                                    <i class="livicon" data-c="#EF6F6C" title="Gallery" data-hc="#EF6F6C" data-name="image" data-size="25" data-loop="true"></i>
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
                                <li class="active">
                                    <a href="<?PHP echo base_url(); ?>product/template">
                                        <i class="fa fa-angle-double-right"></i> Templates
                                    </a>
                                </li>
                                <li>
                                    <a href="<?PHP echo base_url(); ?>product/manage">
                                        <i class="fa fa-angle-double-right"></i> Custom Products
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
        <section class="content-header">
            <h1>Multiple File Uplaod</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="<?PHP echo base_url(); ?>home">
                        <i class="livicon" data-name="home" data-size="14" data-color="#000"></i> Dashboard
                    </a>
                </li>
                <li class="active">Products</li>
                <li>Upload Templates</li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Uplaod Templates
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form id="fileupload" action="//jquery-file-upload.appspot.com/" method="POST" enctype="multipart/form-data">
                                    <!-- Redirect browsers with JavaScript disabled to the origin page -->
                                    <noscript>
                                        <input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/">
                                    </noscript>
                                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                    <div class="row fileupload-buttonbar">
                                        <div class="col-lg-7">
                                            <!-- The fileinput-button span is used to style the file input field as button -->
                                                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Add files</span>
                                                <input type="file" name="files[]" multiple>
                                                </span>
                                            <button type="submit" class="btn btn-primary start">
                                                <i class="glyphicon glyphicon-upload"></i>
                                                <span>Start upload</span>
                                            </button>
                                            <button type="reset" class="btn btn-warning cancel">
                                                <i class="glyphicon glyphicon-ban-circle"></i>
                                                <span>Cancel upload</span>
                                            </button>
                                            <button type="button" class="btn btn-danger delete">
                                                <i class="glyphicon glyphicon-trash"></i>
                                                <span>Delete</span>
                                            </button>
                                            <input type="checkbox" class="toggle">
                                            <!-- The global file processing state -->
                                            <span class="fileupload-process"></span>
                                        </div>
                                        <!-- The global progress state -->
                                        <div class="col-lg-5 fileupload-progress fade">
                                            <!-- The global progress bar -->
                                            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                            </div>
                                            <!-- The extended global progress state -->
                                            <div class="progress-extended">&nbsp;</div>
                                        </div>
                                    </div>
                                    <!-- The table listing the files available for upload/download -->
                                    <table role="presentation" class="table table-striped">
                                        <tbody class="files"></tbody>
                                    </table>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- content -->
    </aside>
    <!-- right-side -->
</div>
<!-- ./wrapper -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="<?PHP echo base_url(); ?>asset/template/js/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="<?PHP echo base_url(); ?>asset/template/js/bootstrap.min.js" type="text/javascript"></script>
<!--livicons-->
<script src="<?PHP echo base_url(); ?>asset/template/js/app.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-tmpl/js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimploadimage/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-canvas-to-blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-gallery-with-desc/js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="<?PHP echo base_url(); ?>asset/template/vendors/blueimp-file-upload/js/jquery.fileupload-ui.js"></script>
<script src="<?PHP echo base_url(); ?>asset/template/js/pages/main.js"></script>
<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
            <td>
                <span class="preview"></span>
            </td>
            <td>
                <p class="name">{%=file.name%}</p>
                <strong class="error text-danger"></strong>
            </td>
            <td>
                <p class="size">Processing...</p>
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
            </td>
            <td>
                {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
                {% } %} {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-download fade">
            <td>
                <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
            </td>
            <td>
                <p class="name">
                    {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl? 'data-gallery': ''%}>{%=file.name%}</a>
                    {% } else { %}
                    <span>{%=file.name%}</span> {% } %}
                </p>
                {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
                {% } %}
            </td>
            <td>
                <span class="size">{%=o.formatFileSize(file.size)%}</span>
            </td>
            <td>
                {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}" {% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}' {% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" name="delete" value="1" class="toggle"> {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
                {% } %}
            </td>
        </tr>
        {% } %}
    </script>
<!-- end of page level js -->
</body>

</html>