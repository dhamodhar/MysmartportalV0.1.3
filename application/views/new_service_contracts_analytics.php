<style>
#chartdiv {
width: 100%;
height: 500px;
}
</style>
 <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">

		<!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                           
                        

                     <div class="page-bar col-md-4 no-padding">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="#" class="sub-active">Service Contracts</a>
                                </li>
                            
                            </ul>
                            
                        </div>  
<div class="col-md-7"  style="font-size: 25px; color: #337ab7; text-align:left;"><strong>Service Contracts by Location  </strong></div>

                    </div>

                   
                    <!-- row -->
                    <div class="row">
                 


                        <!-- col -->
                        <div class="col-md-12 db-reports">
                            
                            <!-- tile -->
                            <section class="tile">   
                            

                              

                                <!-- tile widget -->
                                <div class="tile-widget bg-greensea" style="display:none;">
                                    
                                </div>
                                <!-- /tile widget -->

                               

                            </section>
							   <section class="tile">

                                <!-- tile header -->
                                <div class="col-md-12 mt-20">
								 <div style="line-height:25px;background:#d6e8f3; margin-top:5px;" class="col-md-12 no-padding"> <strong>Note:&nbsp;&nbsp;</strong>
  Compare all locations or up to seven locations at a time. Simply click on the location of choice in the dropdown menu and press “enter”.</div>
<div class="col-md-6">
                                  <span style="font-size:18px">Select Location: <select name="locations" id="locations" class="form-control"  multiple="multiple">
				 <?php
$j = 0;
				 for($i=0;$i<sizeOf($locations);$i++){ 
				 $j++;
				 ?> <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].", ".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?> </select>

<button class="btn btn-blue " onclick="searchbydates()" style="margin-left:2%"><i class="fa fa-search"></i></button>
	<input type="hidden" name="loccount" id="loccount" value="<?php echo $j;?>"/>
	<span id="locationerror" style="display:none;color:red">Compare up to seven locations at a time</span>
</span> </div>

                                     
                                        

                                    
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body clear">

                                    <div class="row">

                                        <div class="col-md-12">
										<div style="margin-top:4%;">
  <span style="    font-size: 25px;
    margin-left: 43%;
    color: #337ab7;"><a href="<?php echo base_url()?>index.php/welcome/active_service_contracts">Service Contracts At A Glance</a></span>
        <div id="chartdiv" style="width:100%; height:600px;color:#ffffff;"></div>
		
		</div>

                                        </div>               

<div class="col-md-12">

        <div id="container" style="width:100%; height:600px;margin-top:5%"></div>

                                        </div>
                                    

                                    

                                    </div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                            <!-- /tile -->

                        </div>
                        <!-- /col -->



                        


                    </div>
                    <!-- /row -->










                   




                  





                </div>
				                    <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile" fullscreen="isFullscreen02">

                                <!-- tile header -->
                                                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        </div>
                        <!-- /col -->



                </div>
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->








