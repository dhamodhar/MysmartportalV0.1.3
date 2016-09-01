<link href="<?php echo base_url()?>assets/progressbar/demo.css" rel="stylesheet"/>   
 <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-6 col-xs-12 xs-mb-10">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Assets No Contract</a>
                                </li>

<li class="information-btn">
<div  rel="tooltip" data-placement="left" class="btn btn-default  bg-none  btn-xs  pull-right  ml-10 col-md-1"    data-toggle="popover"    data-html="true"   data-title="<a href='#' class='close' data-dismiss='alert'>×</a>

<div class='line-hieght-22'>You may search by Serial Number or Contract Number<br/> <br/><span class='red'>Note:</span> You may search Asset Inventory using dates up to 1 year, if you want to get data for more than 1 year, please contact Lowry </div>

<div data-toggle='collapse' data-target='#demo1' class='accordion-toggle float-right'><button onclick='showDetails1()' class='btn btn-primary btn-xs'>More</button></div>
<div class='hiddenRow'>
 <div class='level3 accordian-body collapse' id='demo1'>
                     <ul>
<li><strong>No Contract</strong></li>
<li>Please navigate to Lowry Smart Portal link and login with Your user credentials.</li>
<li>Once logged in, on the left hand side menu user can find Asset Inventory tab as the sixth option</li>
<li>Click on ‘Asset Inventory’ to expand</li>
<li>Click on ‘No Contract’ to open the corresponding page</li>
<li><img src='http://lowrysmartportal.com/assets/images/no-contracts-img.jpg'/></li>
<li>The list of all No contracts will be displayed in a table.</li>
<li class='blue-bold'>Functionality</li>
<li>Users can perform various functionalities provided in the No Contract page for ease of use and access,  They are </li>
<li class='blue-bold'> No Contracts Search</li>
<li>User can search No Contract records by using the functionality </li>

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
</ul>


 

                        
                    </div>
">
<i class="fa fa-info-circle"></i>
</div> </div>
</li>
                            
                            </ul>
                            
                        </div>
<div class="col-md-6 cps " id="allbtns"> 
<input type="button" class="btn btn-primary" name="save" id="save" onclick="saveexcel()" value="Save All">
<div id="tableTools"></div>
<div style="color:green;display:none;" id="copymsg">Table data has been saved to clipboard.</div>
<div style="color:green;display:none;" id="savemsg">All entries are being saved. Please don't close until it is completed.</div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">

                        
                        <!-- row -->
                        <div>
                            <!-- col -->
                            <div class="col-md-12 xs-nopadding">




                                <!-- tile -->
                                <section class="tile padding-top-20">
<div class="col-md-12 no-padding">

  <div class="col-md-2">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Culumn</label>
											
											<select name="columntype" id="columntype" class="form-control" onchange="displyDate(this.value)">
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
                 <div id="date" style="display:none;">
                                        <!-- col -->
                                      <div class="col-md-2">

                                             
                                           <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="from"  id="from" class="form-control " placeholder="From">
<span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>


                                                
                                               
                                            </div>
                                        </div>
                                        <!-- /col -->
                                         <!-- col -->
                                      <div class="col-md-2">
                                            
                                              <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="to" id="to"  class="form-control " placeholder="To">
<span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                              
                                            </div>
                                        </div>
										</div>
                                        <!-- /col -->
                                        <div class="col-md-2">   <button class="btn btn-blue" onclick="searchbydates()"><i class="fa fa-search"></i></button></div>
                                       </div>
									
  
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

<button class="btn btn-primary btn-xs load-buts" id="ldmr" onclick="loadmore()" value="Load More">Load More</button>
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

<input type="hidden" name="count1" id="count1" value="25">




                    </div>
                    <!-- /page content -->

                </div>

 <!--Feedback form-->

<div style="margin-top: -243.5px; top: 50%; display: block; right: -462px;" id="mrova-feedback">
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

