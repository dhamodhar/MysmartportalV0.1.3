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



      
	<!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->




<script type="text/javascript" src="<?php echo base_url()?>assets/scripts/jquery.canvasjs.min.js"></script>
<script type="text/javascript">
window.onload = function () {

//Better to construct options first and then pass it as a parameter
	var options = {
		title: {
			text: "Column Chart using jQuery Plugin"
		},
                animationEnabled: true,
		data: [
		{
			type: "column", //change it to line, area, bar, pie, etc
			dataPoints: [
				{ label: "All Tickets", y: 100 },
				{ label: "Closed Tickets", y: 11 },
				{ label: "Open Tickets", y: 14 }
				
			]
		}
		]
	};

	$("#chartContainer").CanvasJSChart(options);

}
</script>

 <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Google's Consolidated Quarterly Revenues",
        fontFamily: "arial black",
        fontColor: "#695A42"

      },
     animationEnabled: true,
      toolTip: {
        shared: true,
        content: function(e){
          var str = '';
          var total = 0 ;
          var str3;
          var str2 ;
          for (var i = 0; i < e.entries.length; i++){
            var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>: $<strong>"+  e.entries[i].dataPoint.y + "</strong>  bn<br/>" ; 
            total = e.entries[i].dataPoint.y + total;
            str = str.concat(str1);
          }
          str2 = "<span style = 'color:DodgerBlue; '><strong>"+ (e.entries[0].dataPoint.x).getFullYear() + "</strong></span><br/>";
          total = Math.round(total*100)/100 
          str3 = "<span style = 'color:Tomato '>Total:</span><strong> $" + total + "</strong> bn<br/>";
          
          return (str2.concat(str)).concat(str3);
        }
      },
      axisY:{
        valueFormatString:"$#0bn", 
        interval: 10,
        gridColor: "#B6B1A8",
        tickColor: "#B6B1A8",
        interlacedColor: "rgba(182,177,168,0.2)"

      },
      axisX: {
        interval: 1,
        intervalType: "year"
      },
      data: [
      {        
       type: "stackedColumn",       
       showInLegend:true,
       color: "#696661",
       name:"Q1",
       dataPoints: [
       {  y: 2.25, x: new Date(2006,0)},
       {  y: 3.66, x: new Date(2007,0)},
       {  y: 5.18, x: new Date(2008,0)},
       {  y: 5.50, x: new Date(2009,0)},
       {  y: 6.75, x: new Date(2010,0)},
       {  y: 8.57, x: new Date(2011,0)},
       {  y: 10.64, x: new Date(2012,0)}
       ]
     },
     {        
       type: "stackedColumn",       
       showInLegend:true,
       name:"Q2",
       color: "#EDCA93",
       dataPoints: [
       {  y: 2.45, x: new Date (2006,0)},
       {  y: 3.87, x: new Date (2007,0)},
       {  y: 5.36, x: new Date (2008,0)},
       {  y: 5.52, x: new Date (2009,0)},
       {  y: 6.82, x: new Date (2010,0)},
       {  y: 9.02, x: new Date (2011,0)},
       {  y: 11.80, x: new Date (2012,0)}
       ]
     },
     {        
       type: "stackedColumn",       
       showInLegend:true,
       name:"Q3",
       color:"#695A42",
       dataPoints: [
       {  y: 2.68, x: new Date(2006,0)},
       {  y: 4.23, x: new Date(2007,0)},
       {  y: 5.54, x: new Date(2008,0)},
       {  y: 5.94, x: new Date(2009,0)},
       {  y: 7.28, x: new Date(2010,0)},
       {  y: 9.72, x: new Date(2011,0)},
       {  y: 13.30, x: new Date(2012,0)}
       ]
     },
     {        
       type: "stackedColumn",       
       showInLegend:true,
       name:"Q4",
       color:"#B6B1A8",
       dataPoints: [
       {  y: 3.20, x: new Date(2006,0)},
       {  y: 4.82, x: new Date(2007,0)},
       {  y: 5.70, x: new Date(2008,0)},
       {  y: 6.67, x: new Date(2009,0)},
       {  y: 8.44, x: new Date(2010,0)},
       {  y: 10.58, x: new Date(2011,0)},
       {  y: 14.41, x: new Date(2012,0)}
       ]
     }
     ]
   });

chart.render();
}
</script>




        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){
			
                // Initialize Statistics chart
                var data = [{
                    data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
                    label: 'Closed Tickets',
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
                    }
                }];

                var options = {
                    colors: ['#e05d6f','#61c8b8'],
                    series: {
                        shadowSize: 0
                    },
                    legend: {
                        backgroundOpacity: 0,
                        margin: -7,
                        position: 'ne',
                        noColumns: 2
                    },
                    xaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        },
                        position: 'bottom',
                        ticks: [
                            [ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
                        ]
                    },
                    yaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        }
                    },
                    grid: {
                        borderWidth: {
                            top: 0,
                            right: 0,
                            bottom: 1,
                            left: 1
                        },
                        borderColor: 'rgba(255,255,255,.3)',
                        margin:0,
                        minBorderMargin:0,
                        labelMargin:20,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius:6
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot = $.plot($("#statistics-chart"), data, options);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot.resize();
                    plot.setupGrid();
                    plot.draw();
                });
                // * Initialize Statistics chart
            });
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
      
        <!--/ Page Specific Scripts -->

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