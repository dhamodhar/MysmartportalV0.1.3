           <script type="text/javascript">
function deleteuser(id,action)
{

window.location="<?php echo base_url()?>index.php/welcome/deleteuser/"+id+"/"+action;

}
</script>
            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        <h2>Users List</h2>
						  <?php
						  
						  if($msg == "extension"){
						  ?>
						   <div class="alert alert-big alert-lightred alert-dismissable fade in">
									   <b>Wrong Formate file </b>
									    </div>
						  
						 <?php }

                          $dupli = explode("_",$count);
						  if($msg=="inserted"){
									   ?>
									   <div class="alert alert-success">
									   Successfully Created
									     </div>
									    <?php
									   }else if($dupli[0]=="duplicated"){
									   ?>
									    <div class="alert alert-big alert-lightred alert-dismissable fade in">
									   <b>Duplicate record "<?php echo str_replace("ZZ","@",$dupli[1]); ?>"
									
									   - Please correct the Errors and upload again. </b>
									    </div>
									   

									  
									   <?php }else if($msg=="updated"){ ?>
									   <div class="alert alert-success">
									   Successfully Updated.
									    </div>
									   
									   <?php }else if($dupli[0]!="duplicated"){ ?>
									  	   <!--<?php echo $count." Records Imported Successfully";?>-->
									   
									    <?php } ?>
                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url()?>index.php/welcome/dashboard"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>index.php/welcome/allusers" class="sub-active">All Users</a>
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
                                <section class="tile">

                                   

                                    <!-- tile body -->
                                    <div class="tile-body">
<!--<a href="<?php echo base_url()?>index.php/welcome/adduser"><button type="button" class="btn btn-primary mb-10">Add User</button></a>-->
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-hover table-custom" >
                                                <thead>
                                                <tr>
                                                    
                                                    <th style="width:180px;">Name</th>
                                                    <th style="width:200px;">Email</th>
                                                    <th style="width:150px;">Phone Number</th>
                                                    <th style="width:150px;">CUST-CODE</th>
													<th style="width:150px;">Company Name</th>
                                                    <th style="width:150px;">Role</th>
                                                    <th style="width:150px;">Status</th>
                                                    <th style="width:150px;">Actions</th>
                                                </tr>
                                                </thead>
												<tbody>
												
												<?php 
												foreach($allusers as $alluserslist){
												
												?>
												<tr>
												    <td style="width:180px;"><?php echo $alluserslist->first_name.' '.$alluserslist->last_name; ?></td>
                                                    <td style="width:200px;"><?php echo $alluserslist->email_id ?></td>
                                                    <td style="width:150px;"><?php echo $alluserslist->phone_number ?></td>
                                                    <td style="width:150px;"><?php echo $alluserslist->cus_code ?></td>
										            <td style="width:150px;"><?php echo $alluserslist->company_name ?></td>
													
                                                    <td style="width:150px;"><?php if($alluserslist->role=="2")
													{
													echo "Normal User";
													
													}else
													{
														echo "Power User";
													
													} ?></td>
                                                    <td style="width:150px;"><?php if($alluserslist->status=="0"){ echo "Inactive";}else{ echo "Active";} ?></td>
																									<td style="width:150px;"><a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10" href="<?php echo base_url()?>index.php/welcome/edituser/<?php echo $alluserslist->id?>">Edit</a> | 
																									
																									<?php if($alluserslist->status!="0"){ ?>
																									<a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10" href="javascript:void(0);" onclick="deleteuser('<?php echo $alluserslist->id?>','0');">Inactive</a></td>
																									<?php }else{ ?>
																									<a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10" href="javascript:void(0);" onclick="deleteuser('<?php echo $alluserslist->id?>','1');">Active</a></td>						
																									<?php }?>
													</tr>
                                              <?php 
												
												}
												?>
												
												</tbody>
                                            </table>
											
											
											
											
											
                                        </div>

                                    </div>
                                    <!-- /tile body -->

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







