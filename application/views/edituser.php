            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-forms-common">

                    <div class="pageheader">

                       

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                              <li>

                                    <a href="<?php echo base_url()?>index.php/welcome/dashboard"><i class="fa fa-home"></i> Lowry Solutions</a>

                                </li>

                                <li>

                                    <a href="<?php echo base_url()?>index.php/welcome/allusers">All Users</a>

                                </li>

                                <li>

                                    <a href="" class="sub-active">Edit User</a>

                                </li>
                            </ul>
                            
                        </div>

                    </div>


                  


                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">



                            <!-- tile -->
                            <section class="tile">
                               
                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font">Edit User</h1>
                                   
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="">
                                  <div class="profile-form">   

                                    <form action="<?php echo base_url()?>index.php/welcome/saveedituser" method="post"  role="form">
                                     <?php 
									 foreach($edituser as $edituserdata){
									 
									 ?>
 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input01"  control-label">First Name</label>
                                            <div>
                                                <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $edituserdata->first_name?>" required>
                                            </div>
                                        </div></div>

                                     

                                      
						 <div class="col-md-6">				
	                                    <div class="form-group">
                                            <label for="input01" control-label">Last Name</label>
                                            <div >
                                                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $edituserdata->last_name?>" required>
                                            </div>
                                        </div></div>

                                     <input type="hidden" class="form-control" name="uid" id="uid" value="<?php echo $edituserdata->id?>">
                               

                                     
						 <div class="col-md-6">				
                                             <div class="form-group">
                                            <label for="input01" class="control-label">Email</label>
                                            <div >
                                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $edituserdata->email_id?>" required>
                                            </div>
                                        </div></div>
											
										
						 <div class="col-md-6">
<div class="form-group">
                                            <label for="input01" class=" control-label">Password</label>
                                            <div>
                                               <!-- <input type="password" style="color:#000000" class="form-control" name="password" id="password" value="<?php echo $edituserdata->password?>" required>-->
											   <input type="button" name="reset_pass" id="reset_pass" value="Reset" onclick="resetpassword('<?php echo $edituserdata->email_id?>')" style="display:block">
											   <span id="succ" style="color:green;display:none;">Rest Password Link Send To email</span>
                                            </div></div>
                                        </div>
										
										
										 <div class="col-md-6">  <div class="form-group">
                                            <label for="input01" class="control-label">Phone Number</label>
                                            <div>
                                                <input type="phonenumber" class="form-control" name="phone1" id="phone1" value="<?php echo $edituserdata->phone_number?>" required>
                                            </div>
                                        </div></div>
										
	                        

                                      
										
										 <div class="col-md-6">  <div class="form-group">
                                            <label for="input01" class="control-label">CUST-CODE</label>
                                            <div>
                                                <input type="text" class="form-control" name="cust_code" id="cust_code" value="<?php echo $edituserdata->cus_code?>" required>
                                            </div>
                                        </div></div>
										
										
									 <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Company Name</label>
                                            <div >
                                                <input type="text" class="form-control" name="bus_name" id="bus_name" value="<?php echo $edituserdata->company_name?>" required>
                                            </div>
                                        </div></div>

                                                                          <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Address Line 1</label>
                                            <div >
                                                <input type="text" class="form-control" name="address1" id="address1" value="<?php echo $edituserdata->address1?>" >
                                            </div>
                                        </div></div>

                                                                          <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Address Line 2</label>
                                            <div >
                                                <input type="text" class="form-control" name="address2" id="address2" value="<?php echo $edituserdata->address2?>" >
                                            </div>
                                        </div></div>

                                                                            <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Address Line 3</label>
                                            <div >
                                                <input type="text" class="form-control" name="address3" id="address3" value="<?php echo $edituserdata->address3?>" >
                                            </div>
                                        </div></div>

                                                                           <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">City</label>
                                            <div >
                                                <input type="text" class="form-control" name="city" id="city" value="<?php echo $edituserdata->city?>" required>
                                            </div>
                                        </div></div>

                                                                           <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">State</label>
                                            <div >
                                                <input type="text" class="form-control" name="state" id="state" value="<?php echo $edituserdata->state?>" required>
                                            </div>
                                        </div></div>

                                                                           <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Zip</label>
                                            <div >
                                                <input type="text" class="form-control" name="zip" id="zip" value="<?php echo $edituserdata->zip?>" required>
                                            </div>
                                        </div></div>

                                                                           <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Country</label>
                                            <div >
                                                <input type="text" class="form-control" name="country" id="country" value="<?php echo $edituserdata->country?>" >
                                            </div>
                                        </div></div>  
                                        
                                        
										
									 <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Role</label>
                                            <div >
                                                <select class="form-control" name="role" id="role" required>
												<?php
												$role = "";
												if($edituserdata->role==1)
												{
												$role = "Admin";
												}else if($edituserdata->role==2)
												{
												$role = "Normal User";
												
												}else
												{
												$role = "Power User";
												
												}
												?>
												
												<option value="<?php echo $edituserdata->role?>"><?php echo $role?></option>
												<?php if($edituserdata->role==2)
												{
												?>
												<option value="3">Power User</option>
												
												<?php } ?>
												<?php if($edituserdata->role==3)
												{
												?>
												<option value="2">Normal User</option>
												<?php } ?>
												
												</select>
                                            </div>
                                        </div></div>
                             
										
									 <div class="col-md-12">	 <div class="form-group">
                                            <label for="input01" class=" control-label">Status</label>
                                             
                                          
			<div class="col-md-12 no-padding ">
<div class="col-md-1 no-padding">								
          <label class="checkbox checkbox-custom-alt " >    <input type="radio" name="status" id="status" <?php if($edituserdata->status=="1"){?> checked="" <?php }?> value="1"><i></i>Active  </label></div>
													
               <div class="col-md-1 no-padding">	                               
		<label class="checkbox checkbox-custom-alt "> <input type="radio" name="status" id="status" <?php if($edituserdata->status=="0"){?> checked="" <?php }?> value="0"><i></i>Inactive </label></div>
													
                                               
					</div></div>						
											
											
                                           
                                        </div>
                                

                                      
                                        <div class="tile-header dvd dvd-btm float-left top-41">
                                    <h1 class="custom-font">Module Management</h1>
                                   
                                    </div>
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-12 form-group">	
                                  <label class="checkbox checkbox-custom-alt col-sm-3  ">
								  <?php 
								  $idscheck = explode(",",$assinedid);
								  
								  ?>
                                                    <input type="checkbox" id="selecctall" <?php if(sizeof($idscheck)>10){?> checked <?php } ?> > <i></i> Select All
                                                </label>
                                                 </div><br/><br/>
                            <div class="col-sm-2"></div>
                                     <div class="col-sm-12 form-group mb-40">
                                       
                                               
                                                <?php 
												
												//echo "<pre>"; print_r($menu); echo "</pre>";
												foreach($allmenu as $assinedid_data){
												
												$ids = explode(",",$assinedid);
												$mat = "";
												for($i=0;$i<sizeof($ids);$i++)
												{
												if($ids[$i]==$assinedid_data->id)
												{
												$mat = $assinedid_data->id;
												
												}
												
												}
												?>
												
                                               <label class="checkbox checkbox-custom-alt  col-sm-3 ">
                                                   <input type="checkbox" class="checkbox1"  name="check[]" id="check[]" <?php if($assinedid_data->id == 1){?> READONLY checked <?php } ?>  value="<?php echo $assinedid_data->id;?>" <?php if($assinedid_data->id==$mat){?> checked  <?php } ?>><i></i> <?php echo $assinedid_data->menu_name; ?>
                                               </label>
                                               <?php }?>
                                               <!-- <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" value="3"><i></i> Technical Support
                                                </label>
                                                
                                                  <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" value="4"><i></i> Purchasing & Accounting
                                                </label>
                                                
                                                 <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i> Mobile Device Mangement
                                                </label>
                                                
                                                  <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i> Printer Management
                                                </label>
                                                
                                                 <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i> Asset Inventory
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i> Catalog
                                                </label>
                                                
                                                 <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i> Contracts
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i> Projects
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i> Mobility Social Media
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]"><i></i>Chat
                                                </label>-->
                                                
                                                  </div>
                                                
                                                

                                          

                                         
                                        <div class="form-group">
                                            <div class="col-sm-4 col-sm-offset-5">
                                                <a href="<?php echo base_url()?>index.php/welcome/allusers"><button type="button" class="btn btn-lightred">Cancel</button></a>
                                                <button type="submit" class="btn btn-lightred">Update</button>
                                            </div>
                                        </div>
                                     <?php } ?>
                                    </form>

                                </div></div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->



                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->




                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->