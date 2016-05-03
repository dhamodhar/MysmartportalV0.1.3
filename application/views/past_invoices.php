            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg small-header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-8 col-xs-12 col-sm-8 xs-mb-10">

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

  


                                     
                                        
                                     
                                    
                                    <!-- tile body -->
                                    <div class="tile-body">
<!--<a href="<?php echo base_url()?>index.php/welcome/all_invoices_tocsv" style="margin-left:0px;" class="btn btn-primary btn-sm mb-10">Export To CSV</a>-->
									
  
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
                                                    <th style="width:100px;">Customer PO</th>
													<th style="width:100px;">Order Number</th>
												
													
													
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
											
											
											

											
											
                                        </div>
<input type="hidden" name="count" id="count" value="25">
<button class="btn btn-primary load-buts btn-xs" onclick="loadmore()" value="Load More">Load More</button>
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









