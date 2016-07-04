


            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-maps-google">

                    <div class="pageheader">

                        <h2>Assets in Map View<span></span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href=""><i class="fa fa-home"></i> Dashboard</a>
                                </li>
                                <li>
                                    <a href="#">Assets</a>
                                </li>
                                <li>
                                    <a href="">Assets Maps</a>
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
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Assets </strong> Map</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div id="markers-map" style="height: 400px;"></div>

                                </div>
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

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

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
                    lat: -12.043333,
                    lng: -77.028333
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
                    lat: -12.043333,
                    lng: -77.03,
                    title: 'Lima',
                 infoWindow: {
                        content: '<p>Assets 1</p>'
                    }
                });
		
		}
               
         

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
