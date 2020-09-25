<!DOCTYPE html>
<html>
<?php require_once('include/headerscript.php'); ?>
<body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">  

            <!-- Top Bar Start -->
            <?php require_once('include/topbar.php'); ?>
            <!-- Top Bar End -->

            <!-- ========== Left Sidebar Start ========== -->
            <?php require_once('include/sidebar.php'); ?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4> Company Name: <span>Nik Tech Solution</span></h4>
                                                <h5> Address: <span>TF-9A Lotus Aura,Sama Savli Road,Vadodra</span></h5>
                                            </div>
                                            <div class="pull-right">
                                                <h5>PO Date : <strong>22/2/2020</strong>
                                                </h5>
                                            </div>
                                        </div>
                                        <hr>


                                        <div class="m-h-50"></div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                        <tr><th style="width:10%;">Sr No</th>
                                                            <th style="width:10%;">Date</th>
                                                            <th style="width:40%;">Product Name</th>
                                                            <th style="width:10%;">Profit</th>
                                                            <th style="width:10%;">Loss</th>
                                                            <th style="width:20%; text-align: right;" >Total Rs</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>25/2/2019</td>
                                                            <td>Shirt</td>
                                                            <td>200</td>
                                                            <td></td>
                                                            <td align="right">500</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 col-xs-6">

                                            </div>
                                            <div class="col-md-3 col-sm-6 col-xs-6 col-md-offset-3">

                                                <hr>
                                                <h4 class="text-right"> Total Rs:   2930.00</h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i> Print</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div> <!-- container -->
                </div> <!-- content -->
            </div>




            <!-- ============================================================== -->
            <!-- End of the page -->
            <!-- ============================================================== -->




        </div>
        <!-- END wrapper -->
        <!-- START Footerscript -->
        <?php require_once('include/footerscript.php'); ?>

    </body>
</html>