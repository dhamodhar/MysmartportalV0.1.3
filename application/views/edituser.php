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

                                    <form action="<?php echo base_url()?>index.php/welcome/saveedituser" method="post"  role="form" enctype="multipart/form-data">
                                     <?php 
									 foreach($edituser as $edituserdata){
									 
									 ?>
 <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input01"  control-label">First Name</label>
                                            <div>
                                                <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $edituserdata->first_name?>" readonly >
                                            </div>
                                        </div></div>

                                     

                                      
						 <div class="col-md-6">				
	                                    <div class="form-group">
                                            <label for="input01" control-label">Last Name</label>
                                            <div >
                                                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $edituserdata->last_name?>" readonly>
                                            </div>
                                        </div></div>

                                   <input type="hidden" class="form-control" name="uid" id="uid" value="<?php echo $edituserdata->id?>">
                               

                                     
						 <div class="col-md-6">				
                                             <div class="form-group">
                                            <label for="input01" class="control-label">Email / Username </label>
                                            <div >
                                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $edituserdata->email_id?>" readonly >
                                            </div>
                                        </div></div>
										
										
						<div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">CUST-CODE </label>
                                            <div>
                                                <input type="text" class="form-control" name="cust_code" id="cust_code" value="<?php echo $edituserdata->cus_code?>" readonly >
                                                <input type="hidden" name="cust_code1" id="cust_code1" value="<?php echo ($edituserdata->cus_code);?>" >
                                            </div>
                                        </div></div>
											
										
						 <div class="col-md-6">
<div class="form-group">
                                            <label for="input01" class=" control-label">Password </label>
                                            <div>
                                               <!-- <input type="password" style="color:#000000" class="form-control" name="password" id="password" value="<?php echo $edituserdata->password?>" required>-->
											   <input type="button" name="reset_pass" id="reset_pass" value="Reset" onclick="resetpassword('<?php echo $edituserdata->email_id?>')" style="display:block">
											   <span id="succ" style="color:green;display:none;">Rest Password Link Send To email</span>
                                            </div></div>
                                        </div>

                                            <div class="col-md-6">	  
<div class="form-group">
                                            <label for="input01" class=" control-label">Company Name </label>
                                            <div >
                                                <input type="text" class="form-control" name="bus_name" id="bus_name" value="<?php echo $edituserdata->company_name?>"  readonly>
                                            </div>
                                        </div></div>
										<!--priya-->
						<div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  class="control-label">Image <span style="color:red">*</span></label>
                                            <div>
                                                <img src="<?php echo base_url()?>assets/images/<?php echo @$edituserdata->image;?>" height="50px" width="50px">
                                                <input type="file" name="updated_image" id="updated_image" class="form-control">
                                            </div>
                                        </div></div>
										<!-- -->
						
									 <div class="col-md-6">	  <div class="form-group">
                                            <label for="input01" class=" control-label">Role <span style="color:red">*</span></label>
                                            <div >
                                                <select class="form-control" name="role" id="role" required onchange="get_select_menu()">
												<?php
												$role = "";
												if($edituserdata->role==1)
												{
												$role = "Admin";
												}else if($edituserdata->role==2)
												{
												$role = "Normal User";
												
												}else if($edituserdata->role==4)
												{
												$role = "Executive User";
												
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
												<option value="4">Executive User</option>
												<?php } ?>
												<?php if($edituserdata->role==3)
												{
												?>
												<option value="2">Normal User</option>
												<option value="4">Executive User</option>
												<?php } ?>
												<?php if($edituserdata->role==4)
												{
												?>
												<option value="2">Normal User</option>
												<option value="3">Power User</option>
												<?php } ?>
												
												</select>
                                            </div>
                                        </div></div>
                             
										
									 <div class="col-md-12">	 <div class="form-group">
                                            <label for="input01" class=" control-label">Status <span style="color:red">*</span></label>
                                             
                                          
			<div class="col-md-12 no-padding ">
<div class="col-md-1 no-padding">								
          <label class="checkbox checkbox-custom-alt " >    <input type="radio" name="status" id="status" <?php if($edituserdata->status=="1"){?> checked="" <?php }?> value="1"><i></i>Active  </label></div>
													
               <div class="col-md-1 no-padding">	                               
		<label class="checkbox checkbox-custom-alt "> <input type="radio" name="status" id="status" <?php if($edituserdata->status=="0"){?> checked="" <?php }?> value="0"><i></i>Inactive </label></div>
													
                                               
					</div></div>						
				   
                                        </div>
                                

                                      
                                        <div class="tile-header dvd dvd-btm float-left top-41">
                                    <h1 class="custom-font">Module Management <span style="color:red">*</span></h1>
                                   
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
                                                   <input type="checkbox" class="checkbox1"  name="check[]" id="check[]" <?php if($assinedid_data->id == 1){?>disabled="disabled" checked required <?php } ?>  value="<?php echo $assinedid_data->id;?>" <?php if($assinedid_data->id==$mat){?> checked  <?php } ?>><i></i> <?php echo $assinedid_data->menu_name; ?>
                                               </label>
                                               <?php }?>
                                            
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

<div class="col-md-12 pt-20 pb-20" style="background:#fff;">
 <button class="btn btn-primary  center-block" data-toggle="modal" data-target="#splash" data-options="splash-2 splash-ef-11" onclick="loadlocations(<?php echo (string)$edituserdata->cus_code;?>)">Load Locations</button>


</div>
<div class="col-md-12 pt-20 pb-20" style="background:#fff;">
      <table id="orders-list1">
                                                <thead>
                                                <tr>

                                                    <th style="width:180px;">ShipToCode</th>
                                                    <th style="width:200px;" class="active">CustomerCode</th>
                                                    <th style="width:150px;">ShiptoBusName</th>
                                                    <th style="width:150px;">Address2</th>
                                                    <th style="width:150px;">City</th>
                                                    <th style="width:150px;">State</th>
                                                    <th style="width:100px;">Zip</th> 
													<th style="width:100px;">Actions</th> 
                                                </tr>
                                                </thead>
												<tbody>
												
												<?php 
												foreach($userlocations as $userlocationsdata){
												?>
												 <tr>
											    <td> <?php echo $userlocationsdata->ship_to_code?></td>
											    <td> <?php echo $userlocationsdata->custum_code?></td>
											    <td> <?php echo $userlocationsdata->ship_to_busname?></td>
											    <td> <?php echo $userlocationsdata->address_1?></td>
											
											    <td> <?php echo $userlocationsdata->city?></td>
											    <td> <?php echo $userlocationsdata->state?></td>
											    <td> <?php echo $userlocationsdata->zip?></td>
												 <td> <a href="javascript:void(0)" onclick="deletelocation(<?php echo $userlocationsdata->id?>)" >Delete </a></td>
												 	</tr>
												 <?php } ?>
												 
												</tbody>
												</table>
												</div>
                               

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