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
function opentickets()
{



         $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/servicetickets_graphdata",
            dataType: "text",
            success: function(ticketsdata)
			{
			
			ticketsdataobj = JSON.parse(ticketsdata);
			//alert(ticketsdataobj);
			 var chart = new CanvasJS.Chart("chartContainer1",
    {
      title:{
        text: "All Service Tickets",
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
            var  str1 = "<span style= 'color:"+e.entries[i].dataSeries.color + "'> " + e.entries[i].dataSeries.name + "</span>:<strong>"+  e.entries[i].dataPoint.y + "</strong><br/>" ; 
            total = e.entries[i].dataPoint.y + total;
            str = str.concat(str1);
          }
          str2 = "<span style = 'color:DodgerBlue; '><strong>"+ (e.entries[0].dataPoint.x).getFullYear() + "</strong></span><br/>";
          total = Math.round(total*100)/100 
          str3 = "<span style = 'color:Tomato '>Total:</span><strong> " + total + "</strong><br/>";
          
          return (str2.concat(str)).concat(str3);
        }
      },
      axisX: {
        interval: 1,
        intervalType: "year"
      },
	  
      data: [{        
       type: "stackedColumn",       
       showInLegend:true,
       name:"Closed Tickets",
       color:"#695A42",
       dataPoints: [
       {  y: 50, x: new Date(2009,0)},
       {  y: 30, x: new Date(2010,0)},
       {  y: 20, x: new Date(2011,0)},
       {  y: 50, x: new Date(2012,0)},
       {  y: 50, x: new Date(2013,0)},
       {  y: 50, x: new Date(2014,0)},
       {  y: 46, x: new Date(2015,0)}
       ]
     },
     {        
       type: "stackedColumn",       
       showInLegend:true,
       name:"Open Tickets",
       color: "#337ab7",
       dataPoints: [
     {  y: 50, x: new Date(2009,0)},
       {  y: 30, x: new Date(2010,0)},
       {  y: 20, x: new Date(2011,0)},
       {  y: 50, x: new Date(2012,0)},
       {  y: 50, x: new Date(2013,0)},
       {  y: 50, x: new Date(2014,0)},
       {  y: 68, x: new Date(2015,0)}
       ]
     },
	 
	 ],
      legend:{
        cursor:"pointer",
        itemclick: function(e) {
          if (typeof (e.dataSeries.visible) ===  "undefined" || e.dataSeries.visible) {
	          e.dataSeries.visible = false;
          }
          else
          {
            e.dataSeries.visible = true;
          }
          chart.render();
		
		  
        }
      }
   });

chart.render();
  
$(".canvasjs-chart-credit").css("display", "none");

			
			},	
		});




}

function pieservice()
{
	var chart = new CanvasJS.Chart("chartContainer2",
	{
		title:{
			text: "All Service Tickets",
			fontFamily: "arial black"
		},
                animationEnabled: true,
		legend: {
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		theme: "theme1",
		data: [
		{        
			type: "pie",
			indexLabelFontFamily: "Garamond",       
			indexLabelFontSize: 20,
			indexLabelFontWeight: "bold",
			startAngle:0,
			indexLabelFontColor: "MistyRose",       
			indexLabelLineColor: "darkgrey", 
			indexLabelPlacement: "inside", 
			toolTipContent: "{name}: {y}",
			showInLegend: true,
			indexLabel: "{Y}", 
			percentFormatString:"#0",
			dataPoints: [
				{  y: 378, name: "Closed Tickets", legendMarkerType: "triangle"},
				{  y: 1501, name: "Pending Tickets", legendMarkerType: "square"},
				{  y: 27, name: "Open Tickets", legendMarkerType: "circle"}
			]
		}
		],
		 legend:{
        cursor:"pointer",
        itemclick: function(e) {
          if (typeof (e.dataSeries.visible) ===  "undefined" || e.dataSeries.visible) {
	          e.dataSeries.visible = false;
          }
          else
          {
            e.dataSeries.visible = true;
          }
          chart.render();
		
		  
        }
      }
	});
	chart.render();
}
</script>

<script type="text/javascript">
window.onload = function () {

//Better to construct options first and then pass it as a parameter
var obj = "";
 $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/dashboarddata_test",
            dataType: "text",
            success: function(xml){
				obj = JSON.parse(xml);
				 //alert(xml);
				 
				 
				 		var options = {
		title: {
			text: "Dashboard Data"
		},
                animationEnabled: true,
		data: [
		{
			type: "column", //change it to line, area, bar, pie, etc
			dataPoints: obj
		}
		]
	};

	//$("#chartContainer").CanvasJSChart(options);
	
	opentickets(); 
	pieservice();
			}
			
 });
 

 

 
 
 
 
 


}

</script>



        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
  
			   
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