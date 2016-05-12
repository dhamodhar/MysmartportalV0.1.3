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



      
	<!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->






<script type="text/javascript" src="<?php echo base_url()?>assets/scripts/jquery.canvasjs.min.js"></script>



        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
<script type="text/javascript">
	window.onload = function () {
		var chart = new CanvasJS.Chart("chartContainer",
		{
			zoomEnabled: false,
                        animationEnabled: true,
			title:{
				text: "Tickets Count",
				fontSize: 17
			},
			axisY2:{
				valueFormatString:"0.0 bn",
				
				maximum: 1.2,
				interval: .2,
				interlacedColor: "#F5F5F5",
				gridColor: "#D7D7D7",      
	 			tickColor: "#D7D7D7"								
			},
                        theme: "theme2",
                        toolTip:{
                                shared: true
                        },
			legend:{
				verticalAlign: "bottom",
				horizontalAlign: "center",
				fontSize: 15,
				fontFamily: "Lucida Sans Unicode"

			},
			data: [
			{        
				type: "line",
				lineThickness:3,
				showInLegend: true,           
				name: "AK", 
				dataPoints: [
				{ x: new Date(2014, 0), y: 300 },
				{ x: new Date(2014, 1), y: 300 },
				{ x: new Date(2014, 2), y: 2739 },
				{ x: new Date(2014, 3), y: 1450},
				{ x: new Date(2014, 4), y: 1697 },
				{ x: new Date(2014, 5), y: 2525 },
				{ x: new Date(2014, 6), y: 1622 },
				{ x: new Date(2014, 7), y: 1417 },
				{ x: new Date(2014, 8), y: 1388  },
				{ x: new Date(2014, 9), y: 1096 },
				{ x: new Date(2014, 10), y: 1352 },
				{ x: new Date(2014, 11), y: 1846 }
			


				]
			},{        
				type: "line",
				lineThickness:3,
				showInLegend: true,           
				name: "AL", 
				dataPoints: [
				{ x: new Date(2014, 0), y: 239 },
				{ x: new Date(2014, 1), y: 300 },
				{ x: new Date(2014, 2), y: 239 },
				{ x: new Date(2014, 3), y: 150},
				{ x: new Date(2014, 4), y: 167 },
				{ x: new Date(2014, 5), y: 255 },
				{ x: new Date(2014, 6), y: 162 },
				{ x: new Date(2014, 7), y: 1417 },
				{ x: new Date(2014, 8), y: 138  },
				{ x: new Date(2014, 9), y: 106 },
				{ x: new Date(2014, 10), y: 12 },
				{ x: new Date(2014, 11), y: 186 }
			


				]
			},{        
				type: "line",
				lineThickness:3,
				showInLegend: true,           
				name: "Alabama", 
				dataPoints: [
				{ x: new Date(2014, 0), y: 2300 },
				{ x: new Date(2014, 1), y: 2300 },
				{ x: new Date(2014, 2), y: 2239 },
				{ x: new Date(2014, 3), y: 1250},
				{ x: new Date(2014, 4), y: 2167 },
				{ x: new Date(2014, 5), y: 2255 },
				{ x: new Date(2014, 6), y: 1622 },
				{ x: new Date(2014, 7), y: 1417 },
				{ x: new Date(2014, 8), y: 1238  },
				{ x: new Date(2014, 9), y: 1062 },
				{ x: new Date(2014, 10), y: 1222 },
				{ x: new Date(2014, 11), y: 1826 }
			


				]
			},
		
	



			],
          legend: {
            cursor:"pointer",
			 horizontalAlign: "left", // left, center ,right 
     verticalAlign: "center",  // top, center, bottom
            itemclick : function(e) {
              if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
              }
              else {
                e.dataSeries.visible = true;
              }
              chart.render();
            }
          }
        });

chart.render();
$(".canvasjs-chart-credit").css("display", "none");
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