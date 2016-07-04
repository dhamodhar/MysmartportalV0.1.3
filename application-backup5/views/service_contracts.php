            <!-- ====================================================
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
                                    <a href=" " class="sub-active">All Service Contracts</a>
                                </li>
                            
                            </ul>
                            
                        </div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">

                        
                        <!-- row -->
                        <div class="row">
                            <!-- col -->
                            <div class="col-md-12">




                                <!-- tile -->
                                <section class="tile padding-top-20">

  <div class="col-md-3">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Contract number</label>
                                            <input type="text" name="contract_number" id="contract_number" class="form-control" id="exampleInputEmail2" placeholder="Search by Contract number">                                 
  </div></div>


                                     
                                        
                                        <!-- col -->
                                        <div class="col-md-2">

                                             
                                            <div class="input-group datepicker" data-format="L">
                                                <input type="text" name="from"  id="from" class="form-control " placeholder="From">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                         </div>
                                        </div>
                                        <!-- /col -->
                                         <!-- col -->
                                        <div class="col-md-2">
                                            
                                            <div class="input-group datepicker" data-format="L">
                                                <input type="text" name="to"  id="to" class="form-control " placeholder="To">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        <!-- /col -->
                                         <button class="btn" onclick="searchbydates()"><i class="fa fa-search" onclick="searchbydates()"></i></button>

                                    <!-- tile body -->
                                    <div class="tile-body">

									
                                        
                                        <div class="table-responsive">
                                            									<div class="col-md-3 no-padding">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search</label>
 <select class="form-control" name="user_status" id="user_status" onchange="get_status_user()">
 <option>Select</option>
 <option>All</option>
  <option>Active</option>
  <option>Expired</option>
 </select>
 </div></div>
 <div class="col-md-4 no-padding">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search</label>
 <select class="form-control" name="user_status" id="user_status" onchange="getdetails_by_location(this.value)">
 <option>Select Location</option>
 <?php for($i=0;$i<sizeOf($locations);$i++){ ?>
 <option value="<?php echo $locations[$i]?>"><?php echo $city[$i].",".$state[$i]." (".$locations[$i].")";?></option>
<?php } ?>
 </select>
 </div></div>
 
                                         <div class="row">
                                        <div class="col-md-12 mb-20"><div id="tableTools"></div></div>
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
											
											<button class="btn" onclick="loadmore()" value="Load More">Load More</button>

											
											
											
                                        </div>

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









