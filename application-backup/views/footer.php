        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.layout.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/excanvas.js"></script>

           <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>
        <script src="<?php echo base_url()?>assets/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

<script src="<?php echo base_url()?>assets/js/upload.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->
 <script src="<?php echo base_url()?>assets/js/jquery.scrolltabs.js"></script>

<script>
            $(window).load(function(){
			
var pastdue = document.getElementById("passdueacess").value;
if(pastdue == "1")
{
document.getElementById("pastdue").style.display='block';

}else{
document.getElementById("pastdue").style.display='none';

}



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
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
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






<script type="text/javascript">
$(document).ready(function() {
//alert("test");
    $('#selecctall').click(function(event) {  //on click 
	
	//alert("test");
        if(this.checked) { // check select status
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox1').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
        }
    });
    
});
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
            url: "<?php echo base_url()?>index.php/welcome/contracts_to_renew_count",
            dataType: "text",
            success: function(xml){
			
			$(xml).find('contractscount').each(function(){
			          var contcnt= $(this).find('contcnt').text();
						
							$("#ren_count").html(contcnt);
			 });
		     
            },
            error: function() {
            }
        });
});
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
url: "<?php echo base_url()?>index.php/welcome/contracts_to_renew_count",
dataType: "text",
success: function(xml){

$(xml).find('contractscount').each(function(){
var contcnt= $(this).find('contcnt').text();

$("#ren_count").html(contcnt);
});

},
error: function() {
}
});
});
</script>
<script type="text/javascript">
$(document).ready(function() {

$(document).ajaxStart(function(){
$("#wait11").css("display", "block");
});

$(document).ajaxComplete(function(){
$("#wait11").css("display", "none");
});

var alltickets = "";
var allinfo = "";
var i = 0;
$.ajax({
type: "GET",
url: "<?php echo base_url()?>index.php/welcome/all_opentickets_by_email",
dataType: "text",
success: function(xml){ 
var def_active = "";
var div_class = "";
var def_select = "";
$(xml).find('checkserviceticket').each(function(){
var se_num = $(this).find('ticketnumber').text();
var currentstatus = $(this).find('currentstatus').text();
var serialnumber = $(this).find('serialnumber').text();
var do1 = $(this).find('do').text();
var partnumber = $(this).find('partnumber').text();
var city = $(this).find('city').text();
var state = $(this).find('state').text();
var lastaction = $(this).find('lastaction').text();
var lastactivity = $(this).find('lastactivity').text();

document.getElementById("ticket1_info").style.display = "block";
if(i == 0)
{
def_select =se_num;
div_class = "intro1"
}else
{
div_class = "intro"

}

if(currentstatus == "Cust sent direct to Manuf" || currentstatus == "Device Shipped for Repair")
			{
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='active'>Device in Transit</li><li class='next'>Repair in Progress</li><li class=''>Request Complete</li></ul>";
			
		
			}else if(currentstatus == "Renotify Technician" || currentstatus == "Technician has been Notified")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Accepted awaiting sub invoice" || currentstatus == "Completed")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='previous visited'>Repair in Progress</li><li class='active'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Accepted awaiting sub invoice and awaiting parts" || currentstatus == "Completed")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='previous visited'>Repair in Progress</li><li class='active'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Accepted by Customer" || currentstatus == "Completed")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='previous visited'>Repair in Progress</li><li class='active'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Accepted Awaiting Parts" || currentstatus == "Parts in Transit")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Customer Delay" || currentstatus == "Waiting on Customer Response")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='active'>Warranty Validation</li><li class='next'>Device in Transit</li><li class='previous visited'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Customer Delay PO" || currentstatus == "Waiting on Customer Response")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='active'>Warranty Validation</li><li class='next'>Device in Transit</li><li class='previous visited'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Dispatch Complete" || currentstatus == "Technician has been Dispatched")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='active'>Device in Transit</li><li class='next'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Dispatch Delay" || currentstatus == "Service Contract Validation")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='active'>Request Created</li><li class='next'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='previous visited'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Dispatched" || currentstatus == "Technician has been Dispatched")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='active'>Device in Transit</li><li class='next'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Entitlement Delay" || currentstatus == "Service Contract Validation")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='active'>Warranty Validation</li><li class='next'>Device in Transit</li><li class='previous visited'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Parts Delay1" || currentstatus == "Parts in Transit")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Parts Ordered" || currentstatus == "Parts in Transit")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Parts Recomended" || currentstatus == "Parts in Transit")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Parts Requested" || currentstatus == "Parts in Transit")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Received at Manufacturer Depot" || currentstatus == "Device received at Depot Repair")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Recvd at Manuf Escalated" || currentstatus == "Escalation to Remediate Device")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Support Delay 2")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Tech Support Complete" || currentstatus == "Technical Support Complete")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='previous visited'>Device in Transit</li><li class='active'>Repair in Progress</li><li class='next'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Triage Completed" || currentstatus == "Triage Requested")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='active'>Device in Transit</li><li class='next'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}else if(currentstatus == "Triage Requested" || currentstatus == "Triage Requested")
			{
			
			var status_by_image = "<ul class='checkout-bar'><li class='previous visited'>Request Created</li><li class='previous visited'>Warranty Validation</li><li class='active'>Device in Transit</li><li class='next'>Repair in Progress</li><li class='previous visited'>Request Complete</li></ul>";
			
			
			}
			else
			{
				var status_by_image ="<ul class='checkout-bar'><li class='active'>Request Created</li><li class='next'>Warranty Validation</li><li class=''>Device in Transit</li><li class=''>Repair in Progress</li><li class=''>Request Complete</li></ul>";
			}
			
			
			var status=" ";
			
			if(currentstatus == "Cust sent direct to Manuf")
			{
				var status = "Device Shipped for Repair";
			}else if(currentstatus == "Renotify Technician")
			{
				var status="Technician has been Notified";
			}else if(currentstatus == "Accepted awaiting sub invoice")
			{
				var status="Completed";
			}else if(currentstatus == "Accepted awaiting sub invoice and awaiting parts")
			{
				var status="Completed";
			}else if(currentstatus == "Accepted by Customer")
			{
				var status="Completed";
			}else if(currentstatus == "Accepted Awaiting Parts")
			{
				var status="Parts in Transit";
			}else if(currentstatus == "Customer Delay")
			{
				var status="Waiting on Customer Response";
			}else if(currentstatus == "Customer Delay")
			{
				var status="Waiting on Customer Response";
			}else if(currentstatus == "Customer Delay PO")
			{
				var status="Waiting on Customer Response";
			}else if(currentstatus == "Dispatch Complete")
			{
				var status="Technician has been Dispatched";
			}else if(currentstatus == "Dispatch Delay")
			{
				var status="Service Contract Validation";
			}else if(currentstatus == "Dispatched")
			{
				var status="Technician has been Dispatched";
			}else if(currentstatus == "Entitlement Delay")
			{
				var status="Service Contract Validation";
			}else if(currentstatus == "Parts Delay1")
			{
				var status="Parts in Transit";
			}else if(currentstatus == "Parts Ordered")
			{
				var status="Parts in Transit";
			}else if(currentstatus == "Parts Recomended")
			{
				var status="Parts in Transit";
			}else if(currentstatus == "Parts Requested")
			{
				var status="Parts in Transit";
			}else if(currentstatus == "Received at Manufacturer Depot")
			{
				var status="Device received at Depot Repair";
			}else if(currentstatus == "Recvd at Manuf Escalated")
			{
				var status="Escalation to Remediate Device";
			}else if(currentstatus == "RMA Requested")
			{
				var status="Service Contract Validation";
			}else if(currentstatus == "Support Delay 2")
			{
				var status=" ";
			}else if(currentstatus == "Tech Support Complete")
			{
				var status="Technician Support Complete";
			}else if(currentstatus == "Tech Support Requested")
			{
				var status="Technician has been Dispatched";
			}else if(currentstatus == "Triage Completed")
			{
				var status="Triage Requested";
			}else
			{
				var status="Triage Requested";
			}
			



alltickets = alltickets+"<span>Another Tab 1</span>";

if(serialnumber == ""){
serialnumber = "s1";

}
allinfo = allinfo+"<li id='"+serialnumber+"' class='"+div_class+"'><div id='"+serialnumber+"_content' class='tab-pane fade in active ticket_num show'><input type='hidden' name='i"+i+"' id='i"+i+"' value='"+serialnumber+"'><div style='width: 100%; border-top: 3px solid rgb(255, 117, 0); height: 0px; margin: 50px 0px;' class='aligncenter'></div><div id='tab1' class='service_request_information'><div style=' padding: 0px 0;word-wrap: break-word;'><h4>Service Request Search Results for: "+serialnumber+"<span style='padding-top:5px;color:#57aed1'> </span></h4></div><ul style='padding-top:30px; text-align:left !important;' id='all_ticket_info'><li><strong>Service Request Number:</strong> "+se_num+"</li><li><strong>Device Serial Number:</strong> " +serialnumber+"</li><li><strong>Depot/On-site:</strong> "+do1+"</li><li><strong>Device Model:</strong> "+partnumber+"</li><li><strong>Device Location:</strong> "+city+"/"+state+"<li><strong>Current Status:</strong> " +status+"</li></ul><div class='checkout-wrap' id='transit'>"+status_by_image+"</ul></div><div style='border: medium none; width: auto; font-family: &quot;PT Sans Caption&quot;,sans-serif; font-weight: 400; font-size: 16px; color: rgb(102, 102, 102); word-wrap: break-word; display: block; padding-top: 100px; text-align: center; background: transparent none repeat scroll 0px 0px;'><p style='text-align:center;'><b>Additional Information:</b> <br>"+lastactivity+"</p><p><strong> Last Activity Date: </strong> "+lastaction+"</p></div></div></div></li>";


i++;

});

$("#all_ticket_info1").html(allinfo);

if(alltickets == ""){
document.getElementById("ticket1_info").style.display = "block";

}else
{

}


},
error: function() {

}
});
});
</script>




















<script type="text/javascript">
function resetpassword(email)
{
	var email_final = email.replace("@", "zzz");
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/resetpassword_link/"+email_final,
            dataType: "text",
            success: function(xml){
			    //alert(xml);
				document.getElementById('succ').style.display = 'block';
					document.getElementById('reset_pass').style.display = 'none';
               
            },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
	
	
	
}
</script>

   <script>
$("#user_profile_latest1").load(getuserprofileinfo());


    
function getuserprofileinfo()
{
var email = '<?php echo $this->session->userdata('email');?>';
   if(email!=""){
  
   
   var tt = email.replace('@','ZZZ');
  // alert(tt);
  
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contact_info/"+tt,
            dataType: "text",
            success: function(xml){
			    //alert(xml);
                $(xml).find('customercontact').each(function(){
                                var first_name= $(this).find('first_name').text();
				                var last_name= $(this).find('last_name').text();
                                var cust_code= $(this).find('cust_code').text();
                                var phone1= $(this).find('phone1').text(); 
                                var address1= $(this).find('address1').text(); 
                                var address2= $(this).find('address2').text();
                                var address3= $(this).find('address3').text();
                                var city= $(this).find('city').text();
                                var state= $(this).find('state').text();
                                var zip= $(this).find('zip').text();
                                var country= $(this).find('country').text();  
                                var bus_name= $(this).find('bus_name').text(); 
                                var job_code= $(this).find('job_code').text();  
		//alert(cust_code.trim());						
	if(cust_code.trim()!="")
	{
	 //document.getElementById("get_search").style.display='none';
     //document.getElementById("newdata").style.display='block';
	
	}else
	{
	//alert("Email Id does not exist");
	
	}							
   	

   
				                $("#first_name").val(first_name.trim());
				                $("#last_name").val(last_name.trim());
                                $("#cust_code").val(cust_code.trim());
                                $("#phone1").val(phone1.trim());
                                $("#address1").val(address1.trim());
                                $("#address2").val(address2.trim());
                                $("#address3").val(address3.trim());
                                $("#city").val(city.trim());
                                $("#state").val(state.trim());
                                $("#zip").val(zip.trim());
                                $("#country").val(country.trim());
                                $("#bus_name").val(bus_name.trim());
                                $("#job_code").val(job_code.trim());
								$("#username").val(email.trim());
								$("#password").val("");
				 });
            },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
		
		}else
		{
		
		//alert("Enter Email");
		}


}	
        </script>
		
		
		 <script>

function getdetails()
{
document.getElementById("wait12").style.display='block';
   var email = document.getElementById("email").value;
   if(email!=""){
  
   
   var tt = email.replace('@','ZZZ');
  // alert(tt);
  $(document).ajaxStart(function(){
    $("#wait12").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait12").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contact_info/"+tt,
            dataType: "text",
            success: function(xml){
			    //alert(xml);
                $(xml).find('customercontact').each(function(){
                                var first_name= $(this).find('first_name').text();
				var last_name= $(this).find('last_name').text();
                                var cust_code= $(this).find('cust_code').text();
                                var phone1= $(this).find('phone1').text(); 
                                var address1= $(this).find('address1').text(); 
                                var address2= $(this).find('address2').text();
                                var address3= $(this).find('address3').text();
                                var city= $(this).find('city').text();
                                var state= $(this).find('state').text();
                                var zip= $(this).find('zip').text();
                                var country= $(this).find('country').text();  
                                var bus_name= $(this).find('bus_name').text(); 
                                var job_code= $(this).find('job_code').text();  
		//alert(cust_code.trim());						
	if(cust_code.trim()!="")
	{
	 document.getElementById("get_search").style.display='none';
     document.getElementById("newdata").style.display='block';
	
	}else
	{
	//alert("Email Id does not exist");
	
	}							
   	

   
				                $("#first_name").val(first_name.trim());
				                $("#last_name").val(last_name.trim());
                                $("#cust_code").val(cust_code.trim());
                                $("#phone1").val(phone1.trim());
                                $("#address1").val(address1.trim());
                                $("#address2").val(address2.trim());
                                $("#address3").val(address3.trim());
                                $("#city").val(city.trim());
                                $("#state").val(state.trim());
                                $("#zip").val(zip.trim());
                                $("#country").val(country.trim());
                                $("#bus_name").val(bus_name.trim());
                                $("#job_code").val(job_code.trim());
								$("#username").val(email.trim());
								$("#password").val("");
				 });
            },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
		
		}else
		{
		
		//alert("Enter Email");
		}
}
           
        </script>

 <script>
            $(window).load(function(){

                //initialize datatable
                $('#orders-list').DataTable({
                    "dom": '<"row"<"col-md-8 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"pull-right"f>>>t<"row"<"col-md-4 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"inline-controls text-center"i>><"col-md-4 col-sm-12"p>>',
                    "language": {
                        "sLengthMenu": 'View _MENU_ records',
                        "sInfo":  'Found _TOTAL_ records',
                        "oPaginate": {
                            "sPage":    "Page ",
                            "sPageOf":  "of",
                            "sNext":  '<i class="fa fa-angle-right"></i>',
                            "sPrevious":  '<i class="fa fa-angle-left"></i>'
                        }               
                    },
                    "pagingType": "input",
                    "ajax": '<?php echo base_url()?>assets/extras/orders.json',
                    "order": [[ 1, "asc" ]],
                    "columns": [
                        
                        {  "data": "id",
                                                  "render":function (data) {
                                                  if (data === '1') {
                                   return '<a href="order-view.html">' + data + '</a>'
                               } else {
                                   return '<a href="order-view.html">' + data + '</a>'
                               }
                                                 
                                                  } },
                        {
                            "data": "date",
                            "className": "formatDate"
                        },
                        { "data": "placedby" },
                        {
                            "type": "html",
                            "data": "status",
							 "render":function (data) {
                                                  if (data === '1') {
                                   return '<a href="invoice-view.html">' + data + '</a>'
                               } else {
                                   return '<a href="invoice-view.html">' + data + '</a>'
                               }
                                                 
                                                  }
                           
                        },
                        { "data": "shipto" , "type": "num-fmt",
                            "render": function (data) {
                                return '$' + parseFloat(data).toFixed(2);
                            }},
                        { "data": "quantity",
						 },
                        {
                           "type": "html",
                            "data": "total",
                            "render": function (data) {
                                if (data === 'sent') {
                                    return '<span class="label bg-success">' + data + '</span>'
                                } else if (data === 'closed') {
                                    return '<span class="label bg-warning">' + data + '</span>'
                                } else if (data === 'cancelled') {
                                    return '<span class="label bg-lightred">' + data + '</span>'
                                } else if (data === 'pending') {
                                    return '<span class="label bg-primary">' + data + '</span>'
                                }
                            }
                        },
                        
                    ],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                    "drawCallback": function(settings, json) {
                        $(".formatDate").each(function (idx, elem) {
                            $(elem).text($.format.date($(elem).text(), "MMM d, yyyy"));
                        });
                        $('#select-all').change(function() {
                            if ($(this).is(":checked")) {
                                $('#orders-list tbody .selectMe').prop('checked', true);
                            } else {
                                $('#orders-list tbody .selectMe').prop('checked', false);
                            }
                        });
                    }
                });
                //*initialize datatable
            });
        </script>




        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
                // Initialize Statistics chart
                var data = [{
                    data: [[1,15],[2,40],[3,35],[4,39],[5,42],[6,50],[7,46],[8,49],[9,59],[10,60],[11,58],[12,74]],
                    label: 'Unique Visits',
                    points: {
                        show: true,
                        radius: 4
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 4,
                        fill: 0
                    }
                }, {
                    data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
                    label: 'Page Views',
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
                    }
                }];

                var options = {
                    colors: ['#e05d6f','#61c8b8'],
                    series: {
                        shadowSize: 0
                    },
                    legend: {
                        backgroundOpacity: 0,
                        margin: -7,
                        position: 'ne',
                        noColumns: 2
                    },
                    xaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        },
                        position: 'bottom',
                        ticks: [
                            [ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
                        ]
                    },
                    yaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        }
                    },
                    grid: {
                        borderWidth: {
                            top: 0,
                            right: 0,
                            bottom: 1,
                            left: 1
                        },
                        borderColor: 'rgba(255,255,255,.3)',
                        margin:0,
                        minBorderMargin:0,
                        labelMargin:20,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius:6
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot = $.plot($("#statistics-chart"), data, options);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot.resize();
                    plot.setupGrid();
                    plot.draw();
                });
                // * Initialize Statistics chart

                //Initialize morris chart
                Morris.Donut({
                    element: 'browser-usage',
                    data: [
                        {label: 'Chrome', value: 25, color: '#00a3d8'},
                        {label: 'Safari', value: 20, color: '#2fbbe8'},
                        {label: 'Firefox', value: 15, color: '#72cae7'},
                        {label: 'Opera', value: 5, color: '#d9544f'},
                        {label: 'Internet Explorer', value: 10, color: '#ffc100'},
                        {label: 'Other', value: 25, color: '#1693A5'}
                    ],
                    resize: true
                });
                //*Initialize morris chart


                // Initialize owl carousels
                $('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });

                $('#appointments-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    navigation: true,
                    navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
                    singleItem : true
                });
                //* Initialize owl carousels


                // Initialize rickshaw chart
                var graph;

                var seriesData = [ [], []];
                var random = new Rickshaw.Fixtures.RandomData(50);

                for (var i = 0; i < 50; i++) {
                    random.addData(seriesData);
                }

                graph = new Rickshaw.Graph( {
                    element: document.querySelector("#realtime-rickshaw"),
                    renderer: 'area',
                    height: 133,
                    series: [{
                        name: 'Series 1',
                        color: 'steelblue',
                        data: seriesData[0]
                    }, {
                        name: 'Series 2',
                        color: 'lightblue',
                        data: seriesData[1]
                    }]
                });

                var hoverDetail = new Rickshaw.Graph.HoverDetail( {
                    graph: graph,
                });

                graph.render();

                setInterval( function() {
                    random.removeData(seriesData);
                    random.addData(seriesData);
                    graph.update();

                },1000);
                //* Initialize rickshaw chart

                //Initialize mini calendar datepicker
                $('#mini-calendar').datetimepicker({
                    inline: true
                });
                //*Initialize mini calendar datepicker


                //todo's
                $('.widget-todo .todo-list li .checkbox').on('change', function() {
                    var todo = $(this).parents('li');

                    if (todo.hasClass('completed')) {
                        todo.removeClass('completed');
                    } else {
                        todo.addClass('completed');
                    }
                });
                //* todo's


                //initialize datatable
                $('#project-progress').DataTable({
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                });
                //*initialize datatable

                //load wysiwyg editor
                $('#summernote').summernote({
                    toolbar: [
                        //['style', ['style']], // no style button
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        //['insert', ['picture', 'link']], // no insert buttons
                        //['table', ['table']], // no table button
                        //['help', ['help']] //no help button
                    ],
                    height: 143   //set editable area's height
                });
                //*load wysiwyg editor
            });
 $('#feed-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });
        </script>
        <!--/ Page Specific Scripts -->
		
		
		<script type="text/javascript">
		function get_ticket_status()
		{
		
		 $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/ticket_status_api/test",
            dataType: "text",
            success: function(xml){
			    alert(xml);
				document.getElementById("ticket_info").style.display = "block";
                $(xml).find('checkserviceticket').each(function(){
              
				 });
            },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
		
		
		
		
		}



  
		</script>
<script type="text/javascript">
function get_select_menu()
{
var user_role = document.getElementById("role").value;
//alert(user_role);
	if(user_role == 3)
	{  
	            $('#selecctall').attr('checked','checked');
	            //document.getElementById("selecctall").checked;
				$('.checkbox1').each(function() { //loop through each checkbox
					this.checked = true;  //select all checkboxes with class "checkbox1"               
				});
		   
	}else
	{
	var i =1;
	 $('#selecctall').removeAttr('checked');
	            //document.getElementById("selecctall").checked;
				$('.checkbox1').each(function() { //loop through each checkbox
				    //alert(this.checked);
					if(i == 1){}else{
					this.checked = false; 
}					//select all checkboxes with class "checkbox1"               
				i++;
				});
			
	
	}

}
</script>

    <script type="text/javascript">
		function getstatus()
		{
		var ticket_number = document.getElementById('ticket_number').value;
		
		
		if(ticket_number=="")
		{
		alert("Enter Device Serial Number");
		
		
		}else{
		
		 $(document).ajaxStart(function(){
    $("#wait_device").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
	 //alert("test");
    $("#wait_device").css("display", "none");
     });
		 $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/getopenticket_details/"+ticket_number,
            dataType: "text",
            success: function(xml){
			alert("test");
			 $("#wait_device").css("display", "none");
			   $(xml).find('queryticketinfo').each(function(){
				
				        var opened= $(this).find('opened').text();
			                var lastaction = $(this).find('lastaction').text();
				        var enteredby= $(this).find('enteredby').text();
					var ticketnumber = $(this).find('ticketnumber').text();

				        var problemdescription= $(this).find('problemdescription').text();
					var currentstatus = $(this).find('currentstatus').text();
				    var customername= $(this).find('customername').text();
					var calledinby = $(this).find('calledinby').text();
				    var email= $(this).find('email').text();
					var serviceagent = $(this).find('serviceagent').text();
				    var partnumber= $(this).find('partnumber').text();
					var partdescription = $(this).find('partdescription').text();
				    var serialnumber= $(this).find('serialnumber').text();
					var city = $(this).find('city').text();
				    var state= $(this).find('state').text();
					var lastactivity = $(this).find('lastactivity').text();
				        var do_content= $(this).find('do').text();
	                  jQuery('#cancel').click();
					//alert("test");	
					//document.getElementById('full_info').style.display='block';
					document.getElementById('ticket_info').style.display='block';	
					
					
				$("#ticket_info").html("<div class='col-md-6'>Opned: "+opened+"</div><div class='col-md-6'>Last Action: "+lastaction+"</div><div class='col-md-6'>Entered By: "+enteredby+"</div><div class='col-md-6'>Ticket Number: "+ticketnumber+"</div><div class='col-md-6'>Problem Description: "+problemdescription+"</div><div class='col-md-6'>Part Description: "+partdescription+"</div><div class='col-md-6'>Current Status: "+currentstatus+"</div><div class='col-md-6'>Customer Name: "+customername+"</div><div class='col-md-6'>Called in by: "+calledinby+"</div><div class='col-md-6'>Email: "+email+"</div><div class='col-md-6'>Service Agent: "+serviceagent+"</div><div class='col-md-6'>Part Number: "+partnumber+"</div><div class='col-md-6'>Serial Number: "+serialnumber+"</div><div class='col-md-6'>Address: "+city+","+state+"</div><div class='col-md-6'>Last Activity: "+lastactivity+"</div><div class='col-md-6'>DO Content: "+do_content+"</div>")
				
				
				});
               
            },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
		
		
		}
		}
		
		</script>

 <script type="text/javascript">
    var tabs3 = null;
    var tabs4 = null;
    var tabs5 = null;
    var tabs6 = null;
    var tabs7 = null;
    
    $(document).ready(function(){
	
      $('.tabs1').scrollTabs();
      $('.tabs2').scrollTabs();
      tabs3 = $('.tabs3').scrollTabs();
      tabs4 = $('.tabs4').scrollTabs();
      tabs5 = $('.tabs5').scrollTabs();
      tabs6 = $('.tabs6').scrollTabs();
      tabs7 = $('.tabs7').scrollTabs();
    });
  </script>
  
  <script type="text/javascript">
function getallfields()
{
document.getElementById("last_req").style.display='block';
var tick_number = document.getElementById("serial_number").value;
	if(tick_number == "")
	{
	  //alert("please enter Serial Number");
	}else{
	 
	     $(document).ajaxStart(function(){
    $("#wait_device").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait_device").css("display", "none");
	 
     });
	   $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/device_query_info/"+tick_number,
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
						//alert("Invalid Number");
						document.getElementById("error_id").style.display='block';
						
						}else{
						document.getElementById("error_id").style.display='none';
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
						 $('#state11').prop('disabled',true);
						$("#zip").val(zip);
						
						}

				});
               
            },
            error: function() {
            //alert("No Response - Cannot process the data.);
            }
        });
	}

}   

</script> 

<script>
$(document).ready(function(){

    $("#service_btns").click(function(){
        $("#service_btns").hide();
    });



       
     
   
   
});
</script>


 
<script type="text/javascript">
$(document).ready(function(){
		$(".ticket_numbers").click(function() {
				$( "div.ticket_num" ).each(function( index ) {
						var tt1 = $("#i"+index).val();
						if($("#"+tt1).is(".intro1")){
						$("#"+tt1).removeClass("intro1"); 
						}
						if($("#"+tt1).is(".intro")){
						$("#"+tt1).removeClass("intro"); 
						}
				});

				var fi = $(this).text();

				$( "div.ticket_num" ).each(function( index ) {
						var tt = $("#i"+index).val();
						if(tt == "")
						{
						tt="s1"

						}

						if(tt.trim() == fi.trim())
						{
						$("#"+tt).addClass("intro1").animate(6000);
						}else
						{
						$("#"+tt).addClass("intro").animate(6000);
						}


				});
		});
});
</script>

	<script type="text/javascript">
		function test()
		{
		 $.ajax({
					type: "POST",
					url: "<?php echo base_url()?>index.php/welcome/updateallnotificationsread",
					dataType: "text",
					success: function(xml){
                  $("#num_un_read").html("0");
				  
					}

			  });	
			   
		
		}
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
 <script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery.accordion.js"></script>
      

<script type="text/javascript">
      $(document).ready(function() {
        $('#only-one [data-accordion]').accordion();

        $('#multiple [data-accordion]').accordion({
          singleOpen: false
        });

        $('#single[data-accordion]').accordion({
          transitionEasing: 'cubic-bezier(0.455, 0.030, 0.515, 0.955)',
          transitionSpeed: 200
        });
      });
    </script>
<script>
$( document ).ready(function() {
    $("#myModal").modal("show");
});
</script>

<!--<script>
(function blink() { 
    $('.blink_me').fadeOut(7000).fadeIn(500, blink); 
})();
</script>-->
    </body>
</html>