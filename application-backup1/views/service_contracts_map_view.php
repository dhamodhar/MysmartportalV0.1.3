            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-maps-google">

                    <div class="pageheader">

                        

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>"
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/active_service_contracts">Active Contracts</a>
                                </li>
                                <li>
                                    <a href="" class="sub-active">Map View</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">

                         
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div id="markers-map" style="height: 500px;"></div>

                                </div>
<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/active_service_contracts" class="btn btn-primary mb-10" >Return to Active Contracts</a></div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        
                        
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->


                </div>
                
            </section>
            <!--/ CONTENT -->






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
            url: "http://lowrysmartportal.com/index.php/welcome/all_servicecontracts_to_map_view/<?php echo $servicenumber; ?>",
            dataType: "text",
            success: function(xml){
			
			 $(xml).find('contracts').each(function(){
				geocoder = new google.maps.Geocoder();
			 var assetaddress= $(this).find('location').text();
			 var assetdesc= $(this).find('description').text();
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
		//alert(assetdesc);
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

    </body>
</html>