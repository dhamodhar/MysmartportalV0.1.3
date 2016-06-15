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
        <script src="assets/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
        <script src="assets/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
        

   
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->




        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
		<link rel="stylesheet" href="<?php echo base_url()?>assets/amcharts/style.css"	type="text/css">

		<script src="<?php echo base_url()?>assets/amcharts/amcharts.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/amcharts/serial.js" type="text/javascript"></script>
		<script src="<?php echo base_url()?>assets/amcharts/amstock.js" type="text/javascript"></script>

		<script>
			AmCharts.ready(function () {
				//generateChartData();
				//createStockChart();
				lableschart();
			});

			var chartData1 = [];
			var chartData2 = [];
			var chartData3 = [];
			var chartData4 = [];

			function generateChartData() {
				var firstDate = new Date();
				firstDate.setDate(firstDate.getDate() - 1500);
				firstDate.setHours(0, 0, 0, 0);

				for (var i = 0; i < 1500; i++) {
					var newDate = new Date(firstDate);
					newDate.setDate(newDate.getDate() + i);

					var a1 = Math.round(Math.random() * (40 + i)) + 100 + i;
					var b1 = Math.round(Math.random() * (1000 + i)) + 500 + i * 2;

					var a2 = Math.round(Math.random() * (100 + i)) + 200 + i;
					var b2 = Math.round(Math.random() * (1000 + i)) + 600 + i * 2;

					var a3 = Math.round(Math.random() * (100 + i)) + 200;
					var b3 = Math.round(Math.random() * (1000 + i)) + 600 + i * 2;

					var a4 = Math.round(Math.random() * (100 + i)) + 200 + i;
					var b4 = Math.round(Math.random() * (100 + i)) + 600 + i;

					chartData1.push({
						date: newDate,
						value: a1,
						volume: b1
					});
					chartData2.push({
						date: newDate,
						value: a2,
						volume: b2
					});
					chartData3.push({
						date: newDate,
						value: a3,
						volume: b3
					});
					chartData4.push({
						date: newDate,
						value: a4,
						volume: b4
					});
				}
			}

			function createStockChart() {
				var chart = new AmCharts.AmStockChart();

				// DATASETS //////////////////////////////////////////
				// create data sets first
				var dataSet1 = new AmCharts.DataSet();
				dataSet1.title = "AK";
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
				dataSet2.title = "AL";
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
				dataSet3.title = "Alabama";
				dataSet3.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet3.dataProvider = chartData3;
				dataSet3.categoryField = "date";

				var dataSet4 = new AmCharts.DataSet();
				dataSet4.title = "Alaska";
				dataSet4.fieldMappings = [{
					fromField: "value",
					toField: "value"
				}, {
					fromField: "volume",
					toField: "volume"
				}];
				dataSet4.dataProvider = chartData4;
				dataSet4.categoryField = "date";

				// set data sets to the chart
				chart.dataSets = [dataSet1, dataSet2, dataSet3, dataSet4];

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
			
			
			function lableschart()
			{
			
			var qtrchart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "none",
    "legend": {
        "autoMargins": false,
        "borderAlpha": 0.2,
        "equalWidths": false,
        "horizontalGap": 10,
        "markerSize": 10,
        "useGraphSettings": true,
        "valueAlign": "left",
        "valueWidth": 0
    },
    "dataProvider": [{
        "QTR":"2015 Q2",
        "1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":18,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":18,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":18,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":1,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":18
		},
        {"QTR":"2015 Q3",
        "1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.2,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.2,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.2,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.1,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.1
		},
        {"QTR":"2015 Q4",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.3,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.3,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.3,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.1,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.1
		},
        {"QTR":"2016 Q1",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.3,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.3,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.3,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.1,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.1
		},
        {"QTR":"2016 Q2",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.3,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.3,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.3,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.1,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.1
		}],
    "valueAxes": [{
        "stackType": "100%",
        "axisAlpha": 0,
        "gridAlpha": 0,
        "labelsEnabled": true,
        "position": "left"
    }],
    "graphs": [{
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'>[[percents]]%</span>",
        "fillColors": "#FCCB37",
        "lineColor": "#FCCB37",
        "color": "#ffffff",
        "fillAlphas": 0.9,
        "fontSize": 11,
        "labelText": "[[percents]]%",
        "lineAlpha": 0.5,
        "title": "1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M",
        "type": "column",
        "valueField": "1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M"
    }, {
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'>[[percents]]%</span>",
        "fillColors": "#752201",
        "lineColor": "#752201",
        "color": "#ffffff",
        "fillAlphas": 0.9,
        "fontSize": 11,
        "labelText": "[[percents]]%",
        "lineAlpha": 0.5,
        "title": "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M",
        "type": "column",
        "valueField": "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M"
    }, {
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'>[[percents]]%</span>",
        "fillColors": "#61c419",
        "lineColor": "#61c419",
        "color": "#ffffff",
        "fillAlphas": 0.9,
        "fontSize": 11,
        "labelText": "[[percents]]%",
        "lineAlpha": 0.5,
        "title": "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M",
        "type": "column",
        "valueField": "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M"
    },{
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'>[[percents]]%</span>",
        "fillColors": "#7abcff",
        "lineColor": "#7abcff",
        "color": "#ffffff",
        "fillAlphas": 0.9,
        "fontSize": 11,
        "labelText": "[[percents]]%",
        "lineAlpha": 0.5,
        "title": "1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M",
        "type": "column",
        "valueField": "1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M"
    },{
        "balloonText": "[[title]], [[category]]<br><span style='font-size:14px;'>[[percents]]%</span>",
        "fillColors": "#0096d6",
        "lineColor": "#0096d6",
        "color": "#ffffff",
        "fillAlphas": 0.9,
        "fontSize": 11,
        "labelText": "[[percents]]%",
        "lineAlpha": 0.5,
        "title": "1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M",
        "type": "column",
        "valueField": "1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M"
    }],
    "marginTop": 30,
    "marginRight": 0,
    "marginLeft": 0,
    "marginBottom": 40,
    "autoMargins": false,
    "categoryField": "QTR",
    "categoryAxis": {
        "gridPosition": "start",
        "axisAlpha": 0,
        "gridAlpha": 0
    },
    "percentPrecision": 1,
    "data_labels_always_on": true
});


var valueAxis = new AmCharts.ValueAxis();
    
    valueAxis.maximum = 100;
    valueAxis.axisAlpha = 1;
    valueAxis.gridAlpha = 0;
    valueAxis.stackType = "regular"; // we use stacked graphs to make color fills
    qtrchart.addValueAxis(valueAxis);
			
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