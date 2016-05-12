            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-full page-mail">


                    <div class="tbox tbox-sm">







                        <!-- right side -->
                        <div class="tcol">
                            <!-- right side header -->
                            <div class="p-15 bg-blue b-b">

                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default btn-sm br-2-l"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" class="btn btn-default btn-sm br-2-r"><i class="fa fa-angle-right"></i></button>
                                </div>
                                <div class="btn-toolbar">
                                    <div class="btn-group mr-10">
                                        <label class="checkbox checkbox-custom-alt m-0 mt-5"><input type="checkbox" id="select-all"><i></i> Select All</label>
                                    </div>
                               
<div class="btn-group"><a href="<?php echo base_url();?>index.php/welcome/composemessage" class="btn btn-default btn-sm br-2" ><font color="red">Compose</font></a></div>
                                </div>

                            </div>
                            <!-- /right side header -->







                            <!-- right side body -->
                            <div>

                                <!-- mails -->
                                <ul class="list-group no-radius no-border" id="mails-list">
								
                                <?php foreach(@$user_notifications as $user_notifications_data){ ?>
								
                                    <!-- mail in mails -->
									
									<?php if($user_notifications_data->read_status ==0){?>
                                   <li class="list-group-item b-primary" style="background-color:#ffc;">
								   <?php }else{?>
                         <li class="list-group-item b-primary">
						 
						 <?php }?>
									
                                   

                                        <div class="media">
                                            <div class="pull-left">
                                                <div class="controls">
                                                    <a href="javascript:;" class="favourite text-orange toggle-class" data-toggle="active"><i class="fa fa-star-o"></i></a>
                                                    <label class="checkbox checkbox-custom-alt checkbox-custom-sm m-0 mail-select"><input type="checkbox"><i></i></label>
                                                </div>
                                              
                                            </div>
                                            <div class="media-body">
                                                <div class="media-heading m-0">
                                                    <a href="<?php echo base_url();?>index.php/welcome/viewmessage/<?php echo $user_notifications_data->id;?>" class="mr-5"><?php echo $user_notifications_data->msg_subject;?></a>
                                                   
												 
													
													<span class="pull-right text-sm text-muted">
                                                    
                                                     <?php if($user_notifications_data->attachment !=""){?><i class="fa fa-paperclip ml-5"></i><?php }else { }?>
                                                   </span>
													
													
                                                </div>
                                                <small><!--<?php echo $user_notifications_data->msg_body;?>--></small>
                                            </div>
											  <span class="hidden-xs"><?php echo $user_notifications_data->updated_date;?></span>
                                        </div>

                                    </li>

                                <?php } ?>
  

                                </ul>
                                <!-- / mails -->

                            </div>
                            <!-- /right side body -->

                        </div>
                        <!-- /right side -->

                    </div>



                </div>
                
            </section>
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->














        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->



        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

                $('#select-all').change(function() {
                    if ($(this).is(":checked")) {
                        $('#mails-list .mail-select input').prop('checked', true);
                    } else {
                        $('#mails-list .mail-select input').prop('checked', false);
                    }
                });

            });
        </script>
        <!--/ Page Specific Scripts -->

	<script type="text/javascript">
		function test()
		{
		 $.ajax({
					type: "POST",
					url: "<?php echo base_url()?>index.php/welcome/updateallnotificationsread",
					dataType: "text",
					success: function(xml){
                  $("#num_un_read").html("0");
				  
					}

			  });	
			   
		
		}
		</script>


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

    </body>
</html>