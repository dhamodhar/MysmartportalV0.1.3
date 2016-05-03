            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-8 col-xs-12 xs-mb-10">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                
                                <li>
                                    <a href=" "  class="sub-active">Invoices</a>
                                </li>
                            </ul>
                            
                        </div>

<div class="col-md-4 cps"> <div id="tableTools"></div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">

                        
                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12 xs-nopadding">




                                <!-- tile -->
                                <section class="tile padding-top-20">
<div class="col-md-12 no-padding ">

  <div class="col-md-3">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Invoice Number</label>
                                            <input type="text" name="invoice_number" id="invoice_number" class="form-control" id="exampleInputEmail2" placeholder="Search by Invoice Number">                                 
  </div></div>


                                     
                                        
                                        <!-- col -->
                                        <div class="col-md-3">

                                             
                                           <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="from"  id="from" class="form-control " placeholder="From">
<span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>


                                                
                                               
                                            </div>
                                        </div>
                                        <!-- /col -->
                                         <!-- col -->
                                        <div class="col-md-3">
                                            
                                              <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="to" id="to"  class="form-control " placeholder="To">
<span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                              
                                            </div>
                                        </div>
                                        <!-- /col -->
                                         <div class="col-md-2"><button class="btn btn-blue" onclick="searchbydates()"><i class="fa fa-search"></i></button></div>
                                         </div>


                                    <!-- tile body -->
                                    <div class="tile-body clear">

									
  
                                        <div class="table-responsive">
										  <div class="row">
                                        
                                        <div class="col-md-6"><div id="colVis"></div></div>
                                    </div>
                                            <table class="table table-striped table-hover table-custom" id="orders-list">
                                                <thead>
                                                <tr>
                                                    
                                                    <th style="width:100px;">Invoice&nbsp;Number</th>
                                                   
													<th style="width:100px;" class="active">Invoice Date</th> 
													<th style="width:100px;">Amount</th> 
													<th style="width:100px;">Due Date</th> 
													<th style="width:100px;">Tracking Number</th> 
													<th style="width:100px;">Carrier</th> 
													<th style="width:100px;">Carrier Status</th> 
                                                                                                        <th style="width:100px;">Customer PO</th>
													 
												
													
													
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
											
											
											

											
											
                                        </div>
<input type="hidden" name="count" id="count" value="25">
<button class="btn btn-primary btn-xs load-buts" onclick="loadmore()" value="Load More">Load More</button>
                                    </div>
									 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                    <!-- /tile body -->
<!--<a href="<?php echo base_url()?>index.php/welcome/all_invoices_tocsv" style="margin-left:15px;" class="btn btn-primary btn-sm mb-10">Export To CSV</a>-->
									
  
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









