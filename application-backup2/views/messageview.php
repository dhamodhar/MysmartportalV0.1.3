   <section id="content">       
<div class="tcol">      
	 <?php foreach(@$user_notifications as $user_notifications_data){ ?>                  
                            <!-- right side body -->
                            <div class="p-15 b-b">

                                <h2 class="text-thin m-0"><?php echo $user_notifications_data->msg_subject;?></h2>

                            </div>
						

                            <div class="p-15 b-b">

                                <div class="media">
                                    <div class="pull-left">
                                        <div class="thumb thumb-sm">
                                            <img class="img-circle size-30x30" alt="" src="http://lowrysmartportal.com/assets/images/profile-photo.jpg">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">
                                            <span class="text-muted">From</span>
                                            <a class="text-default" href="javascript:;">Lowry Smart Portal - Admin</a>
                                            <span class="text-muted text-sm pull-right">16:54, 24.11.2014</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="text-muted">To</span>
                                            Me
                                        </p>
                                        <p class="mb-0 text-sm">
										
										  <?php if($user_notifications_data->attachment != ""){ ?>
										   <br>
										   <img src="<?php echo base_url();?>assets/attachments/<?php echo $user_notifications_data->attachment;?>" width="120px" height="90px">
										   <?php } ?>
                                    
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="p-15 ng-scope mail">

                               <p><?php echo $user_notifications_data->msg_body;?></p>
                            </div>
                           <?php } ?>


<?php foreach(@$replys as $replys_data){ ?>
                                <div class="p-15 ng-scope rep-bg">
								<div class="media">
                                    <div class="pull-left">
                                        <div class="thumb thumb-sm">
                                            <img src="http://lowrysmartportal.com/assets/images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">
                                            <span class="text-muted">From</span>
                                            <a href="javascript:;" class="text-default"><?php echo $replys_data->first_name;?></a>
                                            <span class="text-muted text-sm pull-right"><?php echo $replys_data->updated_date;?></span>
                                        </p>
                                     <!--
                                        <p class="mb-0 text-sm">
                                            <span class="text-muted"><i class="fa fa-paperclip"></i></span>
                                          
                                        </p>-->
                                    </div>
                                </div>

                                <p><?php echo $replys_data->message;?></p>
								   <p class="mb-0 text-sm">
										
										  <?php if($replys_data->attachment != ""){ ?>
										   <br>
										   <img src="<?php echo base_url();?>assets/attachments/<?php echo $replys_data->attachment;?>" width="120px" height="90px">
										   <?php } ?>
                                    
                                        </p>

                                 </div>
<?php } ?>
					

                           

                               

                            <div class="p-15">
                                <div class="panel b-a b-solid br-2">
                                    <div class="panel-heading">
                                        <div class="mb-40">
                                            Click here to <a href="<?php echo base_url();?>index.php/welcome/composemessage/<?php echo $user_notifications_data->id;?>/ / / /2">Reply</a> <!--or <a href="mail-compose.html">Forward</a>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /right side body -->

                        </div>
</section>













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