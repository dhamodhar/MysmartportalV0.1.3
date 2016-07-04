        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.layout.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

      

        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/excanvas.js"></script>

           <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>
     
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

 <script src="<?php echo base_url()?>assets/js/feedback.min.js"></script>


<script src="<?php echo base_url()?>assets/js/upload.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/scripts/jquery.canvasjs.min.js"></script>

<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer",
	{
		animationEnabled: true,
		title:{
			text: " Number of Offline Devices"
		},axisX:{    
        valueFormatString:  ""  // move comma to change formatting
     },
		data: [
		{
			type: "column", //change type to bar, line, area, pie, etc
		dataPoints: [
				{ y: 10, label: "Horse Cave, KY" },
				{ y: 15, label: "Lodi, CA" },
				{ y: 25, label: "Detroit, MI" },
				{ y: 30, label: "Seattle, WA" },
				{ y: 28, label: "Seattle, SA" }
				]
		}
		]
	});

	chart.render();
	loadpaichart();
}

</script>
<script type="text/javascript">
function loadpaichart(){
	var chart = new CanvasJS.Chart("chartContainer1",
	{
		title:{
			text: "Number of Devices at Each Location"
		},
		exportFileName: "Pie Chart",
		exportEnabled: true,
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{legendText}: <strong>{y}</strong>",
			indexLabel: "{label} {y}",
			dataPoints: [
				{  y: 35, legendText: "Horse Cave, KY", exploded: true, label: "Horse Cave, KY" },
				{  y: 20, legendText: "Lodi, CA", label: "Lodi, CA" },
				{  y: 18, legendText: "Detroit, MI", label: "Detroit, MI" },
				{  y: 15, legendText: "Seattle, WA", label: "Seattle, WA"},
				
			]
	}
	]
	});
	chart.render();
	devices_compliance();
}
</script>


<script type="text/javascript">
function devices_compliance(){
	var chart = new CanvasJS.Chart("chartContainer2",
	{
		title:{
			text: "Devices Out of Compliance",
			verticalAlign: 'top',
			horizontalAlign: 'center'
		},
                animationEnabled: true,
		data: [
		{        
			type: "doughnut",
			startAngle:20,
			toolTipContent: "{label}: {y} - <strong>#percent</strong>",
			indexLabel: "{label} #percent",
			dataPoints: [
				{  y: 67, label: "Seattle, WA" },
				{  y: 28, label: "Detroit, MI" },
				{  y: 10, label: "Lodi, CA" },
				{  y: 7,  label: "Horse Cave, KY"},
				
			]
		}
		]
	});
	chart.render();
	osversion();
}
</script>


	<script type="text/javascript">
	function  osversion(){
		var chart = new CanvasJS.Chart("chartContainer3",
		{
			title:{
			text: "OS Version"
		},
		exportFileName: "Pie Chart",
		exportEnabled: true,
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{legendText}: <strong>{y}</strong>",
			indexLabel: "{label} {y}",
			dataPoints: [
				{  y: 35, legendText: "WINDOWS XP", exploded: true, label: "WINDOWS XP" },
				{  y: 20, legendText: "MAC", label: "MAC" },
				{  y: 18, legendText: "WINDOWS 2009", label: "WINDOWS 2009" },
				{  y: 15, legendText: "WINDOWS 2007", label: "WINDOWS 2007"},
				
			]
	}
	]
	});
chart.render();
Devices_that_cannot_be_contacted()

}
</script>

	<script type="text/javascript">
	function  Devices_that_cannot_be_contacted(){
		var chart = new CanvasJS.Chart("chartContainer4",
		{
			title:{
			text: "Devices that cannot be Contacted"
		},
		exportFileName: "Pie Chart",
		exportEnabled: true,
                animationEnabled: true,
		legend:{
			verticalAlign: "bottom",
			horizontalAlign: "center"
		},
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{legendText}: <strong>{y}</strong>",
			indexLabel: "{label} {y}",
			dataPoints: [
				{  y: 15, legendText: "WINDOWS XP", exploded: true, label: "WINDOWS XP" },
				{  y: 20, legendText: "MAC", label: "MAC" },
				{  y: 10, legendText: "WINDOWS 2009", label: "WINDOWS 2009" },
				{  y: 45, legendText: "WINDOWS 2007", label: "WINDOWS 2007"},
				
			]
	}
	]
	});
chart.render();
$(".canvasjs-chart-credit").css("display", "none");
}
</script>



	<script type="text/javascript">
		function test()
		{
		 $.ajax({
					type: "POST",
					url: "<?php echo base_url()?>index.php/welcome/updateallnotificationsread",
					dataType: "text",
					success: function(xml){
                  $("#num_un_read").html("0");
				  
					}

			  });	
			   
		
		}
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
 <script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery.accordion.js"></script>
      

<script type="text/javascript">
      $(document).ready(function() {
	  
	
	  
	  
        $('#only-one [data-accordion]').accordion();

        $('#multiple [data-accordion]').accordion({
          singleOpen: false
        });

        $('#single[data-accordion]').accordion({
          transitionEasing: 'cubic-bezier(0.455, 0.030, 0.515, 0.955)',
          transitionSpeed: 200
        });
      });
    </script>
<script>
$( document ).ready(function() {
    $("#myModal").modal("show");
});
</script>





<script>
$(document).ready(function(){
$.fn.dataTable.ext.errMode = 'none';
$("#contracts-list").dataTable();
});
</script>








<script type="text/javascript">
$(document).ready(function(){
        $(document).on("click", ".popover .close" , function(){
        $(this).parents(".popover").popover('hide');
    });
});
</script>

<script type="text/javascript">
function notifyuser_for_commingsoon(page)
{
var useremail = document.getElementById("user_notyfy_email").value;

             $.ajax({
					type: "POST",
					url: "<?php echo base_url()?>index.php/welcome/notyfyuser",
					data:"useremail="+useremail+"&page="+page,
					dataType: "text",
					success: function(xml){
					document.getElementById("notify").style.display ='none';
               
				  
					}

			  });


}
</script>


<script type="text/javascript">
$('#popoverData').popover();
$('#popoverOption').popover({ trigger: "hover" });
</script>



    </body>
</html>