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
                               
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="profile-form">

                                    <form action="<?php echo base_url()?>index.php/welcome/saveuser" method="post"  role="form">

                                         
                                          <div class="col-md-6">
										   
                                          <div class="form-group">
                                            <label for="input01"  control-label">Email / Username<span style="color:red">*</span></label>
                                            <div>
                                                <input type="email" class="form-control" name="email" id="email"  required>
                                            </div>
                                        </div>
                                        </div>
										<div id="get_search" style="display:block">  
										<input type="button" class="btn" style="margin-top:24px;" onclick="getdetails()" value="Get Details">
										</div>
										<div id="wait12" style="display:none"><img src="<?php echo base_url()?>assets/ajax-loader.gif"></div>
										<div id="newdata" style="display:none">

                                           <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">CUST-CODE <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="cust_code" id="cust_code" required readonly>
                                            </div>
                                        </div></div>

                                     
			                   <div class="col-md-6">							
                                           <div class="form-group">
                                           <label for="input01"  control-label">First Name <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="first_name" id="first_name" required readonly>
                                            </div>
                                        </div>			  
                                        </div>

                                      <div class="col-md-6">
                                      
					 <div class="form-group">

                                            <label for="input01"  control-label">Last Name</label>
                                            <div >
                                                <input type="text" class="form-control" name="last_name" id="last_name" readonly>
                                            </div>
                                        </div></div>

<div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Company Name <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="bus_name" id="bus_name" required readonly>
                                            </div>
                                        </div></div>
										
										
				            <!--<div class="col-md-6">				
                                            <div class="form-group">
                                            <label for="input01"  control-label">Phone Number <span style="color:red">*</span></label>
                                            <div>
                                                <input type="input01" class="form-control" name="phone1" id="phone1" >
                                            </div>
                                        </div></div>
										
	                                  

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Address Line1 <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="address1" id="address1" >
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Address Line2 <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="address2" id="address2" >
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Address Line3 <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="address3" id="address3" >
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">City <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="city" id="city" >
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">State <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="state" id="state" >
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Zip <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="zip" id="zip" >
                                            </div>
                                        </div></div>

                                        <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Country <span style="color:red">*</span></label>
                                            <div>
                                                <input type="text" class="form-control" name="country" id="country" >
                                            </div>
                                        </div></div>--> 

                                        										
                                        <div class="col-md-6">			  <div class="form-group">
                                            <label for="input01"  control-label">Username <span style="color:red">*</span></label>
                                            <div >
                                                <input type="text" class="form-control" name="username" id="username" required readonly>
                                            </div>
                                        </div></div>
                                     
										
						 <div class="col-md-6">				  <div class="form-group">
                                            <label for="input01"  control-label">Password <span style="color:red">*</span></label>
                                            <div >
                                                <input type="password" style="color:#000000" class="form-control" name="password" id="password" required>
                                            </div>
                                        </div></div>

                                     
										
						 
										
										
						 
                                      
										
							 <div class="col-md-6">			  <div class="form-group">
                                            <label for="input01"  control-label">Role <span style="color:red">*</span></label>
                                            <div >
                                                <select class="form-control" name="role" id="role" onchange="get_select_menu()" required>
												<option value="">Select Role</option>
												<option value="2">Normal User</option>
												<option value="3">Power User</option>
												<option value="4">Executive User</option>
												</select>
                                            </div>
                                        </div></div>
                                

                                       


                                       
											
											<div class="col-sm-12 form-group mb-40">
											
											  <h1 class="custom-font">Module Management <span style="color:red">*</span></h1>
                                  <label class="checkbox checkbox-custom-alt col-sm-3  ">
								 
                                                    <input type="checkbox" id="selecctall" > <i></i> Select All
                                                </label><br>
											<label class="checkbox checkbox-custom-alt col-sm-3">
                                                    <input type="checkbox" disabled="disabled" class="checkbox1" name="check[]" id="check[]" value="1" checked required><i></i> Technical Support
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