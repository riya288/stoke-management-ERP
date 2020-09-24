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
                           <h4 class="page-title">Add  Taxes</h4>
                           <div class="clearfix"></div>
                        </div>
                     </div>

                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box">
                           <div class="row">
                              <form class="form-horizontal" role="form">
                                 <div class="col-md-12">
                                  <div class="row" id="hide">
                                    <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="userName">Tax Name<span class="text-danger">*</span></label>
                                          <input type="text" name="" class="form-control">
                                      </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label for="userName">CGST<span class="text-danger">*</span></label>
                                          <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                   <div class="col-md-2">
                                      <div class="form-group">
                                          <label for="userName">SGST<span class="text-danger">*</span></label>
                                          <input type="text" name="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                      <div class="form-group">
                                          <label for="userName">Total GST<span class="text-danger">*</span></label>
                                          <input type="text" name="" class="form-control" readonly>
                                        </div>
                                    </div>
                                     <div class="col-md-2" align="right">
                                          <button type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-25" id="submit_completed">Submit</button>
                                       </div>
                                  </div>
                                      
                                  <div class="row" id="show">
                                    <div class="col-md-2">
                                      <div class="btn btn-primary btn-sm add">+&nbsp;&nbsp;&nbsp;Add New Tax</div>
                                    </div>
                                  </div>
                                 </div>
                              </form>
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
                                       <th>Tax</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>GST</td>
                                       <td>
                                           <a href="#" title="Edit">
                                               <i class="fa fa-edit" style="font-size: 20px;"></i>
                                           </a>
                                           <a href="#" title="Delete">
                                               <i class="fa fa-trash-o" id="primary-alert" style="font-size: 20px;"></i>
                                           </a>

                                       </td>
                                   </tr>
                                   <tr>
                                       <td>2</td>
                                       <td>Non GST</td>
                                       <td>
                                           <a href="#" title="Edit">
                                               <i class="fa fa-edit" style="font-size: 20px;"></i>
                                           </a>
                                           <a href="#" title="Delete">
                                               <i class="fa fa-trash-o" id="primary-alert" style="font-size: 20px;"></i>
                                           </a>

                                       </td>
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

<script>
  $("#hide").hide();
  jQuery('.add').click(function(event) {
                   $("#hide").slideToggle();
                   $("#show").slideToggle();   

                }); 
  
</script>
   </body>
</html>