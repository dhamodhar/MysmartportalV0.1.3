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




        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
	
			   
			   <script>

 $(document).ready(function(){
   //initialize datatable
              
	  var test1 = "";
	  var invoice_numbdata = "";
	  var order_tracking_number;
	  var order_number_final="";
	  var user_rel_number = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
	  $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/invoiceview_header_data/<?php echo $invoicenumber;?>",
            dataType: "text",
            success: function(xml_order_header_details){
			
			$(xml_order_header_details).find('InvoiceHeader').each(function(){
			var rel_number = $(this).find('rel_numb').text();
			user_rel_number = rel_number;
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
						order_number_final = order_numb;
						var order_date= $(this).find('order_date').text();
						var amount= $(this).find('amount').text();
						var total_tax= $(this).find('total_tax').text();
						var shipping_charge= $(this).find('shipping_charge').text();
						var invoice_numb= $(this).find('invoice_numb').text();
						invoice_numbdata = invoice_numb;
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
						var cust_po= $(this).find('cust_po').text();
						var error = $(this).find('Error').text();
                        var pay_type = $(this).find('pay_type').text();
                        var tracker_no = $(this).find('tracker_no').text();
						var trackdata = "";
						
						if(tracker_no == "NO TRACK")
						{
						
						trackdata = "";
						
						}
						if(error == "Error")
						{
						$("#shipping").html("No Response - Cannot process the data.");
						}else{
						$("#shipping").html("<p class='text-uppercase text-strong mb-10 custom-font'>SHIPPING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+shipname+"</li><li>"+ship_add1+"</li><li>"+ship_add2+"</li><li>"+shipcity+"</li><li>"+shipst+" - "+ship_zip+"</li><li>"+ship_country+"</li></ul>");
						$("#order_details").html("<p class='text-uppercase text-strong mb-10 custom-font'>INVOICE SUMMARY</p><ul class='list-unstyled text-default lt mb-20'><li><strong>Customer PO: </strong> "+cust_po.trim()+"</li><li><strong>Order Number: </strong>"+order_numb+"</li><li><strong>Invoice Number: </strong>"+invoice_numb+"</li><li><strong>Order Date: </strong> "+order_date+"</li><li><strong>Shipped Date: </strong> "+ship_date+"</li></ul>");
						$("#order_details1").html("<p class='text-uppercase text-strong mb-10 custom-font'>TAX, SHIPPING & HANDLING</p><ul class='list-unstyled text-default lt mb-20'><li><strong>Post Date: </strong> "+post_date+"</li><li><strong>Tax Amount: </strong> $ "+Number(total_tax).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</li><li><strong>Shipping Charges: </strong>$"+Number(shipping_charge).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</li><li><strong>Total Invoice: </strong>$"+Number(amount).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</li><li><strong>Carrier: </strong> "+carrier+"</li><li><strong>Payment Type: </strong>"+pay_type+"</li></ul>");
						
						$("#billing").html("<p class='text-uppercase text-strong mb-10 custom-font'>BILLING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+billname+"</li><li>"+billadd1+"</li><li>"+billadd2+"</li><li>"+billadd3+"</li><li>"+billcity+"</li><li>"+billst+" - "+billzip+"</li><li>"+billcountry+"</li></ul>");
                        $("#order_number").html(invoice_numb);
                             }
							 
					    var full_order_number = order_numb.trim()+"-"+rel_number.trim();
						var download = 5;
						$("#pdf_id").html("<a href='javascript:void(0)' onclick='send_email_pdf("+invoice_numb.trim()+","+rel_number+",1)'   class='btn btn-primary mt-10 mb-10'>Email PDF</a>");
						$("#export_to_pdf").html("<a href='<?php echo base_url()?>index.php/welcome/pdf/"+invoice_numb.trim()+"/"+rel_number+"/"+download+"'  class='btn btn-primary mt-10 mb-10'>Export to PDF</a>");
						
						});
						var rel_number1 = $(this).find('rel_numb').text();
					
						displayorder_details(order_number_final,user_rel_number,invoice_numbdata.trim());
		
			
			}

    });   
       
        
    });    

function displayorder_details(order_number_final,rel_number,invoice_numb)
{
var tt = order_number_final.trim()+"-"+rel_number;
 $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
 $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/orderview_data/"+invoice_numb+"/invoice",
            dataType: "text",
            success: function(xml){

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
				var act_ship_date= $(this).find('act_ship_date').text();
				order_tracking_number = $(this).find('tracker_no').text();
				
 
			   $("#count").html("1");
			  //alert(extended_price);
			  if(orderNumber!="")
			  {
			    $('#orders-list tbody').append("<tr><td>"+item_no+"</td><td>"+part_code+"</td><td>"+part_desc+"</td><td>"+qty+"</td><td >"+uom+"</td><td style='text-align:right;'>$ "+Number(item_price).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</td><td style='text-align:right;'>$ "+Number(extended_price).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</td><td style='text-align:right;'>"+act_ship_date+"</td></tr>");
     
			  
			  }
			 
		   });
		   
		      $('#orders-list').DataTable({
"language": {"emptyTable": "No Data Found."},	
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

$("#sendemail").html("<div class='col-md-6 mt-10 mb-10'> <input type='email' placeholder='Email' name ='email' id='email' class='form-control'> </div><div class='float-left no-padding mt-10 mb-10'><button class='btn btn-primary  mb-10' onclick='sendfinalemail("+ordersnumber+","+relnumber+")' type='button'>Send</button> </div>");
						
//alert(ordersnumber);
//alert(relnumber);


}

</script>

<script type="text/javascript">
function sendfinalemail(ordersnumber,relnumber)
{

var email = document.getElementById("email").value;
var finalemail = email.replace(/@/g,'ZZZ');
document.getElementById("sendemail").style.display = 'none';

 $.ajax({
					type: "GET",
					url: '<?php echo base_url();?>index.php/welcome/pdf/'+ordersnumber+'/'+finalemail+'/3',
					dataType: "text",
					success: function(xml){
				document.getElementById("msg").style.display = 'block';
					
                  //$("#num_un_read").html("0");
				  
					}

			  });

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