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
                                    <a href="" class="sub-active">Active Contract Map View</a>
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

                                    <div id="markers-map" style="height: 750px;"></div>

                                </div>
<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/active_service_contracts" class="btn btn-primary mb-10" >Return to Active Contracts</a></div>
                                <!-- /tile body -->
<div id="data"></div>


<div class="loading-progress" id="progress" style="width: 38% !important;
    margin-left: 24%;display:block"></div>
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
 <script src="<?php echo base_url()?>assets/progressbar/progress.js"></script>





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
				
				    var progress = $(".loading-progress").progressTimer({
        timeLimit: 20,
        onFinish: function () {
		document.getElementById("progress").style.display = 'none';
            
        }
    });
				
				$.ajax({
            type: "GET",
            url: "<?php echo base_url();?>index.php/welcome/all_servicecontracts_to_map_view/<?php echo $servicenumber; ?>",
            dataType: "text",
            success: function(xml){
		 var newdata = [];
		 var temp = "";
		 
		 var partdescriptiondata = [];
		 var partdesctemp = "";
		 
		  var Device_Typedata = [];
		 var Device_Typetemp = "";
		 
		 
		  var printersdata = [];
		 var fullassetdatatemp = "";
		// alert(xml);
		 
					 $(xml).find('contracts').each(function(){
					
							 var assetaddress= $(this).find('location').text();
							 var assetdesc= $(this).find('description').text();
							 var contract_number= $(this).find('contract_number').text();
							 var start_date= $(this).find('start_date').text();
							 var end_date= $(this).find('end_date').text();
							 var service_level= $(this).find('service_level').text();
							 
							 var Device_Type= $(this).find('Device_Type').text();
							 var partno= $(this).find('partno').text();
							 var partcount= $(this).find('partcount').text();
							 var fullassetdata= $(this).find('fullassetdata').text();
							 var totalcountassets= $(this).find('totalcountassets').text();
							 
							 var service_status= $(this).find('status').text();
							 
							 temp = newdata[assetaddress];
							 partdesctemp = partdescriptiondata[assetaddress];
							 Device_Typetemp = Device_Typedata[assetaddress];
							 fullassetdatatemp = printersdata[assetaddress];
							 
							 if(typeof temp == "undefined"){
								newdata[assetaddress] = contract_number;
								partdescriptiondata[assetaddress] = partcount;
								Device_Typedata[assetaddress] = totalcountassets;
								printersdata[assetaddress] = fullassetdata;
								
							 }else{
								newdata[assetaddress] = contract_number+","+temp; 
								partdescriptiondata[assetaddress] = partcount+","+partdesctemp; 
								Device_Typedata[assetaddress] = totalcountassets+","+Device_Typetemp; 
								printersdata[assetaddress] = fullassetdata+","+fullassetdatatemp; 
							 }
											
										
					 });
					 
					// newdata =  ["9420 Maltby Rd Brighton, MI 48116","MARY ROE,MEGASYSTEMS INC,799 E DRAGRAM SUITE 5A,TUCSON AZ 85705,USA"];
					 
					 var counts = 0;
					 for (var prop in newdata) 
					 {
						// alert(prop+" Conratctnumber"+newdata[prop]);
						  geocoder = new google.maps.Geocoder();
						  loadMaps(geocoder, prop,newdata[prop],partdescriptiondata[prop],Device_Typedata[prop],printersdata[prop]);
                     }
					 	 
			 },
            error: function() {
            //alert("No Response - Cannot process the data.");
            }
        }).done(function(){
		
		if($('#progress').css('display') == "block")
		{
		   progress.progressTimer('complete');
		}
		
		
        
    });
		
		function loadMaps(geocoder, prop,val,partdescription,devicetype,printersdata){
		
			var links = "";
			var assets = "";
			
			
			
						var data = val.split(",");
						for(var i=0;i<data.length;i++)
						{
						
						if(links == "")
						{
						links = '<a href="http://lowrysmartportal.com/index.php/welcome/assets/'+data[i]+'"  style="text-decoration: underline !important; color: blue;">'+data[i]+'</a>';
					
						
						}else
						{
						links = links+', <a href="http://lowrysmartportal.com/index.php/welcome/assets/'+data[i]+'" style="text-decoration: underline !important; color: blue;">'+data[i]+'</a>';
					
						}
							
						}
						var totalcount = 0;
							var assetdata = devicetype.split(",");
							var partdescriptiondata = partdescription.split(",");
							
						for(var k=0;k<assetdata.length;k++)
						{
						
							totalcount = totalcount+Number(assetdata[k]);
							
						}
						
						
						var assets1 = "";
						var getprinter = printersdata.split("##");
						
						
						//start code for grouping 
							var groupdata = [];
				            var groupvarible = "";
							var finalvalue = "";
						for (m = 0; m < getprinter.length; m++) 
						{
						var tt = getprinter[m].split(":");
						//alert(tt[0]);
						  groupvarible = groupdata[tt[0]];
						  
						  if(typeof groupvarible == "undefined")
						  {
								groupdata[tt[0]] = getprinter[m].replace(/\,/g,"");							
						  }else{
						   var firstdata = getprinter[m].split(":");
						  var seconddata = groupvarible.split(":");
						  
						  var firstvalue = firstdata[1];
						  var secondvalue = seconddata[1];
						 // alert("firstvalue"+firstvalue+"secondvalue"+secondvalue.replace(/&nbsp;/gi,'').trim());
						  //alert(Number(firstvalue.replace(/\,/g,"").trim())+Number(secondvalue.replace(/\,/g,"").trim());
						  
						  finalvalue = firstdata[0]+":&nbsp;&nbsp;&nbsp;"+(Number(firstvalue.replace(/\,/g,"").replace(/&nbsp;/gi,'').trim())+Number(secondvalue.replace(/&nbsp;/gi,'').replace(/\,/g,"").trim()) );
						  
						  
							groupdata[tt[0]] = finalvalue; 

						  }
						  
						  
						}
						
						var assetfinaldata  = "";
						for (var proptest in groupdata) 
						{
						  if (groupdata.hasOwnProperty(proptest)) {
						  if(assetfinaldata == ""){
						  assetfinaldata = groupdata[proptest];
						  
						  }else{
						  assetfinaldata = assetfinaldata+"###"+groupdata[proptest];
						  
						  }
						  
							//console.log(prop + "----------"+groupdata[prop]);
						  }
						}
						
						//end code for grouping
						
						var parnumberdata = assetfinaldata.split("###");
						
						//console.log(printersdata);
						for(var b=0;b<parnumberdata.length;b++)
						{
						assets1 = assets1+'<br>'+parnumberdata[b];

						}
						
						
						
						
						
						
		
			geocoder.geocode( { 'address': prop}, function(results, status) {
				  if (status == google.maps.GeocoderStatus.OK) {
				  var lng_final = results[0].geometry.location.lng();
				  var lat_final = results[0].geometry.location.lat();
					map2.addMarker({
						lat: lat_final,
						lng: lng_final,
						title: prop,
						infoWindow: {
					
						
							content: '<p style="font-size:20px"><b>Contract Number</b>: '+links+'</p><br><br><p style="font-size:20px"><b>Total Count: </b>'+totalcount+'</p><table>'+assets1+'</table>'
						}
					});
				   } else {
				  }
						  
			});
		}
		
		function loadmarkers(lat_final,lng_final,assetaddress,contract_number)
		{
	      var data = assetaddress;

		 
				
				
		
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