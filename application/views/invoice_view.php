            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-single-order">

                    <div class="pageheader">

                        <h2>Invoice View </h2>

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

                                <!-- Nav tabs -->
                          <ul role="tablist" class="nav nav-tabs">
                                    <li class="active" role="presentation"><a data-toggle="tab" role="tab" aria-controls="details" href="#">Invoice Details</a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="invoices" href="#">My Catalog</a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="payments" href="#">My Account</a></li>
                                    <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="notes" href="#">Shipping Policy</a></li>
                                 
                                </ul>

                                <div class="tab-content">
                                    <!-- tab in tabs -->
                                    <div id="details" class="tab-pane active" role="tabpanel">



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
                                                            <div class="col-md-9">
                                                               <!-- <p class="text-default lt">Created: January 29, 2015 at 16:58</p>-->
                                                                <p class="text-uppercase text-strong mt-10 mb-0 custom-font">Status</p>
                                                                <h3 class="text-uppercase text-success mt-0 mb-20"><P id="status_order"></p></h3>
																 <h3>Invoice : <strong id="order_number"></strong><button class="btn btn-primary mb-10" type="button">Export to PDF</button></h3>
                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                           <!-- <div class="col-md-3">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong class="inline-block w-xs">Name:</strong> John Douey</li>
                                                                    <li><strong class="inline-block w-xs">State:</strong>Jaksonville</li>
                                                                    <li><strong class="inline-block w-xs">Phone:</strong> 069 654 5662</li>
                                                                    <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;">john.douey@gmail.com</a></li>
                                                                </ul>
                                                            </div>-->
                                                            <!-- /col -->

                                                        </div>
                                                        <!-- /row -->

                                                        <!-- row -->
                                                        <div class="row b-t pt-20">

                                                            <!-- col -->
                                                            <div class="col-md-4 b-r" id="order_details">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Invoice Number(s)</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                   <!-- <li><strong>Order Number : </strong></li>
                                                                    <li><strong>Order Date : </strong> </li>
                                                                    <li><strong>Order Amount : </strong> </li>
                                                                    <li><strong>Tax Amount : </strong> </li>
                                                                    <li><strong>Shipping Charges : </strong></li>
                                                                    <li><strong>Total Invoice : </strong> </li>
                                                                    <li><strong>Due Date : </strong> </li>
                                                                    <li><strong>Pay Type : </strong> On Account</li>
                                                                    <li><strong>Tracking : </strong></li>-->
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->
  <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                                            <!-- col -->
                                                            
                                                              
                                                                   
                                                                

                                                                <!-- col -->
									<div class="col-md-4 b-r" id="billing">
                                                                    <p class="text-uppercase text-strong mb-10 custom-font">Billing Address</p>   
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li></li>
                                                                    <li></li>
                                                                    <li></li>
                                                                    <li></li>
                                                                    <li></li>
                                                                </ul>
                                                                </div>
                                                                <div class="col-md-4 b-r" id="shipping">
                                                                  <p class="text-uppercase text-strong mb-10 custom-font">
                                                                    Shipping Address</p>
                                                                    <ul class="list-unstyled text-default lt mb-20">
                                                                        <li></li>
                                                                        <li></li>
                                                                        <li></li>
                                                                        <li></li>
                                                                    </ul></div>
                                                                   
                                                                  
                                                                <!-- /col -->
                                                               
                                                                
                                                            
                                                            

                                                         

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
                                                                <h3 style="padding:8px;">Items On Invoice:<span id="count">1</span></h3>
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

                                                </section>
                                                <!-- /tile -->


                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->

                                        <!-- row -->
                                        <div class="row">
                                            <!-- col -->
                                            <div class="col-md-3 col-md-offset-9 price-total">

                                                <!-- tile -->
                                                <section class="tile tile-simple bg-tr-black lter">

                                                    <!-- tile body -->
                                                  <!--  <div class="tile-body">

                                                        <ul class="list-unstyled">
                                                            <li class="ng-binding"><strong class="inline-block w-sm mb-5">Subtotal:</strong> $865.21</li>
                                                            <li class="ng-binding"><strong class="inline-block w-sm mb-5">Shipping:</strong> $25.00</li>
                                                            <li class="ng-binding"><strong class="inline-block w-sm mb-5">Grand Total:</strong> $890.21</li>
                                                            <li class="ng-binding"><strong class="inline-block w-sm mb-5">Total Paid:</strong> $890.21</li>
                                                            <li class="ng-binding"><strong class="inline-block w-sm mb-5">Total Refunded:</strong> $0.00</li>
                                                            <li><strong class="inline-block w-sm">Total Due:</strong> <h3 class="inline-block text-success">$890.21</h3></li>
                                                        </ul>

                                                    </div>-->
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->

                                            </div>
                                            <!-- /col -->
                                        </div>
                                        <!-- /row -->



                                    </div>

                                    <!-- tab in tabs -->
                                    <div id="invoices" class="tab-pane" role="tabpanel">




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
                                                            <div class="col-md-9">
                                                                <p class="text-default lt">Created: January 29, 2015 at 16:58</p>
                                                                <p class="text-uppercase text-strong mt-40 mb-0 custom-font">Status</p>
                                                                <h3 class="text-uppercase text-success mt-0 mb-20">Completed</h3>
                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-3">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong class="inline-block w-xs">Name:</strong> John Douey</li>
                                                                    <li><strong class="inline-block w-xs">State:</strong> Ukraine</li>
                                                                    <li><strong class="inline-block w-xs">Phone:</strong> 069 654 5662</li>
                                                                    <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;">john.douey@gmail.com</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

                                                        </div>
                                                        <!-- /row -->

                                                        <!-- row -->
                                                        <div class="row b-t pt-20">

                                                            <!-- col -->
                                                            <div class="col-md-3 b-r">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Order Details</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong>ID:</strong> <a href="javascript:;">35651</a></li>
                                                                    <li>January 29, 2015 at 16:58</li>
                                                                    <li>John Douey</li>
                                                                    <li>Ukraine</li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-6 b-r">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">
                                                                    Address
                                                                    <a class="btn btn-default btn-rounded-20 btn-xs pull-right" href="javascript:;"><i class="fa fa-pencil"></i></a>
                                                                </p>

                                                                <!-- col -->
                                                                <div class="col-md-6">
                                                                    <ul class="list-unstyled text-default lt mb-20">
                                                                        <li>John Douey</li>
                                                                        <li>Vajnorska 512</li>
                                                                        <li>Bratislava, Bratislava 1</li>
                                                                        <li>811 09</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /col -->

                                                                <!-- col -->
                                                                <div class="col-md-6">
                                                                    <ul class="list-unstyled text-default lt mb-20">
                                                                        <li>john.douey@gmail.com</li>
                                                                        <li>655 169 4599</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /col -->

                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-3">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Delivery &amp; Payment</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong>Delivery:</strong> Pick-Up</li>
                                                                    <li><strong>Payment:</strong> Cash</li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

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
                                                            <table class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Invoice ID</th>
                                                                    <th>Created At</th>
                                                                    <th>Status</th>
                                                                    <th>Total</th>
                                                                    <th style="width: 260px">Actions</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:;">201500156</a></td>
                                                                    <td>Jan 26, 2015</td>
                                                                    <td><span class="label label-success">Paid</span></td>
                                                                    <td class="ng-binding">$264.00</td>
                                                                    <td>
                                                                        <a class="btn btn-xs btn-default" href="javascript:;"><i class="fa fa-search"></i> View</a>
                                                                        <a class="btn btn-xs btn-primary" href="javascript:;"><i class="fa fa-envelope"></i> Send</a>
                                                                        <a class="btn btn-xs btn-lightred" href="javascript:;"><i class="fa fa-times"></i> Delete</a>
                                                                    </td>
                                                                </tr>
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

                                    <!-- tab in tabs -->
                                    <div id="payments" class="tab-pane" role="tabpanel">



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
                                                            <div class="col-md-9">
                                                                <p class="text-default lt">Created: January 29, 2015 at 16:58</p>
                                                                <p class="text-uppercase text-strong mt-40 mb-0 custom-font">Status</p>
                                                                <h3 class="text-uppercase text-success mt-0 mb-20">Completed</h3>
                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-3">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong class="inline-block w-xs">Name:</strong> John Douey</li>
                                                                    <li><strong class="inline-block w-xs">State:</strong> Ukraine</li>
                                                                    <li><strong class="inline-block w-xs">Phone:</strong> 069 654 5662</li>
                                                                    <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;">john.douey@gmail.com</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

                                                        </div>
                                                        <!-- /row -->

                                                        <!-- row -->
                                                        <div class="row b-t pt-20">

                                                            <!-- col -->
                                                            <div class="col-md-3 b-r">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Order Details</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong>ID:</strong> <a href="javascript:;">35651</a></li>
                                                                    <li>January 29, 2015 at 16:58</li>
                                                                    <li>John Douey</li>
                                                                    <li>Ukraine</li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-6 b-r">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">
                                                                    Address
                                                                    <a class="btn btn-default btn-rounded-20 btn-xs pull-right" href="javascript:;"><i class="fa fa-pencil"></i></a>
                                                                </p>

                                                                <!-- col -->
                                                                <div class="col-md-6">
                                                                    <ul class="list-unstyled text-default lt mb-20">
                                                                        <li>John Douey</li>
                                                                        <li>Vajnorska 512</li>
                                                                        <li>Bratislava, Bratislava 1</li>
                                                                        <li>811 09</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /col -->

                                                                <!-- col -->
                                                                <div class="col-md-6">
                                                                    <ul class="list-unstyled text-default lt mb-20">
                                                                        <li>john.douey@gmail.com</li>
                                                                        <li>655 169 4599</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /col -->

                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-3">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Delivery &amp; Payment</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong>Delivery:</strong> Pick-Up</li>
                                                                    <li><strong>Payment:</strong> Cash</li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

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
                                                            <table class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>Payment ID</th>
                                                                    <th>Payment Note</th>
                                                                    <th>Payment Date</th>
                                                                    <th>Status</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:;">201500156</a></td>
                                                                    <td>Payment received for invoice 201500156</td>
                                                                    <td>Jan 27, 2015</td>
                                                                    <td><span class="label label-success">Received</span></td>
                                                                    <td class="ng-binding">$264.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">201500156</a></td>
                                                                    <td>Payment request sent for invoice 201500156</td>
                                                                    <td>Jan 26, 2015</td>
                                                                    <td><span class="label label-default">Sent</span></td>
                                                                    <td class="ng-binding">$264.00</td>
                                                                </tr>
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

                                    <!-- tab in tabs -->
                                    <div id="notes" class="tab-pane" role="tabpanel">



                                        <!-- row -->
                                        <div class="row">
                                            <!-- col -->
                                            <div class="col-md-3">

                                                <!-- tile -->
                                                <section class="tile tile-simple">

                                                    <!-- tile body -->
                                                    <div class="tile-body">

                                                        <header class="mb-20">
                                                            <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                            <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                                        </header>

                                                        <h4 class="mt-10">This is Note</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->
                                            </div>
                                            <!-- /col -->

                                            <!-- col -->
                                            <div class="col-md-3">

                                                <!-- tile -->
                                                <section class="tile tile-simple">

                                                    <!-- tile body -->
                                                    <div class="tile-body">

                                                        <header class="mb-20">
                                                            <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                            <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                                        </header>

                                                        <h4 class="mt-10">This is Note</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->
                                            </div>
                                            <!-- /col -->

                                            <!-- col -->
                                            <div class="col-md-3">

                                                <!-- tile -->
                                                <section class="tile tile-simple">

                                                    <!-- tile body -->
                                                    <div class="tile-body">

                                                        <header class="mb-20">
                                                            <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                            <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                                        </header>

                                                        <h4 class="mt-10">This is Note</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->
                                            </div>
                                            <!-- /col -->

                                            <!-- col -->
                                            <div class="col-md-3">

                                                <!-- tile -->
                                                <section class="tile tile-simple">

                                                    <!-- tile body -->
                                                    <div class="tile-body">

                                                        <header class="mb-20">
                                                            <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                            <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                                        </header>

                                                        <h4 class="mt-10">This is Note</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->
                                            </div>
                                            <!-- /col -->

                                            <!-- col -->
                                            <div class="col-md-3">

                                                <!-- tile -->
                                                <section class="tile tile-simple">

                                                    <!-- tile body -->
                                                    <div class="tile-body">

                                                        <header class="mb-20">
                                                            <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                            <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                                        </header>

                                                        <h4 class="mt-10">This is Note</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->
                                            </div>
                                            <!-- /col -->

                                            <!-- col -->
                                            <div class="col-md-3">

                                                <!-- tile -->
                                                <section class="tile tile-simple">

                                                    <!-- tile body -->
                                                    <div class="tile-body">

                                                        <header class="mb-20">
                                                            <span class="text-sm text-default lt">Created at: 26 Jan, 2015</span>
                                                            <span class="pull-right text-sm text-default lt">ID: 266946</span>
                                                        </header>

                                                        <h4 class="mt-10">This is Note</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->
                                            </div>
                                            <!-- /col -->

                                            <!-- col -->
                                            <div class="col-md-3">

                                                <!-- tile -->
                                                <section class="tile tile-simple no-bg">

                                                    <!-- tile body -->
                                                    <div class="tile-body p-0">

                                                        <a class="tile-button bg-white" href="javascript:;"><i class="fa fa-plus"></i> Add Note</a>

                                                    </div>
                                                    <!-- /tile body -->

                                                </section>
                                                <!-- /tile -->
                                            </div>
                                            <!-- /col -->

                                        </div>
                                        <!-- /row -->



                                    </div>

                                    <!-- tab in tabs -->
                                    <div id="historyTab" class="tab-pane" role="tabpanel">





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
                                                            <div class="col-md-9">
                                                                <p class="text-default lt">Created: January 29, 2015 at 16:58</p>
                                                                <p class="text-uppercase text-strong mt-40 mb-0 custom-font">Status</p>
                                                                <h3 class="text-uppercase text-success mt-0 mb-20">Completed</h3>
                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-3">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Customer</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong class="inline-block w-xs">Name:</strong> John Douey</li>
                                                                    <li><strong class="inline-block w-xs">State:</strong> Ukraine</li>
                                                                    <li><strong class="inline-block w-xs">Phone:</strong> 069 654 5662</li>
                                                                    <li><strong class="inline-block w-xs">Email:</strong> <a href="javascript:;">john.douey@gmail.com</a></li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

                                                        </div>
                                                        <!-- /row -->

                                                        <!-- row -->
                                                        <div class="row b-t pt-20">

                                                            <!-- col -->
                                                            <div class="col-md-3 b-r">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Order Details</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong>ID:</strong> <a href="javascript:;">35651</a></li>
                                                                    <li>January 29, 2015 at 16:58</li>
                                                                    <li>John Douey</li>
                                                                    <li>Ukraine</li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-6 b-r">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">
                                                                    Address
                                                                    <a class="btn btn-default btn-rounded-20 btn-xs pull-right" href="javascript:;"><i class="fa fa-pencil"></i></a>
                                                                </p>

                                                                <!-- col -->
                                                                <div class="col-md-6">
                                                                    <ul class="list-unstyled text-default lt mb-20">
                                                                        <li>John Douey</li>
                                                                        <li>Vajnorska 512</li>
                                                                        <li>Bratislava, Bratislava 1</li>
                                                                        <li>811 09</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /col -->

                                                                <!-- col -->
                                                                <div class="col-md-6">
                                                                    <ul class="list-unstyled text-default lt mb-20">
                                                                        <li>john.douey@gmail.com</li>
                                                                        <li>655 169 4599</li>
                                                                    </ul>
                                                                </div>
                                                                <!-- /col -->

                                                            </div>
                                                            <!-- /col -->

                                                            <!-- col -->
                                                            <div class="col-md-3">
                                                                <p class="text-uppercase text-strong mb-10 custom-font">Delivery &amp; Payment</p>
                                                                <ul class="list-unstyled text-default lt mb-20">
                                                                    <li><strong>Delivery:</strong> Pick-Up</li>
                                                                    <li><strong>Payment:</strong> Cash</li>
                                                                </ul>
                                                            </div>
                                                            <!-- /col -->

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
                                                            <table class="table table-hover table-striped">
                                                                <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Desription</th>
                                                                    <th>Date</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr>
                                                                    <td><a href="javascript:;">1</a></td>
                                                                    <td>Order Created</td>
                                                                    <td>Jan 20, 2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">2</a></td>
                                                                    <td>Order Received</td>
                                                                    <td>Jan 20, 2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">2</a></td>
                                                                    <td>Order Shipped</td>
                                                                    <td>Jan 21, 2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">2</a></td>
                                                                    <td>Invoice Created</td>
                                                                    <td>Jan 21, 2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">2</a></td>
                                                                    <td>Invoice Sent</td>
                                                                    <td>Jan 21, 2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">2</a></td>
                                                                    <td>Payment Received</td>
                                                                    <td>Jan 23, 2015</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><a href="javascript:;">2</a></td>
                                                                    <td>Order Completed</td>
                                                                    <td>Jan 23, 2015</td>
                                                                </tr>
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
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->














