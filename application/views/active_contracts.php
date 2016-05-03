            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar page-bar col-md-8 col-xs-12 xs-mb-10">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Active Contracts</a>
                                </li>
                            
                            </ul>
                            
                        </div>
<div class="col-md-4 cps"> <div id="tableTools"></div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">

                        
                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12 xs-nopadding">




                                <!-- tile -->
                                <section class="tile padding-top-20">
 <div class="col-md-12 no-padding">
  <div class="col-md-2">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Contract number</label>
                                            <input type="text" name="contract_number" id="contract_number" class="form-control" id="exampleInputEmail2" placeholder="Search by Contract number">                                 
  </div></div>


                                     
                                        
                                        <!-- col -->
                                        <div class="col-md-2">

                                             
                                            <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="from"  id="from" class="form-control " placeholder="From">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                         </div>
                                        </div>
                                        <!-- /col -->
                                         <!-- col -->
                                        <div class="col-md-2">
                                            
                                            <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="to"  id="to" class="form-control " placeholder="To">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        <!-- /col -->
                                          <div class="col-md-1 form-group no-padding"> <button class="btn btn-blue " onclick="searchbydates()"><i class="fa fa-search" onclick="searchbydates()"></i></button></div>

<div class="col-md-2">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search</label>
 <select class="form-control" name="user_status" id="user_status" onchange="getdetails_by_location(this.value)">

  <option value="All">ALL</option>
 <?php for($i=0;$i<sizeOf($locations);$i++){ ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].", ".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
 </select>
 </div></div>	

<div class="col-md-3 no-padding"><button class="btn btn-primary mb-10 mr-10 float-right">
<div style="cursor: pointer; position: absolute; right: 193px; top: 63px;"><div class="shadow"></div>
<div class="pulse"></div>
<div class="pin-wrap"><div class="pin"></div>
</div>
</div>
 <a href="<?php echo base_url();?>index.php/welcome/active_contracts_map" target="_self" id="service_contracts_map">View Contracts in Map</a> </button></div>

</div>
					

                                    <!-- tile body -->
                                    <div class="tile-body clear">

									
                                        
                                        <div class="table-responsive">

                                            			
 
                                         <div class="row">
                                    
                                        <div class="col-md-6"><div id="colVis"></div></div>
                                        </div>
                                         <table class="table table-striped table-hover table-custom" id="contracts-list">
                                                <thead>
                                                <tr>
                                                    <th style="width:100px;" class="sorting_desc">Contract Number</th>	
                                                    <th style="width:100px;" class="active">Start Date</th> 
													<th style="width:100px;">End Date</th> 
													<th style="width:100px;">Description</th> 
													
													<th style="width:100px;">Service Level</th> 
													<th style="width:100px;">Location</th> 
												    <th style="width:100px;">Contract Status</th>						
                                                </tr>
                                                </thead>
												<tbody>
												
												</tbody>
                                            </table>
											
											

											
											
											
                                        </div>
<button class="btn btn-primary btn-xs  load-buts" onclick="loadmore()" value="Load More">Load More</button>

                                    </div>
									 <div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
                                    <!-- /tile body -->
<!--<a href="<?php echo base_url()?>index.php/welcome/all_servicecontracts_to_csv" style="margin-left:15px;" class="btn btn-primary btn-sm mb-10">Export To CSV</a>-->
									
  
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









