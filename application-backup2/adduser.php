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
                                    <a href="" class="sub-active">Create User</a>
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
                                    <h1 class="custom-font">Create User</h1>
                                   
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="profile-form">

                                    <form action="<?php echo base_url()?>index.php/welcome/saveuser" method="post"  role="form">

                                         
                                          <div class="col-md-6">
										   
                                          <div class="form-group">
                                            <label for="input01"  control-label">Email</label>
                                            <div>
                                                <input type="email" class="form-control" name="email" id="email"  required>
                                            </div>
                                        </div>
                                        </div>
										<div id="get_search" style="display:block">  
										<button class="btn" style="margin-top:24px;"><i class="fa fa-search" onclick="getdetails()"></i></button>
										</div>
										<div id="wait"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
										<div id="newdata" style="display:none">

                                           <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">CUST-CODE</label>
                                            <div>
                                                <input type="text" class="form-control" name="cust_code" id="cust_code" required>
                                            </div>
                                        </div></div>

                                     
			                   <div class="col-md-6">							
                                           <div class="form-group">
                                           <label for="input01"  control-label">First Name</label>
                                            <div>
                                                <input type="text" class="form-control" name="first_name" id="first_name" required>
                                            </div>
                                        </div>			  
                                        </div>

                                      <div class="col-md-6">
                                      
					 <div class="form-group">

                                            <label for="input01"  control-label">Last Name</label>
                                            <div >
                                                <input type="text" class="form-control" name="last_name" id="last_name">
                                            </div>
                                        </div></div>
										
										
				             <div class="col-md-6">				
                                            <div class="form-group">
                                            <label for="input01"  control-label">Phone Number</label>
                                            <div>
                                                <input type="input01" class="form-control" name="phone1" id="phone1" required>
                                            </div>
                                        </div></div>
										
	                                  <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Company Name</label>
                                            <div>
                                                <input type="text" class="form-control" name="bus_name" id="bus_name" required>
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Address Line1</label>
                                            <div>
                                                <input type="text" class="form-control" name="address1" id="address1" required>
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Address Line2</label>
                                            <div>
                                                <input type="text" class="form-control" name="address2" id="address2" required>
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Address Line3</label>
                                            <div>
                                                <input type="text" class="form-control" name="address3" id="address3" required>
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">City</label>
                                            <div>
                                                <input type="text" class="form-control" name="city" id="city" required>
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">State</label>
                                            <div>
                                                <input type="text" class="form-control" name="state" id="state" required>
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Zip</label>
                                            <div>
                                                <input type="text" class="form-control" name="zip" id="zip" required>
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Country</label>
                                            <div>
                                                <input type="text" class="form-control" name="country" id="country" required>
                                            </div>
                                        </div></div> 

                                        										
                                        <div class="col-md-6">			  <div class="form-group">
                                            <label for="input01"  control-label">Username</label>
                                            <div >
                                                <input type="text" class="form-control" name="username" id="username" required>
                                            </div>
                                        </div></div>
                                     
										
						 <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Password</label>
                                            <div >
                                                <input type="password" style="color:#000000" class="form-control" name="password" id="password" required>
                                            </div>
                                        </div></div>

                                     
										
						 
										
										
						 
                                      
										
							 <div class="col-md-6">			  <div class="form-group">
                                            <label for="input01"  control-label">Role</label>
                                            <div >
                                                <select class="form-control" name="role" id="role" onchange="get_select_menu()" required>
												<option>Select Role</option>
												<option value="2">Normal User</option>
												<option value="3">Power User</option>
												
												</select>
                                            </div>
                                        </div></div>
                                

                                       


                                       
											
											<div class="col-sm-12 form-group mb-40">
											
											  <h1 class="custom-font">Module Management</h1>
                                  <label class="checkbox checkbox-custom-alt col-sm-3  ">
								 
                                                    <input type="checkbox" id="selecctall" > <i></i> Select All
                                                </label><br>
											<label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="1" checked required><i></i> Technical Support
                                                </label>
											<label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="2"><i></i> Dashboard
                                                </label>
                                                
                                                  <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="3"><i></i> Orders & Invoices
                                                </label>
                                                
                                                 <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="4"><i></i> My Catalog 
                                                </label>
                                                
                                                  <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="5"><i></i> Service Contracts
                                                </label>
                                                
                                                 <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="6"><i></i> Asset Inventory
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="7"><i></i> Managed Devices
                                                </label>
                                                
                                                 <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="8"><i></i> My Projects
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="9"><i></i> Printer Management
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="10"><i></i> Mobility Social Media 
                                                </label>
                                                
                                                <label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" class="checkbox1" name="check[]" id="check[]" value="11"><i></i> Chat Now
                                                </label>
											</div>
											
											 <div class="form-group">
                                            <div class="col-md-12">
                                               <a href="<?php echo base_url()?>index.php/welcome/allusers">

                                                <button type="submit" class="btn btn-default">Save changes</button>
<button type="button" class="btn btn-lightred">Cancel</button></a>
                                            </div>
                                        </div>
                                       </div>
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