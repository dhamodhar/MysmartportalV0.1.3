            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        <h2>Invoices</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                
                                <li>
                                    <a href=" "  class="sub-active">Invoices</a>
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
                                <section class="tile padding-top-20">

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

                                    <!-- tile body -->
                                    <div class="tile-body">
<a href="<?php echo base_url()?>index.php/welcome/all_invoices_tocsv" style="margin-left:0px;" class="btn btn-primary btn-sm mb-10">Export To CSV</a>
									
  
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover table-custom" id="orders-list">
                                                <thead>
                                                <tr>
                                                    
                                                    <th style="width:100px;">Invoice&nbsp;Number</th>
                                                   
													<th style="width:100px;" class="no-sort">Invoice Date</th> 
													<th style="width:100px;">Amount</th> 
													<th style="width:100px;">Due Date</th> 
													<th style="width:100px;">Tracking Number</th> 
                                                                                                        <th style="width:100px;">Customer PO</th>
													 
												
													
													
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
											
											
											
											
											
                                        </div>

                                    </div>
									 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                    <!-- /tile body -->
<a href="<?php echo base_url()?>index.php/welcome/all_invoices_tocsv" style="margin-left:15px;" class="btn btn-primary btn-sm mb-10">Export To CSV</a>
									
  
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








