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
	
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.scrolltabs.js"></script>	
	
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>	
       	
		

        
        <script src="<?php echo base_url()?>assets/jquery.simple-text-rotator.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/date-format/jquery-dateFormat.min.js"></script>
        <!--/ vendor javascripts -->





        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
 
        <!--/ custom javascripts -->
        <script type="text/javascript" src="//cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>


 <link href="<?php echo base_url()?>assets/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
  <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
        rel="stylesheet" type="text/css" />
    <script src="<?php echo base_url()?>assets/bootstrap-multiselect.js"
        type="text/javascript"></script>
      
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
				tickets_bylocation();
			tickets1_location();
				document.getElementById("locationerror").style.display ='none';
			
			}else
			{
			
			document.getElementById("locationerror").style.display ='block';
			
			
			}	
		
}

</script>
<script type="text/javascript">
window.onload = function () {
tickets();
tickets1();
$("#serviceticketslastyear_error").hide();

}

</script>
	
	  <script type="text/javascript">
        $(function () {
            $('#location').multiselect({
                 enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
			onDropdownHide: function(event) 
			{
			onsite_deport_location();
                
            },onDropdownShow: function(event) {
      var menu = $(event.currentTarget).find(".dropdown-menu");
      menu.css("width", 500);   
    }
			
            });
			  
            
        });
    </script>
	
	  <script type="text/javascript">
        $(function () {
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
	
	function tickets()
	{
	var lasryearmonths = "";
	var lasropentictsdata = "";
	var datavalidation = "";

 $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/serviceticketsdashboarddatalastyear",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                lasryearmonths = obj.months;
                lasropentictsdata = obj.opentickets;
             
			 for(var i=0;i<lasropentictsdata.length;i++)
			 {
			 
			 var monthsdata = lasropentictsdata[i]['data'];
			 
					 for(var k =0;k<monthsdata.length;k++)
					 {
					 
					        if(monthsdata[k]!=0)
							{
							
							datavalidation = true;
							}
					 
					 }
					 
			 }
			 
			 
					 if(datavalidation)
					 {
						lastyearchart();
					 }else
					 {
					 $("#serviceticketslastyear_error").show();
					 }

			}
			
			});
			
			function lastyearchart()
			{
			
						 $('#container').highcharts({
					chart: {
						type: 'column'
					},
					title: {
						text: 'Service Tickets 2015'
					},
					xAxis: {
						categories: lasryearmonths
					},
					yAxis: {
						min: 0,
						title: {
							text: ''
						},
						stackLabels: {
							enabled: true,
							style: {
								fontWeight: 'bold',
								color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
							}
						}
					},
					legend: {
						align: 'right',
						x: -30,
						verticalAlign: 'top',
						y: 25,
						floating: true,
						backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
						borderColor: '#CCC',
						borderWidth: 1,
						shadow: false
					},
					tooltip: {
						headerFormat: '<b>{point.x}</b><br/>',
						pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
					},
					plotOptions: {
						column: {
							stacking: 'normal',
							dataLabels: {
								enabled: true,
								color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
								style: {
									textShadow: '0 0 3px black'
								}
							}
						}
					},
					series: lasropentictsdata
				});

				
			
			}
	
   
	
	
	}
	
	</script>
	
	<script>
	
	function tickets1()
	{

	var mnths = [];
	var opendata = [];
	
	  $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/serviceticketsdashboarddata",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                mnths = obj.months;
                opendata = obj.opentickets;
             
				ticketschart();

			}
			
			});
	
	function ticketschart()
	{

					$('#container1').highcharts({
						chart: {
							type: 'column'
						},
						title: {
							text: 'Service Tickets 2016'
						},
						xAxis: {
							categories: mnths
						},
						yAxis: {
							min: 0,
							title: {
								text: ''
							},
							stackLabels: {
								enabled: true,
								style: {
									fontWeight: 'bold',
									color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
								}
							}
						},
						legend: {
							align: 'right',
							x: -30,
							verticalAlign: 'top',
							y: 25,
							floating: true,
							backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
							borderColor: '#CCC',
							borderWidth: 1,
							shadow: false
						},
						tooltip: {
							headerFormat: '<b>{point.x}</b><br/>',
							pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
						},
						plotOptions: {
							column: {
								stacking: 'normal',
								dataLabels: {
									enabled: true,
									color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
									style: {
										textShadow: '0 0 3px black'
									}
								}
							}
						},
						series: opendata
					});

					
					
					}
	}
	
	</script>
	
		<script>
	function tickets_bylocation()
	{
	var lasryearmonths = "";
	var lasropentictsdata = "";
	var datavalidation = "";
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
				
				if(message!=="")
				{
				
				$("#container").html("");
				}


 $.ajax({
            type: "POST",
            url: "<?php echo base_url()?>index.php/welcome/serviceticketsdashboarddatalastyear",
			data:"location="+message,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                lasryearmonths = obj.months;
                lasropentictsdata = obj.opentickets;
              for(var i=0;i<lasropentictsdata.length;i++)
			 {
			 
			 var monthsdata = lasropentictsdata[i]['data'];
			 
					 for(var k =0;k<monthsdata.length;k++)
					 {
					 
					        if(monthsdata[k]!=0)
							{
							
							datavalidation = true;
							}
					 
					 }
					 
			 }
			 
			 
					 if(datavalidation)
					 {
						lastyearchart();
					 }else
					 {
					 $("#serviceticketslastyear_error").show();
					 }
				

			}
			
			});
			
			function lastyearchart()
			{
			
						 $('#container').highcharts({
					chart: {
						type: 'column'
					},
					title: {
						text: 'Service Tickets 2015'
					},
					xAxis: {
						categories: lasryearmonths
					},
					yAxis: {
						min: 0,
						title: {
							text: ''
						},
						stackLabels: {
							enabled: true,
							style: {
								fontWeight: 'bold',
								color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
							}
						}
					},
					legend: {
						align: 'right',
						x: -30,
						verticalAlign: 'top',
						y: 25,
						floating: true,
						backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
						borderColor: '#CCC',
						borderWidth: 1,
						shadow: false
					},
					tooltip: {
						headerFormat: '<b>{point.x}</b><br/>',
						pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
					},
					plotOptions: {
						column: {
							stacking: 'normal',
							dataLabels: {
								enabled: true,
								color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
								style: {
									textShadow: '0 0 3px black'
								}
							}
						}
					},
					series: lasropentictsdata
				});

				
			
			}
	
   
	
	
	}
	
	</script>
		<script>
	
	function tickets1_location()
	{

	
		var selected1 = $("#locations option:selected");
                var message1 = "";
                selected1.each(function () {
					if(message1=="")
					{
					message1 = $(this).val();
					}else
					{
					message1 = message1+"|"+$(this).val();
					}
                    
                });
	
	var mnths = [];
	var opendata = [];
	
	if(message1!=="")
				{
				
				$("#container1").html("");
				}
	
	  $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/serviceticketsdashboarddata",
			data:"location="+message1,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                mnths = obj.months;
                opendata = obj.opentickets;
             
				ticketschart();

			}
			
			});
	
	function ticketschart()
	{

					$('#container1').highcharts({
						chart: {
							type: 'column'
						},
						title: {
							text: 'Service Tickets 2016'
						},
						xAxis: {
							categories: mnths
						},
						yAxis: {
							min: 0,
							title: {
								text: ''
							},
							stackLabels: {
								enabled: true,
								style: {
									fontWeight: 'bold',
									color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
								}
							}
						},
						legend: {
							align: 'right',
							x: -30,
							verticalAlign: 'top',
							y: 25,
							floating: true,
							backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || 'white',
							borderColor: '#CCC',
							borderWidth: 1,
							shadow: false
						},
						tooltip: {
							headerFormat: '<b>{point.x}</b><br/>',
							pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
						},
						plotOptions: {
							column: {
								stacking: 'normal',
								dataLabels: {
									enabled: true,
									color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
									style: {
										textShadow: '0 0 3px black'
									}
								}
							}
						},
						series: opendata
					});

					
					
					}
	}
	
	</script>
<!--	
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
var data = "";
 $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/welcome/openticketsdashboarddata",
            success: function(response1) {
			var obj = JSON.parse(response1);
			data = obj;
			genaratechartopentickets();
			}
			
			
			});
function genaratechartopentickets(){
/**
 * Define data for each year
 */
var chartData = data;


/**
 * Create the chart
 */
var currentYear = 5;
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
    "text": ""
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
        if (currentYear > 7)
          currentYear = 5;
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
	  var textdata = "May,2016";
	  
	  
	  }else if(currentYear==6)
	  {
	  var textdata = "Jun,2016";
	  
	  
	  }else if(currentYear==7)
	  {
	  var textdata = "Jul,2016";
	  
	  
	  }else
	  {
	  textdata = currentYear;
	  
	  }
        chart.allLabels[0].text = textdata;
        var data = getCurrentData();
		
        chart.animateData( data, {
          duration: 4000,
          complete: function() {
            setTimeout( loop, 5000 );
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

}

</script>

<script>
function opentickets1()
{
var chartData1 = [];
var chartData2 = [];
var chartData3 = [];
var chartData4 = [];
var chartData5 = [];
var data ="";
$.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/welcome/chartbydevicetype",
            success: function(response1) {
			var obj = JSON.parse(response1);
			data = obj;
			genaratechartdevictype();
			}
			
			
			});
			
			


function genaratechartdevictype() {
                     
							
						
						
						


var chart = AmCharts.makeChart( "chartdiv4", {
  "type": "stock",
  "theme": "light",

  "dataSets":data, 

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
}
</script>

<script>
function opentickets1_by_location()
{
var chartData1 = [];
var chartData2 = [];
var chartData3 = [];
var chartData4 = [];
var chartData5 = [];
var data ="";


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

$.ajax({
            type: "post",
            url: "<?php echo base_url();?>index.php/welcome/chartbydevicetype",
			data:"location="+message,
            success: function(response1) {
			var obj = JSON.parse(response1);
			data = obj;
			genaratechartdevictype();
			}
			
			
			});
			
			


function genaratechartdevictype() {
                     
							
						
						
						


var chart = AmCharts.makeChart( "chartdiv4", {
  "type": "stock",
  "theme": "light",

  "dataSets":data, 

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
}
</script>

<script>
function alltickets()
{

var data = "";
 $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/welcome/serviceticketsdashboarddata",
            success: function(response1) {
			var obj = JSON.parse(response1);
			data = obj;
			genaratechart();
			}
			
			
			});
			
			function genaratechart()
			{
			//alert("test");
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

  "dataProvider": data,
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


}

</script>

<script>
function onsite_deport()
{
var data = "";

 $.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/welcome/chartdatabytype",
            success: function(response1) {
			var obj = JSON.parse(response1);
			data = obj;
			chartbytype();
			}
			
			
			});
function chartbytype(){
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
  "dataProvider": data,
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

}

</script>


<script>
function onsite_deport_location()
{
var data = "";

var selected = $("#location option:selected");
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
				
				$("#chartdiv3").html("");

 $.ajax({
            type: "post",
            url: "<?php echo base_url();?>index.php/welcome/chartdatabytype",
			data: "location="+message,
            success: function(response1) {
			var obj = JSON.parse(response1);
			data = obj;
			chartbytype1();
			}
			
			
			});
function chartbytype1(){
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
  "dataProvider": data,
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

}

</script>
-->

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