            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        <h2>Reset Password</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/dashboard"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="#">Reset Password</a>
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

  


                                     
                                        
                                      
                                    
                                    <!-- tile body -->
                                    <div class="tile-body">

                                        <div class="table-responsive">
                                           <form name="sa" id="sa" action="<?php echo base_url()?>index.php/welcome/saveresetpassword" >
										   
										   <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input01" control-label"="">New Password</label>
                                            <div>
                                                <input type="text" class="form-control" name="password" id="password" required="">
                                            </div>
                                        </div></div>
										 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input01" control-label"="">Conform New Password</label>
                                            <div>
                                                <input type="text" class="form-control" name="cpassword" id="cpassword" required="">
                                            </div>
                                        </div></div>
                                           
                                           <input type="hidden" name="veryfy" id="veryfy" value="<?php echo $veryfycode ;?>" >
                                           <input type="submit" class="btn btn-default" name="save" id="save" >
                                           </form>
											
											
											
											
											
                                        </div>

                                    </div>
								
  
                                </section>
                                <!-- /tile -->

                            </div>
                            <!-- /col -->
                        </div>
                        <!-- /row -->




                    </div>
                    <!-- /page content -->

                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->









