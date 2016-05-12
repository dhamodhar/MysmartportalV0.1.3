            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-9">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Assets</a>
                                </li>

                            
                            </ul>
                            
                        </div>
<div class="col-md-3 cps"> <div id="tableTools"></div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">

                        
                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12 xs-nopadding">




                                <!-- tile -->
                                <section class="tile padding-top-5">

  
 <div class="col-md-12 no-padding">

                                    <!-- tile body -->
                                    <div class="tile-body">

<div class="col-md-12 no-padding">
<div class="col-md-2 no-padding">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Serial number</label>
                                            <input type="text" name="serial_no" id="serial_no" class="form-control" id="exampleInputEmail2" placeholder="Search by Serial number">                                 
  </div>
</div>

                                     
                                        
                                     
                                     
                                     <div class="col-md-1"> <button class="btn btn-blue" onclick="searchbydates()"><i class="fa fa-search btn-blue" onclick="searchbydates()"></i></button></div> 

 
                                        




									
  
                                        <div class="col-md-2">
										<div class="no-padding">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search</label>
 <select class="form-control" name="user_status" id="user_status" onchange="getdetails_by_status()">
 <option>Select</option>
 <option>All</option>
  <option>Active</option>
  <option>Expired</option>
 </select>
 </div></div>
</div>
 		<div class="col-md-2 no-padding">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search</label>
 <select class="form-control" name="user_status" id="user_status" onchange="getdetails_by_location(this.value)">
 <option value="All">All</option>

 <?php for($i=0;$i<sizeOf($locations);$i++){ ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].",".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
 </select>
 </div></div>

 <div class="col-md-3 no-padding">  
<button class="btn btn-primary mb-10 float-right "> 
<div style="cursor: pointer; position: absolute; right: 152px;top:62px;"><div class="shadow"></div>
<div class="pulse"></div>
<div class="pin-wrap"><div class="pin"></div>
</div>
</div>
<a href="<?php echo base_url()?>index.php/welcome/assetsmap/<?php echo $c_number;?>" target="_self">
View Assets in Map</a> </button>
</div> 
 
  
                                       
                                       
                                        </div>
<div class="mt-20 float-left table-responsive">
                                            <table class="table table-striped table-hover table-custom" id="assets-list">
                                                <thead>
                                                <tr>
                                                    <th style="width:100px;" class="no-sort">Service Request</th>
                                                    <th style="width:100px;">Serial Number</th>	
                                                    <th style="width:100px;">Part Number</th> 
													<th style="width:100px;">Part Description</th> 
													<th style="width:100px;">Device Type</th> 
													<th style="width:100px;">Contract Type</th> 
													<th style="width:100px;">Contract Number</th>
													<th style="width:100px;">Start Date</th> 
													<th style="width:100px;" class="active">End Date</th> 
												        <th style="width:100px;">Status</th>
                                                                                                        <th style="width:100px;">Options</th>	
																										
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
											
											

											
											
											
											
                                        </div>
<button class="btn btn-primary btn-xs  load-buts" onclick="loadmore()" value="Load More">Load More</button>
</div>

                                    </div>  </div>
									 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                    <!-- /tile body -->
									
  
                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->

<input type="hidden" name="count1" id="count1" value="25">




                    </div>
                    <!-- /page content -->

                </div>
                
            </section>
            <!--/ CONTENT -->



        </div>
        <!--/ Application Content -->














