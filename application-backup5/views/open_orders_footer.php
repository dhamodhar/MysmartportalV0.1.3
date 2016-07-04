      
<style>
.progress{}


.progress.hide {
    opacity: 0;
    transition: opacity 1.3s;
}
</style>	  <!-- ============================================
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
       <script src="<?php echo base_url()?>assets/js/feedback.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
           <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
      <script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>
   
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->
     <script src="<?php echo base_url()?>assets/progressbar/progress.js"></script>

<script>
$(document).ready(function(){
      window.setInterval(function(){
document.getElementById("savemsg").style.display = 'none';
if(document.getElementById("copymsg").style.display == 'block')
{
document.getElementById("copymsg").style.display = 'none';

}

}, 8000);
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
		//document.getElementById("prgs").style.display='none';
     });
	    var progress = $(".loading-progress").progressTimer({
        timeLimit: 20,
        onFinish: function () {
		document.getElementById("progress").style.display = 'none';
            
        }
    });
	 
        $.ajax({		
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_orders/1",
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
			var i = 0;
			
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
				var act_ship_date = $(this).find('act_ship_date').text();
				var error = $(this).find('error').text();
				 i = $(this).find('RecCount').text();
				
				
				if(order_status == "Printed and Posted")
				{
				order_status = "Delivered";
				
				}
                //var sPublisher = $(this).find('Publisher').text();
               //alert(sTitle);
			   if(error!="Error"){
			   if(orderNumber!="")
			   {
			   var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
				
				// Encode the String
				var encodedString = Base64.encode(orderNumber);
				var finalordernumber = encodeURIComponent(String(encodedString));

			   if(orderNumber!="")
			   {
			    $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+finalordernumber+"' style='color:#0D7BDE;text-decoration: underline !important;'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'>"+act_ship_date+"</td><td style='widtd:150px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:150px;'>"+order_status+"</td><td style='widtd:150px;'> <a href='<?php echo base_url()?>index.php/welcome/composemessage/askq/"+orderNumber+"/"+po_number.trim()+"/"+order_status+"'><img src='http://lowrysmartportal.com/staging/assets/questionmark.png'> </a></td></tr>"); }
               
			   
			   }
			     
			   
			   }
			  //datatables(); 
		  
		   });
		   
		    var table4 = $('#orders-list').DataTable({
            "language": {"emptyTable": "No Data Found."},
                    "order": [[1, "desc"]],	
                      "bFilter": false,
					   buttons: {
									copyTitle: 'Ajouté au presse-papiers',
									copyKeys: 'Appuyez sur <i>ctrl</i> ou <i>\u2318</i> + <i>C</i> pour copier les données du tableau à votre presse-papiers. <br><br>Pour annuler, cliquez sur ce message ou appuyez sur Echap.',
									copySuccess: {
										_: 'Copiés %d rangs',
										1: 'Copié 1 rang'
									}
								},					  
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
$('#orders-list_info').prepend("Total entries: "+i+"<br>");
$("#ToolTables_orders-list_2").hide();
//$("#ToolTables_orders-list_1").hide();
            },
            error: function() {
            $('#orders-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
            }
        }).done(function(){
		
		if($('#progress').css('display') == "block")
		{
		   progress.progressTimer('complete');
		}
		
		
        
    });
	
	
    });    

           
        </script>
       <script type="text/javascript">
function searchbydates()
{

		$.fn.dataTable.ext.errMode = 'none';
		var data = $('#orders-list').dataTable();
		data.fnDestroy();
		$('#orders-list tbody').html("");


		 var test1 = "";
		 var columntype = document.getElementById("columntype").value;
		 
		 var fromdate = "";
		 var todate = "";
		 var order_id = "";
		
		 if(columntype == "Order Date")
		 {
		
		   fromdate = document.getElementById("from").value;
		 
		   todate = document.getElementById("to").value;
		 }else
		 {
		   order_id = document.getElementById("order_id").value;
		 }
		 
		 
		
		
		 
		 //alert(fromdate);
		
		
		 var invoicenumber = " ";
		 
			 if(order_id=="")
			 {
			 order_id = "%20";
			 }
			 
			
 
			  var d = new Date(fromdate);
			  var t = new Date(todate);
			  var from = (d.getMonth()+1)+"-"+d.getDate()+"-"+d.getFullYear();
			  var to = (t.getMonth()+1)+"-"+t.getDate()+"-"+t.getFullYear();
             if(from=="")
			 {
			 from = "%20";
			 }
			 
			 if(to=="")
			 {
			 to = "%20";
			 }
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
				 //alert("<?php echo base_url()?>index.php/welcome/orders_search_by_dates/"+from+"/"+to+"/"+order_id+"/"+invoicenumber+"/1/"+columntype);
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/orders_search_by_dates/"+from+"/"+to+"/"+order_id+"/"+invoicenumber+"/1/"+columntype,
            dataType: "text",
            success: function(xml){
			//alert(xml);
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
				var act_ship_date = $(this).find('act_ship_date').text();
				  var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
				
				var encodedString = Base64.encode(orderNumber);
				var finalordernumber = encodeURIComponent(String(encodedString));
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+finalordernumber+"' style='color:#0D7BDE;text-decoration: underline !important;'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'>"+act_ship_date+"</td><td style='widtd:150px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:150px;'>"+order_status+"</td><td style='widtd:150px;'> <a href='<?php echo base_url()?>index.php/welcome/composemessage/askq/"+orderNumber+"/"+po_number.trim()+"/"+order_status+"'><img src='http://lowrysmartportal.com/staging/assets/questionmark.png'> </a></td></tr>");
         
		   });

		   
							   
									var table4 = $('#orders-list').DataTable({
									"language": {"emptyTable": "No Data Found."},	
									 "bFilter": false,
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
									
									$("#save").hide();
                                    //$("#ToolTables_orders-list_1").hide();
				
				
		   
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
			     var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}
				
			    var encodedString = Base64.encode(orderNumber);
				var finalordernumber = encodeURIComponent(String(encodedString));
			   
			   $('#orders-list tbody').append("<tr><td style='widtd:180px;'><a href='<?php echo base_url()?>index.php/welcome/order_view/"+finalordernumber+"' style='color:#0D7BDE;text-decoration: underline !important;'>"+orderNumber+"</a></td><td style='widtd:200px;'>"+order_date+"</td><td style='widtd:150px;'>"+po_number+"</td><td style='widtd:150px;'>"+order_date+"</td><td style='widtd:150px;'>"+ship_city+" / "+ship_state+"</td><td style='widtd:150px;'>"+order_status+"</td><td style='widtd:150px;'> <img src='http://lowrysmartportal.com/staging/assets/questionmark.png'> </td></tr>"); }
                 //datatables();           
		   });
		   
		    var table4 = $('#orders-list').DataTable({
                "language": {"emptyTable": "No Data Found."},
 "bFilter": false,				
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
                                    $("#save").hide();
                                   // $("#ToolTables_orders-list_1").hide();
				
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


<script>
function displyDate(selectedValue)
{

	if(selectedValue == "Order Date")
	{
			document.getElementById("date").style.display = 'block';
			document.getElementById("keyvalue").style.display = 'none';

	}else
	{
	document.getElementById("date").style.display = 'none';
	document.getElementById("keyvalue").style.display = 'block';
	
	}



}
</script>

<script type="text/javascript">
$(document).ready(function(){
        $(document).on("click", ".popover .close" , function(){
        $(this).parents(".popover").popover('hide');
    });
});
</script>
<script>
function saveexcel()
{
	document.getElementById("savemsg").style.display = 'block';
    window.open('<?php echo base_url()?>index.php/welcome/all_orders_to_csv', '_blank');
}
</script>
<script>
function printdata()
{
   var divToPrint=document.getElementById("orders-list");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}
</script>



    </body>
</html>