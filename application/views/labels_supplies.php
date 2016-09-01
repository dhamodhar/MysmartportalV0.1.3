  

            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders" style="padding-top:0px;" >

                    <div class="pageheader" style="background:#fff; position: fixed; width: 100%; z-index: 9;">

                        

                        <div class="page-bar" style="padding-top:5px;">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Labels</a>
                                </li>
                                
                            </ul>
                            
                        </div>

                    
<div class="row">
<div style="line-height:25px;background:#d6e8f3; margin-top:5px;" class="col-md-12 no-padding"> <strong>Note:&nbsp;&nbsp;</strong>Simply navigate and “click” on the product description within the chart (to toggle on/off) or select the product description from the drop down.<br/>
  Compare all locations or up to seven locations at a time. Simply click on the location of choice in the dropdown menu and press “enter”.</div> </div>

</div>

                    <!-- page content -->
                    <div class="pagecontent">


                        <!-- row -->
                        <div class="row">

                            <!-- col -->
                            <div class="col-md-12  ">
                             



                                <!-- tile -->
                            							           <section class="tile padding-top-0">
										   
										   
										    <div style="margin-top:8%;">
										   <span style="    font-size: 25px;
    margin-left: 43%;
    color: #337ab7;"> Dynamic Rolling Chart Labels 12 Months</span>
				<div class="p-15 b-b" style="margin-top:3%">	
	<span style="font-size:18px" id="filterdata">Select Location: <select name="locationtwoyears" id="locationtwoyears"  multiple="multiple">
	
						 <?php
$k=0;
						 for($i=0;$i<sizeOf($locations);$i++){ 
						 $k++;
						 ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].", ".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
	
	</select> 
	<input type="hidden" name="loccount" id="loccount" value="<?php echo $k;?>"/>
	<button class="btn btn-blue " onclick="lastandcurrent_bylocation()" style="margin-left:2%"><i class="fa fa-search"></i></button>
	
	<span id="locationerror" style="display:none;color:red">Compare up to seven locations at a time</span>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Select Label Product Description: <select name="product_lables" id="product_lables" style="width:20% !important;" onchange="labelslastandcurrentyearbyproductcode(this.value)">
	<option>Select Label Product Description</option>

	</select>
	
	</span>			 <div class="row">

                                        
                                        <div class="col-md-12" style="margin-top:3%">
										
										 <div class="col-md-12" style="border:solid 1px #808080; !important">
										
									
                                                             <div id="lableslastandcurrentyear" style="height:502px;"></div>
													         <div id="countper" style="height:102px;margin-left: 40%;">
																	 <table border="1" style="text-align: center;">
																			 <tr>
																					 <td style="width:60%">
																					     <span style="font-size: 22px;">Average Monthly Order (90 days) </span>
																					 </td>
																					 <td style="width:20%">
																					  <span id="treemonthacount" style="font-size: 22px;">0</span>
																					 </td>
																			 </tr>
																			  <tr>
																					 <td>
																					    <span style="font-size: 22px;">Average Monthly Order (6 Months) </span>
																					 </td>
																					 <td>
																					  <span id="sixmonthacount" style="font-size: 22px;">0</span>
																					 </td>
																			 </tr>	  <tr>
																					 <td>
																					  <span style="font-size: 22px;">Average Monthly Order (1 Year) </span>
																					 </td>
																					 <td>
																					  <span id="oneyear" style="font-size: 22px;">0</span>
																					 </td>
																			 </tr>
																	 </table>
															 
															 
															 </div>
								
								         </div>
										 
										
										 </div>
										 </div>
                                     
                                        
                                        <!-- col -->
                                        
                                        <!-- /col -->
                                         <!-- col -->
                                        
                                        <!-- /col -->
                                        
									
                                    <!-- /tile body -->
</div>
                                </section>
								           <section class="tile padding-top-0">
										   
										   
										    <div style="margin-top:4%;">
										   <span style="    font-size: 25px;
    margin-left: 43%;
    color: #337ab7;"> Labels Usage</span>
				<div class="p-15 b-b" style="margin-top:3%">	
	<span style="font-size:18px" id="filterdata">Select Location: <select name="location" id="location"  multiple="multiple">
	
						 <?php
$k=0;
						 for($i=0;$i<sizeOf($locations);$i++){ 
						 $k++;
						 ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].", ".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
	
	</select> 
	<input type="hidden" name="loccount" id="loccount" value="<?php echo $k;?>"/>
	<button class="btn btn-blue " onclick="searchbydates()" style="margin-left:2%"><i class="fa fa-search"></i></button>
	
	<span id="locationerror" style="display:none;color:red">Compare up to seven locations at a time</span>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Select Label Product Description: <select name="product" id="product" style="width:20% !important;" onchange="labelsbyproductcode(this.value)">
	<option>Select Label Product Description</option>

	</select>
	
	</span>			 <div class="row">

                                        
                                        <div class="col-md-12" style="margin-top:3%">
										
										 <div class="col-md-5" style="border:solid 1px #808080; !important">
										
									
                                                             <div id="container" style="height:402px;"></div>
															    <div id="labelslastyear_error" >No Labels Usage Data Available</div>
								
								         </div>
										 		 <div class="col-md-6" style="border:solid 1px #808080; !important;margin-left:1%">
										
									
                                                             <div id="container1" style="height:402px;"></div>
															    <div id="labelscurrentyear_error" style="left: 28%;
    position: absolute;
    top: 40%;">No Labels Usage Data Available</div>
								
								         </div>
										
										 </div>
										 </div>
                                     
                                        
                                        <!-- col -->
                                        
                                        <!-- /col -->
                                         <!-- col -->
                                        
                                        <!-- /col -->
                                        
									
                                    <!-- /tile body -->
</div>
                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->

<section class="tile padding-top-0" style="margin-top:5%">
   <div style="margin-top:4%;">
										   <span style="    font-size: 25px;
    margin-left: 43%;
    color: #337ab7;">Ribbons, Toner, Ink Usage</span>
				<div class="p-15 b-b" style="margin-top:1%">	
	<span style="font-size:18px">Select Location:  <select name="location1" id="location1"  multiple="multiple">
	
						 <?php for($i=0;$i<sizeOf($locations);$i++){ ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].", ".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
	
	</select>
	
		<button class="btn btn-blue " onclick="searchbydates1()" style="margin-left:2%"><i class="fa fa-search"></i></button>
	
	<span id="locationerror1" style="display:none;color:red">Compare up to seven locations at a time</span>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    Select Product Description: <select name="product1" id="product1" style="width:28% !important;" onchange="searchbyproduct(this.value)">
	<option>Select Product Description</option>

	</select>
	
	</span>			 <div class="row">

                                        
                                        <div class="col-md-12" style="margin-top:3%;">
										
										 <div class="col-md-5" style="border:solid 1px #808080;">
										
									
                                                             <div id="container2" style="height:402px;"></div>
															  		    <div id="ribbanscurrentyear_error" style="left: 28%;
    position: absolute;
    top: 40%;">No Data Available</div>
								
								         </div>
										 		 <div class="col-md-6" style="border:solid 1px #808080;margin-left:1%;">
										
									
                                                             <div id="container3" style="height:402px;"></div>
															 					  		    <div id="ribbanscurrentyear_error1" style="left: 28%;
    position: absolute;
    top: 40%;">No Data Available</div>
								
								         </div>
										
										 </div>
										 </div>
                                     
                                        
                                        <!-- col -->
                                        
                                        <!-- /col -->
                                         <!-- col -->
                                        
                                        <!-- /col -->
                                        
									
                                    <!-- /tile body -->
									</div>

                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>


                    </div>
                    <!-- /page content -->

                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->




