<style>
    tr.warning td.new-date{ font-weight:bold; color:green; }
</style>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Debug
    <!--    <small>List</small>-->
    </h1>
    <ol class="breadcrumb">
        <li><a href="home"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Debug</li>
    </ol>
</section>

<!-- Main content -->

<section class="content">

    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-md-12 column"  style = "border-bottom:solid 1px #ddd; margin-bottom:4px; padding-bottom: 5px;" >
                        <h4>Session</h4>
                        <pre>
                            <?php var_dump($this->session); ?>
                        </pre>
                        <h4>Everything</h4>
                        <pre>
                            <?php var_dump($this); ?>
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>