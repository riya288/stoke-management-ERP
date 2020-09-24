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
                     <div class="col-xs-12">
                        <div class="page-title-box">
                           <h4 class="page-title">Add Product Sub Category</h4>
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
                                        <div class="col-md-5">
                                            <div class="form-group">
                                              <label for="userName">Product Category Name<span class="text-danger">*</span></label>
                                              <select class="select2" name="category">
                                                  <option>please choose</option>
                                                  <option>Clothes</option>
                                              </select>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group">
                                              <label for="userName">Product Sub Category Name<span class="text-danger">*</span></label>
                                              <input type="text" name="sub_category" parsley-trigger="change" required="" placeholder="Enter Product Sub Category Name" class="form-control" id="userName">
                                            </div>
                                        </div>
                                        <div class="col-md-2" align="left">

                                            <button type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-25">Submit</button>

                                        </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="row" id="show">
                            <div class="col-md-2">
                              <div class="btn btn-primary btn-sm add">+&nbsp;&nbsp;&nbsp;Add New Sub Category</div>
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
                                    <th style="width:10%;">Sr No</th>
                                    <th style="width:40%;">Category</th>
                                    <th style="width:40%;">Sub Category</th>
                                    <th style="width:10%;" align="center">Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>1</td>
                                    <td>Clothes</td>
                                    <td>Man</td>
                                    <td align="center">
                                       <a href="#" title="Edit">
                                       <i class="fa fa-edit" style="font-size: 20px;"></i>
                                       </a>
                                       <a href="#" title="Delete">
                                       <i class="fa fa-trash-o" style="font-size: 20px;"></i>
                                       </a>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               <!-- container -->
               </div>
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
         $(document).ready(function(){

             $('#filer_input2').filer({
                 limit: 15,
                 maxSize: 15,
                 extensions: ['jpg', 'jpeg', 'png', 'gif', 'psd'],
                 changeInput: true,
                 showThumbs: true,
                 addMore: true
             });
         });
     </script>

<script>
  $("#hide").hide();
  jQuery('.add').click(function(event) {
                   $("#hide").slideToggle();
                   $("#show").slideToggle();   

                }); 
  
</script>
   </body>
</html>