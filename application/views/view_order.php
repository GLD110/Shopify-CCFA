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
                    <li>
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
                            <li>
                                <a href="<?PHP echo base_url(); ?>product/manage">
                                    <i class="fa fa-angle-double-right"></i> Custom Products
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
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
    <aside class="right-side sidebar-offcanvas">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <!--section starts-->
            <h1>Orders</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index.html">
                        <i class="livicon" data-name="home" data-size="14" data-loop="true"></i> Home
                    </a>
                </li>
                <li class="active">Orders</li>
            </ol>
        </section>
        <!--section ends-->
        <section class="content">
            <!-- row-->
            <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-success filterable" style="overflow:auto;">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <i class="livicon" data-name="tasks" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i> Re-order Columns
                                    </h3>
                                </div>
                                <div class="panel-body table-responsive">
                                    <table class="table table-striped table-bordered" id="table2" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Order Name</th>
                                                <th>Order ID</th>
                                                <th>Product Name</th>
                                                <th>Customer</th>
                                                <th>Total</th>
                                                <th>Products</th>
                                                <th>Country</th>
                                                <th>Fulfillment Status</th>
                                                <th>Checkout Date</th>
                                                <th>Financial Status</th>
                                                <th>SKU</th>                           
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $sno = 0;
                                            foreach ($query->result() as $row):
                                                $sno ++;
                                                 ?>
                                                 <tr class="tbl_view text-center" >              
                                                   <td style="width:10px;">
                                                        <?php echo $sno; ?>
                                                    </td>
                                                    <td><?=$row->order_name ?></td>
                                                    <td><?=$row->order_id ?></td>
                                                    <td><?=$row->product_name ?></td>
                                                    <td><?=$row->customer_name ?></td>
                                                    <td>$<?=$row->amount ?></td>
                                                    <td><?=$row->num_products ?></td>
                                                    <td><?=$row->country ?></td>
                                                    <td><?=$row->fulfillment_status ?></td>
                                                    <td><?=$row->created_at ?></td>
                                                    <td><?=$row->financial_status ?></td>
                                                    <td><?=$row->sku ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <!-- content -->
    </aside>
    <!-- right-side -->
</div>    
