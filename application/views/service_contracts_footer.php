
        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
         <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
  <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
           <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
     
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
        <!--/ vendor javascripts -->


<script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>

        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->


<script>
$(document).ready(function(){
  
$(".demo2 .rotate").textrotator({
animation: "flip",
speed: 3000
});

});

</script>

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
         <script>

 $(document).ready(function(){
   //initialize datatable
              $('#from').datetimepicker();
                 $('#to').datetimepicker(); 
	  var test1 = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_servicecontracts",
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
                $(xml).find('contracts').each(function(){
				
                var contract_number= $(this).find('contract_number').text();
				var start_date= $(this).find('start_date').text();
				var end_date= $(this).find('end_date').text();
				var description= $(this).find('description').text();
				
				var service_level= $(this).find('service_level').text();
				var contract_status= $(this).find('contract_status').text();
                var location= $(this).find('location').text();
                 var error =  $(this).find('error').text();             
					if(error!="Error"){		   
			   $('#contracts-list tbody').append("<tr><td style='width:100px;'>"+contract_number+"</td><td style='width:100px;'>"+start_date+"</td><td style='width:100px;'>"+end_date+"</td><td style='width:100px;'>"+description+"</td><td style='width:100px;'>"+service_level+"</td><td style='width:100px;'>"+location+"</td><td style='width:100px;'>"+contract_status+"</td></tr>");
                 //datatables(); 

                     }				 
		   });
		     $('#contracts-list').DataTable({
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
                    "pagingType": "input"
                   
                //*initialize datatable
				});
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
    });    

           
        </script>
        <!--/ Page Specific Scripts -->

  <script type="text/javascript">
function searchbydates()
{
$('#orders-list').DataTable( {
    destroy: true,
    searching: false
} );

 var invoicenumber = document.getElementById("serial_no").value;
var fromdate = document.getElementById("from").value;
 var todate =document.getElementById("to").value;
 
  if(invoicenumber=="")
  {
    invoicenumber = "%20";
  }
  if(invoicenumber==""){
 //alert("t");
 invoicenumber = "%20";
 
 }
 //alert(order_id+" "+todate+" "+fromdate);
 var d = new Date(fromdate);

 var t = new Date(todate);
 var from = (d.getMonth()+1)+"-"+d.getDate()+"-"+d.getFullYear();
  var to = (t.getMonth()+1)+"-"+t.getDate()+"-"+t.getFullYear();
  if(from=="NaN-NaN-NaN")
  {
   
  from = "%20";
  
  }
  if(to=="NaN-NaN-NaN")
  {
  to = "%20";
  
  }
  //alert(from+","+to+","+invoicenumber);
//alert(invoicenumber);
 $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_servicecontracts",
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
                $(xml).find('contracts').each(function(){
				
                                var serial_no= $(this).find('serial_no').text();
				var Contract_ID= $(this).find('Contract_ID').text();
				var Contract_Expiry_date= $(this).find('Contract_Expiry_date').text();
				var descr= $(this).find('descr').text();
				var city= $(this).find('city').text();
				var state= $(this).find('state').text();
				var Contract_Status= $(this).find('Contract_Status').text();
							   
			   $('#contracts-list tbody').append("<tr><td style='width:100px;'>"+serial_no+"</td><td style='width:100px;'>"+Contract_ID+"</td><td style='width:100px;'>"+Contract_Expiry_date+"</td><td style='width:100px;'>"+descr+"</td><td style='width:100px;'>"+city+"</td><td style='width:100px;'>"+Contract_Status+"</td><td style='width:100px;'>"+Contract_Status+"</td></tr>");
                 //datatables();           
		   });
		     
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });



}
   </script>      
 <script>
            $(window).load(function(){


                $('#from').datetimepicker();
                 $('#to').datetimepicker();
                 });
 
                
                </script>

<script>
 $('#feed-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
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
						$("#sales").html("<li><strong>Sales Rep Id- </strong>"+repid+"</li><li><strong>Name: </strong>"+repname+"</li><li><strong>Email: </strong>"+repemail+"</li><li><strong>Phone: </strong>"+repphone+"</li><li class='divider'></li><li><strong>Customer Service Rep </strong></li><li><strong>Name: </strong>"+csr_fname+" "+csr_lname+"</li><li><strong>Email: </strong>"+csr_email+"</li><li><strong>Phone: </strong>"+csr_phone+"</li>");
			   });
		     
            },
            error: function() {
            alert("An error occurred while processing XML file.");
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