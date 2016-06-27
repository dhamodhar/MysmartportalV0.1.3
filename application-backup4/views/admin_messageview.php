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
                                      <!--<label class="checkbox checkbox-custom-alt m-0 mt-5"><input type="checkbox" id="select-all"><i></i> Select All</label>-->
                                    </div>
<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/admin_messages" class="btn btn-primary mb-10" >Back to Messages</a></div>
                                
                                </div>

                            </div>
                            <!-- /right side header -->





 <?php foreach(@$user_notifications as $user_notifications_data){ ?>

                            <!-- right side body -->
                            <div class="p-15 b-b">

                                <h2 class="text-thin m-0"><?php echo $user_notifications_data->msg_subject;?></h2>

                            </div>

                            <div class="p-15 b-b">

                                <div class="media">
                                    <div class="pull-left">
                                        
                                    </div>
                                    <div class="media-body">
                                        <p class="mb-0">
                                            <span class="text-muted">from</span>
                                            <a href="javascript:;" class="text-default"><?php echo $user_notifications_data->first_name;?></a>
                                            <span class="text-muted text-sm pull-right">16:54, 03.03.2016</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="text-muted">to</span>
                                            Me
                                        </p>
                                        <p class="mb-0 text-sm">
                                            <span class="text-muted"><i class="fa fa-paperclip"></i></span>
                                           
                                        </p>
                                    </div>
                                </div>

                            </div>

                            <div class="p-15 ng-scope">
                                <p><?php echo $user_notifications_data->msg_body;?></p>
                            </div>

                      

                            <div class="p-15">
                                <div class="panel b-a b-solid br-2">
                                    <div class="panel-heading">
                                        <div class="mb-40">
                                            Click here to <a href="<?php echo base_url();?>index.php/welcome/admin_composemessage/ /<?php echo $user_notifications_data->uid;?>/<?php echo $user_notifications_data->id;?>">Reply</a> or <a href="<?php echo base_url();?>index.php/welcome/composemessage">Forward</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- /right side body -->

                        </div>
                        <!-- /right side -->

                    </div>
<?php } ?>





 <?php foreach(@$replys as $replys_data){ ?>

                        

                            <div class="p-15 b-b">

                                <div class="media">
                                    <div class="pull-left">
                                        
                                    </div>
                                </div>

                            </div>

                            <div class="p-15 ng-scope">
                                <p><?php echo $replys_data->message;?></p>
                            </div>

                            <!-- /right side body -->

                        </div>
                        <!-- /right side -->

                    </div>
<?php } ?>





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