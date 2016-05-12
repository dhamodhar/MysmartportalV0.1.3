            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-single-order">

                    <div class="pageheader">

                        

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/open_invoices">Invoices</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Invoice View</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <div class="pagecontent">


                        <div class="add-nav">
                         <div class="nav-heading">
                           
                              
                               
                            </div>

                            <div role="tabpanel">

                                <div class="tab-content">
                                    <!-- tab in tabs -->
                                    



                                        <!-- row -->
                                        <div class="row">
                                            <!-- col -->
                                            <div class="col-md-12">


                                                <!-- tile -->
                                                <section class="tile time-simple">


                                                    <!-- tile body -->
                                                    <div class="tile-body">


                                                        <!-- row -->
                                                         <div class="row">




                                                            <!-- col -->
                                                            <div class="col-md-12 ">
                                                              
                                                                <h3 class="mb-20" style="float:left; margin-right:30px;">Invoice : <strong id="order_number"></strong></h3>



<div class="float-left mr-10" id="export_to_pdf" ><button type="button" class="btn btn-primary mb-10">Export to PDF</button></div>
<div class="float-left mr-10" id="pdf_id"></div>
<div class="col-md-7 mt-10">
<div id="sendemail" style="display:none">
<div class="col-md-3 no-padding"> <input type="email" placeholder="Email" name="email" id="email" class="form-control"> </div>
<div class="col-md-3 no-padding"><button class="btn btn-primary  mb-10" type="button">Send</button> </div>
</div>
<div> 
</div>

                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                           
                                                            <!-- /col -->

                                                        </div>
                                                        <!-- /row -->

                                                        <!-- row -->
                                                        
                                                          <div class="col-md-12 no-padding clear">
                                                            <!-- col -->
                                                            <div class="col-md-3 b-r" id="order_details">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Invoice Details</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                              
                                                                </ul>
                                                            </div>
															  <div class="col-md-3 b-r" id="order_details1">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Invoice Details</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                              
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->
 
                                                            <!-- col -->
                                                                <!-- col -->
									                          <div class="col-md-3 b-r" id="billing">
                                                                    <p class="text-uppercase text-strong mb-10 custom-font">Billing Address</p>   
                                                                <ul class="list-unstyled text-default lt mb-20">                                            
                                                                </ul>
                                                                </div>
																
																
                                                                <div class="col-md-3 b-r" id="shipping">
                                                                  <p class="text-uppercase text-strong mb-10 custom-font">
                                                                    Shipping Address</p>
                                                                    <ul class="list-unstyled text-default lt mb-20">                                      
                                                                   </ul></div>
                                                                  </div>
                                                        <!-- /row -->


                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->


                                                <!-- tile -->
                                                <section class="tile tile-simple">

                                                    <!-- tile body -->
                                                    <div class="tile-body p-0">

                                                        <div class="table-responsive">
											
                                                            <table class="table table-hover table-striped" id="orders-list">
                                                                <thead>
                                                                <!--<h3 style="padding:8px;">Items On Invoice:<span id="count">1</span></h3>-->
                                                                <tr>
                                                                    <th>Line No</th>
								    <th>Product Description</th>
                                                                    <th>Product Code</th>
                                                                    <th>Qty</th>
                                                                    <th>Unit Size</th>
                                                                    <th>Unit Price</th>
                                                                    <th>Total Price</th>
                                                                    <th>Ship Date</th>
                                                                    
                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
																
                                                               
                                                               
                                                                </tbody>
                                                            </table>
                                                        </div>

                                                    </div>
                                                    <!-- /tile body -->
 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                                </section>
                                                <!-- /tile -->


                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->

                                    </div>

                                    <!-- tab in tabs -->
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                
            </section>
            <!--/ CONTENT -->

        </div>
        <!--/ Application Content -->












