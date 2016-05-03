   
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
                                    <a href="<?php echo base_url();?>index.php/welcome/orders">Orders & Invoices</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Order View</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <div class="pagecontent">


                        <div class="add-nav">
                        <div class="col-md-5"> 
                         </div>

<div class="col-md-6">
<div>
<div class="float-left mr-10" id="export_to_pdf"><button type="button" class="btn btn-primary  mb-10">Export to PDF</button></div>
<div class="float-left mr-10" id="pdf_id"></div>

<div class="float-left">
<div id="sendemail" style="display:none">



 </div> </div>


</div> </div>  
                               
                               
                            

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





                                                       
                                                        <!-- /row -->

                                                        <!-- row -->

                                                        <div class="col-md-12 mb-10">
 <div class="col-md-6 no-padding"> <h3 class="mt-10">Order: <strong id="order_number"></strong></h3></div>

<div class="col-md-6 no-padding">
<div class="pull-right">
<h3 class="mt-10">Status: <strong id="status_order" class="text-uppercase text-success"></strong></h3>
   </div> </div>



            

<div class="col-md-6">
<div id="sendemail" style="display:none">
<div class="col-md-4 no-padding"> <input type="email" placeholder="Email" name="email" id="email" class="form-control"> </div>
<div class="col-md-3 no-padding"><button class="btn btn-primary  mb-10" type="button">Send</button> </div>

<div> </div>
 </div> </div>

 </div>




			                                            <div class="col-md-12 no-padding clear">
                                                            <!-- col -->
                                                            <div class="col-md-3 b-r" id="order_details">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Details</p>
																
                                                                <ul class="list-unstyled text-default lt mb-20">

                                                                </ul>
                                                            </div>
															    <div class="col-md-3 b-r" id="order_details1">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Details</p>
																
                                                                <ul class="list-unstyled text-default lt mb-20">

                                                                </ul>
                                                            </div>
															

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
                                                                <!--<h3 style="padding:8px;">Items On Order:<span id="count">1</span></h3>-->
                                                                <tr>
                                                                    <!--<th>Item No</th>-->
                                                                    <th>Product Code</th>
                                                                    <th>Product Description</th>
                                                                    <th>Quantity</th>
																	<th>Quantity Shipped</th>
                                                                    <th>Unit Size</th>
                                                                    <th>Unit Price</th>
                                                                    <th>Total Price</th>
                                                                    <!--<th>Status</th>-->
                                                                    
                                                                   
                                                                </tr>
                                                                </thead>
                                                                <tbody>
																

                                                               
                                                               
                                                                </tbody>
                                                            </table>
                                                        </div>
														<div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->


                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->

                                </div>
                            </div>
                        </div>



                    </div>

                </div>
                
            </section>
            <!--/ CONTENT -->

        </div>
        <!--/ Application Content -->












