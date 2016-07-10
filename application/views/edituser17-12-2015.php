
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-forms-common">

                    <div class="pageheader">

                       

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="#">Admin</a>
                                </li>
                                <li>
                                    <a href="form-common.html" class="sub-active">Edit User</a>
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
                                <div class="tile-body">

                                    <form action="<?php echo base_url()?>index.php/welcome/saveedituser" method="post" class="form-horizontal" role="form">
                                     <?php 
									 foreach($edituser as $edituserdata){
									 
									 ?>
                                        <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">FirstName</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="first_name" id="first_name" value="<?php echo $edituserdata->first_name?>" required>
                                            </div>
                                        </div>

                                     

                                        <hr class="line-dashed line-full"/>
										
										  <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">LastName</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $edituserdata->last_name?>" required>
                                            </div>
                                        </div>

                                     <input type="hidden" class="form-control" name="uid" id="uid" value="<?php echo $edituserdata->id?>">
                               

                                        <hr class="line-dashed line-full"/>
										
										  <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email" id="email" value="<?php echo $edituserdata->email_id?>" required>
                                            </div>
                                        </div>
										
										<hr class="line-dashed line-full"/>
										
										  <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Phone Number</label>
                                            <div class="col-sm-10">
                                                <input type="phonenumber" class="form-control" name="ph_number" id="ph_number" value="<?php echo $edituserdata->phone_number?>" required>
                                            </div>
                                        </div>
										
	                        

                                        <hr class="line-dashed line-full"/>
										
										  <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">CUST-CODE</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="cus_code" id="cus_code" value="<?php echo $edituserdata->cus_code?>" required>
                                            </div>
                                        </div>
                                  <hr class="line-dashed line-full"/>
										
										 <div class="form-group">
                                            <label for="input01" class="col-sm-2 control-label">Status</label>
                                             
                                          
			<div class="col-sm-10 float-left">								
          <label class="checkbox checkbox-custom-alt col-sm-1" >    <input type="radio" name="status" id="status" <?php if($edituserdata->status=="1"){?> checked="" <?php }?> value="1"><i></i>Active  </label>
													
                                              
		<label class="checkbox checkbox-custom-alt col-sm-1"> <input type="radio" name="status" id="status" <?php if($edituserdata->status=="0"){?> checked="" <?php }?> value="0"><i></i>Inactive </label>
													
                                               
											
											
											</div>
                                           
                                        </div>
                                

                                        <hr class="line-dashed line-full"/>
                                        <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font">Menu Management</h1>
                                   
                                    </div>
                                    
                                    <div class="col-sm-12 form-group">	
                                  <label class="checkbox checkbox-custom-alt col-sm-3  ">
								  <?php 
								  $idscheck = explode(",",$assinedid);
								  
								  ?>
                                                    <input type="checkbox" id="selecctall" <?php if(sizeof($idscheck)>10){?> checked <?php } ?> > <i></i> Select All
                                                </label>
                                                 </div><br/><br/>
                           
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

                                </div>
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