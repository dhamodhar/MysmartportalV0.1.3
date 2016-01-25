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
                                    <a href="" class="sub-active">Import Users</a>
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
                                    <h1 class="custom-font">Import Users</h1>
                                   
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <form action="<?php echo base_url()?>index.php/welcome/upload_attendance" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">

                                        <div class="form-group">
                                         
                                            <div class="col-md-6 col-sm-offset-2">
                                                  <label for="input01" class=" control-label">Import Users</label>
                                             <span class="btn btn-success fileinput-button">
                                                  <i class="glyphicon glyphicon-plus"></i>
                                                  <span>Add files...</span>
                                                  <input type="file"  name="exc1]" id="exc1" required>
                                              </span>

                                            </div>
<div class="col-md-4 pull-right ">NOTE: Download Sample Template <a href="<?php echo base_url();?>assets/Bulk_User_Import_Template.xlsx" target="_blank">Here</a>.</div>
                                        </div>

                                     

                                     

                                      


                                        <div class="form-group">
                                            <div class="col-md-4 col-sm-offset-3">

                                               <a href="<?php echo base_url()?>index.php/welcome/allusers"><button type="button" class="btn btn-lightred">Cancel</button></a>
                                                <button type="submit" class="btn btn-default">Save</button>
                                            </div>
                                            
                   	
 <div class="col-md-6 pull-right">
<h3>Bulk Users</h3>
<h4>Import Instructions Video & Limitations Document <a href="<?php echo base_url()?>assets/Bulk_User_Import_Document.pdf">Here<a></h4>
   <video width="400" controls>
  <source src="<?php echo base_url()?>assets/bulk_video.mp4" type="video/mp4"> Your browser does not support HTML5 video.</video>  
  
 
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


<!--<video id="sampleMovie" src="<?php echo base_url()?>assets/Bulk User Import Instructional Video.mov" width=”640” height=”360”></video>-->
<!--<video width="400" controls>
  <source src="<?php echo base_url()?>assets/bulk_video.mov" type="video/mov">
 
  Your browser does not support HTML5 video.
</video>-->

                </div>
                
            </section>
            <!--/ CONTENT -->





        </div>
        <!--/ Application Content -->