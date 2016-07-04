     
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

<li class="information-btn">
<div  rel="tooltip" data-placement="left" class="btn btn-default  bg-none  btn-xs  pull-right  ml-10 col-md-1"    data-toggle="popover"    data-html="true"   data-title="<a href='#' class='close' data-dismiss='alert'>×</a>


<div class='line-hieght-22'>You may search by order id / invoice number. You may search between order dates. You may use both.<br/> <br/><span class='red'>Note:</span> You may search orders & invoices using dates up to 1 year, if you want to get data for more than 1 year, please contact Lowry </div>
<div data-toggle='collapse' data-target='#demo1' class='accordion-toggle float-right'><button onclick='showDetails1()' class='btn btn-primary btn-xs'>More</button></div>
<div class='hiddenRow'>
 <div class='level3 accordian-body collapse' id='demo1'>
                     <ul>
<li><strong>Forgot Password</strong></li>

<li class='blue-bold'>How to Navigate</li>
<li>Please navigate to Lowry Smart Portal link and click on forgot password link at the bottom of user login box.</li>
<li class='blue-bold'>Functionality</li>
<li>User will be redirected to forgot password page, where user can provide the registered email id and a password reset mail will be generated and sent to the registered mail id.</li>
<li><img src='http://lowrysmartportal.com/assets/images/forgot-img.jpg'/></li>
<li>The password reset mail will be valid only for a period of one hour after which user has to redo the entire process to receive another password reset mail.</li>
<li>Once the user clicks on the password reset link, user will be prompted to enter new password twice and click on 'Save', the password will be saved and the user will be redirected to login page where user can login with the new password.</li>

</ul>


 

                        
                    </div>
">
<i class="fa fa-info-circle"></i>
</div> </div>
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
									
                                          
                                           <input type="submit" class="btn btn-greensea" name="save" id="save" value="Send">
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









