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
        <script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
     
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
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
	  var test1 = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_past_invoices",
            dataType: "text",
            success: function(xml){
                $(xml).find('Invoice').each(function(){
				
                var invoice_numb= $(this).find('invoice_numb').text();
				var billto_code= $(this).find('billto_code').text();
				//var carr_code= $(this).find('carr_code').text();
				var billname= $(this).find('billname').text();
				var inv_date= $(this).find('inv_date').text();
				var due_date= $(this).find('due_date').text();
				var amount= $(this).find('open_amount').text();
				var order_numb= $(this).find('order_numb').text();
                          var cust_po= $(this).find('cust_po').text();
                                //var tracker_no= $(this).find('tracker_no').text();
				var error =  $(this).find('error').text();
                var traking_link = "";
			   if(error!="Error"){
			   
			var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
				
			        var encodedString = Base64.encode(invoice_numb);
				    var finalordernumber = encodeURIComponent(String(encodedString));
			   
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href=<?php echo base_url()?>index.php/welcome/invoice_view/"+finalordernumber+">"+invoice_numb+"</a></td><td style='widtd:150px;'>"+inv_date+"</td><td style='widtd:150px;'>$ "+Number(amount).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</td><td style='widtd:200px;'>"+due_date+"</td><td style='widtd:200px;'>"+cust_po+"</td><td style='widtd:200px;'>"+order_numb+"</td></tr>");
                                 }				 
		                     });
		   
		   
		     var table4 = $('#orders-list').DataTable({
                "language": {"emptyTable": "No Data Found."},
				"order": [[1, "desc"]],
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [2,"desc" ] }
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
                'sTitle': 'Invoices'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Invoices'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Invoices'
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
    });    

           
        </script>
        <!--/ Page Specific Scripts -->

  <script type="text/javascript">
function searchbydates()
{
var data = $('#orders-list').dataTable();
data.fnDestroy();
//var table4 = $('#orders-list').DataTable();
 var invoicenumber = document.getElementById("invoice_number").value;
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
 	$('#orders-list tbody').html("");
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/invoice_search/"+from+"/"+to+"/"+invoicenumber,
            dataType: "text",
            success: function(xml){
			//alert(xml);
			$('#orders-list tbody').html("");
                $(xml).find('invoice').each(function(){
				
                var invoice_numb= $(this).find('invoice_numb').text();
				var carr_code= $(this).find('carr_code').text();
				var billto_code= $(this).find('billto_code').text();
				var billname= $(this).find('billname').text();
				var inv_date= $(this).find('inv_date').text();
				var due_date= $(this).find('due_date').text();
				var amount= $(this).find('amount').text();
				var status= $(this).find('entry_type').text();
			    var cust_po= $(this).find('cust_po').text();
                var tracker_no= $(this).find('tracker_no').text();
	 //alert(due.getMonth());
var duedate_month = "";	 
				
				var d= new Date(inv_date);
 var inv_date_final = d.getMonth()+"-"+d.getDate()+"-"+d.getFullYear();

					var due= new Date(due_date);
					if(due.getMonth()==0)
				{
				duedate_month = 1;
				
				}else
				{
				
				duedate_month = due.getMonth();
				}
                var due_date_final = duedate_month+"-"+due.getDate()+"-"+due.getFullYear();	

			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href=<?php echo base_url()?>index.php/welcome/invoice_view/"+invoice_numb+">"+invoice_numb+"</a></td><td style='widtd:150px;'>"+inv_date+"</td><td style='widtd:150px;'>$ "+Number(amount).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</td><td style='widtd:200px;'>"+due_date +"</td><td style='widtd:200px;'>"+tracker_no+"</td><td style='widtd:200px;'>"+cust_po+"</td></tr>");
      
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
                'sTitle': 'Invoices'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Invoices'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Invoices'
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
         
             
                
 $('#feed-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });
</script>


<script type="text/javascript">
function loadmore()
{
var data = $('#orders-list').dataTable();
data.fnDestroy();
$('#orders-list tbody').html("");
var count = document.getElementById("count").value;
var num_of_page = 25;
var total_count = parseInt(count)+(num_of_page);
document.getElementById("count").value = total_count;
		       var test1 = "";
			   $(document).ajaxStart(function(){
			          $("#wait").css("display", "block");
			    });
			 
			   $(document).ajaxComplete(function(){
			          $("#wait").css("display", "none");
			    });
				//alert(total_count);
				$.ajax({
					type: "GET",
					url: "<?php echo base_url()?>index.php/welcome/all_invoices/"+total_count,
					dataType: "text",
					success: function(xml){
					$('#orders-list tbody').html("");
						$(xml).find('Invoice').each(function(){
						
										var invoice_numb= $(this).find('invoice_numb').text();
										var billto_code= $(this).find('billto_code').text();
										var carr_code= $(this).find('carr_code').text();
										var billname= $(this).find('billname').text();
										var inv_date= $(this).find('inv_date').text();
										var due_date= $(this).find('due_date').text();
										var amount= $(this).find('amount').text();
										var status= $(this).find('entry_type').text();
										var cust_po= $(this).find('cust_po').text();
										var tracker_no= $(this).find('tracker_no').text();
										var error =  $(this).find('error').text();

											 if(error!="Error")
											 {	
												var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}				
												var encodedString = Base64.encode(invoice_numb);
												var finalordernumber = encodeURIComponent(String(encodedString));
											 
												  $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href=<?php echo base_url()?>index.php/welcome/invoice_view/"+finalordernumber+">"+invoice_numb+"</a></td><td style='widtd:150px;'>"+inv_date+"</td><td style='widtd:150px;'>$ "+Number(amount).toLocaleString(undefined,{minimumFractionDigits: 2,maximumFractionDigits: 2})+"</td><td style='widtd:200px;'>"+due_date+"</td><td style='widtd:200px;'>"+tracker_no+"</td><td style='widtd:200px;'>"+cust_po+"</td></tr>");
											 }				 
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
                'sTitle': 'Invoices'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Invoices'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Invoices'
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

<script type="text/javascript">
$(document).ready(function(){
        $(document).on("click", ".popover .close" , function(){
        $(this).parents(".popover").popover('hide');
    });
});
</script>

    </body>
</html>