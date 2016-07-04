       

		 <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-6">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Assets</a>
                                </li>
 <li class="information-btn">
<div  rel="tooltip" data-placement="left" class="btn btn-default  bg-none  btn-xs  pull-right  ml-10 col-md-1"    data-toggle="popover"    data-html="true"   data-title="<a href='#' class='close' data-dismiss='alert'>×</a>

<div class='line-hieght-22'>You may search by Serial Number or Contract Number<br/> <br/><span class='red'>Note:</span> You may search Asset Inventory using dates up to 1 year, if you want to get data for more than 1 year, please contact Lowry </div>

<div data-toggle='collapse' data-target='#demo1' class='accordion-toggle float-right'><button onclick='showDetails1()' class='btn btn-primary btn-xs'>More</button></div>
<div class='hiddenRow'>
 <div class='level3 accordian-body collapse' id='demo1'>
                     <ul>
<li><strong>All Assets</strong></li>
<li>Please navigate to Lowry Smart Portal link and login with Your user credentials.</li>
<li>Once logged in, on the left hand side menu User can find asset inventory tab as the sixth option.</li>
<li>Click on 'Asset Inventory' to expand.</li>
<li>Click on the fifth option 'All Assets' to display All Assets page.</li>
<li><img src='http://lowrysmartportal.com/assets/images/all-assets-img.jpg'/></li>
<li>The list of all assets will be displayed in a table.</li>
<li class='blue-bold'>Functionality</li>
<li>Users can perform various functionalities provided in the All Assets page for ease of use and access,  They are </li>
<li class='blue-bold'>All Assets Search:</li>
<li>User can search All Assets records by using the functionality</li>


<li>User can use any one option below for search
<ul class='sub-he'>
<li>Serial Number</li>
<li>Contract Number</li>
</ul>
</li>



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
<div class="col-md-6 cps"> 
<input type="button" class="btn btn-primary" name="save" id="save" onclick="saveexcel()" value="Save All">
<div id="tableTools"></div>

<div style="color:green;display:none;" id="copymsg">Table data has been saved to clipboard.</div>
<div style="color:green;display:none;" id="savemsg">All entries are being saved. Please dont close until it is completed.</div>


</div>

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

<div class="col-md-12 no-padding">
 <div class="col-md-2">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Culumn</label>
											
											<select name="columntype" id="columntype" class="form-control">
											<option>Select Search Parameter</option>
											<option>Serial Number</option>
											<option>Contract Number</option>										
											
											</select>
                                           <!-- <input type="text" name="invoice_number" id="invoice_number" class="form-control" id="exampleInputEmail2" placeholder="Search by Invoice Number">   
-->
											
  </div></div>
                                     <div class="col-md-2" id="keyvalue" style="display:block">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search</label>
                                            <input type="text" name="serial_no" id="serial_no" class="form-control"  placeholder="Enter Details">   
								
  </div></div>
                                     
                                        
                                     
                                     
                                     <div class="col-md-1"> <button class="btn btn-blue" onclick="searchbydates()"><i class="fa fa-search btn-blue"></i></button></div> 

 
                                        




									
  
           
 		

 <div class="col-md-3 no-paddingf float-right" style="display:none;">  

<div style="cursor: pointer; position: absolute; right: 162px;top:62px;"><div class="shadow"></div>
<div class="pulse"></div>
<div class="pin-wrap"><div class="pin"></div>
</div>
</div>
<a class="btn btn-primary mb-10 float-right" href="<?php echo base_url()?>index.php/welcome/assetsmap/<?php echo $c_number;?>" target="_self">
View Assets in Map</a> 
</div> 
 
  
                                       
                                       
                                        </div>
<div class="table-responsive active-page">

<div class="row"> <div class="col-md-12" style="line-height:25px;background:#d6e8f3;"> This page displays assets that are under contract and under warranty.</div> </div>


<div class="col-md-2 pull-right active-page-location">
<div class="form-group pull-right">
                                            <label class="sr-only" for="exampleInputEmail2">Search</label>
 <select class="form-control" name="user_status" id="user_status" onchange="getdetails_by_location(this.value)">
 <option value="All">Select Location</option>
 <option value="All">All</option>

 <?php for($i=0;$i<sizeOf($locations);$i++){ ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].",".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
 </select>
 </div></div>
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
													<th style="width:100px;" class="active">End Date</th> 
												        <th style="width:100px;">Status</th>
                                                                                                      
																										
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
											
											

											
											
											
											
                                        </div>
<button class="btn btn-primary btn-xs  load-buts" onclick="loadmore()" value="Load More">Load More</button>
</div>

                                    </div>  </div>
									 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"><br><span style="color: #418bca;
    margin-left: -139px;
    font-size: 17px;
    font-weight: bold;">Data may take a while to load depending on amount of records</span></div>
									 
									 		 <div class="loading-progress" id="progress" style="width: 38% !important;
    margin-left: 24%;display:block"></div>

                                    <!-- /tile body -->
									
  
                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->

<input type="hidden" name="count1" id="count1" value="1000">




                    </div>
                    <!-- /page content -->

                </div>

<!--Feedback form-->

<div style="margin-top: -243.5px; top: 50%; display: block; right: -462px;z-index:999;" id="mrova-feedback">
		<div id="mrova-contact-thankyou" style="display: none;">
			Thank you.  We'hv received your feedback.
		</div>
		<div id="mrova-form">
			<form id="mrova-contactform" action="<?php echo base_url()."index.php/welcome/savefeedback"?>" method="post">
				<ul>
<li><h2 class="mt-10">Feedback </h2></li>
					<li>
						<label for="mrova-name">Your Name*</label> <input name="first_name_req" class="required" id="first_name_req" value="<?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname');?>" type="text">
					</li>
					<li>
						<label for="mrova-email">Email*</label> <input name="username_req" class="required" id="username_req" value="<?php echo $this->session->userdata('email')?>" type="text">
					</li>
<li> <label for="mrova-name">Select Type*</label>
<select name="bus_name_req" id="bus_name_req" aria-controls="orders-list" class="form-control input-sm">
<option value="">--Select Type--</option>
<?php 
foreach($feedback as $feedbackdata){
?>
<option><?php echo $feedbackdata->component_name; ?></option>

<?php } ?>
</select>
</li>
					<li>
						<label for="mrova-message">Message*</label>
						<textarea class="required" id="datauser" name="datauser" rows="5" cols="30"></textarea>
					</li>
<li><input type="submit" value="Send" name="feedbacksubmit" id="feedbacksubmit"></li>
				</ul>
				
			</form>
		</div>
		<div style="margin-top: -84px; top: 50%;" id="mrova-img-control"></div>
	</div>

<!-- end feed back -->
                
            </section>
            <!--/ CONTENT -->



        </div>
        <!--/ Application Content -->














