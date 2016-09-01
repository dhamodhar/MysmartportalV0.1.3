   <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">

            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        <h2>Open Orders</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/dashboard"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/orders">Purchasing & Accounting</a>
                                </li>
                                <li>
                                    <a href=""  class="sub-active">Open Orders</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">


                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12">




                                <!-- tile -->
                                 <section class="tile">
								<div class="row " style="padding-top:20px;padding-left:17px;">
<div class="col-md-3"><div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Order Id</label>
                                            <input type="text" name="order_id" id="order_id" class="form-control" id="exampleInputEmail2" placeholder="Search by Order Id">                                 
  </div></div>
  <div class="col-md-1" style="padding:0;"></div>
                                     
                                        
                                     
                                    <!-- tile body -->
                                    <div class="tile-body">

                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-custom" id="orders-list">
                                                <thead>
                                                <tr>
                                                    
                                                    <th style="width:180px;">Order&nbsp;Number</th>
                                                    <th style="width:200px;">Order&nbsp;Date</th>
                                                    <th style="width:150px;">Tracking Number</th>
                                                    <th style="width:150px;">Arrival Date</th>
                                                    <th style="width:150px;">Order Amount</th>
                                                    <th style="width:150px;">Shipping City / State</th>
                                                    <th style="width:100px;">Status</th> 
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
											
											
											
											
											
                                        </div>

                                    </div>
                                    <!-- /tile body -->

                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->




                    </div>
                    <!-- /page content -->

                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->




