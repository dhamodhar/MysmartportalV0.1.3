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
			servicecontratcsbylocation();
			expiredservicecontratcsbylocation();
			upcomingservicecontratcs_bylocation();
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
      menu.css("width", 500);   
    }
			
            });
			  
            
        });
    </script>
	<script>
	AmCharts.ready(function () {
	$("#Expiredcontracts_error").hide();
servicecontratcs();
barchartservicetickets();
expiredservicecontratcs();
upcomingservicecontratcs();
//upcomingservicecontratcstest();
			});
	</script>
	
	<script>
	function servicecontratcs()
	{
	

	
	var data = "";
	
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contractschartdata/ /active",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.dotcharts;
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
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<a href='<?php echo base_url()?>index.php/welcome/active_service_contracts'><div style='margin:5px;'><b>[[x]]</b><br> Active Service Contracts: [[value]]</b></div></a>",
												"bullet": "diamond",
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
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2011, 11, 31),
												"maximumDate": new Date(2022, 0, 13)
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
											},
											"listeners": [{
    "event": "clickGraphItem",
    "method": function(event) {
      window.location.href = '<?php echo base_url()?>index.php/welcome/active_service_contracts';
    }
  }]
										});
											
							
						}
	}
	
	</script>
	
	
	
	
	
	
	
	
	
	
	
	<script>
	function expiredservicecontratcs()
	{
	

	
	var data1 = "";
	var chart1 = "";
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contractschartdata/ /expired",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data1 = obj.dotcharts;
				
				if(data1 == "")
				{
				$("#Expiredcontracts").hide();
				$("#Expiredcontracts_error").show();
				
				}
				//alert(data1);
				servicedashboardexpired();

			}
			
			});
	
	
						function servicedashboardexpired()
						{


						
											chart1 = AmCharts.makeChart("Expiredcontracts", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 1.5,
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<a href='<?php echo base_url()?>index.php/welcome/expired_service_contracts'><div style='margin:5px;'><b>[[x]]</b><br> Expired Service Contracts: [[value]]</b></div></a>",
												"bullet": "diamond",
												"id": "AmGraph-1",
												"lineAlpha": 0,
												"lineColor": "#D61111",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"valueField": "aValue",
												"xField": "date",
												"yField": "ay"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Expired Service Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-2",
												"lineAlpha": 0,
												"lineColor": "#D61111",
												"valueField": "bValue",
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2015, 08, 31),
												"maximumDate": new Date(2017, 0, 13)
											}],
											"allLabels": [],
											"titles": [],
											"dataProvider": data1,

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
											},
											"listeners": [{
    "event": "clickGraphItem",
    "method": function(event) {
      window.location.href = '<?php echo base_url()?>index.php/welcome/expired_service_contracts';
    }
  }]
										});



										
		

										
										
											
							
						}
	}
	
	</script>
	
	
	
	<script>
	function expiredservicecontratcsbylocation()
	{
	

	var selected = $("#locations option:selected");
                var message = "";
                selected.each(function () {
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+"|"+$(this).val();
					}
                    
                });
	
	var data1 = "";
	
	
	if(message!="")
	{
	$("#Expiredcontracts").html("");
					$.ajax({
					type: "post",
					data: "location="+message,
					url: "<?php echo base_url()?>index.php/welcome/contractschartdata/ /expired",
					success: function(xml)
					{

						var obj = JSON.parse(xml);
						data1 = obj.dotcharts;
						servicedashboardexpiredbylocation();

					}
					
					});
	}
	
	
						function servicedashboardexpiredbylocation()
						{

						
											var chart = AmCharts.makeChart("Expiredcontracts", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 1.5,
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Expired Service Contracts: [[value]]</b></div>",
												"bullet": "diamond",
												"id": "AmGraph-1",
												"lineAlpha": 0,
												"lineColor": "#D61111",
												"minBulletSize": 12,
                                                 "maxBulletSize": 12,
												"valueField": "aValue",
												"xField": "date",
												"yField": "ay"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Expired Service Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-2",
												"lineAlpha": 0,
												"lineColor": "#D61111",
												"valueField": "bValue",
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2015, 08, 31),
												"maximumDate": new Date(2017, 0, 13)
											}],
											"allLabels": [],
											"titles": [],
											"dataProvider": data1,

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
											},
											"listeners": [{
    "event": "clickGraphItem",
    "method": function(event) {
      window.location.href = '<?php echo base_url()?>index.php/welcome/expired_service_contracts';
    }
  }]
										});
											
							
						}
	}
	
	</script>
	
	
	
	
	<script>
	function upcomingservicecontratcs()
	{
	

	
	var dataupcoming = "";
	
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/upcomingcontractschartdata",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                dataupcoming = obj.dotcharts;
				servicedashboardupcoming();

			}
			
			});
	
	
						function servicedashboardupcoming()
						{

						
											var chart = AmCharts.makeChart("upcoming", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 4.5,
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "diamond",
												"id": "AmGraph-1",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
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
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2016, 06, 31),
												"maximumDate": new Date(2017, 01, 13)
											}],
											"allLabels": [],
											"titles": [],
											"dataProvider": dataupcoming,

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
											},
											"listeners": [{
    "event": "clickGraphItem",
    "method": function(event) {
      window.location.href = '<?php echo base_url()?>index.php/welcome/renew_service_contracts';
    }
  }]
										});
											
							
						}
	}
	
	</script>
	
	
	
	<script>
	function upcomingservicecontratcs_bylocation()
	{
	
	var selected = $("#locations option:selected");
                var message = "";
                selected.each(function () {
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+"|"+$(this).val();
					}
                    
                });
	
	var dataupcoming = "";
	
	if(message!=""){
	$("#upcoming").html("");
	        $.ajax({
            type: "post",
			data: "location="+message,
            url: "<?php echo base_url()?>index.php/welcome/upcomingcontractschartdata",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                dataupcoming = obj.dotcharts;
				servicedashboardupcomingbylocation();

			}
			
			});
			
		}
	
	
						function servicedashboardupcomingbylocation()
						{

						
											var chart = AmCharts.makeChart("upcoming", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 4.5,
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "diamond",
												"id": "AmGraph-1",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
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
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2015, 11, 31),
												"maximumDate": new Date(2017, 0, 13)
											}],
											"allLabels": [],
											"titles": [],
											"dataProvider": dataupcoming,

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
											},
											"listeners": [{
    "event": "clickGraphItem",
    "method": function(event) {
      window.location.href = '<?php echo base_url()?>index.php/welcome/renew_service_contracts';
    }
  }]
										});
											
							
						}
	}
	
	</script>
	
	<!-- test dashboard -->
	
	<script>
	function upcomingservicecontratcstest()
	{
	

	
	var dataupcoming = "";
	
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/upcomingcontractschartdatatest",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                dataupcoming = obj.dotcharts;
				servicedashboardupcomingtest();

			}
			
			});
	
	
						function servicedashboardupcomingtest()
						{

						
											var chart = AmCharts.makeChart("upcomingtest", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 4.5,
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												 "bullet": "custom",
                                                 "customBulletField": "image",
												"id": "AmGraph-1",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
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
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2015, 11, 31),
												"maximumDate": new Date(2017, 0, 13)
											}],
											"allLabels": [],
											"titles": [],
											"dataProvider": dataupcoming,

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
											}
										});
											
							
						}
	}
	
	</script>
	
	<!-- end code-->
	
	
	
	<script>
	function servicecontratcsbylocation()
	{
	
	var selected = $("#locations option:selected");
                var message = "";
                selected.each(function () {
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+"|"+$(this).val();
					}
                    
                });
	
	var data = "";
	if(message!="")
	{
	
	$("#chartdiv").html("");
		        $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/contractschartdata/ /active",
			data: "location="+message,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.dotcharts;
				servicedashboardbylocation();

			}
			
			});
	
	}

	
	
						function servicedashboardbylocation()
						{

						
											var chart = AmCharts.makeChart("chartdiv", {
											"type": "xy",
											"theme": "light",
											"marginRight": 80,
											"dataDateFormat": "YYYY-MM-DD",
											"startDuration": 1.5,
											"trendLines": [],
											"balloon": {
												"adjustBorderColor": false,
												"shadowAlpha": 0,
												"fixedPosition":true
											},
											"graphs": [{
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Active Service Contracts: [[value]]</b></div>",
												"bullet": "diamond",
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
												"xField": "date",
												"yField": "by"
											}, {
												"balloonText": "<div style='margin:5px;'><b>[[x]]</b><br> Upcoming for Renewal Contracts: [[value]]</b></div>",
												"bullet": "round",
												"id": "AmGraph-3",
												"lineAlpha": 0,
												"lineColor": "#EFCE13",
												"valueField": "cValue",
												"xField": "date",
												"yField": "cy"
											}],
											"valueAxes": [{
												"id": "ValueAxis-2",
												"axisAlpha": 0,
												"position": "bottom",
												"type": "date",
												"minimumDate": new Date(2012, 11, 31),
												"maximumDate": new Date(2017, 0, 13)
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
											},
											"listeners": [{
    "event": "clickGraphItem",
    "method": function(event) {
      window.location.href = '<?php echo base_url()?>index.php/welcome/active_service_contracts';
    }
  }]
										});
											
							
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
		
				<!--<script>
			AmCharts.ready(function () {

			});

			var chartData1 = [];
			var chartData2 = [];
			var chartData3 = [];
			
			$.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contractschartdata",
            success: function(xml)
			{
				//alert(xml);
			var obj = JSON.parse(xml);
		
			
			chartData1 = obj.expiredservice;
			chartData2 = obj.activeservice;
			chartData3 = obj.cancelservice;
			
			generateChartData();
				createStockChart();
				//$(".amcharts-start-date-input").prop("type", "hidden");
				 // $(".amcharts-end-date-input").prop("type", "hidden");
				  $(".amChartsPeriodSelector").hide();
				//$( ".amcharts-start-date-input" ).hide();
//$( ".amcharts-end-date-input" ).hide();
$( ".amcharts-period-input" ).hide();

			}
			
			});

			function generateChartData() {
				var firstDate = new Date();
				firstDate.setDate(firstDate.getDate() - 1500);
				firstDate.setHours(0, 0, 0, 0);
				

								   
								  
								  //alert(chartData3);
								     
								       
			}

			function createStockChart() {
				var chart = new AmCharts.AmStockChart();

				// DATASETS //////////////////////////////////////////
				// create data sets first
				var dataSet1 = new AmCharts.DataSet();
				dataSet1.title = " Expired Service Contracts";
				dataSet1.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet1.dataProvider = chartData1;
				dataSet1.categoryField = "date";

				var dataSet2 = new AmCharts.DataSet();
				dataSet2.title = "Active Service Contracts";
				dataSet2.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet2.dataProvider = chartData2;
				dataSet2.categoryField = "date";

				var dataSet3 = new AmCharts.DataSet();
				dataSet3.title = "Upcoming Renewal Contracts";
				dataSet3.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet3.dataProvider = chartData3;
				dataSet3.categoryField = "date";

				

				// set data sets to the chart
				chart.dataSets = [dataSet1, dataSet2, dataSet3];

				// PANELS ///////////////////////////////////////////
				// first stock panel
				var stockPanel1 = new AmCharts.StockPanel();
				stockPanel1.showCategoryAxis = false;
				stockPanel1.title = "Value";
				stockPanel1.percentHeight = 70;

				// graph of first stock panel
				var graph1 = new AmCharts.StockGraph();
				graph1.valueField = "value";
				graph1.comparable = true;
				graph1.compareField = "value";
				graph1.bullet = "round";
				graph1.bulletBorderColor = "#FFFFFF";
				graph1.bulletBorderAlpha = 1;
				graph1.balloonText = "[[title]]:<b>[[value]]</b>";
				graph1.compareGraphBalloonText = "[[title]]:<b>[[value]]</b>";
				graph1.compareGraphBullet = "round";
				graph1.compareGraphBulletBorderColor = "#FFFFFF";
				graph1.compareGraphBulletBorderAlpha = 1;
				stockPanel1.addStockGraph(graph1);

				// create stock legend
				var stockLegend1 = new AmCharts.StockLegend();
				stockLegend1.periodValueTextComparing = "[[percents.value.close]]%";
				stockLegend1.periodValueTextRegular = "[[value.close]]";
				stockPanel1.stockLegend = stockLegend1;


				// second stock panel
				var stockPanel2 = new AmCharts.StockPanel();
				stockPanel2.title = "Volume";
				stockPanel2.percentHeight = 30;
				var graph2 = new AmCharts.StockGraph();
				graph2.valueField = "volume";
				graph2.type = "column";
				graph2.showBalloon = false;
				graph2.fillAlphas = 1;
				stockPanel2.addStockGraph(graph2);

				var stockLegend2 = new AmCharts.StockLegend();
				stockLegend2.periodValueTextRegular = "[[value.close]]";
				stockPanel2.stockLegend = stockLegend2;

				// set panels to the chart
				chart.panels = [stockPanel1, stockPanel2];


				// OTHER SETTINGS ////////////////////////////////////
				var sbsettings = new AmCharts.ChartScrollbarSettings();
				sbsettings.graph = graph1;
				sbsettings.updateOnReleaseOnly = false;
				chart.chartScrollbarSettings = sbsettings;

				// CURSOR
				var cursorSettings = new AmCharts.ChartCursorSettings();
				cursorSettings.valueBalloonsEnabled = true;
				chart.chartCursorSettings = cursorSettings;


				// PERIOD SELECTOR ///////////////////////////////////
				var periodSelector = new AmCharts.PeriodSelector();
				periodSelector.position = "left";
				periodSelector.periods = [{
					period: "DD",
					count: 10,
					label: "10 days"
				}, {
					period: "MM",
					selected: true,
					count: 1,
					label: "1 month"
				}, {
					period: "YYYY",
					count: 1,
					label: "1 year"
				}, {
					period: "YTD",
					label: "YTD"
				}, {
					period: "MAX",
					label: "MAX"
				}];
				chart.periodSelector = periodSelector;


				// DATA SET SELECTOR
				var dataSetSelector = new AmCharts.DataSetSelector();
				dataSetSelector.position = "left";
				chart.dataSetSelector = dataSetSelector;

				chart.write('chartdiv');
			}
		</script>
		
		<script>
		function getdatabylocations(val)
		{
		
		var selected = $("#locations option:selected");
                var message = "";
                selected.each(function () {
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+"|"+$(this).val();
					}
                    
                });
				
	
	
			var chartData1 = [];
			var chartData2 = [];
			var chartData3 = [];
			if(message!="")
			{
				$("#chartdiv").html("");
					$.ajax({
					type: "post",
					url: "<?php echo base_url()?>index.php/welcome/contractschartdata",
					data: "location="+message,
					success: function(xml)
					{
						
					var obj = JSON.parse(xml);
				
					
					chartData1 = obj.expiredservice;
					chartData2 = obj.activeservice;
					chartData3 = obj.cancelservice;
					
					generateChartData();
						createStockChart();

					}
					
					});
			
			
			}

			function generateChartData() {
				var firstDate = new Date();
				firstDate.setDate(firstDate.getDate() - 1500);
				firstDate.setHours(0, 0, 0, 0);
				

								   
								  
								  //alert(chartData3);
								     
								       
			}

			function createStockChart() {
				var chart = new AmCharts.AmStockChart();

				// DATASETS //////////////////////////////////////////
				// create data sets first
				var dataSet1 = new AmCharts.DataSet();
				dataSet1.title = " Expired Service Contracts";
				dataSet1.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet1.dataProvider = chartData1;
				dataSet1.categoryField = "date";

				var dataSet2 = new AmCharts.DataSet();
				dataSet2.title = "Active Service Contracts";
				dataSet2.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet2.dataProvider = chartData2;
				dataSet2.categoryField = "date";

				var dataSet3 = new AmCharts.DataSet();
				dataSet3.title = "Upcoming Renewal Contracts";
				dataSet3.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet3.dataProvider = chartData3;
				dataSet3.categoryField = "date";

				

				// set data sets to the chart
				chart.dataSets = [dataSet1, dataSet2, dataSet3];

				// PANELS ///////////////////////////////////////////
				// first stock panel
				var stockPanel1 = new AmCharts.StockPanel();
				stockPanel1.showCategoryAxis = false;
				stockPanel1.title = "Value";
				stockPanel1.percentHeight = 70;

				// graph of first stock panel
				var graph1 = new AmCharts.StockGraph();
				graph1.valueField = "value";
				graph1.comparable = true;
				graph1.compareField = "value";
				graph1.bullet = "round";
				graph1.bulletBorderColor = "#FFFFFF";
				graph1.bulletBorderAlpha = 1;
				graph1.balloonText = "[[title]]:<b>[[value]]</b>";
				graph1.compareGraphBalloonText = "[[title]]:<b>[[value]]</b>";
				graph1.compareGraphBullet = "round";
				graph1.compareGraphBulletBorderColor = "#FFFFFF";
				graph1.compareGraphBulletBorderAlpha = 1;
				stockPanel1.addStockGraph(graph1);

				// create stock legend
				var stockLegend1 = new AmCharts.StockLegend();
				stockLegend1.periodValueTextComparing = "[[percents.value.close]]%";
				stockLegend1.periodValueTextRegular = "[[value.close]]";
				stockPanel1.stockLegend = stockLegend1;


				// second stock panel
				var stockPanel2 = new AmCharts.StockPanel();
				stockPanel2.title = "Volume";
				stockPanel2.percentHeight = 30;
				var graph2 = new AmCharts.StockGraph();
				graph2.valueField = "volume";
				graph2.type = "column";
				graph2.showBalloon = false;
				graph2.fillAlphas = 1;
				stockPanel2.addStockGraph(graph2);

				var stockLegend2 = new AmCharts.StockLegend();
				stockLegend2.periodValueTextRegular = "[[value.close]]";
				stockPanel2.stockLegend = stockLegend2;

				// set panels to the chart
				chart.panels = [stockPanel1, stockPanel2];


				// OTHER SETTINGS ////////////////////////////////////
				var sbsettings = new AmCharts.ChartScrollbarSettings();
				sbsettings.graph = graph1;
				sbsettings.updateOnReleaseOnly = false;
				chart.chartScrollbarSettings = sbsettings;

				// CURSOR
				var cursorSettings = new AmCharts.ChartCursorSettings();
				cursorSettings.valueBalloonsEnabled = true;
				chart.chartCursorSettings = cursorSettings;


				// PERIOD SELECTOR ///////////////////////////////////
				var periodSelector = new AmCharts.PeriodSelector();
				periodSelector.position = "left";
				periodSelector.periods = [{
					period: "DD",
					count: 10,
					label: "10 days"
				}, {
					period: "MM",
					selected: true,
					count: 1,
					label: "1 month"
				}, {
					period: "YYYY",
					count: 1,
					label: "1 year"
				}, {
					period: "YTD",
					label: "YTD"
				}, {
					period: "MAX",
					label: "MAX"
				}];
				chart.periodSelector = periodSelector;


				// DATA SET SELECTOR
				var dataSetSelector = new AmCharts.DataSetSelector();
				dataSetSelector.position = "left";
				chart.dataSetSelector = dataSetSelector;

				chart.write('chartdiv');
				}
		
		
		
		}
		</script>
		
		
		-->
			


    </body>
</html>