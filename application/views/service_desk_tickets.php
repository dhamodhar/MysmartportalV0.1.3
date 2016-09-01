         
<style>
#chartdiv {
  width: 100%;
  height: 400px;
}
#chartdiv1 {
  width: 110%;
  height: 450px;
}
#chartdiv2 {
  width: 100%;
  height: 400px;
}
#chartdiv3 {
  width: 100%;
  height: 400px;
}
#chartdiv4 {
  width: 100%;
  height: 500px;
}
</style>		 <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                           
                        

                     <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Service Tickets</a>
                                </li>
                            
                            </ul>
                            
                        </div>  

                    </div>

                   
                    <!-- row -->
                    <div class="row">
                 


                        <!-- col -->
                        <div class="col-md-12 db-reports">
                            
                            <!-- tile -->
                            <section class="tile">   
                            

                                <!-- tile header -->
                                <div class="tile-header bg-greensea dvd dvd-btm">
                                  
                                    <ul class="controls">
                                        <li>
                                            <a role="button" tabindex="0" class="pickDate">
                                                
                                            </a>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget ">
								 <div style="line-height:25px;background:#d6e8f3; margin-top:2px;" class="col-md-12 no-padding"> <strong>Note:&nbsp;&nbsp;</strong>
  Compare all locations or up to seven locations at a time. Simply click on the location of choice in the dropdown menu and press “enter”.</div>
									<span style="font-size:18px;margin-top:1%">Select Location: <select name="locations" id="locations"  multiple="multiple">
	
						 <?php 
						 $k= 0;
						 for($i=0;$i<sizeOf($locations);$i++){
$k++;
						 ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].", ".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
	
	</select> <button class="btn btn-blue " onclick="searchbydates()" style="margin-left:2%"><i class="fa fa-search"></i></button>
	
	</span>	<span id="locationerror" style="display:none;color:red">Compare up to seven locations at a time</span>
								 <div class="row">

                	<input type="hidden" name="loccount" id="loccount" value="<?php echo $k;?>"/>                        
                                        <div class="col-md-12">
										<span style="font-size: 25px;
    margin-left: 43%;
    color: #337ab7;">Open Service Tickets Activity</span>
										 <div class="col-md-6" style="margin-top:4%;border: solid 1px #808080;">
										
									
                                                             <div id="container" ></div>
															 
															     <div id="serviceticketslastyear_error" style="width: 100%;
    height: 225px;
    display: block;
    font-size: 24px;
    margin-top: 16%;
    margin-left: 36%;">No Service Tickets Data Available</div>
															 
								
								         </div>
										 		 <div class="col-md-6" style="margin-top:4%;border: solid 1px #808080;">
										
									
                                                             <div id="container1" ></div>
								
								         </div>
										
										 </div>
										 </div></div>
							
								
													
                                <!-- /tile widget -->

                               

                            </section>
					

                        


                    </div>
                    <!-- /row -->










                   




                  





                </div>
				                    <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile" fullscreen="isFullscreen02">


                            </section>
                            <!-- /tile -->

                        </div>
                        <!-- /col -->



                </div>
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->








