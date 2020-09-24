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
                           <h4 class="page-title">Add  Stoke</h4>
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
                                                 <label for="userName">Select Category<span class="text-danger">*</span></label>
                                                 <select class="form-control select2">
                                                     <option>Select</option>
                                                         <option value="AK">Clothes</option>
                                                 </select>
                                             </div>
                                         </div>
                                       <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Select Sub Category<span class="text-danger">*</span></label>
                                               <select class="form-control select2">
                                                   <option>Select</option>
                                                   <option value="AK">Man</option>

                                               </select>
                                           </div>
                                       </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Select Sub Sub Category<span class="text-danger">*</span></label>
                                               <select class="form-control select2">
                                                   <option>Select</option>
                                                   <option value="AK">Shirt</option>
                                                   <option value="HI">Jeanse</option>
                                               </select>
                                           </div>
                                       </div>
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label for="userName">Product Name<span class="text-danger">*</span></label>
                                              <select class="form-control select2">
                                                     <option>Select</option>
                                                         <option value="AK">Cuban Collar Short Sleeve Shirt</option>
                                                 </select>
                                          </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">Total Stoke<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Stoke" class="form-control new" id="qty">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">  Rate<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" class="form-control new" placeholder="RS..." id="rate">
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">  Amount<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" class="form-control" placeholder="RS..." id="total">
                                            </div>
                                        </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label>Date</label>
                                                 <div class="input-group">
                                                     <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker" value="<?php echo date('d/m/y');?>">
                                                     <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                 </div>
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
                               <div class="btn btn-primary btn-sm add">+&nbsp;&nbsp;&nbsp;Add New Stoke</div>
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
                                       <th>Product name</th>
                                       <th>Total Stoke</th>
                                       <th>Rate</th>
                                       <th>Amount</th>
                                       <th>Date</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>Cuban Collar Short Sleeve Shirt</td>
                                       <td>1000</td>
                                       <td>200</td>
                                       <td>200000</td>
                                       <td>12/2/2020</td>
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
                                       <td>Cuban Collar Short Sleeve Shirt</td>
                                       <td>1000</td>
                                       <td>500</td>
                                       <td>500000</td>
                                       <td>12/2/2020</td>
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
   $('.new').keyup(function(){
       var qty = $('#qty').val();
       var rate = $('#rate').val();
       var total = parseInt(qty)*parseInt(rate);
       $('#total').val(total);
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