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

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
        <script src="<?php echo base_url()?>assets/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
 <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->
<script type="text/javascript" src="//cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>

<script type="text/javascript">
function test()
{
//alert("test");
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};


    doc.fromHTML($('#orders-list').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');




}

</script>  

        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
	
			   
			   <script>

 $(document).ready(function(){
   //initialize datatable
              
	  var test1 = "";
	  var order_tracking_number ="";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/orderview_data/<?php echo $order_id; ?>",
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
                $(xml).find('OrderDetails').each(function(){
				
			
                var orderNumber= $(this).find('order_number').text();
				var item_no= $(this).find('item_no').text();
				var part_code = $(this).find('part_code').text();
				var qty = $(this).find('qty').text();
				var uom = $(this).find('uom').text();
				var item_price = $(this).find('item_price').text();
				var extended_price= $(this).find('extended_price').text();
				var item_status= $(this).find('item_status').text();
				var part_desc= $(this).find('part_desc').text();
				var item_stat= $(this).find('item_stat').text();
				var order_tracking_number = $(this).find('tracker_no').text();
				var totshipqty = $(this).find('totshipqty').text();
				var error = $(this).find('error').text();

			   $('#orders-list tbody').append("<tr><td>"+part_code+"</td><td>"+part_desc+"</td><td>"+qty+"</td><td>"+totshipqty+"</td><td >"+uom+"</td><td >$ "+Number(item_price).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</td><td>$ "+Number(extended_price).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</td></tr>");
                        
		   });
		   $('#orders-list').DataTable({
			 "order": [[ 1, "desc" ]],
                    "dom": '<"row"<"col-md-8 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"pull-right"f>>>t<"row"<"col-md-4 col-sm-12"<"inline-controls"l>><"col-md-4 col-sm-12"<"inline-controls text-center"i>><"col-md-4 col-sm-12"p>>',
                    "language": {
                        "sLengthMenu": 'View _MENU_ records',
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
					$('.inline-controls').css('display','none');
				    $('.dataTables_filter').css('display','none');
            },
            error: function() {
            $('#orders-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
            }
        });
		
        displayorder_details();
    });    

          function displayorder_details()
{
 $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
$.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/orderview_header_data/<?php echo $order_id; ?>",
            dataType: "text",
            success: function(xml_order_header_details){
			
			$(xml_order_header_details).find('InvoiceHeader').each(function(){
			var rel_number = $(this).find('rel_numb').text();
		                //alert($(this).find('order_stat').text());
						$("#status_order").html($(this).find('order_stat').text());
						var shipcity= $(this).find('shipcity').text();
						var shipname= $(this).find('shipname').text();
						var ship_add1= $(this).find('shipadd1').text();
						var ship_add2= $(this).find('shipadd2').text();
						var ship_zip= $(this).find('shipzip').text();
						var ship_country= $(this).find('shipcountry').text();
						var status = $(this).find('order_stat').text();
						var shipst= $(this).find('shipst').text();
						var shipto_code= $(this).find('shipto_code').text();
						var ship_date= $(this).find('ship_date').text();
						var post_date= $(this).find('post_date').text();
						var order_numb= $(this).find('order_numb').text();
						var order_date= $(this).find('order_date').text();
						var amount= $(this).find('amount').text();
						var total_tax= $(this).find('total_tax').text();
						var shipping_charge= $(this).find('shipping_charge').text();
						var invoice_numb= $(this).find('invoice_numb').text();
						var handling_charges= $(this).find('handling_charge').text();
						var carrier= $(this).find('carr_code').text();
						var billcity= $(this).find('billcity').text();
						var billname= $(this).find('billname').text();
						var billadd1= $(this).find('billadd1').text();
						var billadd2= $(this).find('billadd2').text();
						var billadd3= $(this).find('billadd3').text();
						var billzip= $(this).find('billzip').text();
						var billcountry= $(this).find('billcountry').text();
						var billst= $(this).find('billst').text();
						var billto_code= $(this).find('billto_code').text();
						var error = $(this).find('error').text();
                        var pay_type = $(this).find('pay_type').text();
						var tracking_number = $(this).find('tracker_no').text();
						var order_invoic_diff = "";
					        var inv_order_open_diff = "";
						if(invoice_numb!="")
						{
						order_invoic_diff = "<p class='text-uppercase text-strong mb-10 custom-font'>Details</p>";
						inv_order_open_diff ="<li><strong>Invoice Number: </strong>"+invoice_numb+"</li>";
						
						if(error == "Error")
						{
									$("#order_details").html("No Response - Cannot process the data.");
			
						
						}else{
		                $("#order_details").html(order_invoic_diff+"<ul class='list-unstyled text-default lt mt-10'> "+inv_order_open_diff+"<li><strong>Order Number: </strong>"+order_numb+"</li><li><strong>Order Date: </strong> "+order_date+"</li><li><strong>Estimated Ship Date: </strong> "+ship_date+"</li><li><strong>Post Date: </strong>"+post_date+"</li><ul class='list-unstyled text-default lt mb-20'></ul></ul>");
                        $("#order_details1").html(order_invoic_diff+"<ul class='list-unstyled text-default lt mb-20'><li><strong>Tax Amount: </strong> $ "+total_tax+"</li><li><strong>Shipping Charges: </strong>$ "+shipping_charge+"</li><li><strong>Handling Charges: </strong>$ "+handling_charges+"</li><li><strong>Total Amount: </strong> $"+Number(amount).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</li><li><strong>Payment Type: </strong>"+pay_type+"</li><li><strong>Carrier: </strong> <a href='https://www.fedex.com/apps/fedextrack/?action=track&trackingnumber="+tracking_number.trim()+"&cntry_code=us' target='_blank'>"+carrier+"</a></li></ul></ul>");
						$("#shipping").html("<p class='text-uppercase text-strong mb-10 custom-font'>SHIPPING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+shipname+"</li><li>"+ship_add1+"</li><li>"+ship_add2+"</li><li>"+shipst+"</li><li>"+shipcity+" - "+ship_zip+"</li><li>"+ship_country+"</li></ul>");						
						$("#billing").html("<p class='text-uppercase text-strong mb-10 custom-font'>BILLING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+billname+"</li><li>"+billadd1+"</li><li>"+billadd2+"</li><li>"+billadd3+"</li><li>"+billcity+"</li><li>"+billst+" - "+billzip+"</li><li>"+billcountry+"</li></ul>");
						$("#order_number").html(order_numb.trim());
						var full_order_number = order_numb.trim()+"-"+rel_number.trim();
						var download = 2;
						$("#pdf_id").html("<a href='javascript:void(0)' onclick='send_email_pdf("+order_numb.trim()+","+rel_number+",1)'   class='btn btn-primary  mb-10'>Email PDF</a>");
						$("#export_to_pdf").html("<a href='<?php echo base_url()?>index.php/welcome/pdf/"+full_order_number+"/"+rel_number+"/"+download+"'  class='btn btn-primary  mb-10'>Export to PDF</a>");
						
						}
						
						
						}else
						{
						  inv_order_open_diff = "";
						  order_invoic_diff = "<p class='text-uppercase text-strong mb-10 custom-font'>Details</p>";
						if(error == "Error")
						{
						       $("#order_details").html("No Response - Cannot process the data.");
						}else{
								$("#order_details").html(order_invoic_diff+"<ul class='list-unstyled text-default lt mb-20'>"+inv_order_open_diff+"<li><strong>Order Number: </strong>"+order_numb+"</li><li><strong>Order Date: </strong> "+order_date+"</li><li><strong>Estimated Ship Date: </strong> "+ship_date+"</li><li><strong>Post Date: </strong> "+post_date+"</li><li><strong>Carrier: </strong>"+carrier+"</li><li><strong>Payment Type: </strong>"+pay_type+"</li><li><strong>Estimated Total Amount: </strong>$ "+Number(amount).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</li></ul>");
								$("#order_details1").css("display","none");
								$("#shipping").html("<p class='text-uppercase text-strong mb-10 custom-font'>SHIPPING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+shipname+"</li><li>"+ship_add1+"</li><li>"+ship_add2+"</li><li>"+shipst+"</li><li>"+shipcity+" - "+ship_zip+"</li><li>"+ship_country+"</li></ul>");
								$("#billing").html("<p class='text-uppercase text-strong mb-10 custom-font'>BILLING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+billname+"</li><li>"+billadd1+"</li><li>"+billadd2+"</li><li>"+billadd3+"</li><li>"+billcity+"</li><li>"+billst+" - "+billzip+"</li><li>"+billcountry+"</li></ul>");
								$("#order_number").html(order_numb.trim());
								var full_order_number = order_numb.trim()+"-"+rel_number.trim();
								var download = 2;
								$("#pdf_id").html("<a href='javascript:void(0)' onclick='send_email_pdf("+order_numb.trim()+","+rel_number+",1)'   class='btn btn-primary btn-sm mb-10'>Email PDF</a>");
								$("#export_to_pdf").html("<a href='<?php echo base_url()?>index.php/welcome/pdf/"+full_order_number+"/"+rel_number+"/"+download+"'  class='btn btn-primary btn-sm mb-10'>Export to PDF</a>");
								
						}
						
						
						}
						
						
						
						});
						
		
			
			}

    });   

}	


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
function send_email_pdf(ordersnumber,relnumber)
{

document.getElementById("sendemail").style.display = 'block';

$("#sendemail").html("<div class='col-md-8 no-padding'> <input type='email' placeholder='Email' name ='email' id='email' class='form-control'> </div><div class='col-md-3 no-padding ml-10'><button class='btn btn-primary btn-sm  mb-10' onclick='sendfinalemail("+ordersnumber+","+relnumber+")' type='button'>Send</button> </div>");
						
//alert(ordersnumber);
//alert(relnumber);


}

</script>

<script type="text/javascript">
function sendfinalemail(ordersnumber,relnumber)
{
var email = document.getElementById("email").value;
var finalemail = email.replace(/@/g,'ZZZ');

location.href='<?php echo base_url();?>index.php/welcome/pdf/'+ordersnumber+'-00'+relnumber+'/'+finalemail;

document.getElementById("sendemail").style.display = 'none';

}
</script>

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

    </body>
</html>