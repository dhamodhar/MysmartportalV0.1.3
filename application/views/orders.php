   <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">

            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-8">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Orders & Invoices</a>
                                </li>
                                
                            </ul>
                            
                        </div>
<div class="col-md-1">  <button class="btn btn-primary mb-10" data-toggle="modal" data-target="#splash" data-options="splash-2 splash-ef-11">Help</button></div>
<div class="col-md-3"> <div id="tableTools"></div>


 <button type="button" class="btn btn-primary  btn-xs  pull-right mt-5" data-container="body" data-toggle="popover" data-placement="left" data-content="You may search by order id / invoice number. You may search between order dates. You may use both.

Note: You may search orders & invoices using dates up to 1 year, if you want to get data for more than 1 year, please contact Lowry">
                                       <i class="fa fa-info-circle"></i>
                                    </button>


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

                                             
                                            <div class="input-group datepicker" data-format="L">
                                                <input type="text" name="from"  id="from" class="form-control " placeholder="From">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                         </div>
                                        </div>
                                        <!-- /col -->
                                         <!-- col -->
                                        <div class="col-md-2">
                                            
                                            <div class="input-group datepicker" data-format="L">
                                                <input type="text" name="to"  id="to" class="form-control " placeholder="To">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        <!-- /col -->
                                         <button class="btn" onclick="searchbydates()"><i class="fa fa-search" onclick="searchbydates()"></i></button>


                                  


                                    <!-- tile body -->
                                    <div class="tile-body">
                                       
                                        <div class="table-responsive">
                                        <div class="row">
                                        <div class="col-md-12 mb-20"><div id="tableTools"></div></div>
                                        <div class="col-md-6"><div id="colVis"></div></div>
                                        </div>
                                            <table class="table table-striped table-hover table-custom" id="orders-list">
                                                <thead>
                                                <tr>
                                                    
                                                    <th style="width:180px;">Order&nbsp;Number</th>
                                                    <th style="width:200px;" class="active">Order&nbsp;Date</th>
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
															
											<button class="btn btn-primary" onclick="loadmore()" value="Load More">Load More</button>

                                        </div>

                                    </div>
 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
									
                                    <!-- /tile body -->

                                </section>
                                <!-- /tile -->
<input type="hidden" name="count" id="count" value="25">
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

 <div class="modal splash fade" id="splash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                      
                    </div>
                    <div class="modal-body level3">
                     <ul>
<li><strong>Orders & Invoices</strong></li>
<li><img src="http://lowrysmartportal.com/assets/images/orders-img.jpg"/></li>
<li>Please navigate to Lowry Smart Portal link and login with Your user credentials.</li>
<li>Once logged in, on the left hand side menu User can find Orders & Invoices tab as the third option.</li>
<li>Click on "Orders & Invoices" to expand.</li>
<li>Click on the first option "Orders & Invoices" to display orders & invoices page.</li>
<li>The list of all orders & invoices will be displayed in a table.</li>
<li class="blue-bold">Functionality</li>
<li>User can perform various functionalities provided in the orders & invoices page for ease of use and access. They are,</li>
<li class="blue-bold">Order & Invoice Search</li>
<li>User can search orders & invoices up to a span of past one year by using this functionality. </li>
<li>User can use anyone option or two combinations  or all of these,
<ul><li>Search by Order ID.</li> <li>Search by Invoice number.</li> <li>Search between dates.</li></ul>
</li>


<li style="width:49%;display:inline-block;" class="blue-bold">
Search by Order ID<br/><br/>
<table  border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" bgcolor="#338cc2"><strong>S.No.</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Input</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Expected Result</strong></th>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">1</td>
    <td align="left" bgcolor="#E8E8E8">Order  ID</td>
    <td align="left" bgcolor="#E8E8E8">Order  Number</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Order  Date</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Customer  PO</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Invoice</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Order  Amount</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Shipping  City / State</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Status</td>
  </tr>
</table>
</li>

<li style="width:49%;display:inline-block;" class="blue-bold">
Search by Invoice number<br/><br/>

<table  border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" bgcolor="#338cc2"><strong>S.No.</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Input</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Expected Result</strong></th>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">1</td>
    <td align="left" bgcolor="#E8E8E8">Invoice Number</td>
    <td align="left" bgcolor="#E8E8E8">Order  Number</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Order  Date</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Customer  PO</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Invoice</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Order  Amount</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Shipping  City / State</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Status</td>
  </tr>
</table>
</li>


<li style="width:49%;display:inline-block;" class="blue-bold">
Search between dates<br/><br/>

<table  border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" bgcolor="#338cc2"><strong>S.No.</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Input</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Expected Result</strong></th>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">1</td>
    <td align="left" bgcolor="#E8E8E8">From Date</td>
    <td align="left" bgcolor="#E8E8E8">Order  Number</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">To Date</td>
    <td align="left">Order  Date</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Customer  PO</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Invoice</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Order  Amount</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Shipping  City / State</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Status</td>
  </tr>
</table>
</li>

<li style="width:49%;display:inline-block;" class="blue-bold">
Search by combination of order id & invoice number<br/><small>pre-conditions: Order id & Invoice number must match</small><br/><br/>

<table  border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr>
    <th align="left" bgcolor="#338cc2"><strong>S.No.</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Input</strong></th>
    <th align="left" bgcolor="#338cc2"><strong>Expected Result</strong></th>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">1</td>
    <td align="left" bgcolor="#E8E8E8">Order Id</td>
    <td align="left" bgcolor="#E8E8E8">Order  Number</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">To Date</td>
    <td align="left">Invoice Number</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Customer  PO</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Invoice</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Order  Amount</td>
  </tr>
  <tr>
    <td align="left">&nbsp;</td>
    <td align="left">&nbsp;</td>
    <td align="left">Shipping  City / State</td>
  </tr>
  <tr>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">&nbsp;</td>
    <td align="left" bgcolor="#E8E8E8">Status</td>
  </tr>
</table>
</li>





</li>
</ul>   

                        
                    </div>
                    <div class="modal-footer">
                     <button class="btn btn-default btn-border" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>


