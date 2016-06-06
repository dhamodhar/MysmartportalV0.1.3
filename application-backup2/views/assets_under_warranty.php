            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content"  class="header-bg small-header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-9" >

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Assets</a>
                                </li>

  <li class="information-btn">
<div  rel="tooltip" data-placement="left" class="btn btn-default  bg-none  btn-xs  pull-right  ml-10 col-md-1"    data-toggle="popover"    data-html="true"   data-title="<a href='#' class='close' data-dismiss='alert'>×</a>

<div class='line-hieght-22'>You may search by order id / invoice number. You may search between order dates. You may use both.<br/> <br/><span class='red'>Note:</span> You may search orders & invoices using dates up to 1 year, if you want to get data for more than 1 year, please contact Lowry </div>

<div data-toggle='collapse' data-target='#demo1' class='accordion-toggle float-right'><button onclick='showDetails1()' class='btn btn-primary btn-xs'>More</button></div>
<div class='hiddenRow'>
 <div class='level3 accordian-body collapse' id='demo1'>
                     <ul>
<li><strong>Under Warranty</strong></li>
<li>Please navigate to Lowry Smart Portal link and login with Your user credentials.</li>
<li>Once logged in, on the left hand side menu User can find service contracts tab as the sixth option.</li>
<li>Click on 'Asset Inventory' to expand.</li>
<li>Click on the third option 'Under Warranty' to display contracts under warranty page.</li>
<li><img src='http://lowrysmartportal.com/assets/images/under-warranty-img.jpg'/></li>
<li>The list of all assets under warranty will be displayed in a table.</li>
<li class='blue-bold'>Functionality</li>
<li>User can perform various functionalities provided in the under warranty page for ease of use and access. They are, </li>



<li class='blue-bold'>Copy, Print and save </li>
<li><strong>Copy</strong></li>
<li>User can copy all the records and paste in any desired location User wish to and the data will maintain its column and row integrity.</li>
<li>How to check:Click on copy and paste it in any desired location.</li>
<li><strong>Print</strong></li>
<li>User can print all the records from Your browser.</li>
<li>How to check: Click on print, a new browser window is opened with all the table details.</li>
<li><strong>Save</strong></li>
<li>User can save the records to the following formats,</li>
<li>CSV</li>
<li>Excel</li>
<li>PDF</li>
<li>How to check: Click on Save and select the format in which User would like to save the records. A file will be generated with the selected format and request to download the file will be shown automatically.</li>

<li class='blue-bold'>Load more</li>
<li>By default Lowry smart portal displays only 25 current records, User can load 25 more records each time User click on 'Load more' button provided under the table. User can load records until User have no more records left to load.</li>
<li>How to check: Click on 'Load more' button at the bottom of the table. If there are more records then the records will be fetched and appended to the existing table, User can find the total number of records count increase with count of 25 each time User click on 'Load more' and count is shown at the bottom of the table until there are no records left to show.</li>

<li class='blue-bold'>New Service Request</li>
<li>User can create a new service request for Your device right from the Under warranty page.</li>
<li>Click on the 'New Service Request' icon and User will be navigated to a page with service request form which automatically fetches the device information based on serial number of the corresponding row where the Service Request icon is clicked.</li>
<li>The application will fetch the device details and displays it in a form.</li>
<li>User can verify the device information and provide incident information along with User contact information and submit the form.</li>
<li>User will receive a mail notification with the details submitted. The Lowry team will validate the information and perform further operations. </li>

</ul>




 

                        
                    </div>
">
<i class="fa fa-info-circle"></i>
</div> </div>
</li>

</li>                          
                            </ul>
                            
                        </div>
<div class="col-md-3 cps"> <div id="tableTools"></div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">

                        
                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12 xs-nopadding">




                                <!-- tile -->
                                <section class="tile padding-top-5">

  <div class="col-md-12 no-padding">


                                    <!-- tile body -->
                                    <div class="tile-body">

<div class="col-md-12 no-padding"> </div>
									
  
                                        <div class="table-responsive">
	
 
   <div class="row">
                                       
                                        <div class="col-md-6" style="display:none"><div id="colVis"></div></div>
                                        </div>
                                            <table class="table table-striped table-hover table-custom" id="assets-list">
                                                <thead>
                                                <tr>
                                                 <th style="width:100px;" class="no-sort">Service Request</th>
                                                 <th style="width:100px;">Serial Number</th>  
                                                    <th style="width:100px;">Part Number</th> 
													<th style="width:100px;">Part Description</th> 
													<th style="width:100px;">Device Type</th> 
													<th style="width:100px;">Contract Type</th>
                                                     <th style="width:100px;">Contract Number</th> 
													
													<th style="width:100px;">Start Date</th>
													<th style="width:100px;">End Date</th>
												       <th style="width:100px;">Status</th>
                                                                                                        					
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
</div> 
											
											<button class="btn btn-primary btn-xs load-buts" onclick="loadmore()" value="Load More">Load More</button>

											
											
											
											
                                        

</div>

                                    </div>
									 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                    <!-- /tile body -->
									
  
                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->

<input type="hidden" name="count1" id="count1" value="25">




                    </div>
                    <!-- /page content -->

                </div>
                
            </section>
            <!--/ CONTENT -->



        </div>
        <!--/ Application Content -->

