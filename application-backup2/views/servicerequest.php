            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-maps-google">

                    <div class="pageheader">

                        

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>"
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/assets"">Assets</a>
                                </li>
                                <li>
                                    <a href="" class="sub-active">Create Service Request</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

                         
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="row" style="margin-bottom:15px;">



<div id="new_service_ticket" style="display:none;" class="col-md-12 ">
<div id="device-number" class="form-group col-md-2 no-padding">
 <input type="test" name="serial_number" id="serial_number" class="form-control" placeholder="Device Serial Number*"> </div>


<div class="col-md-6 no-padding"><input type="button" name="getdetails" id="getdetails" class="btn btn-success mb-10 mr-10 float-left" value="Next" onclick="getallfields()"> <input type="button" name="getdetails" id="getdetails" class="btn btn-default mb-10 float-left" value="Cancel" onclick="cancel()" ></div>
  
</div>



</div>


<div class="row ">
<div class="col-md-12">


<div class="service_bg" id="last_req" style="display:block">
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
<div class="form-group" style="float:left; width:50%">
 <input type="text" placeholder="City"  class="form-control" id="city" name="city" readonly data-parsley-id="8466"><ul class="parsley-errors-list" id="parsley-id-8466" style="width:100%"></ul></div>
<div class="form-group" style="float:right; width:50%">
 <select tabindex="3"  name="state11" class="form-control" id="state11" data-parsley-id="8466" style="width:100%">
                                                     <option value="" >select</option>
                                                     <option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Europe">Armed Forces Europe</option><option value="Armed Forces Pacific">Armed Forces Pacific</option>
     </select><ul class="parsley-errors-list" id="parsley-id-8466"></ul></div>
                             
</div>


 <input type="text" placeholder="ZIP Code"  class="form-control" id="zip" name="zip" data-parsley-id="8466" readonly style="width: 100%;"><ul class="parsley-errors-list" id="parsley-id-8466"></ul></div>

<div class="form-group col-md-4">
<label for="serial">Verify*</label>
                                                <label class="checkbox checkbox-custom">
                                                    <input type="radio" name="customRadio" id="customRadio"  value="I confirm that the device location address is correct" onclick="get_addt_info(1)"><i></i> I confirm that the device location address is correct
                                                </label>

<label class="checkbox checkbox-custom">
                                                    <input type="radio" name="customRadio" id="customRadio"  value="Select this option to update the device location address" onclick="get_addt_info(2)"><i></i> Select this option to update the device location address
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

                                </div>
<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/assets" class="btn btn-primary mb-10 mt-20" >Return to Assets</a></div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        
                        
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->


                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.scrolltabs.js"></script>	
	 <script src="<?php echo base_url()?>assets/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script> 
        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/gmaps/gmaps.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->


<script type="text/javascript">
function get_addt_info(disable_type)
{
if(disable_type==2)
{
document.getElementById("company_name").readOnly = false;
document.getElementById("address_1").readOnly = false;
document.getElementById("address_2").readOnly = false;
document.getElementById("city").readOnly = false;
//document.getElementById("state").disabled = false;
 $('#state11').prop('disabled',false);
document.getElementById("zip").readOnly = false;
}else
{
document.getElementById("company_name").readOnly = true;
document.getElementById("address_1").readOnly = true;
document.getElementById("address_2").readOnly = true;
document.getElementById("city").readOnly = true;
//document.getElementById("state").disabled = true;
 $('#state11').prop('disabled',false);

document.getElementById("zip").readOnly = true;

}
document.getElementById("addt_info").style.display = "block";

}
</script>

<script type="text/javascript">
function open_printer_list()
{
document.getElementById("scanner").style.display = "none";
document.getElementById("printer").style.display = "block";



}
</script>

<script type="text/javascript">
function open_scanner_list()
{
document.getElementById("printer").style.display = "none";
document.getElementById("scanner").style.display = "block";


}
</script>
<script type="text/javascript">
function others()
{
document.getElementById("printer").style.display = "none";
document.getElementById("scanner").style.display = "none";


}
</script>

 <script type="text/javascript">
$(document).ready(function() {

  $(document).ajaxStart(function(){
          $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
         $("#wait").css("display", "none");
     });

				   $.ajax({
						type: "GET",
						url: "<?php echo base_url()?>index.php/welcome/device_query_info/<?php echo $device_number ?>",
						dataType: "text",
						success: function(xml){
					
								   $(xml).find('checkserviceticket').each(function(){
									
											var serial_no= $(this).find('serial_no').text();
											var descr = $(this).find('descr').text();
											var contract_id= $(this).find('contract_id').text();
											var contract_status = $(this).find('contract_status').text();
											var contract_expiry_date = $(this).find('contract_expiry_date').text();
											var address_1 = $(this).find('address_1').text();
											var address_2 = $(this).find('address_2').text();
											var city = $(this).find('city').text();
											var state = $(this).find('state').text();
											var zip = $(this).find('zip').text();
											var country = $(this).find('country').text();
											var company_name = $(this).find('company_name').text();
											var device_type = $(this).find('device_type').text();
											if(serial_no == "")
											{

											
											}else{
	document.getElementById("full_info_ticket").style.display='block';
											$("#serial_no").val(serial_no);
											$("#descr").val(descr);
											$("#contract_id").val(contract_id);
											$("#contract_status").val(contract_status);
											$("#contract_expiry_date").val(contract_expiry_date);
											$("#company_name").val(company_name);
											$("#device_type").val(device_type);
											$("#address_1").val(address_1);
											$("#address_2").val(address_2);
											$("#city").val(city);
										
											$("#state11").html('<option>'+state+'</option><option value="Alabama">Alabama</option><option value="Alaska">Alaska</option><option value="Arizona">Arizona</option><option value="Arkansas">Arkansas</option><option value="California">California</option><option value="Colorado">Colorado</option><option value="Connecticut">Connecticut</option><option value="Delaware">Delaware</option><option value="District of Columbia">District of Columbia</option><option value="Florida">Florida</option><option value="Georgia">Georgia</option><option value="Hawaii">Hawaii</option><option value="Idaho">Idaho</option><option value="Illinois">Illinois</option><option value="Indiana">Indiana</option><option value="Iowa">Iowa</option><option value="Kansas">Kansas</option><option value="Kentucky">Kentucky</option><option value="Louisiana">Louisiana</option><option value="Maine">Maine</option><option value="Maryland">Maryland</option><option value="Massachusetts">Massachusetts</option><option value="Michigan">Michigan</option><option value="Minnesota">Minnesota</option><option value="Mississippi">Mississippi</option><option value="Missouri">Missouri</option><option value="Montana">Montana</option><option value="Nebraska">Nebraska</option><option value="Nevada">Nevada</option><option value="New Hampshire">New Hampshire</option><option value="New Jersey">New Jersey</option><option value="New Mexico">New Mexico</option><option value="New York">New York</option><option value="North Carolina">North Carolina</option><option value="North Dakota">North Dakota</option><option value="Ohio">Ohio</option><option value="Oklahoma">Oklahoma</option><option value="Oregon">Oregon</option><option value="Pennsylvania">Pennsylvania</option><option value="Rhode Island">Rhode Island</option><option value="South Carolina">South Carolina</option><option value="South Dakota">South Dakota</option><option value="Tennessee">Tennessee</option><option value="Texas">Texas</option><option value="Utah">Utah</option><option value="Vermont">Vermont</option><option value="Virginia">Virginia</option><option value="Washington">Washington</option><option value="West Virginia">West Virginia</option><option value="Wisconsin">Wisconsin</option><option value="Wyoming">Wyoming</option><option value="Armed Forces Americas">Armed Forces Americas</option><option value="Armed Forces Europe">Armed Forces Europe</option><option value="Armed Forces Pacific">Armed Forces Pacific</option>');
											 $('#state11').prop('disabled',false);
											$("#zip").val(zip);
											
											}

									});
						   
						},
						error: function() {
						//alert("No Response - Cannot process the data.);
						}
					});
	 
 });

</script> 

<script>
$(document).ready(function(){

    $("#service_btns").click(function(){
        $("#service_btns").hide();
    });



       
     
   
   
});
</script>




        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            
        </script>
        <!--/ Page Specific Scripts -->

<script>
            $(window).load(function(){


                // Initialize Pie Chart
                var data6 = [
                    { label: 'Handheld Printer', data: 16.6 },
                    { label: 'RFID', data: 16.6 },
                    { label: 'Services', data: 16.6 },
                    { label: 'Wireless', data: 16.6 },
                    { label: 'Labels', data: 16.6},
                    { label: 'Software', data: 16.6}
                ];

                var options6 = {
                    series: {
                        pie: {
                            show: true,
                            innerRadius: 0,
                            stroke: {
                                width: 0
                            },
                            label: {
                                show: true,
                                threshold: 0.15
                            }
                        }
                    },

                    colors: ['#428bca','#5cb85c','#f0ad4e','#d9534f','#5bc0de','#616f77'],
                    grid: {
                        hoverable: true,
                        clickable: true,
                        borderWidth: 0,
                        color: '#ccc'
                    },
                    tooltip: false,
                    tooltipOpts: { content: '%s: %p.0%' }
                };

                var plot6 = $.plot($("#pie-chart"), data6, options6);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot6.resize();
                    plot6.setupGrid();
                    plot6.draw();
                });
                // * Initialize Pie Chart
             
            });
        </script>

 <script>

 $(document).ready(function(){
   //initialize datatable
            
	  var test1 = "";
	  $(document).ajaxStart(function(){
    $("#wait_device").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait_device").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/SalesPersonDetails",
            dataType: "text",
            success: function(xml){
			
			$(xml).find('salesrep').each(function(){
			            var repid= $(this).find('repid').text();
						var repname = $(this).find('repname').text();
						var repphone= $(this).find('repphone').text();
						var repemail= $(this).find('repemail').text();
						var repfax= $(this).find('repfax').text();
						var region_desc= $(this).find('region_desc').text();
                                                var branch_desc= $(this).find('branch_desc').text();
						var csr_fname= $(this).find('csr_fname').text();
						var csr_lname= $(this).find('csr_lname').text();
						var csr_email= $(this).find('csr_email').text();
						var csr_phone= $(this).find('csr_phone').text();
						//alert(repid);
                                               
							$("#sales").html("<li><strong>Sales Rep</strong></li><li><strong>Name: </strong>"+repname+"</li><li><strong>Email: </strong><a href='mailto:"+repemail+"' style='color:blue'>"+repemail+"</a></li><li><strong>Phone: </strong><a href='tel:"+repphone+"' target='_self' style='color:blue'>"+repphone+"</a></li><li class='divider'></li><li><strong>Customer Service Rep </strong></li><li><strong>Name: </strong>"+csr_fname+" "+csr_lname+"</li><li><strong>Email: </strong><a href='mailto:"+csr_email+"' style='color:blue'>"+csr_email+"</a></li><li><strong>Phone: </strong><a href='tel:"+csr_phone+"' target='_self' style='color:blue'>"+csr_phone+"</a></li>"); 
			 });
		     
            },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
    });    

           
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>
</html>