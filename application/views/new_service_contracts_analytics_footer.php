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

	    <script src="<?php echo base_url()?>assets/js/jquery.scrolltabs.js"></script>	
	 
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>	
       	
		
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        
        <script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
        <!--/ vendor javascripts -->





  <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
        rel="stylesheet" type="text/css" />
  <script src="<?php echo base_url()?>assets/bootstrap-multiselect.js"
        type="text/javascript"></script>
        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->
        <script type="text/javascript" src="//cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>



 <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>



<script type="text/javascript" src="<?php echo base_url()?>assets/scripts/jquery.canvasjs.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/amcharts/style.css"	type="text/css">


		<script src="<?php echo base_url()?>assets/amcharts/amcharts.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/amcharts/serial.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/amcharts/amstock.js" type="text/javascript"></script>
<script src="https://www.amcharts.com/lib/3/xy.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/dark.js"></script>
<script src="<?php echo base_url()?>assets/amcharts/export.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/amcharts/export.css"	type="text/css">
  <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
		<script src="<?php echo base_url()?>assets/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


	<script>
function searchbydates()
{
var loccount = $("#loccount").val();
var selected11 = $("#locations option:selected");
               var k = 0;
                selected11.each(function () {
				
                    k++;
                });
				
				if(loccount == k)
				{
				location.reload();
				
				}
			
			if(k<8)
			{
		servicecontratcs_location();
				document.getElementById("locationerror").style.display ='none';
			
			}else
			{
			
			document.getElementById("locationerror").style.display ='block';
			
			
			}	
		
}

</script>

		  <script type="text/javascript">
        $(function () {
		
		$("#from").datepicker({
		format: 'dd-mm-yyyy',
    onSelect: function(dateText, inst) {
        var date = $(this).val();
	   $(".amChartsPeriodSelector").show();
       $( ".amcharts-start-date-input" ).val(date);
	   $( ".amcharts-start-date-input" ).focus();
	   $(".amcharts-start-date-input").change();
	   $(".amChartsPeriodSelector").hide();
      
       

    }
});

$("#to").datepicker({
    onSelect: function(dateText, inst) {
       servicecontratcsbydates();
       

    }
});
		
            $('#locations').multiselect({
                 enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
			onDropdownHide: function(event) 
			{
		
                
            },onDropdownShow: function(event) {
      var menu = $(event.currentTarget).find(".dropdown-menu");
      menu.css("width", 400);  
menu.css("margin-left", 79);  	  
    }
			
            });
			  
            
        });
    </script>
	<script>
	AmCharts.ready(function () {
	$("#Expiredcontracts_error").hide();
servicecontratcs();
barchartservicetickets();

			});
	</script>
	
	<script>
	function servicecontratcs()
	{
	

	
	var data = "";
	var data1 = "";
	
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/new_contractschartdata/ /active",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.dotcharts;
                data1 = obj.activeservice;
				servicedashboard();

			}
			
			});
	
	
						function servicedashboard()
						{

						
											var chart = AmCharts.makeChart("chartdiv", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 1.5,
											"borderAlpha":1,
											"borderColor":"#ffffff",
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<a href='<?php echo base_url()?>index.php/welcome/active_service_contracts'><div style='margin:5px;'><b>[[x]]</b><br> Active Service Contracts: [[value]]</b></div></a>",
												"bullet": "round",
												"id": "AmGraph-1",
												"lineAlpha": 0,
												"lineColor": "#299a0b",
												"valueField": "aValue",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"xField": "date",
												"yField": "ay"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Expired Service Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-2",
												"lineAlpha": 0,
												"lineColor": "#D61111",
												"valueField": "bValue",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2015, 11, 31),
												"maximumDate": new Date(2017, 02, 13)
											}],
											"allLabels": [],
											"titles": [],
											"dataProvider": data,

											"export": {
												"enabled": true
											},

											"chartScrollbar": {
												"offset": 15,
												"scrollbarHeight": 5
											},
											
											"chartCursor":{
											   "pan":true,
											   "cursorAlpha":0,
											   "valueLineAlpha":0
											},"legend": {
    "divId": "legend",
    "listeners": [{
      "event": "hideItem",
      "method": function(item) {
        toggleAllGraphs(item, 'hide');
      }
    }, {
      "event": "showItem",
      "method": function(item) {
        toggleAllGraphs(item, 'show');
      }
    }]
  }
										});
										
										function toggleAllGraphs(item, action) {
  for(var i = 0; i < AmCharts.charts.length; i++) {
    var chart = AmCharts.charts[i];
    if (chart == item.chart)
      continue;
    if (action == 'hide')
      chart.hideGraph(chart.graphs[item.dataItem.index]);
    else
      chart.showGraph(chart.graphs[item.dataItem.index]);
  }
}
											
							
						}
	}
	
	</script>
	
	
	
	
	
		<script>
	function servicecontratcs_location()
	{
	

		var selected1 = $("#location option:selected");
                var message1 = "";
				var t=0;
                selected1.each(function () {
				t++;
					if(message1=="")
					{
					message1 = $(this).val();
					}else
					{
					message1 = message1+"|"+$(this).val();
					}
                    
                });
	
	var data = "";
	var data1 = "";
	
	        $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/new_contractschartdata/ /active",
			data:"location="+message1,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.dotcharts;
                data1 = obj.activeservice;
				servicedashboard();

			}
			
			});
	
	
						function servicedashboard()
						{

						
											var chart = AmCharts.makeChart("chartdiv", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 1.5,
											"borderAlpha":1,
											"borderColor":"#ffffff",
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<a href='<?php echo base_url()?>index.php/welcome/active_service_contracts'><div style='margin:5px;'><b>[[x]]</b><br> Active Service Contracts: [[value]]</b></div></a>",
												"bullet": "round",
												"id": "AmGraph-1",
												"lineAlpha": 0,
												"lineColor": "#299a0b",
												"valueField": "aValue",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"xField": "date",
												"yField": "ay"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Expired Service Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-2",
												"lineAlpha": 0,
												"lineColor": "#D61111",
												"valueField": "bValue",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2015, 11, 31),
												"maximumDate": new Date(2017, 02, 13)
											}],
											"allLabels": [],
											"titles": [],
											"dataProvider": data,

											"export": {
												"enabled": true
											},

											"chartScrollbar": {
												"offset": 15,
												"scrollbarHeight": 5
											},
											
											"chartCursor":{
											   "pan":true,
											   "cursorAlpha":0,
											   "valueLineAlpha":0
											},"legend": {
    "divId": "legend",
    "listeners": [{
      "event": "hideItem",
      "method": function(item) {
        toggleAllGraphs(item, 'hide');
      }
    }, {
      "event": "showItem",
      "method": function(item) {
        toggleAllGraphs(item, 'show');
      }
    }]
  }
										});
										
										function toggleAllGraphs(item, action) {
  for(var i = 0; i < AmCharts.charts.length; i++) {
    var chart = AmCharts.charts[i];
    if (chart == item.chart)
      continue;
    if (action == 'hide')
      chart.hideGraph(chart.graphs[item.dataItem.index]);
    else
      chart.showGraph(chart.graphs[item.dataItem.index]);
  }
}
											
							
						}
	}
	
	</script>
	
		<script>
	function barchartservicetickets()
	{
	
	
	var data1 = "";
	var data = "";
	
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contracts_barchart_data",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj;
				barchart();

			}
			
			});
			
			function barchart(){

    $('#container').highcharts({
        title: {
            text: 'Service Contracts At A Glance 2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
        labels: {
            items: [{
                html: '',
                style: {
                    left: '50px',
                    top: '18px',
                    color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                }
            }]
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
		
		
	

    </body>
</html>