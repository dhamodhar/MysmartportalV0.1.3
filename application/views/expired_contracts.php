            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-8 col-xs-12 xs-mb-10">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Expired Contracts</a>
                                </li>
                            
                            </ul>
                            
                        </div>
<div class="col-md-4 cps "> <div id="tableTools"></div>

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

  <div class="col-md-3">
<div class="form-group">
                                            <label class="sr-only" for="exampleInputEmail2">Search By Contract number</label>
                                            <input type="text" name="contract_number" id="contract_number" class="form-control" id="exampleInputEmail2" placeholder="Search by Contract number">                                 
  </div></div>


                                     
                                        
                                        <!-- col -->
                                        <div class="col-md-3">

                                             
                                            <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="from"  id="from" class="form-control " placeholder="From">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                         </div>
                                        </div>
                                        <!-- /col -->
                                         <!-- col -->
                                        <div class="col-md-3">
                                            
                                            <div class="input-group datepicker form-group" data-format="L">
                                                <input type="text" name="to"  id="to" class="form-control " placeholder="To">
                                                   <span class="input-group-addon">
                                                        <span class="fa fa-calendar"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        <!-- /col -->
                                        <div class="col-md-2">   <button class="btn btn-blue" onclick="searchbydates()"><i class="fa fa-search" onclick="searchbydates()"></i></button></div>
                                       </div>

                                    <!-- tile body -->
                                    <div class="tile-body clear">

									
                                        
                                        <div class="table-responsive">
                                            									
 
                                        
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
<button class="btn btn-primary btn-xs load-buts" onclick="loadmore()" value="Load More">Load More</button>

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









