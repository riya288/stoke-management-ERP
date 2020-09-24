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
                           <h4 class="page-title">Add  Branch Detail</h4>
                           <div class="clearfix"></div>
                        </div>
                     </div>

                  </div>
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box">
                           <div class="row" id="hide">
                              <form class="form-horizontal" role="form">
                                 <div class="col-md-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Branch Name<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="branch name" class="form-control" id="userName">
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="userName">Branch Code<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="branch code" class="form-control" id="userName">
                                            </div>
                                          </div>
                                         </div>
                                       <div class="row">
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Address<span class="text-danger">*</span></label>
                                               <textarea class="form-control" rows="5"></textarea>
                                           </div>
                                       </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Remark<span class="text-danger">*</span></label>
                                               <textarea class="form-control" rows="5"></textarea>
                                           </div>
                                       </div>
                                       <div class="col-md-12" align="right">
                                          <button type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-25" id="submit_completed">Submit</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                          <div class="row" id="show">
                            <div class="col-md-2">
                              <div class="btn btn-primary btn-sm add">+&nbsp;&nbsp;&nbsp;Add New Branch</div>
                            </div>
                          </div>
                        </div>
                     </div>
                  </div>

                   <div class="row">
                       <div class="col-sm-12">
                           <div class="card-box table-responsive">
                               <table id="datatable-buttons" class="table table-striped table-bordered">
                                   <thead>
                                   <tr>
                                       <th>Sr No</th>
                                       <th>Branch name</th>
                                       <th>Branch code</th>
                                       <th>Address</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>fashion</td>
                                       <td>123</td>
                                       <td>B-301, Samruddhi Complex, Near Geeta Khaman HouseBeside Makarpura depo</td>
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
                                       <td>fashion</td>
                                       <td>456</td>
                                       <td>B-301, Samruddhi Complex, Near Geeta Khaman HouseBeside Makarpura depo</td>
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