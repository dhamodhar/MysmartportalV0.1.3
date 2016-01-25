        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
 
        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>

       
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
           <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
     



   
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
	  $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_orders",
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
                $(xml).find('order').each(function(){
				
                var orderNumber= $(this).find('order_number').text();
				var order_date= $(this).find('order_date').text();
				var po_number= $(this).find('po_number').text();
				var invoice_number= $(this).find('invoice_number').text();
				var invoice_amount= $(this).find('invoice_amount').text();
				var ship_city= $(this).find('ship_city').text();
				var ship_state= $(this).find('ship_state').text();
				var order_status= $(this).find('order_status').text();
				
				
				
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);
			   
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+orderNumber+"'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'><a href=<?php echo base_url()?>index.php/welcome/invoice_view/"+invoice_number+">"+invoice_number+"</a></td><td style='widtd:150px;'>$ "+invoice_amount+"</td><td style='widtd:150px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:100px;'>"+order_status+"</td></tr>");
                 //datatables();           
		   });
		     $('#orders-list').DataTable({
                  "bSort": false
				});
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
    });    

           
        </script>
        <script type="text/javascript">
function searchbydates()
{
$('#orders-list').DataTable( {
    destroy: true,
    searching: false
} );
 var test1 = "";
 var fromdate = document.getElementById("from").value;
 var todate =document.getElementById("to").value;
 var order_id = document.getElementById("order_id").value;
 var invoicenumber = document.getElementById("invoice_number").value;
 if(order_id==""){
 //alert("t");
 order_id = "%20";
 
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
  //alert("month"+(d.getMonth()+1));
  if(from=="NaN-NaN-NaN")
  {
   
  from = "%20";
  
  }
  if(to=="NaN-NaN-NaN")
  {
  to = "%20";
  
  }
   $(document).ajaxStart(function(){
   $('#orders-list tbody').html("");
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/orders_search_by_dates/"+from+"/"+to+"/"+order_id+"/"+invoicenumber+"/0",
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
			$('#orders-list tbody').html("");
                $(xml).find('order').each(function(){
				
                var orderNumber= $(this).find('order_number').text();
				var order_date= $(this).find('order_date').text();
				var po_number= $(this).find('po_number').text();
				var invoice_number= $(this).find('invoice_number').text();
				var invoice_amount= $(this).find('invoice_amount').text();
				var ship_city= $(this).find('ship_city').text();
				var ship_state= $(this).find('ship_state').text();
				var order_status= $(this).find('order_status').text();
				
				
				
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);
			   
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+orderNumber+"'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'><a href=<?php echo base_url()?>index.php/welcome/invoice_view/"+invoice_number+">"+invoice_number+"</a></td><td style='widtd:150px;'>$ "+invoice_amount+"</td><td style='widtd:150px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:100px;'>"+order_status+"</td></tr>");
                 //datatables();           
		   });
		     
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });



}
</script>



        <!--/ Page Specific Scripts -->


  <script>
            $(window).load(function(){

var dateToday = new Date();
                $('#from').datetimepicker();
                 $('#to').datetimepicker();
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