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
                        <div class="page-title-box">
                           <h4 class="page-title"></h4>
                           <div class="clearfix"></div>
                        </div>
                      </div>
                  </div>

                   <div class="row">
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-sm-12">
                                   <div class="card-box">
                                       <div class="row">
                                           <form class="form-horizontal" role="form">
                                               <div class="col-md-12">

                                                   <div class="row">
                                                       <div class="col-md-5">
                                                           <label for="userName">Product Name<span class="text-danger">*</span></label>
                                                           <select class="form-control select2">
                                                               <option value="AK">Sapa Road</option>
                                                               <option value="HI">Bhuravava Gurukrupa</option>

                                                           </select>
                                                       </div>
                                                       <div class="col-md-5">
                                                           <div class="form-group">
                                                               <label>Select Date</label>
                                                               <div>
                                                                   <div class="input-daterange input-group" id="date-range">
                                                                       <input type="text" class="form-control" name="start" />
                                                                       <span class="input-group-addon bg-custom text-white b-0">TO</span>
                                                                       <input type="text" class="form-control" name="end" />
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-2">
                                                           <button type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-30 pull-right">Search</button>
                                                       </div>
                                                   </div>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box table-responsive">
                           <table id="datatable" class="table table-striped table-bordered">
                              <thead>
                                 <tr>
                                    <th>Sr No</th>
                                    <th>Site</th>
                                    <th>Date</th>
                                    <th>Agency</th>
                                    <th>Item</th>
                                    <th>Amount</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Sapa Road</td>
                                    <td>12/2/2020</td>
                                    <td>Amuja Pavadar</td>
                                    <td>Reti, Kapchi</td>
                                    <td>5000</td>
                                    
                                 </tr>
                                 <tr>
                                     <td>2</td>
                                     <td>Vavadi Road</td>
                                     <td>15/2/2020</td>
                                     <td>Amuja Pavadar</td>
                                     <td>Reti, Kapchi</td>
                                     <td>5000</td>
                                     
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- container -->
            </div>
            <!-- content -->
         </div>
         <!-- ============================================================== -->
         <!-- End of the page -->
         <!-- ============================================================== -->
      </div>
      <!-- END wrapper -->
      <!-- START Footerscript -->
      <?php require_once('include/footerscript.php'); ?>

      <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="full-width-modalLabel" aria-hidden="true" style="display: none;">
          <div class="modal-dialog modal-full">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="full-width-modalLabel">Agency Report</h4>
                  </div>

                  <div class="modal-body">
                      <div class="row">
                          <div class="col-md-12">

                              <div class="row">
                                  <div class="col-md-12">

                                      <div class="clearfix">
                                          <div class="pull-left">
                                              <h4 >Site Name: <span>Saa Real estate</span></h4>
                                              <h5> Address: <span>Sapa road guru krupa building Godhra</span></h5>
                                          </div>
                                          <div class="pull-right">
                                              <h5>PO Date : <strong>22/2/2020</strong>
                                              </h5>
                                          </div>
                                      </div>
                                  </div><!-- end col -->
                              </div>
                              <!-- end row -->

                              <div class="m-h-50"></div>

                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="table-responsive">
                                          <table class="table m-t-30">
                                              <thead>
                                              <tr><th style="width:10%;">Sr No</th>
                                                  <th style="width:10%;">Date</th>
                                                  <th style="width:20%;">Agency</th>
                                                  <th style="width:10%;">Item</th>
                                                  <th style="width:30%;">Desc</th>
                                                  <th style="width:10%;">Qty</th>
                                                  <th style="width:10%; text-align: right;" >Total Rs</th>
                                              </tr></thead>
                                              <tbody>
                                              <tr>
                                                  <td>1</td>
                                                  <td>25/2/2019</td>
                                                  <td>JK CYMENT</td>
                                                  <td>1</td>
                                                  <td>Steal and Goods</td>
                                                  <td>15</td>
                                                  <td align="right">2380</td>
                                              </tr>
                                              <tr>
                                                  <td>1</td>
                                                  <td>25/2/2019</td>
                                                  <td>Ambuja Cyment</td>
                                                  <td>1</td>
                                                  <td>Steal and Goods</td>
                                                  <td>15</td>
                                                  <td align="right">2380</td>
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
                                      <h5 class="text-right">Total Rs:   2930.00</h5>
                                  </div>
                              </div>

                          </div>


                      </div>
                  </div>

              </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
   </body>
</html>