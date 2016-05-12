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
		<script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.scrolltabs.js"></script>	
	 <script src="<?php echo base_url()?>assets/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script> 
       
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
           <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
      <script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>
   
        <!--/ vendor javascripts -->




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
            
	  var test1 = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_orders/1",
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
				var tracker_no = $(this).find('tracker_no').text();
				var error = $(this).find('error').text();
				
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);
			   if(error!="Error"){
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+orderNumber+"'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'>"+order_date+"</td><td style='widtd:150px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:150px;'>"+order_status+"</td><td style='widtd:150px;'> <a href='<?php echo base_url()?>index.php/welcome/composemessage/askq/"+orderNumber+"/"+po_number.trim()+"/"+order_status+"'>? </a></td></tr>"); }
                 //datatables();           
		   });
		   
		    var table4 = $('#orders-list').DataTable({
            "language": {"emptyTable": "No Data Found."},
                    "order": [[1, "desc"]],			
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var colvis = new $.fn.dataTable.ColVis(table4);

                $(colvis.button()).insertAfter('#colVis');
                $(colvis.button()).find('button').addClass('btn btn-default').removeClass('ColVis_Button');

                var tt = new $.fn.dataTable.TableTools(table4, {
                    sRowSelect: 'single',
                    "aButtons": [
                        'copy',
                        'print', {
                            'sExtends': 'collection',
                            'sButtonText': 'Save',
                            'aButtons': [{
               'sExtends': 'csv',
               'sTitle': 'Open Orders'
           },
{
               'sExtends': 'xls',
               'sTitle': 'Open Orders'
           }, {
               'sExtends': 'pdf',
               'sTitle': 'Open Orders'
           }]
                        }
                    ],
                    "sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                });

                $(tt.fnContainer()).insertAfter('#tableTools');
		    /* $('#orders-list').DataTable({
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
				});*/
            },
            error: function() {
            $('#orders-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
            }
        });
    });    

           
        </script>
       <script type="text/javascript">
function searchbydates()
{
var data = $('#orders-list').dataTable();
data.fnDestroy();

 var test1 = "";
 var fromdate = document.getElementById("from").value;
 var todate =document.getElementById("to").value;
 var order_id = document.getElementById("order_id").value;
 var invoicenumber = " ";
 if(order_id==""){
 //alert("t");
 order_id = "%20";
 
 }
 
  
 //alert(order_id+" "+todate+" "+fromdate);
 var d = new Date(fromdate);
 var t = new Date(todate);
 var from = d.getMonth()+"-"+d.getDate()+"-"+d.getFullYear();
  var to = t.getMonth()+"-"+t.getDate()+"-"+t.getFullYear();
  
  if(from=="NaN-NaN-NaN")
  {
   
  from = "%20";
  
  }
  if(to=="NaN-NaN-NaN")
  {
  to = "%20";
  
  }
   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/orders_search_by_dates/"+from+"/"+to+"/"+order_id+"/"+invoicenumber+"/1",
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
				var tracker_no = $(this).find('tracker_no').text();
				
				
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);
			 
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+orderNumber+"'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'>"+order_date+"</td><td style='widtd:100px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:150px;'>"+order_status+"</td> <td style='widtd:150px;'> ? </td></tr>"); 
                 //datatables();           
		   });
		  // $(".inline-controls").css("display","none");
		    //$(".dataTables_paginate").css("display","none");
			// $(".dataTables_info").css("display","none");
		   
		   var table4 = $('#orders-list').DataTable({
                "language": {"emptyTable": "No Data Found."},	
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var colvis = new $.fn.dataTable.ColVis(table4);

                $(colvis.button()).insertAfter('#colVis');
                $(colvis.button()).find('button').addClass('btn btn-default').removeClass('ColVis_Button');

                var tt = new $.fn.dataTable.TableTools(table4, {
                    sRowSelect: 'single',
                    "aButtons": [
                        'copy',
                        'print', {
                            'sExtends': 'collection',
                            'sButtonText': 'Save',
                            'aButtons': [{
               'sExtends': 'csv',
               'sTitle': 'Open Orders'
           },
{
               'sExtends': 'xls',
               'sTitle': 'Open Orders'
           }, {
               'sExtends': 'pdf',
               'sTitle': 'Open Orders'
           }]
                        }
                    ],
                    "sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                });

                $(tt.fnContainer()).insertAfter('#tableTools');
		     
            },
            error: function() {
            $('#orders-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
            }
        });



}
</script>


<script type="text/javascript">
function loadmore()
{
$.fn.dataTable.ext.errMode = 'none';
var data = $('#orders-list').dataTable();
data.fnDestroy();
$('#orders-list tbody').html("");
var count = document.getElementById("count").value;
var num_of_page = 25;
var total_count = parseInt(count)+(num_of_page);
document.getElementById("count").value = total_count;
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
            url: "<?php echo base_url()?>index.php/welcome/all_orders/1/"+total_count,
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
				var tracker_no = $(this).find('tracker_no').text();
				var error = $(this).find('error').text();
				
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);
			   if(error!="Error"){
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+orderNumber+"'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'>"+order_date+"</td><td style='widtd:150px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:150px;'>"+order_status+"</td><td style='widtd:150px;'> ? </td></tr>"); }
                 //datatables();           
		   });
		   
		    var table4 = $('#orders-list').DataTable({
                "language": {"emptyTable": "No Data Found."},	
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ]
                });

                var colvis = new $.fn.dataTable.ColVis(table4);

                $(colvis.button()).insertAfter('#colVis');
                $(colvis.button()).find('button').addClass('btn btn-default').removeClass('ColVis_Button');

                var tt = new $.fn.dataTable.TableTools(table4, {
                    sRowSelect: 'single',
                    "aButtons": [
                        'copy',
                        'print', {
                            'sExtends': 'collection',
                            'sButtonText': 'Save',
                            'aButtons': [{
               'sExtends': 'csv',
               'sTitle': 'Open Orders'
           },
{
               'sExtends': 'xls',
               'sTitle': 'Open Orders'
           }, {
               'sExtends': 'pdf',
               'sTitle': 'Open Orders'
           }]
                        }
                    ],
                    "sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                });

                $(tt.fnContainer()).insertAfter('#tableTools');

				
            },
            error: function() {
            $('#orders-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
            }
        });


}


</script>


        <!--/ Page Specific Scripts -->


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