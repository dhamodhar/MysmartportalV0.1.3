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


        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
				<script>
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
				
			var obj = JSON.parse(xml);
		
			
			chartData1 = obj.expiredservice;
			chartData2 = obj.activeservice;
			chartData3 = obj.cancelservice;
			
			generateChartData();
				createStockChart();
				$( ".amcharts-start-date-input" ).datepicker();
$( ".amcharts-end-date-input" ).datepicker();

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
		
		
					var chartData1 = [];
			var chartData2 = [];
			var chartData3 = [];
			
			$.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/contractschartdata/"+val,
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
			


    </body>
</html>