            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content" class="header-bg small-header-bg">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-8 col-xs-12 xs-mb-10">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/user_profile"></i>My Projects</a>
                                </li>
                          
                                
                            </ul>
                            
                        </div>

                    </div>





</div>

      <div class="page page-shop-orders" >

                    <div class="pageheader">

                        

                        <div style="text-align: center; margin-top:30px; margin-left:5px; margin-right:5px;" class="col-md-12">
<h1 style="text-transform: uppercase;font-size:20px;"><b>A v a i l a b l e &nbsp &nbsp  S o o n</b></h1>
<h4 class="blink_me">An intuitive "Project Management" tool that will help you get more done and keep everything in context.</h4> </div>

<div class="col-md-12 " id="notify" style="display:block">
<div class="form-group col-md-3 col-sm-2  mt-10 col-md-offset-4"><input type="text" placeholder="Enter Email Here" class="form-control" id="user_notyfy_email" name="user_notyfy_email" value="<?php echo $this->session->userdata('email');?>"> </div>

<div class="col-md-2 mt-10 no-padding"> <button value="notifyme" onclick="notifyuser_for_commingsoon('My Projects')" class="btn btn-primary float-left ">Notify Me</button> </div> </div>

                    </div> 
<div class="col-md-12 mb-20"><img src="http://lowrysmartportal.com/assets/images/task-img.jpg"/ style="width: 100%;"></div>







</div>

                </div>

<!--Feedback form-->

<div style="margin-top: -243.5px; top: 50%; display: block; right: -462px;" id="mrova-feedback">
		<div id="mrova-contact-thankyou" style="display: none;">
			Thank you.  We'hv received your feedback.
		</div>
		<div id="mrova-form">
			<form id="mrova-contactform" action="<?php echo base_url()."index.php/welcome/savefeedback"?>" method="post">
				<ul>
<li><h2 class="mt-10">Feedback </h2></li>
					<li>
						<label for="mrova-name">Your Name*</label> <input name="first_name_req" class="required" id="first_name_req" value="<?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname');?>" type="text">
					</li>
					<li>
						<label for="mrova-email">Email*</label> <input name="username_req" class="required" id="username_req" value="<?php echo $this->session->userdata('email')?>" type="text">
					</li>
<li> <label for="mrova-name">Select Type*</label>
<select name="bus_name_req" id="bus_name_req" aria-controls="orders-list" class="form-control input-sm">
<option value="">--Select Type--</option>
<?php 
foreach($feedback as $feedbackdata){
?>
<option><?php echo $feedbackdata->component_name; ?></option>

<?php } ?>
</select>
</li>
					<li>
						<label for="mrova-message">Message*</label>
						<textarea class="required" id="datauser" name="datauser" rows="5" cols="30"></textarea>
					</li>
<li><input type="submit" value="Send" name="feedbacksubmit" id="feedbacksubmit"></li>
				</ul>
				
			</form>
		</div>
		<div style="margin-top: -84px; top: 50%;" id="mrova-img-control"></div>
	</div>

<!-- end feed back -->
                
            </section>
            
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->




