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

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
	<script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        
	<script src="<?php echo base_url()?>assets/js/jquery.scrolltabs.js"></script>	
	 <script src="<?php echo base_url()?>assets/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>	
		
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
           <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
         <script src="<?php echo base_url()?>assets/js/feedback.min.js"></script>
        <script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
        <!--/ vendor javascripts -->



        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->
 <script src="<?php echo base_url()?>assets/progressbar/progress.js"></script>

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
	      var progress = $(".loading-progress").progressTimer({
        timeLimit: 20,
        onFinish: function () {
		document.getElementById("progress").style.display = 'none';
            
        }
    });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_servicecontracts/Cancelled",
            dataType: "text",
            success: function(xml){
			var i = 0;
                $(xml).find('contracts').each(function(){
				
                var contract_number= $(this).find('contract_number').text();
				var start_date= $(this).find('start_date').text();
				var end_date= $(this).find('end_date').text();
				var description= $(this).find('description').text();
				
				var service_level= $(this).find('service_level').text();
				var contract_status= $(this).find('contract_status').text();
                var location= $(this).find('location').text();
                 var error =  $(this).find('error').text();   
                     var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}								
					 var encodedString = Base64.encode(contract_number);
				     var finalordernumber = encodeURIComponent(String(encodedString));
				
					if(error!="Error"){		   
			   $('#contracts-list tbody').append("<tr><td style='width:100px;'><a href='<?php echo base_url()?>index.php/welcome/assets/"+finalordernumber+"'>"+contract_number+"</a></td><td style='width:100px;'>"+start_date+"</td><td style='width:100px;'>"+end_date+"</td><td style='width:100px;'>"+description+"</td><td style='width:100px;'>"+service_level+"</td><td style='width:100px;'>"+location+"</td><td style='width:100px;'>"+contract_status+"</td></tr>");
                 //datatables(); 

                     }	
i++;					 
		   });
		     if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


	         var table4 = $('#contracts-list').DataTable({
"language": {"emptyTable": "No Data Found."},
 "bFilter": false,							
"aoColumnDefs": [
							  { 'bSortable': false, 'aTargets': [ "no-sort" ] }
							],
aaSorting: [[2, 'asc']]
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
                'sTitle': 'Renew Service contracts'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Renew Service contracts'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Renew Service contracts'
            }]
								}
							],
							"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                                                         
						});

						$(tt.fnContainer()).insertAfter('#tableTools');
						$('#contracts-list_info').prepend("Total entries: "+i+"<br>");
						
			}	
            },
            error: function() {
            $('#contracts-list').DataTable({
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
        <!--/ Page Specific Scripts -->

  <script type="text/javascript">
function searchbydates()
{
$.fn.dataTable.ext.errMode = 'none';
		var data = $('#contracts-list').dataTable();
		data.fnDestroy();
$('#contracts-list tbody').html(" ");
			

 var columntype = document.getElementById("columntype").value;
 
  var contract_number = "";
 var fromdate = "";
 var todate = "";
 
 if(columntype == "Date")
 {
    fromdate = document.getElementById("from").value;
    todate =document.getElementById("to").value;
 }else
 {
    contract_number = document.getElementById("invoice_number").value; 
 }
				 
				  if(contract_number=="")
				  {
					contract_number = "%20";
				  }
				  if(contract_number==""){
				 //alert("t");
				 contract_number = "%20";
				 
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
            
			  
			  
				 $(document).ajaxStart(function(){
					$("#wait").css("display", "block");
					 });
					 
					 $(document).ajaxComplete(function(){
					$("#wait").css("display", "none");
					 });
					// alert(from);
						$.ajax({
							type: "GET",
							url: "<?php echo base_url()?>index.php/welcome/all_servicecontracts_search/Cancelled/"+from+"/"+to+"/"+contract_number+"/"+columntype,
							dataType: "text",
							success: function(xml){
                             $('#contracts-list tbody').html(" ");
								$(xml).find('contracts').each(function(){
								
							        var contract_number= $(this).find('contract_number').text();
									var start_date= $(this).find('start_date').text();
									var end_date= $(this).find('end_date').text();
									var description= $(this).find('description').text();
									
									var service_level= $(this).find('service_level').text();
									var contract_status= $(this).find('contract_status').text();
									var location= $(this).find('location').text();
									var error =  $(this).find('error').text();     
                     var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}								
					 var encodedString = Base64.encode(contract_number);
				     var finalordernumber = encodeURIComponent(String(encodedString));
				
									
					if(error!="Error"){		   
			   $('#contracts-list tbody').append("<tr><td style='width:100px;'><a href='<?php echo base_url()?>index.php/welcome/assets/"+finalordernumber+"'>"+contract_number+"</a></td><td style='width:100px;'>"+start_date+"</td><td style='width:100px;'>"+end_date+"</td><td style='width:100px;'>"+description+"</td><td style='width:100px;'>"+service_level+"</td><td style='width:100px;'>"+location+"</td><td style='width:100px;'>"+contract_status+"</td></tr>");
                 //datatables(); 

                     }	;           
						   });
							  if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


	         var table4 = $('#contracts-list').DataTable({
"language": {"emptyTable": "No Data Found."},	
 "bFilter": false,					
"aoColumnDefs": [
							  { 'bSortable': false, 'aTargets': [ "no-sort" ] }
							],
aaSorting: [[2, 'asc']]
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
                'sTitle': 'Renew Service contracts'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Renew Service contracts'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Renew Service contracts'
            }]
								}
							],
							"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                                                       
						});

						$(tt.fnContainer()).insertAfter('#tableTools');
						
			}	
							},
							error: function() {
							$('#contracts-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
							}
						});



}
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


  <script type="text/javascript">
  function get_status_user()
  {
  $.fn.dataTable.ext.errMode = 'none';
		var data = $('#contracts-list').dataTable();
		data.fnDestroy();
$('#contracts-list tbody').html(" ");
  $('#orders-list').DataTable( {
					destroy: true,
					searching: false
				} );
       var user_status = document.getElementById("user_status").value;
         var test1 = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_servicecontracts/"+user_status,
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
			$('#contracts-list tbody').html(" ");
                $(xml).find('contracts').each(function(){
				
                var contract_number= $(this).find('contract_number').text();
				var start_date= $(this).find('start_date').text();
				var end_date= $(this).find('end_date').text();
				var description= $(this).find('description').text();
				
				var service_level= $(this).find('service_level').text();
				var contract_status= $(this).find('contract_status').text();
                var location= $(this).find('location').text();
                 var error =  $(this).find('error').text(); 
				                      var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}								
					 var encodedString = Base64.encode(contract_number);
				     var finalordernumber = encodeURIComponent(String(encodedString));
					if(error!="Error"){		   
			   $('#contracts-list tbody').append("<tr><td style='width:100px;'><a href='<?php echo base_url()?>index.php/welcome/assets/"+finalordernumber+"'>"+contract_number+"</a></td><td style='width:100px;'>"+start_date+"</td><td style='width:100px;'>"+end_date+"</td><td style='width:100px;'>"+description+"</td><td style='width:100px;'>"+service_level+"</td><td style='width:100px;'>"+location+"</td><td style='width:100px;'>"+contract_status+"</td></tr>");
                 //datatables(); 

                     }				 
		   });
		     if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


	         var table4 = $('#contracts-list').DataTable({
"language": {"emptyTable": "No Data Found."},							
"aoColumnDefs": [
							  { 'bSortable': false, 'aTargets': [ "no-sort" ] }
							],
aaSorting: [[2, 'asc']]
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
                'sTitle': 'Renew Service contracts'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Renew Service contracts'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Renew Service contracts'
            }]
								}
							],
							"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                                                       
						});

						$(tt.fnContainer()).insertAfter('#tableTools');
						
			}	
            },
            error: function() {
            $('#contracts-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
            }
        });
  
  }
  
  </script>

  
  <script type="text/javascript">
  function loadmore()
  {
     $.fn.dataTable.ext.errMode = 'none';
		var data = $('#contracts-list').dataTable();
		data.fnDestroy();
		$('#contracts-list tbody').html("");
		var count = document.getElementById("count1").value;
		var num_of_page = 25;
		var total_count = parseInt(count)+(num_of_page);
		document.getElementById("count1").value = total_count;
		
	  var test1 = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_contracts_to_renew/"+total_count,
            dataType: "text",
            success: function(xml){
			//alert(xml);
			//$('#orders-list tbody').append(xml);
                $(xml).find('servicecontractlist').each(function(){
				
                var contract_number= $(this).find('contract_number').text();
				var start_date= $(this).find('start_date').text();
				var end_date= $(this).find('end_date').text();
				var description= $(this).find('description').text();
				
				var service_level= $(this).find('service_level').text();
				var contract_status= $(this).find('contract_status').text();
                var location= $(this).find('location').text();
                 var error =  $(this).find('error').text();  
 var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}								
					 var encodedString = Base64.encode(contract_number);
				     var finalordernumber = encodeURIComponent(String(encodedString));				 
					if(error!="Error"){		   
			   $('#contracts-list tbody').append("<tr><td style='width:100px;'><a href='<?php echo base_url()?>index.php/welcome/assets/"+finalordernumber+"'>"+contract_number+"</a></td><td style='width:100px;'>"+start_date+"</td><td style='width:100px;'>"+end_date+"</td><td style='width:100px;'>"+description+"</td><td style='width:100px;'>"+service_level+"</td><td style='width:100px;'>"+location+"</td><td style='width:100px;'>"+contract_status+"</td></tr>");
                 //datatables(); 

                     }				 
		   });
		     if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


	         var table4 = $('#contracts-list').DataTable({
"language": {"emptyTable": "No Data Found."},							
"aoColumnDefs": [
							  { 'bSortable': false, 'aTargets': [ "no-sort" ] }
							],
aaSorting: [[2, 'asc']]
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
                'sTitle': 'Renew Service contracts'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Renew Service contracts'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Renew Service contracts'
            }]
								}
							],
							"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
                                                        
						});

						$(tt.fnContainer()).insertAfter('#tableTools');
						
			}	
            },
            error: function() {
           $('#contracts-list').DataTable({
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
<script>
function displyDate(selectedValue)
{

	if(selectedValue == "Contract End Date")
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
    </body>
</html>