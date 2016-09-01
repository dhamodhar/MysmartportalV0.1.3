      

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
        <script type="text/javascript" src="//cdn.rawgit.com/niklasvh/html2canvas/0.5.0-alpha2/dist/html2canvas.min.js"></script>
	<script type="text/javascript" src="//cdn.rawgit.com/MrRio/jsPDF/master/dist/jspdf.min.js"></script>



      

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
   <script type="text/javascript">
        $(function () {
            $('#location').multiselect({
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
function searchbydates()
{
var loccount = $("#loccount").val();
var selected11 = $("#location option:selected");
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
			barchartservicetickets_locationlastyear();
			barchartservicetickets1_bylocation();
				document.getElementById("locationerror").style.display ='none';
			
			}else
			{
			
			document.getElementById("locationerror").style.display ='block';
			
			
			}	
		
}

</script>


<script>
function searchbydates1()
{
var loccount = $("#loccount").val();
var selected11 = $("#location1 option:selected");
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
	ribbanschart2_bylocation();
			ribbanschart1_bylocation();
				document.getElementById("locationerror1").style.display ='none';
			
			}else
			{
			
			document.getElementById("locationerror1").style.display ='block';
			
			
			}	
		
}

</script>
	
	   <script type="text/javascript">
        $(function () {
            $('#location1').multiselect({
                 enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
			onDropdownHide: function(event) 
			{
		
			//searchbylocation(1);
                
            },onDropdownShow: function(event) {
      var menu = $(event.currentTarget).find(".dropdown-menu");
      menu.css("width", 500);   
    }
			
            });
			  
            
        });
    </script>	   <script type="text/javascript">
        $(function () {
            $('#locationtwoyears').multiselect({
                 enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
			onDropdownHide: function(event) 
			{
		
			//searchbylocation(1);
                
            },onDropdownShow: function(event) {
      var menu = $(event.currentTarget).find(".dropdown-menu");
      menu.css("width", 500);   
    }
			
            });
			  
            
        });
    </script>
<script type="text/javascript">
window.onload = function () {
$("#labelslastyear_error").hide();
$("#labelscurrentyear_error").hide();
$("#ribbanscurrentyear_error").hide();
$("#ribbanscurrentyear_error1").hide();
labelslastandcurrentyear();
barchartservicetickets();
barchartservicetickets1();
ribbanschart1();
ribbanschart2();

}

</script>

<script>
	function labelslastandcurrentyear()
	{
	
	
	var data1 = "";
	var data = "";
	var treemnthsdata = "";
	var sixmnthsdata = "";
	var oneyear = "";
	
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/lablesdatalast_and_currentyear",
            success: function(xml)
			{
            var optiondata = "";
		    var obj = JSON.parse(xml);
                data = obj.data;
				dropdowndata = obj.dropdown;
				treemnthsdata = obj.treemonthscount;
				sixmnthsdata = obj.sixmonthscount;
				oneyear = obj.oneyeardata;
				for(var i=0; i<dropdowndata.length;i++)
				{
				     optiondata = optiondata+"<option value='"+dropdowndata[i]['partcode'].trim()+"'>"+dropdowndata[i]['description']+"</option>";			
				}
				
				if(data == "")
				{
				$("#labelscurrentyear_error").show();
				$("#filterdata").hide();
				
				}else
				{
				  	$("#product").html("<option value='All'>ALL</option>"+optiondata);
				  	$("#treemonthacount").html(Math.round(treemnthsdata/3));
				  	$("#sixmonthacount").html(Math.round(sixmnthsdata/6));
						$("#oneyear").html(Math.round(oneyear/12));
						$("#product_lables").html(optiondata);
				
				labelsatglance();
				}

			}
			
			});
			
			function labelsatglance(){

    $('#lableslastandcurrentyear').highcharts({
        title: {
            text: 'Labels Usage 2015 & 2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sept','Oct','Nov','Dec']
        },
      legend: {
              showInLegend: false, 

        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	
	
	<script>
	function labelslastandcurrentyearbyproductcode(id)
	{
	
	
	lastandcurrent_byproductcode(id);
	//barchartservicetickets1_byproductcodelastyear(id);
	}
	
	</script>
	
	<script>
	function lastandcurrent_byproductcode(id)
	{
	
	var selected1 = $("#locationtwoyears option:selected");
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
				
	var data1 = "";
	var data = "";
		var treemnthsdata = "";
	var sixmnthsdata = "";
	var oneyear = "";
	
	if(id!="0")
	{
	
	if(id == "All")
	{
	 location.reload();
	
	}
	$('#lableslastandcurrentyear').html("");
	
	
	       $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/lablesdatalast_and_currentyear",
			data: "location="+message1+"&product_code="+id,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.data;
					treemnthsdata = obj.treemonthscount;
				sixmnthsdata = obj.sixmonthscount;
				oneyear = obj.oneyeardata;
				$("#treemonthacount").html(Math.round(treemnthsdata/3));
				  	$("#sixmonthacount").html(Math.round(sixmnthsdata/6));
						$("#oneyear").html(Math.round(oneyear/12));
				labelslastteoyears();
					
				//barchartservicetickets1_byproductcodelastyear(id);

			}
			
			});
			
	}
			
			function labelslastteoyears(){

    $('#lableslastandcurrentyear').highcharts({
        title: {
            text: 'Labels Usage 2015 & 2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
      legend: {
              showInLegend: false, 

        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	
	<script>
	function lastandcurrent_bylocation()
	{
	
	var selected1 = $("#locationtwoyears option:selected");
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
				
	var data1 = "";
	var data = "";
	var treemnthsdata = "";
	var sixmnthsdata = "";
	var oneyear = "";
	

	$('#lableslastandcurrentyear').html("");
	
	
	       $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/lablesdatalast_and_currentyear",
			data: "location="+message1,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.data;
					treemnthsdata = obj.treemonthscount;
				sixmnthsdata = obj.sixmonthscount;
				oneyear = obj.oneyeardata;
					$("#treemonthacount").html(Math.round(treemnthsdata/3));
				  	$("#sixmonthacount").html(Math.round(sixmnthsdata/6));
						$("#oneyear").html(Math.round(oneyear/12));
				labelslastteoyears();
				//barchartservicetickets1_byproductcodelastyear(id);

			}
			
			});
			
	
			
			function labelslastteoyears(){

    $('#lableslastandcurrentyear').highcharts({
        title: {
            text: 'Labels Usage 2015 & 2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
      legend: {
              showInLegend: false, 

        },
        series: data
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
            url: "<?php echo base_url()?>index.php/welcome/lablesdatalastyear",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj;
				//alert(data);
				
				if(data == "")
				{
				$("#labelslastyear_error").show();
				
				}else
				{
				   barchart();
				}

			}
			
			});
			
			function barchart(){

    $('#container').highcharts({
        title: {
            text: 'Labels Usage 2015'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sept','Oct','Nov','Dec']
        },
      legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	
	<script>
	function barchartservicetickets_locationlastyear()
	{
	
	
	var data1 = "";
	var data = "";
	
		var selected = $("#location option:selected");
                var message = "";
				var k =0;
                selected.each(function () {
				k++;
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+"|"+$(this).val();
					} 
                });
				
				
	
	
	if(message!=""){
	$('#container').html("");
					$.ajax({
					type: "post",
					url: "<?php echo base_url()?>index.php/welcome/lablesdatalastyear",
					data:"location="+message,
					success: function(xml)
					{

						var obj = JSON.parse(xml);
						data = obj;
						if(data == "")
						{
						$("#labelslastyear_error").show();
						
						}else
						{
						   barchart();
						}


					}
					
					});
			
			}
			function barchart(){

    $('#container').highcharts({
        title: {
            text: 'Labels Usage 2015'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul','Aug','Sept','Oct','Nov','Dec']
        },
      legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	
	
	<script>
	function barchartservicetickets1()
	{
	
	
	var data1 = "";
	var data = "";
	var dropdowndata = "";
	var optiondata = "";
	       $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/lablesdatacurrentyear",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.data;
				dropdowndata = obj.dropdown;
				for(var i=0; i<dropdowndata.length;i++)
				{
				optiondata = optiondata+"<option value='"+dropdowndata[i]['partcode'].trim()+"'>"+dropdowndata[i]['description']+"</option>"
				
				//alert(dropdowndata[i]['description']);
				
				}
				
				if(data == "")
				{
				$("#labelscurrentyear_error").show();
				$("#filterdata").hide();
				
				}else
				{
				  	$("#product").html("<option value='All'>ALL</option>"+optiondata);
				  	
				
				barchart();
				}

			

			}
			
			});
			
			function barchart(){

    $('#container1').highcharts({
        title: {
            text: 'Labels Usage 2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
       legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	
	
	
		<script>
	function barchartservicetickets1_bylocation()
	{
	
	var selected1 = $("#location option:selected");
                var message1 = "";
				var t=0;
                selected1.each(function () {
				t++;
					if(message1=="")
					{
					message1 = $(this).val();
					}else
					{
					message1 = message1+"|"+$(this).val();
					}
                    
                });
				
	var data1 = "";
	var data = "";
	
	
	if(message1!="")
	{
	$('#container1').html("");
	
	
	       $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/lablesdatacurrentyear",
			data: "location="+message1,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.data;
				
				
				if(data == "")
				{
				$("#labelscurrentyear_error").show();
				$("#filterdata").hide();
				
				}else
				{
				  	//$("#product").html("<option value='All'>ALL</option>"+optiondata);
				
				barchart_bylocation();
				}
				

			}
			
			});
			
	}
			
			function barchart_bylocation(){

    $('#container1').highcharts({
        title: {
            text: 'Labels Usage 2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
      legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	<script>
	function labelsbyproductcode(id)
	{
	
	
	barchartservicetickets1_byproductcode(id);
	//barchartservicetickets1_byproductcodelastyear(id);
	}
	
	</script>
	
	<script>
	function barchartservicetickets1_byproductcode(id)
	{
	
	var selected1 = $("#location option:selected");
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
				
	var data1 = "";
	var data = "";
	
	
	if(id!="0")
	{
	
	if(id == "All")
	{
	 location.reload();
	
	}
	$('#container1').html("");
	
	
	       $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/lablesdatacurrentyear",
			data: "location="+message1+"&product_code="+id,
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj.data;
				barchart_bylocation();
				barchartservicetickets1_byproductcodelastyear(id);

			}
			
			});
			
	}
			
			function barchart_bylocation(){

    $('#container1').highcharts({
        title: {
            text: 'Labels Usage 2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
      legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
		<script>
	function barchartservicetickets1_byproductcodelastyear(id)
	{
	
	var selected1 = $("#location option:selected");
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
				
	var data1 = "";
	var data2 = "";
	
	
	if(id!="0")
	{
	
	if(id == "All")
	{
	 location.reload();
	
	}
	$('#container').html("");
	
var databyproductcode = "";
	       $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/lablesdatalastyear",
			data: "location="+message1+"&product_code="+id,
            success: function(xml)
			{
			    var obj = JSON.parse(xml);
                databyproductcode = obj;	
				barchart_bylocation1();

			}
			
			});
			
	}
			
			function barchart_bylocation1(){

    $('#container').highcharts({
        title: {
            text: 'Labels Usage 2015'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
      legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: databyproductcode
    });



	
	
	}
	
	}
	
	
	</script>
	
	
	
	<script>
	function ribbanschart1()
	{
	
	
	var data1 = "";
	var data2 = "";
	   $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/ribbunslastyear",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj;
				//alert();
				if(data == "")
						{
						$("#ribbanscurrentyear_error").show();
						
						}else
						{
						  barchartforribbans();
						}

				
				

			}
			
			});
	      	//barchartforribbans();
			
			function barchartforribbans(){

    $('#container2').highcharts({
        title: {
            text: '2015'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
      legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	
	<script>
	function ribbanschart1_bylocation()
	{
	
	
	var data1 = "";
	var data2 = "";
	
	
	var selected1 = $("#location1 option:selected");
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
				
				if(message1!="")
				{
	$('#container2').html("");
							   $.ajax({
									type: "post",
									url: "<?php echo base_url()?>index.php/welcome/ribbunslastyear",
									data:"location="+message1,
									success: function(xml)
									{

										var obj = JSON.parse(xml);
										data = obj;
										
						if(data == "")
						{
						$("#ribbanscurrentyear_error").show();
						
						}else
						{
						 barchartforribbans_bylocation();
						}
										
										

									}
									
									});
			
			
			    }
	      	//barchartforribbans();
			
			function barchartforribbans_bylocation(){

    $('#container2').highcharts({
        title: {
            text: '2015'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
    legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
	
	<script>
	function ribbanschart2()
	{
	
	
		var data1 = "";
	var data = "";
	
	        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/ribbuns",
            success: function(xml)
			{

			    var obj = JSON.parse(xml);
                data = obj;
					if(data == "")
						{
						$("#ribbanscurrentyear_error1").show();
						
						}else
						{
							barchartforribbans1();
						}
			

			}
			
			});
	      	barchartforribbans1();
			
			function barchartforribbans1(){

    $('#container3').highcharts({
        title: {
            text: '2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
   legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
<script>
	function ribbanschart2_bylocation()
	{
	
	
		var data1 = "";
	var data = "";
	var selected = $("#location1 option:selected");
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
				
				if(message!="")
				{
				
				$('#container3').html("");
								$.ajax({
								type: "post",
								url: "<?php echo base_url()?>index.php/welcome/ribbuns",
								data:"location="+message,
								success: function(xml)
								{

									var obj = JSON.parse(xml);
									data = obj;
						if(data == "")
						{
						$("#ribbanscurrentyear_error1").show();
						
						}else
						{
						barchartforribbans1_bylocation();
						}
									

								}
								
								});
			
			    }
	      	//barchartforribbans1();
			
			function barchartforribbans1_bylocation(){

    $('#container3').highcharts({
        title: {
            text: '2016'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec']
        },
    legend: {
            layout: 'top',
            
          
            borderWidth: 0
        },
        series: data
    });



	
	
	}
	
	}
	
	
	</script>
<!--

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
var productdata = [];
var products = "";

			$.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/labelsdata",
            success: function(xml)
			{
				//alert(xml);
			var obj = JSON.parse(xml);
		
			
			chartData1 = obj.chartdata;
			productdata = obj.productdata;
			//alert(obj.productdata);

			$.each( productdata, function( key, value ) 
			{
			   products = products+"<option value='"+value.part_code+"'>"+value.part_desc+"</option>";
			   
 // alert(value.part_code);
            });
			//$("#product").html("<option>Select Product</option>"+products);
			generateChartDatafirsttime();
			displaychartfirsttime();

			}
			
			});
			
			
//generateChartData();

function generateChartDatafirsttime() {
                 
								 
}


function displaychartfirsttime()
{



var chart = AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "light",

  "dataSets": chartData1,

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
	"percentWidth": 40,
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
    "position": "left",
	"percentWidth": 40
  },

  "export": {
    "enabled": true
  }
} );

}

}
</script>



<script>
function searchbylocation(id)
{

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
				
				





var chartData1 = [];
var chartData2 = [];
var chartData3 = [];
var productdata = [];
var products = "";


if(message != ""){
$("#chartdiv").html("");
						$.ajax({
						type: "post",
						url: "<?php echo base_url()?>index.php/welcome/labelsdata",
						data:"locations="+message,
						success: function(xml)
						{
							//alert(xml);
						var obj = JSON.parse(xml);
					
						
						chartData1 = obj.chartdata;
						productdata = obj.productdata;
						//alert(obj.productdata);

						$.each( productdata, function( key, value ) 
						{
						   products = products+"<option value='"+value.part_code+"'>"+value.part_desc+"</option>";
						   
			 // alert(value.part_code);
						});
						//$("#product").html("<option>Select Product</option>"+products);
						generateChartData();
						displaychart();

						}
						
						});
			
			}
			
			
//generateChartData();

function generateChartData() {
                   
								 
}


function displaychart()
{



var chart = AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "light",

  "dataSets": [ {
      "title": "Quantity Shipped",
      "fieldMappings": [ {
        "fromField": "value",
        "toField": "value"
      }, {
        "fromField": "volume",
        "toField": "volume"
      } ],
      "dataProvider": chartData1,
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

}
</script>
<script>
function searchbyproduct(id)
{



//alert(id.trim());

var chartData1 = [];
var chartData2 = [];
var chartData3 = [];
var productdata = [];
var products = "";
//alert("<?php echo base_url()?>index.php/welcome/labelsdata/%20/"+id.trim());
			$.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/labelsdata/%20/"+id.trim(),
            success: function(xml)
			{
				//alert(xml);
			var obj = JSON.parse(xml);
		
			
			chartData1 = obj.chartdata;
			productdata = obj.productdata;
			//alert(obj.productdata);

			$.each( productdata, function( key, value ) 
			{
			   products = products+"<option value='"+value.part_code+"'>"+value.part_desc+"</option>";
			   
 // alert(value.part_code);
            });
			//$("#product").html("<option>Select Product</option>"+products);
			generateChartDatabyproduct();
			displaychartbyproduct();

			}
			
			});
			
			
//generateChartData();

function generateChartDatabyproduct() {
                  
								 
}


function displaychartbyproduct()
{



var chart = AmCharts.makeChart( "chartdiv", {
  "type": "stock",
  "theme": "light",

  "dataSets": [ {
      "title": "Quantity Shipped",
      "fieldMappings": [ {
        "fromField": "value",
        "toField": "value"
      }, {
        "fromField": "volume",
        "toField": "volume"
      } ],
      "dataProvider": chartData1,
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