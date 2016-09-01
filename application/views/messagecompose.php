            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-full page-mail">


                    <div class="tbox tbox-sm">

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script>





                        <!-- right side -->
                        <div class="tcol">
                            <!-- right side header -->
                            <div class="p-15 bg-blue b-b">

                            <!--<div class="btn-group pull-right">
                                    <button type="button" class="btn btn-default btn-sm br-2-l"><i class="fa fa-angle-left"></i></button>
                                    <button type="button" class="btn btn-default btn-sm br-2-r"><i class="fa fa-angle-right"></i></button>
                                </div>-->
                                <div class="btn-toolbar">
                                    <div class="btn-group mr-10">
                                       <!--<label class="checkbox checkbox-custom-alt m-0 mt-5"><input type="checkbox" id="select-all"><i></i> Select All</label>-->
                                    </div>
									<?php 
									
									if(@$replaydata == 5){
									?>
									
										<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/open_invoices" class="btn btn-primary mb-10" >Back to Invoices</a></div>              

									<?php }else{ ?>
									<?php
									if($msg == "askq"){ ?>
									<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/open_orders" class="btn btn-primary mb-10" >Back to Open Orders</a></div>              


									<?php }else{ ?>

									<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/usermessages" class="btn btn-primary mb-10" >Back to Messages</a></div>
 

                <?php } ?>
				
				<?php } ?>
                                </div>

                            </div>
                            <!-- /right side header -->







                            <!-- right side body -->
                            <div class="p-15">
							<?php if($msg =="suc"){
							?>
							<span style="color: green;font-size: 20px;">Successfully Sent!</span>
							<?php }?>


                                <form name="newMail" action="<?php echo base_url()?>index.php/welcome/save_user_compose_msg" method="post" class="form-horizontal mt-20" enctype="multipart/form-data" >
<?php foreach(@$notificationdata as $notificationdata_data){ ?>

<?php if($notificationdata_data->id != ""){ ?>
<input type="hidden" name="typestatus" id="typestatus" value="2">
<input type="hidden" name="qid_user" id="qid_user" value="<?php echo $notificationdata_data->id?>">
<?php }else{ ?>


<?php } ?>
<?php } ?>

<?php $ccount = sizeOf($notificationdata);
if($ccount < 1){
?>
<input type="hidden" name="typestatus" id="typestatus" value="1">
<?php } ?>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">To:</label>
                                        <div class="col-lg-8">
                                           <input type="text" name="to" id="to" value="admin@lowrysmartportal.com" class="form-control" readonly>   
                                        </div>
                                    </div>
									
									<?php if($msg == "askq"){ ?>
							<input type="hidden" name="askquestion" id="askquestion" value="1" />
									<?php }else{ ?>
	                        <input type="hidden" name="askquestion" id="askquestion" value="0" />                 
				 <?php } ?>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Subject:</label>
                                        <div class="col-lg-8">
                                            <input type="text" name="subject" id="subject" <?php if($msg == "askq"){ ?> readonly   value = "<?php if(@$replaydata == 5){ ?> RE: INVOICE NUMBER : <?php }else{ ?>RE: ORDER NUMBER : <?php } ?> <?php echo $order_id;?>" readonly <?php }else{ ?>  value="<?php foreach(@$notificationdata as $notificationdata_data){ echo $notificationdata_data->msg_subject ?>  <?php } ?>"  <?php } ?> class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Message:</label>
                                        <div class="col-lg-8 note-editor">
                                            <textarea name="comments" id="comments" class="form-control"  style="height: 150px; width:650px" placeholder="Enter your message..."><?php if($msg == "askq"){ ?> <br><br><br><br><br><br><?php if(@$replaydata == 5){ ?> Invoice Number : <?php }else{ ?>Order Id : <?php } ?><?php echo $order_id ?> , PO NUMBER : <?php echo $ponumber?>, ORDER STATUS: <?php echo $orderstatus?> <?php } ?></textarea>
                                        </div>
                                    </div>
									  <div class="form-group">
                                        <label class="col-lg-2 control-label">Attachment:</label>
                                        <div class="col-lg-8">
                                           <input type="file"  name="attachmentdata" id="attachmentdata" class="form-control" > 
									  </div>
                                    </div>
									
									

                                    <div class="form-group">
                                        <div class="col-lg-2 col-lg-offset-2">
                                            <button class="btn btn-greensea btn-ef btn-ef-2 btn-ef-3b b-0 br-2"><i class="fa fa-envelope"></i> Send Message</button>
                                        </div>
                                    </div>
                                </form>

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

        <script src="assets/js/vendor/summernote/summernote.min.js"></script>
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