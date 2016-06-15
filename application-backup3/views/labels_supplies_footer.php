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
				lableschart();
			});


			
			function filter(id)
			{
			//alert(id);
			
			if(id==2016)
			{
			lableschart_year();
			
			}else if(id==2015)
			{
			lableschart_year0();
			
			
			}else
			{
			lableschart();
			
			}
			
			
			
			
			}
			
			
			function lableschart_year()
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
    "dataProvider": [
        {"QTR":"2016 Q1",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.8,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.6,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.4,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.6,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.9
		},
        {"QTR":"2016 Q2",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.1,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.2,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.9,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.2,
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
    },{
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
        "fillColors": "#FCCB37",
        "lineColor": "#FCCB37",
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
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.4,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.2,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.5,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.1
		},
        {"QTR":"2015 Q4",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.3,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.6,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.3,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.4,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.8
		},
        {"QTR":"2016 Q1",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.1,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.6,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.4,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.9,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.2
		},
        {"QTR":"2016 Q2",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":0.9,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":0.8,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":0.2,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":0.4,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":0.7
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
			
			
			
			function lableschart_year0()
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
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":8,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":3,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":1,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":21
		},
        {"QTR":"2015 Q3",
        "1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":6,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":1,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":12,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":8,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":5
		},
        {"QTR":"2015 Q4",
		"1X1.5 TT PAPER,292C BLUE,AGGRESSIVE PERM ADH,3446/RL,3M":2,
        "1X1.5 TT PAPER,185C RED,AGGRESSIVE ADH,3446/RL,3M":4,
        "1X1.5 TT PPR,PANTONE PURPLE,AGGRESSIVE ADH,3446/RL,3M":5,
		"1X1.5 TT PPR,BLANK WHITE,AGGRESSIVE ADH,3446/RL,3M":21,
		"1X1.5 TT PPR,3385C GREEN,AGGRESSIVE ADH,3446/RL,3M":17
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