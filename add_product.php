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
                           <h4 class="page-title">Add  Product</h4>
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
                                                <label for="userName">Billed to<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="customer name" class="form-control new">
                                            </div>
                                        </div>
                                      <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="userName">Company Name<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="company name" class="form-control new">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="form-group">
                                               <label for="userName">Address<span class="text-danger">*</span></label>
                                               <textarea class="form-control" rows="5"></textarea>
                                           </div>
                                       </div>
                                       <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">Invoice no<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control new" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                 <label>Invoice Date</label>
                                                 <div class="input-group">
                                                     <input type="text" class="form-control" placeholder="mm/dd/yyyy" value="<?php echo date('d/m/y');?>" id="datepicker">
                                                     <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                 </div>
                                              </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">P.O Number<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control new">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="userName">State code<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control new">
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="userName">Select Category<span class="text-danger">*</span></label>
                                                 <select class="form-control select2">
                                                     <option>Select</option>
                                                         <option value="AK">Clothes</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div class="col-md-3">
                                            <div class="form-group">
                                                  <label for="userName">GST Number<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="" class="form-control new">
                                              </div>
                                        </div>
                                         <div class="col-md-3">
                                             <div class="form-group">
                                                 <label for="userName">Stoke<span class="text-danger">*</span></label>
                                                 <input type="text" name="nick" value="100" parsley-trigger="change" required="" class="form-control" id="userName" readonly>
                                             </div>
                                         </div>
                                     </div>
                                    <div class="row">
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
                                             <label for="userName">Product Name<span class="text-danger">*</span></label>
                                              <select class="form-control select2">
                                                   <option>Select</option>
                                                   <option value="AK">Shirt</option>
                                                   <option value="HI">Jeanse</option>
                                               </select>
                                          </div>
                                       </div>
                                     </div>
                                     <div class="row">
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
                                       <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="userName">Qty<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="Qty" class="form-control new" id="qty">
                                            </div>
                                        </div>
                                         <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="userName">Rate<span class="text-danger">*</span></label>
                                                <input type="text" name="nick" parsley-trigger="change" required="" placeholder="RS..." class="form-control new" id="rate">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="userName">Total Amount<span class="text-danger">*</span></label>
                                                <input type="text" id="total" name="nick" parsley-trigger="change" required="" class="form-control" placeholder="RS...">
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 <label for="userName">Select Tax<span class="text-danger">*</span></label>
                                                 <select class="form-control select2 select">
                                                     <option>Select</option>
                                                         <option value="AK">GST</option>
                                                         <option value="1">Non GST</option>
                                                         <option value="AK">Other</option>
                                                 </select>
                                             </div>
                                         </div>
                                         <div id="gst">
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
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-12" align="right">
                                            <button type="button" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-25" id="submit_completed">Submit</button>
                                        </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                           <div class="row" id="show">
                             <div class="col-md-2">
                               <div class="btn btn-primary btn-sm add">+&nbsp;&nbsp;&nbsp;Add New Product</div>
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
                                       <th>date</th>
                                       <th>stoke</th>
                                       <th>product name</th>
                                       <th>qty</th>
                                       <th>Rate</th>
                                       <th>Amount</th>
                                       <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                   <tr>
                                       <td>1</td>
                                       <td>12/2/2020</td>
                                       <td>100</td>
                                       <td>Cuban Collar Short Sleeve Shirt</td>
                                       <td>5</td>
                                       <td>1000</td>
                                       <td>5000</td>
                                       <td>
                                        <a href="get_pdf.php" title="pdf">
                                                        <i class="fa fa-print" style="font-size: 20px;"></i>
                                                        </a>
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
                                       <td>12/2/2020</td>
                                       <td>100</td>
                                       <td>Cuban Collar Short Sleeve Shirt</td>
                                       <td>5</td>
                                       <td>1000</td>
                                       <td>5000</td>
                                       <td>
                                        <a href="get_pdf.php" title="pdf">
                                                        <i class="fa fa-print" style="font-size: 20px;"></i>
                                                        </a>
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
<script>
  $('#gst').hide();
   jQuery('.select').on("change",function(event) {
                  var select = $('.select').val();
                  if (select == 1) {
                    $('#gst').hide();
                  }else{
                    $('#gst').show();
                  }

                }); 
</script>

   </body>
</html>