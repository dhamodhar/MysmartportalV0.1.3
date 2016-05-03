      



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

<script type="text/javascript">
$(document).ready(function() {
 $('#orders-list1').DataTable();
    $('#selecctall').click(function(event) {  //on click 

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
    $('#selecctall1').click(function(event) {  //on click 
	
	//alert("test");
        if(this.checked) { // check select status
            $('.checkbox11').each(function() { //loop through each checkbox
                this.checked = true;  //select all checkboxes with class "checkbox1"               
            });
        }else{
            $('.checkbox11').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                       
            });         
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

function loadlocations(id)
{
var custcode = document.getElementById("cust_code1").value;

        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/user_locations/"+custcode,
            dataType: "text",
            success: function(xml){
                $(xml).find('shiptolocations').each(function(){
                                var shipto_code= $(this).find('shipto_code').text();
								var bus_name= $(this).find('bus_name').text();
                              
                                var address1= $(this).find('address1').text(); 
                                var address2= $(this).find('address2').text();
                                var city= $(this).find('city').text();
                                var state= $(this).find('state').text();
                                var zip= $(this).find('zip').text();
                                var country= $(this).find('country').text();  
                                var first_name= $(this).find('first_name').text(); 
                                var last_name= $(this).find('last_name').text();  
                                var carr_code= $(this).find('carr_code').text(); 
                                var status = $(this).find('status').text();		
                                var cust_code = $(this).find('cust_code').text();		
                                var check_input = "";
                         if(status == 1)
						 {
						
						 check_input = "Checked";
						 }else
						 {
						  check_input = "";
						 
						 }								
								
								var final_location = shipto_code.trim()+"###"+bus_name.trim()+"###"+address1.trim()+"###"+address2.trim()+"###"+city.trim()+"###"+state.trim()+"###"+zip.trim()+"###"+carr_code.trim();
								
 $('#orders-list tbody').append("<tr><td style='widtd:150px;'><input type='checkbox' name='add[]' id='add[]' class='checkbox11' value='"+final_location+"' "+check_input+"></td><td style='widtd:150px;'>"+shipto_code+"</td><td style='widtd:150px;'>"+bus_name+"</td><td style='widtd:150px;'>"+address2+"</td><td style='widtd:150px;'>"+city+"</td><td style='widtd:150px;'>"+state+"</td><td style='widtd:150px;'>"+zip+"</td></tr>");          
				 });
				  

						
            },
            error: function() {
            }
        });
		

}
           
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



        <!--/ Page Specific Scripts -->

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
		   
	}else if(user_role == 4)
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

	<script>
		function deletelocation(id)
		{
		var location = confirm("are you sure want to delete");
				if(location)
				{

						 $.ajax({
							type: "GET",
							url: "<?php echo base_url()?>index.php/welcome/deletelocations/"+id,
							dataType: "text",
							success: function(xml){	 
                              window.location.reload();
							},
							error: function() {
							}
						 });
						
						
				}else{
						
						
				}
		
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


     <form name="loc" id="loc" action="<?php echo base_url();?>index.php/welcome/savelocations" method="post">  
        <div class="modal splash fade" id="splash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
             <?php 
									 foreach(@$edituser as $edituserdata1){
									 
									 ?>
									 <input type="hidden" name="user_id_location" id="user_id_location" value="<?php echo $uid;?>">
									 <input type="hidden" name="location_cust_code" id="location_cust_code" value="<?php echo $edituserdata1->cus_code?>">
									 <?php } ?>
                    <div class="modal-body">
                        <div class="tile-body load-locations">
 <input type="checkbox" id="selecctall1" > <i></i> Select All
                                                
                                   <table class="table table-striped table-hover table-custom" id="orders-list">
                                                <thead>
                                                <tr>
                                                    <th style="width:180px;">Select</th>
                                                    <th style="width:180px;">ShipToCode</th>
                                                  
                                                    <th style="width:150px;">ShiptoBusName</th>
                                                    <th style="width:150px;">Address2</th>
                                                    <th style="width:150px;">City</th>
                                                    <th style="width:150px;">State</th>
                                                    <th style="width:100px;">Zip</th> 
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>

                                </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c" type="submit"><i class="fa fa-arrow-right"></i>Submit</button>
                        <button class="btn btn-lightred btn-ef btn-ef-4 btn-ef-4c" data-dismiss="modal"><i class="fa fa-arrow-left"></i>Cancel</button>
                    </div>
                </div>
            </div>
        </div>
</form>



    </body>
</html>