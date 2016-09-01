      

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

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">

  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".amcharts-start-date-input" ).datepicker();
  } );
  </script>

<script type="text/javascript" src="<?php echo base_url()?>assets/scripts/jquery.canvasjs.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/amcharts/style.css"	type="text/css">
<script src="<?php echo base_url()?>assets/amcharts/amcharts.js"></script>

<script src="https://www.amcharts.com/lib/3/pie.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/animate/animate.min.js"></script>
<script src="https://www.amcharts.com/lib/3/funnel.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
	<script src="<?php echo base_url()?>assets/amcharts/amstock.js" type="text/javascript"></script>


<script type="text/javascript">
window.onload = function () {
opentickets();
opentickets1();
alltickets();
onsite_deport();
$( ".amcharts-start-date-input" ).datepicker();
$( ".amcharts-end-date-input" ).datepicker();
}

</script>

<script>
function opentickets()
{

/**
 * Define data for each year
 */
var chartData = {
  "1": [ 
   { "sector": "Request Created", "size": 12 }, 
    { "sector": "Warranty Validation", "size": 7 }, 
    { "sector": "Device in Transit", "size": 4 }, 
    { "sector": "Repair in Progress", "size": 9 }, 
    { "sector": "Request Complete", "size": 17} ],
  "2": [ 
   { "sector": "Request Created", "size": 31 }, 
    { "sector": "Warranty Validation", "size": 8 }, 
    { "sector": "Device in Transit", "size": 10 }, 
    { "sector": "Repair in Progress", "size": 5 }, 
    { "sector": "Request Complete", "size": 22 } ],
  "3": [ 
   { "sector": "Request Created", "size": 11 }, 
    { "sector": "Warranty Validation", "size": 31 }, 
    { "sector": "Device in Transit", "size": 44 }, 
    { "sector": "Repair in Progress", "size": 1 }, 
    { "sector": "Request Complete", "size": 60 } ],
  "4": [ 
   { "sector": "Request Created", "size": 6 }, 
    { "sector": "Warranty Validation", "size": 10}, 
    { "sector": "Device in Transit", "size": 23 }, 
    { "sector": "Repair in Progress", "size": 2 }, 
    { "sector": "Request Complete", "size": 4 } ],
  "5": [ 
   { "sector": "Request Created", "size": 60 }, 
    { "sector": "Warranty Validation", "size": 53 }, 
    { "sector": "Device in Transit", "size": 42 }, 
    { "sector": "Repair in Progress", "size": 22 }, 
    { "sector": "Request Complete", "size": 45 } ],
  "6": [ 
   { "sector": "Request Created", "size": 160 }, 
    { "sector": "Warranty Validation", "size": 53 }, 
    { "sector": "Device in Transit", "size": 142 }, 
    { "sector": "Repair in Progress", "size": 22 }, 
    { "sector": "Request Complete", "size": 85 } ],
  "7": [ 
   { "sector": "Request Created", "size": 60 }, 
    { "sector": "Warranty Validation", "size": 53 }, 
    { "sector": "Device in Transit", "size": 42 }, 
    { "sector": "Repair in Progress", "size": 22 }, 
    { "sector": "Request Complete", "size": 45 } ]
};


/**
 * Create the chart
 */
var currentYear = 1;
var chart = AmCharts.makeChart( "chartdiv", {
  "type": "pie",
  "theme": "light",
  "dataProvider": [],
  "valueField": "size",
  "titleField": "sector",
  "startDuration": 0,
  "innerRadius": 80,
  "pullOutRadius": 20,
  "marginTop": 30,
  "titles": [{
    "text": "Open Tickets"
  }],
  "allLabels": [{
    "y": "54%",
    "align": "center",
    "size": 25,
    "bold": true,
    "text": "1995",
    "color": "#555"
  }, {
    "y": "49%",
    "align": "center",
    "size": 15,
    "text": "Month",
    "color": "#555"
  }],
  "listeners": [ {
    "event": "init",
    "method": function( e ) {
      var chart = e.chart;
      
      function getCurrentData() {
        var data = chartData[currentYear];
		//alert(data);
        currentYear++;
        if (currentYear > 6)
          currentYear = 2;
        return data;
      }
      
      function loop() {
	  var textdata = "Jan,2016";
	  if(currentYear==1)
	  {
	  var textdata = "Jan,2016";
	  
	  }else if(currentYear==2)
	  {
	  var textdata = "Feb,2016";
	  
	  
	  }else if(currentYear==3)
	  {
	  var textdata = "Mar,2016";
	  
	  
	  }else if(currentYear==4)
	  {
	  var textdata = "Apr,2016";
	  
	  
	  }else if(currentYear==5)
	  {
	  var textdata = "may,2016";
	  
	  
	  }else if(currentYear==6)
	  {
	  var textdata = "jun,2016";
	  
	  
	  }else
	  {
	  textdata = currentYear;
	  
	  }
        chart.allLabels[0].text = textdata;
        var data = getCurrentData();
		
        chart.animateData( data, {
          duration: 1000,
          complete: function() {
            setTimeout( loop, 3000 );
          }
        } );
      }

      loop();
    }
  } ],
   "export": {
   "enabled": true
  }
} );




}

</script>

<script>
function opentickets1()
{
var chartData1 = [];
var chartData2 = [];
var chartData3 = [];


generateChartData();

function generateChartData() {
                     chartData1 = [{date:new Date(2015, 0, 1),
								  value:140,
								  volume:100},{date:new Date(2015, 0, 10),
								  value:160,
								  volume:260},{date:new Date(2015, 0, 15),
								  value:300,
								  volume:430},{date:new Date(2015, 0, 20),
								  value:40,
								  volume:340},{date:new Date(2015, 0, 25),
								  value:510,
								  volume:510}
								  
								  ];
								      chartData2 = [{date:new Date(2015, 0, 1),
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
								       chartData3 = [{date:new Date(2015, 0, 1),
								  value:10,
								  volume:10},{date:new Date(2015, 0, 10),
								  value:70,
								  volume:70},{date:new Date(2015, 0, 15),
								  value:40,
								  volume:40},{date:new Date(2015, 0, 20),
								  value:340,
								  volume:340},{date:new Date(2015, 0, 25),
								  value:610,
								  volume:610}
								  
								  ];
}

var chart = AmCharts.makeChart( "chartdiv4", {
  "type": "stock",
  "theme": "light",

  "dataSets": [ {
      "title": "handheld",
      "fieldMappings": [ {
        "fromField": "value",
        "toField": "value"
      }, {
        "fromField": "volume",
        "toField": "volume"
      } ],
      "dataProvider": chartData1,
      "categoryField": "date"
    }, {
      "title": "scanners",
      "fieldMappings": [ {
        "fromField": "value",
        "toField": "value"
      }, {
        "fromField": "volume",
        "toField": "volume"
      } ],
      "dataProvider": chartData2,
      "categoryField": "date"
    }, {
      "title": "printers",
      "fieldMappings": [ {
        "fromField": "value",
        "toField": "value"
      }, {
        "fromField": "volume",
        "toField": "volume"
      } ],
      "dataProvider": chartData3,
      "categoryField": "date"
    }
  ],

  "panels": [ {
    "showCategoryAxis": false,
    "title": "Value",
    "percentHeight": 70,
    "stockGraphs": [ {
      "id": "g1",
      "valueField": "value",
      "comparable": true,
      "compareField": "value",
      "balloonText": "[[title]]:<b>[[value]]</b>",
      "compareGraphBalloonText": "[[title]]:<b>[[value]]</b>"
    } ],
    "stockLegend": {
      "periodValueTextComparing": "[[percents.value.close]]%",
      "periodValueTextRegular": "[[value.close]]"
    }
  }, {
    "title": "Volume",
    "percentHeight": 30,
    "stockGraphs": [ {
      "valueField": "volume",
      "type": "column",
      "showBalloon": false,
      "fillAlphas": 1
    } ],
    "stockLegend": {
      "periodValueTextRegular": "[[value.close]]"
    }
  } ],

  "chartScrollbarSettings": {
    "graph": "g1"
  },

  "chartCursorSettings": {
    "valueBalloonsEnabled": true,
    "fullWidth": true,
    "cursorAlpha": 0.1,
    "valueLineBalloonEnabled": true,
    "valueLineEnabled": true,
    "valueLineAlpha": 0.5
  },

  "periodSelector": {
    "position": "left",
    "periods": [ {
      "period": "MM",
      "selected": true,
      "count": 1,
      "label": "1 month"
    }, {
      "period": "YYYY",
      "count": 1,
      "label": "1 year"
    }, {
      "period": "YTD",
      "label": "YTD"
    }, {
      "period": "MAX",
      "label": "MAX"
    } ]
  },

  "dataSetSelector": {
    "position": "left"
  },

  "export": {
    "enabled": true
  }
} );

}
</script>

<script>
function alltickets()
{

var chart = AmCharts.makeChart( "chartdiv2", {
  "type": "serial",
  "addClassNames": true,
  "theme": "light",
  "autoMargins": false,
  "marginLeft": 30,
  "marginRight": 8,
  "marginTop": 10,
  "marginBottom": 26,
  "balloon": {
    "adjustBorderColor": false,
    "horizontalPadding": 10,
    "verticalPadding": 8,
    "color": "#ffffff"
  },

  "dataProvider": [ {
    "year": "Jan",
    "total": 23,
    "otickets": 16,
    "closedtickets": 7
	
  }, {
    "year": "Feb",
    "total": 26,
    "otickets": 14,
	 "closedtickets": 12
  }, {
    "year": "Mar",
    "total": 30,
    "otickets": 28,
	 "closedtickets": 2
  }, {
    "year": "Apr",
    "total": 40,
    "otickets": 28,
	 "closedtickets": 12
  }, {
    "year": "May",
    "total": 20,
    "otickets": 8,
	 "closedtickets": 12
  }, {
    "year": "June",
    "total": 50,
    "otickets": 38,
	 "closedtickets": 22
  } , {
    "year": "July",
    "total": 60,
    "otickets": 48,
	 "closedtickets": 22
  }  ],
  "valueAxes": [ {
    "axisAlpha": 0,
    "position": "left"
  } ],
  "startDuration": 1,
  "graphs": [ {
    "alphaField": "alpha",
    "balloonText": "<span style='font-size:12px;color:#000000'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
    "fillAlphas": 1,
    "title": "Total Tickets",
    "type": "column",
    "valueField": "total",
    "dashLengthField": "dashLengthColumn"
  }, {
    "id": "graph2",
    "balloonText": "<span style='font-size:12px;color:#000000'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
    "bullet": "round",
    "lineThickness": 3,
    "bulletSize": 7,
    "bulletBorderAlpha": 1,
    "bulletColor": "#FFFFFF",
    "useLineColorForBulletBorder": true,
    "bulletBorderThickness": 3,
    "fillAlphas": 0,
    "lineAlpha": 1,
    "title": "Open Tickets",
    "valueField": "otickets",
    "dashLengthField": "dashLengthLine"
  },{
    "id": "graph3",
    "balloonText": "<span style='font-size:12px;color:#000000'>[[title]] in [[category]]:<br><span style='font-size:20px;'>[[value]]</span> [[additional]]</span>",
    "bullet": "round",
    "lineThickness": 3,
    "bulletSize": 7,
    "bulletBorderAlpha": 1,
    "bulletColor": "#FFFFFF",
    "useLineColorForBulletBorder": true,
    "bulletBorderThickness": 3,
    "fillAlphas": 0,
    "lineAlpha": 1,
    "title": "Closed Tickets",
    "valueField": "closedtickets",
    "dashLengthField": "dashLengthLine"
  } ],
  "categoryField": "year",
  "categoryAxis": {
    "gridPosition": "start",
    "axisAlpha": 0,
    "tickLength": 0
  },
  "export": {
    "enabled": true
  }
} );
}

</script>

<script>
function onsite_deport()
{


var chart = AmCharts.makeChart("chartdiv3", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
   	"position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": [{
    "country": "Depot",
    "litres": 501
  }, {
    "country": "On-site",
    "litres": 301
  }],
  "valueField": "litres",
  "titleField": "country",
  "export": {
    "enabled": true
  }
});

chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);  
}


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