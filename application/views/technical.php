<style media="screen" type="text/css">
@-webkit-keyframes myanimation {
  from {
    left: 0%;
  }
  to {
    left: 50%;
  }
}
h1 {
  text-align: center;
  font-family: 'PT Sans Caption', sans-serif;
  font-weight: 400;
  font-size: 20px;
  padding: 20px 0;
  color: #777;
}

.checkout-wrap {
  color: #444;
  font-family: 'PT Sans Caption', sans-serif;
  margin: 40px auto;
  max-width: 1200px;
  position: relative;
}

ul.checkout-bar li {
  color: #ccc;
  display: block;
  font-size: 16px;
  font-weight: 600;
  padding: 14px 20px 14px 80px;
  position: relative;
}
ul.checkout-bar li:before {
  -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
  box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
  background: #ddd;
  border: 2px solid #FFF;
  border-radius: 50%;
  color: #fff;
  font-size: 16px;
  font-weight: 700;
  left: 20px;
  line-height: 37px;
  height: 35px;
  position: absolute;
  text-align: center;
  text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
  top: 4px;
  width: 35px;
  z-index: 999;
}
ul.checkout-bar li.active {
  color: #8bc53f;
  font-weight: bold;
}
ul.checkout-bar li.active:before {
  background: #8bc53f;
  z-index: 99999;
}
ul.checkout-bar li.visited {
  background: #ECECEC;
  color: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li.visited:before {
  background: #57aed1;
  z-index: 99999;
}
ul.checkout-bar li:nth-child(1):before {
  content: "1";
}
ul.checkout-bar li:nth-child(2):before {
  content: "2";
}
ul.checkout-bar li:nth-child(3):before {
  content: "3";
}
ul.checkout-bar li:nth-child(4):before {
  content: "4";
}
ul.checkout-bar li:nth-child(5):before {
  content: "5";
}
ul.checkout-bar li:nth-child(6):before {
  content: "6";
}
ul.checkout-bar a {
  color: #57aed1;
  font-size: 16px;
  font-weight: 600;
  text-decoration: none;
}

@media all and (min-width: 800px) {
  .checkout-bar li.active:after {
    -webkit-animation: myanimation 3s 0;
    background-size: 35px 35px;
    background-color: #8bc53f;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content: "";
    height: 15px;
    width: 100%;
    left: 50%;
    position: absolute;
    top: -50px;
    z-index: 0;
	border-radius:15px;
  }

  .checkout-wrap {
    margin: 80px auto;
  }

  ul.checkout-bar {
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    background-size: 35px 35px;
    background-color: #EcEcEc;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.4) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.4) 50%, rgba(255, 255, 255, 0.4) 75%, transparent 75%, transparent);
    border-radius: 15px;
    height: 15px;
    margin: 0 auto;
    padding: 0;
    position: absolute;
    width: 100%;
  }
  ul.checkout-bar:before {
    background-size: 35px 35px;
    background-color: #57aed1;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);

    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    border-radius: 15px;
    content: " ";
    height: 15px;
    left: 0;
    position: absolute;
    width: 10%;
  }
  ul.checkout-bar li {
    display: inline-block;
    margin: 50px 0 0;
    padding: 0;
    text-align: center;
    width: 19%;
  }
  ul.checkout-bar li:before {
    height: 45px;
    left: 40%;
    line-height: 45px;
    position: absolute;
    top: -65px;
    width: 45px;
    z-index: 99;
  }
  ul.checkout-bar li.visited {
    background: none;
  }
  ul.checkout-bar li.visited:after {
    background-size: 35px 35px;
    background-color: #57aed1;
    background-image: -webkit-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    background-image: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0.2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0.2) 75%, transparent 75%, transparent);
    -webkit-box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    box-shadow: inset 2px 2px 2px 0px rgba(0, 0, 0, 0.2);
    content: "";
    height: 15px;
    left: 50%;
    position: absolute;
    top: -50px;
    width: 100%;
    z-index: 99;
  }
}

</style>

<script type="text/javascript">
function newservice()
{
document.getElementById("new_service_ticket").style.display='block';




}
</script> 
<script type="text/javascript">
function getallfields()
{

var tick_number = document.getElementById("serial_number").value;
if(tick_number == ""){

alert("please enter Serial Number");
}else{
document.getElementById("full_info_ticket").style.display='block';
}

}   

</script> 

<script type="text/javascript">
function cancel()
{
document.getElementById("new_service_ticket").style.display='none';
document.getElementById("service_btns").style.display='block';



}   

</script> 
	 <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">






            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                       <a href="<?php echo base_url()?>index.php/welcome/dashboard">
                            <img src="<?php echo base_url()?>assets/images/logo.png" class="img-responsive">
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                      <h3 class="sub-title">MySmart Portal</h3>
                


                      <ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a role="button" tabindex="0" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                        
                    </ul>

                          	
					
           


                   



                    <!-- Right-side navigation -->
                   
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->





            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                   
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        
                                        
                                        <!--/ NAVIGATION Content -->


                                    </div>
                                </div>
                            </div>
                            
                           
                            </div>
                        </div>

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->





                <!-- =================================================
                ================= RIGHTBAR Content ===================
                ================================================== -->
                
                <!--/ RIGHTBAR Content -->




            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">
<div class="page-core-dashboard">

                <div class="page page-dashboard">

                    <div class="pageheader technical-i information-btn">

                       
                        <h2 style="color:green;text-align-left;" color="green" align="left">
						
						<?php 
					
					
					if($country == "India"){
					@date_default_timezone_set("Asia/Kolkata");
					}else{
					@date_default_timezone_set("us/eastern");
					
					}
						
						if($country == "India")
						{
							$hour = date('H');
							
							
						}else
						{
							$hour = date('H');
							
						}
						
						
							//echo $hour;
							$dayTerm = "";
							if($hour < 12)
							{
							$dayTerm = "Morning";
							
							}else if($hour < 18)
							{
								$dayTerm = "Afternoon";
							
							}else if($hour < 23)
							{
							$dayTerm = "Evening";
							
							}else
							{
							$dayTerm = "Day";
							
							}
//$dayTerm = ($hour > 21) ? "Night" :($hour > 16) ? "Evening" : ($hour > 12) ? "Afternoon" : "Morning";
echo "Good " . $dayTerm;?>,&nbsp; <?php echo $this->session->userdata('firstname');?></h2>

<div  rel="tooltip"  data-placement="left" class="btn btn-default bg-none "    data-toggle="popover"    data-html="true"   data-title="<a href='#' class='close' data-dismiss='alert'>×</a>


<div class='line-hieght-22'>You may search by order id / invoice number. You may search between order dates. You may use both.<br/> <br/><span class='red'>Note:</span> You may search orders & invoices using dates up to 1 year, if you want to get data for more than 1 year, please contact Lowry </div>
<div data-toggle='collapse' data-target='#demo1' class='accordion-toggle float-right'><button onclick='showDetails1()' class='btn btn-primary btn-xs'>More</button></div>
<div class='hiddenRow'>
 <div class='level3 accordian-body collapse' id='demo1'>
                     <ul>
<li><strong>Technical Support</strong></li>
<li>The technical support page provides a snapshot of various services like,
<ul class='sub-he'>
<li>Open orders</li>
<li>Past due invoices</li>
<li>Upcoming service renewal contracts</li>
<li>Open tickets</li>
<li>End of service devices</li> </ul> </li>
<li>User can directly navigate to the above mentioned pages by clicking on the respective card to view the records.</li>
<li><img src='http://lowrysmartportal.com/assets/images/technical-img.jpg'></li>
<li>Other functionalities which User can perform from this page are,
<ul class='sub-he'>
<li>Create a New Service Request</li>
<li>View all service tickets status</li>
</ul>
</li>
<li class='blue-bold'>How to navigate</li>
<li>Please navigate to Lowry Smart Portal link and login with Your user credentials.</li>
<li>Once logged in, on the left hand side menu User can find Technical Support tab as the first option.</li>
<li>Click on 'Technical Support' menu button to navigate to the page.</li>
<li class='blue-bold'>Functionality</li>
<li class='blue-bold'>Snapshot / Quick navigation Cards </li>
<li class='blue-bold'>Open orders</li>
<li>If User have any open orders, the application will display a count of open orders on the card.
User can click on the card to view Your open orders.</li>

<li>How to check: Once User are in the Technical Support page, click on the 'Open Orders' card.
The application will navigate User to open orders page where User can find the list of open orders if there are any.
</li>
<li class='blue-bold'>Shipped orders</li>
<li>If User have any Shipped orders, the application will display a count of Shipped orders on the card.
Currently the application does not support the display of shipped orders.
</li>
<li class='blue-bold'>Past due invoices</li>
<li>If User have any past due invoices, the application will display a count of past due invoices on the card.</li>
<li>User can click on the card to view Your past due invoices.</li>
<li>How to check: Once User are in the Technical Support page, click on the 'Past due Invoices' card.</li>
<li>The application will navigate User to past due invoices page where User can find the list of past due invoices  if there are any.</li>

<li class='blue-bold'>Upcoming Service Renewal Contracts</li>
<li>If User have any service contracts about to expire in a span of 3 months, the application will display a count of those service contracts on the card.</li>
<li>User can click on the card to view Your count service contracts about to expire in a span of 3 months.</li>
<li>How to check: Once User are in the Technical Support page, click on the 'Upcoming Service Renewal Contracts' card.</li>
<li>The application will navigate User to upcoming service renewal contracts page where User can find the list of list of service contracts about to expire in a span of 3 months if there are any.</li>

<li class='blue-bold'>Open Tickets</li>
<li>If User have any open tickets, the application will display a count of the open tickets on the card.
Currently the application does not support the display of open tickets.
</li>

<li class='blue-bold'>End of  Service devices</li>
<li>If User have any devices that may be reaching 'End of Service', the application will display a count of those devices on the card.</li>
<li>Currently the application does not support the display of End of Service Devices. </li>

<li class='blue-bold'>New Service Request</li>
<li>User can create a new service request for Your device right from the Technical Support page.</li>
<li>Click on the 'New Service Request' button and User will be prompted to enter device serial number.</li>
<li>Please provide the device serial number and click on 'Next'.</li>
<li>The application will fetch the device details and displays it in a form.</li>
<li>User can verify the device information and provide incident information along with User contact information and submit the form.</li>
<li>User will receive a mail notification with the details submitted. The Lowry team will validate the information and perform further operations. </li>

<li class='blue-bold'>Service Tickets</li>
<li> Currently the application displays the list of all open service tickets in the Technical Support page under 'New Service Request' button</li>
<li>How to check: Once User are in the Technical Support page and if User have any open service tickets, the application will display the list of all open service tickets with specific details like,
<ul class='sub-he'>
<li>Service Request Number</li>
<li>Device Serial Number</li>
<li>Depot/On-site</li>
<li>Device Model</li>
<li>Device Location</li>
<li>Current status</li>
<li>Additional information</li>
<li>Last Activity Date</li>
</ul
</li>

<li>User can navigate by selecting a service ticket number by clicking on it and their respective details will be displayed. </li>
<li class='blue-bold'>How to view User profile information</li>
<li><img src='http://lowrysmartportal.com/assets/images/profile-img.jpg'></li>
<li>Please navigate to Lowry Smart Portal link and login with your user credentials.</li>
<li>On the right hand side top corner where your username is displayed, please click on the dropdown to view Your profile.</li>

</ul>

                        
                    </div>
">
<i class='fa fa-info-circle'></i>
</div> </div>




                   </div>


  <div class="col-md-12 mt-10" style="margin-top:10%">

                        <!-- col -->
                        <div class=" card-container col-lg-2 col-sm-6 col-sm-12">
                           
                               <a href="<?php echo base_url()?>index.php/welcome/open_orders" class="hvr-bounce-in"> <div class="front bg-greensea2" >

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-12 ">
 <i class="fa fa-folder-open fa-4x pl-10 mt-5 p-5 "></i><div class="text-elg text-strong mt-5 col-xs-5 float-right no-padding "><?php if(isset($openorders)) {echo $openorders;}else{echo "-";}?></div>
                                           
 
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-12 bg-s ">
                                           
                                            <span>Open Orders</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div></a>
                                
                            
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-2 col-sm-6 col-sm-12 ">
                           
                                 <a href="#" class="hvr-bounce-in"> <div class="front bg-blue2">

                                    <!-- row -->
                                    <div class="row ">
                                        <!-- col -->
                                        <div class="col-xs-12 ">
<i class="fa fa-truck fa-4x pl-10 mt-5 p-5"></i> <div class="text-elg text-strong mt-5 col-xs-5 float-right no-padding "><?php if(isset($shippedorders)) {echo $shippedorders;}else{echo "-";}?></div>
                                            
 
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-12 bg-s-2 ">
                                           
                                            <span>Shipped Orders</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div></a>
                                
                           
                        </div>
                        <!-- /col -->
						<!-- col -->
                        
<div class="card-container col-lg-2 col-sm-6 col-sm-12 " id="pastdue" style="display:block">
                            
                               <a href="<?php echo base_url()?>index.php/welcome/past_due_invoices" class="hvr-bounce-in"> <div class="front bg-or2" >

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-12">
 <img src="<?php echo base_url();?>assets/images/icons/past-invoice.png"/> <div class="text-elg text-strong mb-0 p-5 text-right pr-30	"><?php if(isset($pastdueinvoices)) {echo $pastdueinvoices;}else{echo "-";};?></div>
                                          


                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-12 bg-s-3 ">
                                           
                                            <span>Past Due Invoices</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                
                               
                            </div></a>
                        <!-- /col -->

                    </div>
                    <!-- /row -->

                        <!-- col -->
<div class="card-container col-lg-2 col-sm-6 col-sm-12 ">
                           
                                 <a href="<?php echo base_url()?>index.php/welcome/renew_service_contracts" class="hvr-bounce-in"> <div class="front bg-slategray2">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-12">
<img src="http://lowrysmartportal.com/assets/images/icons/contracts-icon-th.png"/>  <div class="text-elg text-strong mt-5 col-xs-5 float-right no-padding" id="ren_count"> 0 </div>
                                         
                                        
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-12 bg-s-4">
                                            
                                            <span>Upcoming Service Renewal Contracts</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div></a>
                                
                           
                        </div>                        

                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-2 col-sm-6 col-sm-12 ">
                         
                               <a href="#" class="hvr-bounce-in"> <div class="front bg-sky2">

                                    <!-- row -->
                                    <div class="row ">
                                        <!-- col -->
                                        <div class="col-xs-12">
 <img src="http://lowrysmartportal.com/assets/images/open-tick.png"> <div class="text-elg text-strong mt-5 col-xs-5 float-right no-padding"><?php echo @$opencases;?></div>
                                           
 
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-12 bg-s-5 ">
                                           
                                            <span>Open Tickets</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                
                               
                            </div></a>
                        </div>
                        <!-- /col -->

 <!-- col -->
                        
<div class="card-container col-lg-2 col-sm-6 col-sm-12 ">
                            
                               <a href="<?php echo base_url()?>index.php/welcome/assetsendoflife" class="hvr-bounce-in"> <div class="front bg-cranb">

                                    <!-- row -->
                                    <div class="row ">
                                        <!-- col -->
                                        <div class="col-xs-12">
    <i class="fa fa-mobile fa-44x pl-10 mt-5 p-5"></i> <div class="text-elg text-strong mt-5 col-xs-5 float-right no-padding "><?php if(isset($assetsendoflife)) {echo $assetsendoflife;}else{echo "-";};?></div>
                                        

                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-12 bg-s-6 ">
                                           
                                            <span>End of Service Devices</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                
                               
                            </div></a>
                        <!-- /col -->







                    </div>
                    <!-- /row -->







</div>
<div class="col-md-12" style="text-align: center; margin-top:30px; margin-left:5px; margin-right:5px;">
<h1 style="text-transform: uppercase;"><b>At your service</b></h1>
<h4 class="blink_me" >Our in-house experts are standing by 24/7 to not only solve technical issues, but to give you the advice and guidance you need to succeed online.</h4>

</div>

 



<!--<img src="/assets/service-lookup-2.jpg" alt="Service Lookup" style="width:100%; height:100%;">-->

<div class="col-md-12" style="margin-top:30px;">

<div class="col-md-3"><button onclick="newservice()" class="btn btn-primary mb-10" type="button" id="service_btns">New Service Request</button></div>


<div id="new_service_ticket" style="display:none;" class="col-md-12  ">
<div id="device-number" class="form-group col-md-2 col-sm-2 no-padding mr-10">
 <input type="test" name="serial_number" id="serial_number" class="form-control" placeholder="Device Serial Number*"> </div>


<div class="col-md-6 no-padding"><input type="button" name="getdetails" id="getdetails" class="btn btn-success mb-10 mr-10 float-left" value="Next" onclick="getallfields()"> <input type="button" name="getdetails" id="getdetails" class="btn btn-default mb-10 float-left" value="Cancel" onclick="cancel()" ></div>
  
</div>



</div>


<div class="row ">
<div class="col-md-12">

<?php 
if($msg != ""){
?>
<span style="color:green; font-size:19px;"><b>Your Service request is received sucessfully.</b></span>

<?php } ?>
<div class="service_bg" id="last_req" style="display:none">
 <div id="wait_device"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
<form name="new_service_req" action="<?php echo base_url()?>index.php/welcome/save_new_service_req" method="post">


  <div id="error_id" style="display:none; color:red">No Response - cannot process the data.</div>
 


<div id="full_info_ticket" style="display:none;">
<div class="col-md-12 service-request-heading">Device Information</div>

                                            <div class="form-group col-md-4">
                                                <label for="serial">Serial #* </label>
                                                <input type="text" required="" class="form-control" id="serial_no" name="serial_no" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>
                                            
                                            
                                               <div class="form-group col-md-4">
                                                <label for="serial">Type</label>
                                                <input type="text"  class="form-control" id="device_type" name="device_type" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>

<div class="form-group col-md-4">
                                                <label for="serial">Description</label>
                                                <input type="text"  class="form-control" id="descr" name="descr" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>

<div class="col-md-12"><hr class="line-dashed-ser"></div>


          <div class="col-md-12 service-request-heading">Contract Information</div>
                                  
                                             <div class="form-group col-md-4">
                                                <label for="serial">Contract #</label>
                                                <input type="text"  class="form-control" id="contract_id" name="contract_id" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>
                                            
                                             <div class="form-group col-md-4">
                                                <label for="serial">Expires</label>
                                                <input type="text"  class="form-control" id="contract_expiry_date" name="contract_expiry_date" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>
                                            
                                             <div class="form-group col-md-4">
                                                <label for="serial">Status</label>
                                                <input type="text"  class="form-control" id="contract_status" name="contract_status" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>

<div class="col-md-12"><hr class="line-dashed-ser"></div>

<div class="col-md-12 service-request-heading">Contact Information</div>
                                            
                                            <div class="form-group col-md-4">
                                                <label for="serial">Email*</label>
                                                <input type="email"  class="form-control" id="email" name="email" data-parsley-id="8466" required><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>
                                            
                                             <div class="form-group col-md-4">
                                                <label for="serial">Full Name*</label>
                                                <input type="text"  class="form-control" id="full_name" name="full_name" data-parsley-id="8466" required><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>
                                            
                                            <div class="form-group col-md-4">
                                                <label for="serial">Phone*</label>
                                                <input type="text"  class="form-control" id="phonenumber" name="phonenumber" data-parsley-id="8466" required><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>

<div class="col-md-12"><hr class="line-dashed-ser"></div>

<div class="col-md-12 service-request-heading">Device Location</div>
                                            
                                             <div class="form-group col-md-4">
                                                <label for="serial">Company</label>
                                                <input type="text"  class="form-control" id="company_name" name="company_name" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
                                            </div>
                                            
                                            <div class="form-group col-md-4">
                                                <label for="serial">Address</label>
 <textarea rows="4" placeholder="Street Address"  class="form-control" id="address_1" name="address_1" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul></textarea>
 <textarea rows="4" placeholder="Address Line 2"  class="form-control" id="address_2" name="address_2" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466"></ul></textarea>


<div class="form-inline">
 <div class="form-group" style="float:left; width:50%;"><input type="text" placeholder="City"  class="form-control" id="city" name="city" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466" style="width:100%;"></ul></div>

 <div class="form-group" style="float:right; width:50%;"><select tabindex="3"  name="state11" class="form-control" id="state11" data-parsley-id="8466" style="width:100%;">
                                                     <option value="" >select</option>
                                                     <option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Europe">Armed Forces Europe</option><option value="Armed Forces Pacific">Armed Forces Pacific</option>
     </select><ul class="parsley-errors-list" id="parsley-id-8466"></ul></div></div>
                             



 <input type="text" placeholder="ZIP Code"  class="form-control" id="zip" name="zip" data-parsley-id="8466" readonly style="width: 100%;"><ul class="parsley-errors-list" id="parsley-id-8466"></ul></div>

<div class="form-group col-md-4">
<label for="serial">Verify*</label>
                                                <label class="checkbox checkbox-custom">
                                                    <input type="radio" name="customRadio" id="customRadio" value="I confirm that the device location address is correct" onclick="get_addt_info(1)"><i></i> I confirm that the device location address is correct
                                                </label>

<label class="checkbox checkbox-custom">
                                                    <input type="radio" name="customRadio" id="customRadio" value="Select this option to update the device location address" onclick="get_addt_info(2)"><i></i> Select this option to update the device location address
                                                </label></div>

                                       
                                            
                <div class="col-md-12"><hr class="line-dashed-ser"></div>
                           
<div id="addt_info" style="display:none">
<div class="col-md-12 service-request-heading">Incident Information</div>
<div class="col-md-12 ">Incident Type</div>

                                                
                                                   

<div class="col-md-4">
<label class="checkbox checkbox-custom"><input type="radio" name="printer1" id="printer1"  value="Printer" onclick="open_printer_list()"><i></i> Printer</label> 
<label class="checkbox checkbox-custom"><input type="radio" name="printer1" id="printer1" value="Scanner" onclick="open_scanner_list()"><i></i> Scanner / Mobile Computer</label>
<label class="checkbox checkbox-custom"><input type="radio" name="printer1" id="printer1" value="Software" onclick="others()"><i></i> Software</label>
<label class="checkbox checkbox-custom"><input type="radio" name="printer1" id="printer1" value="Other" onclick="others()"><i></i> Other</label>
</div>



<div class="form-group col-md-3 " id="printer" style="display:none"> 
<label for="serial">Specify Printer Incident Type</label>
 <select  class="chosen-select" name="printer_type" id="printer_type"   style="width: 204px;" >
<option value="Paper Feed">Paper Feed</option>
<option value="Error Message">Error Message</option>
<option value="Poor Print Quality">Poor Print Quality</option>
<option value="Ribbon Is Tearing">Ribbon Is Tearing</option>
<option value="Calibration Error">Calibration Error</option>
<option value="Maintenance">Maintenance</option>
<option value="Other">Other</option>
</select><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
</div>

<div class="form-group col-md-3 " id="scanner" style="display:none"> 
<label for="serial">Specify Scanner / Mobile Computer Incident Type</label>
 <select  class="chosen-select" name="scaner_type" id="scaner_type" style="width: 204px;" >

<option value="Damaged">Damaged</option><option value="Keyboard Issue">Keyboard Issue</option><option value="No Power">No Power</option><option value="Communicate">Communicate</option><option value="Recharge Issue">Recharge Issue</option><option value="Other">Other</option>
</select><ul class="parsley-errors-list" id="parsley-id-8466"></ul>
</div>

<div class="col-md-6 "> </div>

<div class="form-group col-md-5 "> 
                                            <label for="message">Please Describe the Problem </label>
                                            <textarea required="" placeholder="Type your message" id="message" name="message" rows="6" class="form-control" data-parsley-id="2031"></textarea><ul class="parsley-errors-list" id="parsley-id-2031"></ul>
</div>
                                        
</div>

<div class="form-group col-md-12">  <button class="btn btn-warning mb-10 center-block" type="submit"  value="Submit"> Submit </button></div>
                                          
</div>
                                        </div>
										
  
<div class="tile-body example">
 <div class="row">
 <div class="col-md-12"  style="display:none">
<div class="row" id="ticket_info">

<div class="col-md-6">Opned: Dec 16, 2015</div>
 <div class="col-md-6">Opned: Dec 16, 2015</div>
<div class="col-md-6">Opned: Dec 16, 2015</div>
 <div class="col-md-6">Opned: Dec 16, 2015</div>
<div class="col-md-6">Opned: Dec 16, 2015</div>
 <div class="col-md-6">Opned: Dec 16, 2015</div>
<div class="col-md-6">Opned: Dec 16, 2015</div>
 <div class="col-md-6">Opned: Dec 16, 2015</div>
<div class="col-md-6">Opned: Dec 16, 2015</div>
 <div class="col-md-6">Opned: Dec 16, 2015</div>
                                                   
                                                
                                                
                                            </div>
                                        </div>
                                    </div>
  


<!--<iframe src="http://service.lowrysolutions.com/service-request-status-lookup/" width=100% height=400; border=0></iframe>-->



<div style="display:none" id="ticket1_info">

<div class="tile-body col-md-12">

<div class=" col-md-12">
<?php 
$ticket = explode(",",$ticket_info);
if(sizeOf($ticket)>1){
 ?>
<div  class="scroll_tabs_theme_light tabs2">
<?php 
for($i=0;$i<sizeOf($ticket);$i++){

?>
    <span><a data-toggle='tab' name="<?php echo $ticket[$i];?>" class="ticket_numbers"><?php echo $ticket[$i]; ?> </a></span>    
		
   <?php } ?>   

</div>

<?php }else{ ?>

No Service Tickets Found
<?php } ?>
</div>




    


    
    
    



 <!--<div id="wait11"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>-->
<div class="tab-content" id="all_ticket_info1">
  <div id="home" class="tab-pane fade in active">

<div style="width: 100%; border-top: 3px solid rgb(255, 117, 0); height: 0px; margin: 50px 0px;" class="aligncenter"></div>


<div id="tab1" class="service_request_information">
                <div style=" padding: 0px 0;word-wrap: break-word;">
                    <h4>
                        Service Request Search Results for: 
                        <span style="padding-top:5px;color:#57aed1">  </span> 
                    </h4>
                </div>
                    <ul style="padding-top:30px; text-align:left !important;" id="all_ticket_info">
                    <li><strong>Service Request Number:</strong> SV765364-1                             </li>
                    <li><strong>Device Serial Number:</strong> </li>
                    <li><strong>Depot/On-site:</strong> Depot</li>
                    <li><strong>Device Model:</strong> </li>
                    <li><strong>Device Location:</strong> 						                                            </li>
                    <li><strong>Current Status:</strong> Device Shipped for Repair</li>
                </ul>
                				
								
				
                 <div class="checkout-wrap" id="transit">
                    <ul class="checkout-bar">
                    <li class="previous visited">Request Created</li>
                    <li class="previous visited">Warranty Validation</li>
                    <li class="active">Device in Transit</li>
                    <li class="next">Repair in Progress</li>
                    <li class="">Request Complete</li>
                    </ul>
                    </div>
                                    <div style="border: medium none; width: auto; font-family: &quot;PT Sans Caption&quot;,sans-serif; font-weight: 400; font-size: 16px; color: rgb(102, 102, 102); word-wrap: break-word; display: block; padding-top: 100px; text-align: center; background: transparent none repeat scroll 0px 0px;">
                    <p style="text-align:center;"><b>Additional Information:</b></p>
                    <p></p>
                    <p><strong> Last Activity Date: </strong>
                    January 14, 2016 10:20:26 AM                    </p>
                    </div>
              </div>

    
  </div>




  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>
    <p>Some content in menu 1.</p>
  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>Menu 2</h3>
    <p>Some content in menu 2.</p>
  </div>
</div>


</div>



                   
<div >
<!--<li id="field_7_1" class="gfield gfield_contains_required field_sublabel_below field_description_below"><label class="gfield_label" for="input_7_1">Service Request Number<span class="gfield_required">*</span></label><div class="ginput_container">
                            <input name="ticket_number" id="ticket_number" type="text" value="" class="medium" tabindex="1"><input type="button" name="search" id="search" value="Search" onclick="getstatus()">
                        </div></li>-->
						
						</div>
						
						<div id="ticket_info"></div>


                  




                </div>
				
			
	</form>
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
                </div> </div> </div>
			
            </section>
            <!--/ CONTENT -->






        </div>
   <?php
								$count1 = 0;
                                foreach($user_notifications as $user_notificationsdatafinal)
								{	
									if($user_notificationsdatafinal->from_user_id != $this->session->userdata('userid')){
								if($user_notificationsdatafinal->read_status == 0)
								{
								$count1++;
								
								}
								}
								
                                }

if($count1>0){		
 foreach($user_notifications as $user_notificationsdata){
							if($user_notificationsdatafinal->from_user_id != $this->session->userdata('userid')){
								?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top:18%">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title custom-font">Notifications</h3>
                    </div>
                    <div class="modal-body">
                        You have <?php echo $count1; ?> Unread Messages.
                    </div>
                    <div class="modal-footer">
                       <a href="<?php echo base_url()?>index.php/welcome/viewmessage/<?php echo $user_notificationsdata->id;?>" role="button" tabindex="0" class="media"> <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c"><i class="fa fa-arrow-right"></i> Go</button> </a>
                        <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Cancel</button>
                    </div>
                </div>
            </div>
        </div>
		
		<?php 
		}}} ?>
        <!--/ Application Content -->





