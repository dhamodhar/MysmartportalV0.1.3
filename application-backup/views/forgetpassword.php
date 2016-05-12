     
<script type="text/javascript">
function savepassword()
{
var pass = document.getElementById("password").value;
var cpass = document.getElementById("cpassword").value;

if(pass == cpass)
{
document.getElementById("sa").submit();

}else
{
alert("Password and confirm password does not match");

}

}
</script>
	 <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        <h2>Forget Password</h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/dashboard"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="#">Forgot  Password</a>
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
									<span color="red" style="color:red"><?php if($error =="error"){ echo "Email id does not exists";}?></span>

                                        <div class="table-responsive">
                                           <form name="sa" id="sa" action="<?php echo base_url()?>index.php/welcome/forget_pass_link" method="post" >
										   
										   <div class="col-md-6">
                                        <div class="form-group">
                                            
                                            <div>
                                                <input type="Email" class="form-control" name="email" id="email" placeholder="Please provide your registered Email id" style="color:#000000" required="">
                                            </div>
                                        </div>
										
										</div>
									
                                          
                                           <input type="submit" class="btn btn-default" name="save" id="save" value="Send">
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









