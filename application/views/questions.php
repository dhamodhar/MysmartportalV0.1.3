     

      <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-maps-google">

                    <div class="pageheader">

                        

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                               
                            </ul>
                            
                        </div>

                    </div>

                    <!-- row -->
                    <div class="col-md-12">
                        <!-- col -->
<div class="col-md-6 mt-20" >
<form action ="<?php echo base_url();?>index.php/welcome/savequestions" method="post">
<div class="form-group">
<label for="message"> What types of dashboards will you find of Value?</label>

<textarea required="" placeholder="Type your message" id="message1" name="message1" rows="4" class="form-control" data-parsley-id="5150"> </textarea>
</div> </div>  

<div class="col-md-6 mt-20" >

<div class="form-group">
<label for="message"> What purpose would you like your dashboards to serve?</label>

<textarea required="" placeholder="Type your message" id="message2" name="message2" rows="4" class="form-control" data-parsley-id="5150"> </textarea>
</div> </div>  
<div class="col-md-6 mt-20" >

<div class="form-group">
<label for="message"> What kind of pre-built data performance insights(reports) are you intrested in?</label>

<textarea required="" placeholder="Type your message" id="message6" name="message6" rows="4" class="form-control" data-parsley-id="5150"> </textarea>
</div> </div> 
<div class="col-md-6 mt-20" >

<label for="measure">What would be your desired key takeaways from your dashboards?</label>

<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="desired[]" id="desired[]" value="Place Orders"><i></i> Place Orders </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="desired[]" id="desired[]" value="Pay Invoices"><i></i> Pay Invoices</label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="desired[]" id="desired[]" value="Print Reports"><i></i> Print Reports </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="desired[]" id="desired[]" value="Export Data"><i></i> Export Data </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="desired[]" id="desired[]" value="Other" onclick="showmsgbox1(this.checked)"><i></i> Other </label>
<textarea required="" style="display:none" placeholder="Type your message" id="message4" name="message4" rows="4" class="form-control" data-parsley-id="5150"> </textarea>

</div> 
<div class="col-md-6 mt-20" >

<label for="measure">What do you want to measure?</label>

<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="mesure[]" id="mesure[]" value="Service Agreements"><i></i> Service Agreements </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="mesure[]" id="mesure[]" value="Service Requests"><i></i> Service Requests </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="mesure[]" id="mesure[]" value="Order Delivery Time"><i></i> Order Delivery Time </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="mesure[]" id="mesure[]" value="Service Agreements"><i></i> Asset Inventory </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="mesure[]" id="mesure[]" value="Asset Inventory"><i></i> Supplies Usage </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="mesure[]" id="mesure[]" value="Cost Savings"><i></i> Cost Savings </label>
<label class="checkbox checkbox-custom-alt">  <input type="checkbox" name="mesure[]" id="mesure[]" value="Other" onclick="showmsgbox(this.checked)"><i></i> Other </label>
<textarea required="" style="display:none" placeholder="Type your message" id="message3" name="message3" rows="4" class="form-control" data-parsley-id="5150"> </textarea>

</div>













<div class="col-md-12 text-center">
<button value="Load More" onclick="loadmore()" class="btn btn-primary  " style="margin-top:2%">Submit</button>


</div>






                                      






        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/Pagination/input.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.scrolltabs.js"></script>	
	 <script src="<?php echo base_url()?>assets/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script> 
        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/gmaps/gmaps.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
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
            $(window).load(function(){
                map2 = new GMaps({
                    div: '#markers-map',
					 zoom: 4,
                    lat: 44.3148,
                    lng: -85.6024
                });
				
				$.ajax({
            type: "GET",
            url: "http://lowrysmartportal.com/index.php/welcome/all_assets/%20/50",
            dataType: "text",
            success: function(xml){
			
			 $(xml).find('assetspage').each(function(){
				geocoder = new google.maps.Geocoder();
			 var assetaddress= $(this).find('assetaddress').text();
			 var assetdesc= $(this).find('part_description').text();
			//alert(assetaddress);

		
		 geocoder.geocode( { 'address': assetaddress}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
	  var lng_final = results[0].geometry.location.lng();
	  var lat_final = results[0].geometry.location.lat();
	  //alert(lng_final+","+lat_final);
	  loadmarkers(lat_final,lng_final,assetaddress,assetdesc);
	   } else {
        //alert('Geocode was not successful for the following reason: ' + status);
      }
    });
			
			 });
			 },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
		
		
		
		function loadmarkers(lat_final,lng_final,assetaddress,assetdesc)
		{
		
		 map2.addMarker({
                    lat: lat_final,
                    lng: lng_final,
                    title: assetaddress,
                 infoWindow: {
                        content: '<p>'+assetdesc+'</p>'
                    }
                });
		
		}
               
         

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

 <script>

 $(document).ready(function(){
   //initialize datatable
            
	  var test1 = "";
	  $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/SalesPersonDetails",
            dataType: "text",
            success: function(xml){
			
			$(xml).find('salesrep').each(function(){
			            var repid= $(this).find('repid').text();
						var repname = $(this).find('repname').text();
						var repphone= $(this).find('repphone').text();
						var repemail= $(this).find('repemail').text();
						var repfax= $(this).find('repfax').text();
						var region_desc= $(this).find('region_desc').text();
                                                var branch_desc= $(this).find('branch_desc').text();
						var csr_fname= $(this).find('csr_fname').text();
						var csr_lname= $(this).find('csr_lname').text();
						var csr_email= $(this).find('csr_email').text();
						var csr_phone= $(this).find('csr_phone').text();
						//alert(repid);
                                               
							$("#sales").html("<li><strong>Sales Rep</strong></li><li><strong>Name: </strong>"+repname+"</li><li><strong>Email: </strong><a href='mailto:"+repemail+"' style='color:blue'>"+repemail+"</a></li><li><strong>Phone: </strong><a href='tel:"+repphone+"' target='_self' style='color:blue'>"+repphone+"</a></li><li class='divider'></li><li><strong>Customer Service Rep </strong></li><li><strong>Name: </strong>"+csr_fname+" "+csr_lname+"</li><li><strong>Email: </strong><a href='mailto:"+csr_email+"' style='color:blue'>"+csr_email+"</a></li><li><strong>Phone: </strong><a href='tel:"+csr_phone+"' target='_self' style='color:blue'>"+csr_phone+"</a></li>"); 
			 });
		     
            },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        });
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
<script>
	function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>

<script>
function showmsgbox(val)
{

if(val)
{
document.getElementById("message3").style.display = 'block';

}else
{
document.getElementById("message3").style.display = 'none';
}


}
</script>

<script>
function showmsgbox1(val)
{

if(val)
{
document.getElementById("message4").style.display = 'block';

}else
{
document.getElementById("message4").style.display = 'none';
}


}
</script>

    </body>
</html>