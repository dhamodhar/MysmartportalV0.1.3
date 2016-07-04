<?php 
if($c_number == null)
{
$c_number == " ";
}
?>

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
 <script src="<?php echo base_url()?>assets/js/feedback.min.js"></script>
     
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
        <!--/ vendor javascripts -->


<script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>

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
  
  $("#backLink").click(function(event) {
    event.preventDefault();
    history.back(1);
});
  
  
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
	  var progress = $(".loading-progress").progressTimer({
        timeLimit: 20,
        onFinish: function () {
		document.getElementById("progress").style.display = 'none';
            
        }
    });
	  var totalrecars = "";
	//alert("<?php echo base_url()?>index.php/welcome/all_assets_under_contracts_api/<?php echo $c_number;?>");
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_assets_under_contracts_api/<?php echo $c_number;?>",
            dataType: "text",
            success: function(xml){
                      
                          $(xml).find('assetspage').each(function(){
				
                                var SerialNumber= $(this).find('SerialNumber').text();
								var Part_Number= $(this).find('Part_Number').text();
								var Part_Description= $(this).find('Part_Description').text();
								var Type= $(this).find('Type').text();
								var Device_Type= $(this).find('Device_Type').text();
								var contract_number= $(this).find('contract_number').text();
								var Start_Date= $(this).find('Start_Date').text();
                                var End_date= $(this).find('End_date').text();
                                var Contract_Status= $(this).find('Contract_Status').text(); 
                                var Options= $(this).find('Options').text();
                                var error =  $(this).find('error').text();             
                                var totreccount =  $(this).find('totreccount').text();   
									totalrecars	= totreccount;							
					
if(SerialNumber!="")
{
if(SerialNumber!="No Data")
{
    $('#assets-list tbody').append("<tr><td style='width:100px; text-align:center;'><a href='<?php echo base_url()?>index.php/welcome/servicerequest/"+SerialNumber+"'  title='New Service Request'><img src='http://lowrysmartportal.com/assets/newservice.png' style='width:33%'></a></td><td style='width:100px;'>"+SerialNumber+"</td><td style='width:100px;'>"+Part_Number+"</td><td style='width:100px;'>"+Part_Description+"</td><td style='width:100px;'>"+Device_Type+"</td><td style='width:100px;'>"+Type+"</td><td style='width:100px;'>"+contract_number+"</td><td style='width:100px;'>"+Start_Date+"</td><td style='width:100px;'>"+End_date+"</td><td style='width:100px;'>"+Contract_Status+"</td></tr>");
  }                  

}					
			       				 
		   });
		  
		   
		   
				 if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


			 var table4 = $('#assets-list').DataTable({
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
                'sTitle': 'Asset Inventory'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Asset Inventory'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Asset Inventory'
            }]
										}
									],
									"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
								});

								$(tt.fnContainer()).insertAfter('#tableTools');
								
					}	
					 $('#assets-list_info').prepend("Total entries: "+totalrecars+"<br>");
					 $("#ToolTables_assets-list_2").hide();
            },
            error: function() {
            $('#assets-list').DataTable({
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
		var data = $('#assets-list').dataTable();
		data.fnDestroy();
 $('#assets-list tbody').html("");
               
var invoicenumber = document.getElementById("serial_no").value;
 var columntype = document.getElementById("columntype").value;
  if(invoicenumber=="")
  {
    invoicenumber = "%20";
  }

//alert(columntype);
    $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
     $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_assets_under_contracts_api/"+invoicenumber+"/ /"+columntype,
            dataType: "text",
            success: function(xml){
			//alert(xml);
                 $('#assets-list tbody').html("");
                             $(xml).find('assetspage').each(function(){
				
                                var SerialNumber= $(this).find('SerialNumber').text();
								var Part_Number= $(this).find('Part_Number').text();
								var Part_Description= $(this).find('Part_Description').text();
								var Type= $(this).find('Type').text();
								var Device_Type= $(this).find('Device_Type').text();
								var contract_number= $(this).find('contract_number').text();
								var Start_Date= $(this).find('Start_Date').text();
                                var End_date= $(this).find('End_date').text();
                                var Contract_Status= $(this).find('Contract_Status').text(); 
                                var Options= $(this).find('Options').text();
                                var error =  $(this).find('error').text();             
                                var totreccount =  $(this).find('totreccount').text();   
									totalrecars	= totreccount;							
					if(SerialNumber!="")
{
if(SerialNumber!="No Data")
{		   
			          $('#assets-list tbody').append("<tr><td style='width:100px; text-align:center;'><a href='<?php echo base_url()?>index.php/welcome/servicerequest/"+SerialNumber+"'  title='New Service Request'><img src='http://lowrysmartportal.com/assets/newservice.png' style='width:33%'></a></td><td style='width:100px;'>"+SerialNumber+"</td><td style='width:100px;'>"+Part_Number+"</td><td style='width:100px;'>"+Part_Description+"</td><td style='width:100px;'>"+Device_Type+"</td><td style='width:100px;'>"+Type+"</td><td style='width:100px;'>"+contract_number+"</td><td style='width:100px;'>"+Start_Date+"</td><td style='width:100px;'>"+End_date+"</td><td style='width:100px;'>"+Contract_Status+"</td></tr>");
                     }}				 
		   });

		   
		   
            if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


			 var table4 = $('#assets-list').DataTable({
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
                'sTitle': 'Asset Inventory'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Asset Inventory'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Asset Inventory'
            }]
										}
									],
									"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
								});

								$(tt.fnContainer()).insertAfter('#tableTools');
								
					}	
					 $('#assets-list_info').append("   Total entries: "+totalrecars);
            },
            Error: function() {
            $('#assets-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	});
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


<script type="text/javascript">
function getdetails_by_status()
{
var count = document.getElementById("count1").value;
var total_count = parseInt(count);
$.fn.dataTable.ext.errMode = 'none'; 
    var data = $('#assets-list').dataTable();
    data.fnDestroy(); 
    var user_status = document.getElementById("user_status").value; 

 $('#assets-list tbody').html("");
               

    $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
     $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_assets/"+user_status+"/"+total_count,
            dataType: "text",
            success: function(xml){
                 $('#assets-list tbody').html("");
                          $(xml).find('assetspage').each(function(){
				
                var SerialNumber= $(this).find('SerialNumber').text();
				var Part_Number= $(this).find('Part_Number').text();
				var Part_Description= $(this).find('Part_Description').text();
				var Type= $(this).find('Type').text();
				var contract_number= $(this).find('contract_number').text();
				var Start_Date= $(this).find('Start_Date').text();
                                var End_date= $(this).find('End_date').text();
                                var Contract_Status= $(this).find('Contract_Status').text(); 
                                var Options= $(this).find('Options').text();
                                var Error =  $(this).find('Error').text();             
					if(Error!="Error"){		   
			   $('#assets-list tbody').append("<tr><td style='width:100px; text-align:center;'><a href='<?php echo base_url()?>index.php/welcome/servicerequest/"+SerialNumber+"'  title='New Service Request'><img src='http://lowrysmartportal.com/assets/newservice.png' style='width:33%'></a></td><td style='width:100px;'>"+SerialNumber+"</td><td style='width:100px;'>"+Part_Number+"</td><td style='width:100px;'>"+Part_Description+"</td><td style='width:100px;'></td><td style='width:100px;'>"+Type+"</td><td style='width:100px;'>"+contract_number+"</td><td style='width:100px;'>"+Start_Date+"</td><td style='width:100px;'>"+End_date+"</td><td style='width:100px;'>"+Contract_Status+"</td><td style='width:100px;'>"+Options+"</td></tr>");
                 //datatables(); 

                     }				 
		   });
		   
		   	 if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


	 var table4 = $('#assets-list').DataTable({
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
                'sTitle': 'Asset Inventory'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Asset Inventory'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Asset Inventory'
            }]
								}
							],
							"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
						});

						$(tt.fnContainer()).insertAfter('#tableTools');
						
			}	
            },
            Error: function() {
            $('#assets-list').DataTable({
"language": {"emptyTable": "No Response - Cannot process the data."},	}); 
            }
        });
}
</script>

<script type="text/javascript">

function loadmore()
{
        $.fn.dataTable.ext.errMode = 'none';
		var data = $('#assets-list').dataTable();
		data.fnDestroy();
		$('#assets-list tbody').html("");
		var count = document.getElementById("count1").value;
		var num_of_page = 1000;
		var total_count = parseInt(count)+(num_of_page);
		document.getElementById("count1").value = total_count;
		//alert(total_count);
//alert("<?php echo base_url()?>index.php/welcome/all_assets_under_contracts_api/<?php echo $c_number;?>/"+total_count);
var test1 = "";
	   $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
	 var totalrecars = "";
	//alert("<?php echo base_url()?>index.php/welcome/all_assets/<?php if($c_number!=""){ echo $c_number; }else{ echo "%20";}?>/"+total_count);
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_assets_under_contracts_api/ /"+total_count,
            dataType: "text",
            success: function(xml){
			  $(xml).find('assetspage').each(function(){
				
                                var SerialNumber= $(this).find('SerialNumber').text();
								var Part_Number= $(this).find('Part_Number').text();
								var Part_Description= $(this).find('Part_Description').text();
								var Type= $(this).find('Type').text();
								var Device_Type= $(this).find('Device_Type').text();
								var contract_number= $(this).find('contract_number').text();
								var Start_Date= $(this).find('Start_Date').text();
                                var End_date= $(this).find('End_date').text();
                                var Contract_Status= $(this).find('Contract_Status').text(); 
                                var Options= $(this).find('Options').text();
                                var error =  $(this).find('error').text();   
 var totreccount =  $(this).find('totreccount').text();   
									totalrecars	= totreccount;									
					if(SerialNumber!="")
{
if(SerialNumber!="No Data")
{		   
			          $('#assets-list tbody').append("<tr><td style='width:100px; text-align:center;'><a href='<?php echo base_url()?>index.php/welcome/servicerequest/"+SerialNumber+"'  title='New Service Request'><img src='http://lowrysmartportal.com/assets/newservice.png' style='width:33%'></a></td><td style='width:100px;'>"+SerialNumber+"</td><td style='width:100px;'>"+Part_Number+"</td><td style='width:100px;'>"+Part_Description+"</td><td style='width:100px;'>"+Device_Type+"</td><td style='width:100px;'>"+Type+"</td><td style='width:100px;'>"+contract_number+"</td><td style='width:100px;'>"+Start_Date+"</td><td style='width:100px;'>"+End_date+"</td><td style='width:100px;'>"+Contract_Status+"</td></tr>");
                     }	}			 
		   });
				 if ( ! $.fn.DataTable.isDataTable( '#contracts-list' ) ) {


			 var table4 = $('#assets-list').DataTable({
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
                'sTitle': 'Asset Inventory'
            },
									{
                'sExtends': 'xls',
                'sTitle': 'Asset Inventory'
            }, {
                'sExtends': 'pdf',
                'sTitle': 'Asset Inventory'
            }]
										}
									],
									"sSwfPath": "<?php echo base_url()?>assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
								});

								$(tt.fnContainer()).insertAfter('#tableTools');
								
					}	
					 $('#assets-list_info').append("   Total entries: "+totalrecars);
            },
            error: function() {
           $('#assets-list').DataTable({
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

	if(selectedValue == "Date")
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
<script>
function saveexcel()
{
	document.getElementById("savemsg").style.display = 'block';
 /* $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/all_under_contract_assets_to_csv",
            dataType: "text",
            success: function(xml){
			alert(xml);
			}
			
			});*/
window.open('<?php echo base_url()?>index.php/welcome/all_under_contract_assets_to_csv', '_blank');


}
</script>
    </body>
</html>