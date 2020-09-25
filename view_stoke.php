
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
                           <h4 class="page-title">Site Invoice</h4>
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
                                           <form class="form-horizontal" role="form" action="action/view_stoke.php" method="post">
                                               <div class="col-md-12">

                                                   <div class="row">
                                                       <div class="col-md-5">
                                                           <label for="userName">Select Product Name<span class="text-danger">*</span></label>
                                                           <select class="form-control select2" name="product">
                                                               <option value="AK">Sapa Road</option>
                                                               <option value="HI">Bhuravava Gurukrupa</option>

                                                           </select>
                                                       </div>
                                                       <div class="col-md-5">
                                                           <div class="form-group">
                                                               <label>Select Date</label>
                                                               <div>
                                                                   <div class="input-daterange input-group" id="date-range">
                                                                       <input type="text" name="dt_from" class="form-control" name="start" />
                                                                       <span class="input-group-addon bg-custom text-white b-0">TO</span>
                                                                       <input type="text" name="dt_to" class="form-control" name="end" />
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <div class="col-md-2">
                                                           <button type="submit" name="submit" class="btn btn-primary btn-bordered waves-effect w-md waves-light m-b-5 m-t-30 pull-right">Search</button>
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

      
   </body>
</html>