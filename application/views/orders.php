   <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">

            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        <h2>Orders & Invoices</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Orders & Invoices</a>
                                </li>
                                
                            </ul>
                            
                        </div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">


                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12  ">




                                <!-- tile -->
                                 <section class="tile padding-top-20">
								
<div class="col-md-3">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Order Id</label>
                                            <input type="text" name="order_id" id="order_id" class="form-control" id="exampleInputEmail2" placeholder="Search by Order Id">                                 
  </div></div>
  <div class="col-md-3">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Invoice Number</label>
                                            <input type="text" name="invoice_number" id="invoice_number" class="form-control" id="exampleInputEmail2" placeholder="Search by Invoice Number">                                 
  </div></div>


                                     
                                        
                                        <!-- col -->
                                        <div class="col-md-2">

                                             
                                            <div class="input-group form-group" id="datetimepicker1">
                                                <input type="text" name="from"  id="from" class="form-control " placeholder="From">
                                                
                                               
                                            </div>
                                        </div>
                                        <!-- /col -->
                                         <!-- col -->
                                        <div class="col-md-2">
                                            
                                            <div class="input-group form-group" id="datetimepicker2"  >
                                                <input type="text" name="to" id="to"  class="form-control " placeholder="To">
                                              
                                            </div>
                                        </div>
                                        <!-- /col -->
                                         <button class="btn" onclick="searchbydates()"><i class="fa fa-search" onclick="searchbydates()"></i></button>


                                   <div class="col-md-12 padding-bottom-20">You may search by order id / invoice number. You may search between order dates. You may use both.<br>
Note: You may search orders & invoices using dates up to 1 year, if you want to get data for more than 1 year, please contact Lowry.</div> 

<br/><a href="<?php echo base_url()?>index.php/welcome/all_orders_to_csv" style="margin-left:15px;" class="btn btn-primary btn-sm mb-10">Export To CSV</a>
                                    <!-- tile body -->
                                    <div class="tile-body">
                                        <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-custom" id="orders-list">
                                                <thead>
                                                <tr>
                                                    
                                                    <th style="width:180px;">Order&nbsp;Number</th>
                                                    <th style="width:200px;">Order&nbsp;Date</th>
                                                    <th style="width:150px;">Customer PO</th>
                                                    <th style="width:150px;">Invoice</th>
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
<a href="<?php echo base_url()?>index.php/welcome/all_orders_to_csv" style="margin-left:15px;" class="btn btn-primary btn-sm mb-10">Export To CSV</a>
									
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




