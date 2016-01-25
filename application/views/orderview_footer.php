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

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>

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
				order_tracking_number = $(this).find('tracker_no').text();
				
 
			   $("#count").html("1");
			  
			   $('#orders-list tbody').append("<tr><td>"+item_no+"</td><td>"+part_code+"</td><td>"+qty+"</td><td >"+uom+"</td><td >"+item_price+"</td><td>"+extended_price+"</td><td><span class='label label-danger'>"+item_status+"</span></td><td>"+part_desc+"</td></tr>");
                 //datatables();           
		   });
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
                    "pagingType": "input"
                   
                //*initialize datatable
				});
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
		
        displayorder_details();
    });    

          function displayorder_details()
{
 $(document).ajaxStart(function(){
    $("#wait1").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait1").css("display", "none");
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
						$("#shipping").html("<p class='text-uppercase text-strong mb-10 custom-font'>SHIPPING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+shipname+"</li><li>"+ship_add1+"</li><li>"+ship_add2+"</li><li>"+shipst+"</li><li>"+shipcity+" - "+ship_zip+"</li><li>"+ship_country+"</li></ul>");
						var order_numb= $(this).find('order_numb').text();
						var order_date= $(this).find('order_date').text();
						var amount= $(this).find('amount').text();
						var total_tax= $(this).find('total_tax').text();
						var shipping_charge= $(this).find('shipping_charge').text();
						var invoice_numb= $(this).find('invoice_numb').text();
						var handling_charges= $(this).find('handling_charge').text();
						var carrier= $(this).find('carr_code').text();
						$("#order_details").html("<p class='text-uppercase text-strong mb-10 custom-font'>Invoice Number(s)</p><ul class='list-unstyled text-default lt mb-20'><li><strong>Invoice Number : </strong>"+invoice_numb+"</li><li><strong>Order Number : </strong>"+order_numb+"</li><li><strong>Order Date : </strong> "+order_date+"</li><li><strong>Shipping Date : </strong> "+ship_date+"</li><li><strong>Post Date : </strong> "+post_date+"</li><li><strong>Tax Amount : </strong> $ "+total_tax+"</li><li><strong>Shipping Charges : </strong>$ "+shipping_charge+"</li><li><strong>Handling Charges : </strong>$ "+handling_charges+"</li><li><strong>Total Amount : </strong> $ "+amount+"</li><li><strong>Carrier : </strong> "+carrier+"</li></ul>");
						var billcity= $(this).find('billcity').text();
						var billname= $(this).find('billname').text();
						var billadd1= $(this).find('billadd1').text();
						var billadd2= $(this).find('billadd2').text();
						var billadd3= $(this).find('billadd3').text();
						var billzip= $(this).find('billzip').text();
						var billcountry= $(this).find('billcountry').text();
						var billst= $(this).find('billst').text();
						var billto_code= $(this).find('billto_code').text();
						$("#billing").html("<p class='text-uppercase text-strong mb-10 custom-font'>BILLING Address</p><ul class='list-unstyled text-default lt mb-20'><li>"+billname+"</li><li>"+billadd1+"</li><li>"+billadd2+"</li><li>"+billadd3+"</li><li>"+billcity+"</li><li>"+billst+" - "+billzip+"</li><li>"+billcountry+"</li></ul>");
$("#order_number").html(order_numb+'-'+rel_number);
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