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
					generateChartData();
					createStockChart();
				});

				var chartData = [];

				function generateChartData() {
					var firstDate = new Date(2015, 0, 1);
					firstDate.setDate(firstDate.getDate() - 500);
					firstDate.setHours(0, 0, 0, 0);
				 
					
	   chartData = [{date:new Date(2015, 0, 1),
								  value:100,
								  volume:100},{date:new Date(2015, 0, 10),
								  value:60,
								  volume:60},{date:new Date(2015, 0, 15),
								  value:30,
								  volume:30},{date:new Date(2015, 0, 20),
								  value:140,
								  volume:140},{date:new Date(2015, 0, 25),
								  value:210,
								  volume:210}
								  
								  ];
					
					
			
				}

				var chart;

				function createStockChart() {
					chart = new AmCharts.AmStockChart();


					// DATASETS //////////////////////////////////////////
					var dataSet = new AmCharts.DataSet();
					dataSet.color = "#b0de09";
					dataSet.fieldMappings = [{
						fromField: "value",
						toField: "value"
					}, {
						fromField: "value",
						toField: "value"
					}];
					dataSet.dataProvider = chartData;
					dataSet.categoryField = "date";

					// set data sets to the chart
					chart.dataSets = [dataSet];

					// PANELS ///////////////////////////////////////////
					// first stock panel
					var stockPanel1 = new AmCharts.StockPanel();
					stockPanel1.showCategoryAxis = false;
					stockPanel1.title = "Value";
					stockPanel1.percentHeight = 70;

					// graph of first stock panel
					var graph1 = new AmCharts.StockGraph();
					graph1.valueField = "value";
						graph1.balloonText = "Order Quantity:<b>[[value]]</b>";
					stockPanel1.addStockGraph(graph1);
				

					// create stock legend
					var stockLegend1 = new AmCharts.StockLegend();
					stockLegend1.valueTextRegular = " ";
					stockLegend1.markerType = "none";
					stockPanel1.stockLegend = stockLegend1;


					// second stock panel
					var stockPanel2 = new AmCharts.StockPanel();
					stockPanel2.title = "value";
					stockPanel2.percentHeight = 30;
					var graph2 = new AmCharts.StockGraph();
					graph2.valueField = "value";
					graph2.type = "column";
					graph2.fillAlphas = 1;
					stockPanel2.addStockGraph(graph2);

					// create stock legend
					var stockLegend2 = new AmCharts.StockLegend();
					stockLegend2.valueTextRegular = " ";
					stockLegend2.markerType = "none";
					stockPanel2.stockLegend = stockLegend2;

					// set panels to the chart
					chart.panels = [stockPanel1, stockPanel2];


					// OTHER SETTINGS ////////////////////////////////////
					var scrollbarSettings = new AmCharts.ChartScrollbarSettings();
					scrollbarSettings.graph = graph1;
					scrollbarSettings.updateOnReleaseOnly = false;
					chart.chartScrollbarSettings = scrollbarSettings;

					var cursorSettings = new AmCharts.ChartCursorSettings();
					cursorSettings.valueBalloonsEnabled = true;
					cursorSettings.graphBulletSize = 1;
					chart.chartCursorSettings = cursorSettings;
				
			// PERIOD SELECTOR ///////////////////////////////////
					var periodSelector = new AmCharts.PeriodSelector();
					periodSelector.periods = [{
						period: "DD",
						count: 10,
						label: "10 days"
					}, {
						period: "MM",
						count: 1,
						label: "1 month"
					}, {
						period: "YYYY",
						count: 1,
						selected:true,
						label: "1 year"
					}, {
						period: "YTD",
						label: "YTD"
					}, {
						period: "MAX",
						label: "MAX"
					}];
					chart.periodSelector = periodSelector;

					

					var panelsSettings = new AmCharts.PanelsSettings();
					panelsSettings.marginRight = 16;
					panelsSettings.marginLeft = 16;
					panelsSettings.usePrefixes = true;
					chart.panelsSettings = panelsSettings;

					//dataSet.stockEvents = [e0, e1, e2, e3, e4, e5, e6, e7, e8, e9, e10];

					chart.write('chartdiv');
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


    </body>
</html>