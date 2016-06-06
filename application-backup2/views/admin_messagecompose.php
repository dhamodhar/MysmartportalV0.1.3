<style>
.multiselect.dropdown-toggle.btn.btn-default > div.restricted {
    margin-right: 5px;
    max-width: 100px;
    overflow: hidden;
}
</style>            <!-- ====================================================
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
<div style="text-align:center"><a href="<?php echo base_url();?>index.php/welcome/admin_messages" class="btn btn-primary mb-10" >Back to Messages</a></div>
                                
                                </div>

                            </div>
                            <!-- /right side header -->

    


                            <!-- right side body -->
                            <div class="col-md-9">
							<?php if($msg !="" and $msg !="%20"){
							?>
							<span style="color: green;font-size: 20px;">Successfully Sent!</span>
							<?php }?>

                                <form name="newMail" id="newMail" action="<?php echo base_url()?>index.php/welcome/save_admin_compose_msg" method="post" class="form-horizontal mt-20" enctype="multipart/form-data">
                                     <?php if($replay != 1){ ?>
									

  




									 <div class="form-group col-md-12 cm-name">
                                        <label >Company Name</label>
                                        
										<select name="users1" id="users1" class="form-control"  multiple="multiple">
										
										<?php foreach($company_names as $company_names_data){ ?>
										<option value="<?php echo $company_names_data->cus_code; ?>"><?php echo $company_names_data->company_name;?>(<?php echo $company_names_data->cus_code;?>)</option>										
										<?php } ?>
										
										</select>
										
                                         
                                        
                                    </div>
									
									 <div class="form-group col-md-12 location-se">
                                        <label >Location:</label>
                                       
										<select name="location" id="location" class="form-control locations" multiple="multiple" required>
										<option>Select Location</option>
										</select>
									
										
                                    </div> 

									<?php } ?>
                                    <div class="form-group col-md-12 to-id">
                                        <label>To:</label>
                                   
										<select name="allusers" id="allusers" <?php if($replay == 1){ ?> readonly <?php } ?> class="form-control users3212" multiple="multiple" style="width: 90%;" required>
										<?php if($replay == 1){ ?>
										<?php 
										
										foreach($allusers as $allusersdata){ ?>
										<option value="<?php echo $allusersdata->id; ?>"><?php echo $allusersdata->first_name;?></option>
										
										<?php } ?>
										<?php } ?>
										</select>
										
										<?php if($replay == 1){ ?>
										<input type="hidden" name="allusers2" id="allusers2" value="<?php echo $allusersdata->id; ?>">
				                       <?php }else{ ?>
									   <input type="hidden" name="allusers1" id="allusers1" value="">
									   
									   <?php } ?>
										
                                          
                                       
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label >Subject:</label>
                                       
										<?php if($replay == 1){ ?>
										
									
										<?php foreach($notification as $notificationdata){ ?>
											<input type="hidden" name="qid" id="qid" value="<?php echo $notificationdata->id ?>">
                                            <input type="text" name="subject" id="subject" readonly class="form-control" style="width: 90%;" value="<?php echo $notificationdata->msg_subject ?>">
											
											<input type="hidden" name="reply_status" id="reply_status" value="1" >
											<?php } }else{?>
											
											 <input type="text" name="subject" id="subject" class="form-control" style="width: 90%;" >
											<input type="hidden" name="reply_status" id="reply_status" value="0" >
											<?php } ?>
                                        </div>
                                   

                                    <div class="form-group col-md-12 mes-box">
                                        <label >Message:</label>
                                      
								
										  <textarea name="user_comment_data" id="user_comment_data" class="form-control connect-box" ></textarea>
                                          <input type="hidden" name="usermsgdata" id="usermsgdata">
										
                                    </div>
									 <div class="form-group col-md-12">
                                        <label>Attachment:</label>
                                   
                                            <input type="file" class="form-control" name="attachment" id="attachment" style="width: 90%;"> 
                                        
                                    </div>

                                    <div class="form-group col-md-12">
                                       
                                            <input type="button" class="btn btn-greensea" value="Send Message" onclick="save_user();nicEditors.findEditor('user_comment_data').saveContent();" >
                                        </div>
                                    
                                </form>

                            </div>

                            <!-- /right side body -->
  <div class="col-md-3 mt-20" style="font-weight:bold;">
<label> Default Templates</label>
<div class="template-border-box mb-20">

<div class="col-md-12 mt-20">
 <img src="<?php echo base_url()?>assets/images/template-img-01.jpg" class="img-responsive">
<label>Happy Newyear</label>
</div>

<div class="col-md-12 mt-20">
 <img src="<?php echo base_url()?>assets/images/template-img-02.jpg" class="img-responsive">
<label>New Product</label>
</div>

<div class="col-md-12 mt-20">
 <img src="<?php echo base_url()?>assets/images/template-img-03.jpg" class="img-responsive">
<label>Product Analytics</label>
</div>

<div class="col-md-12 mt-20">
 <img src="<?php echo base_url()?>assets/images/template-img-04.jpg" class="img-responsive">
<label>Product Offers</label>
</div>



</div>
</div>

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
  <script src="<?php echo base_url()?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url()?>assets/js/main.js"></script>
        <!--/ custom javascripts -->

    <link href="<?php echo base_url()?>assets/bootstrap.min.css"
        rel="stylesheet" type="text/css" />
  <link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
        rel="stylesheet" type="text/css" />
    <script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            $('#users1').multiselect({
                 enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
			onDropdownHide: function(event) {
			getuser_by_company(1);
                
            }
			
            });
			  
            
        });
    </script>

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
		
		<script>
		function save_user()
		{
				var editor = new nicEditors.findEditor('user_comment_data');
				var content = editor.getContent();
		//alert("DATA"+content);
		 var selected = $("#allusers option:selected");
                var message = "";
                selected.each(function () {
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+","+$(this).val();
					}
                    
                });
				$('#usermsgdata').val(content);
				$('#allusers1').val(message);
				$( "#newMail" ).submit();
				
		
		}
		</script>
		
			   <script>
          function getuser_by_locations(comp_name)
		  {
		   var selected = $("#location option:selected");
                var message = "";
                selected.each(function () {
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+","+$(this).val();
					}
                    
                });
		 	  $.ajax({
					type: "POST",
					url: "<?php echo base_url()?>index.php/welcome/getusers_by_location/",
					dataType: "text",
					data: "id="+message,
					success: function(xml){
					
						$("#allusers").html(xml);
						
							  $('#allusers').multiselect({
											 enableFiltering: true,
										     includeSelectAllOption: true,
										     maxHeight: 400,
                                                         });
						
						      $('#allusers').multiselect('rebuild');
						
						
					
					}

			  });	
			    
		  }
        </script>
		
		   <script>
          function getuser_by_company(comp_name)
		  {
		   var selected = $("#users1 option:selected");
                var message = "";
                selected.each(function () {
					if(message=="")
					{
					message = $(this).val();
					}else
					{
					message = message+","+$(this).val();
					}
                    
                });

		 	  $.ajax({
					type: "POST",
					url: "<?php echo base_url()?>index.php/welcome/getlocations_in_portal/",
					dataType: "text",
					data: "id="+message,
					success: function(xml){
					var sele = "";
					
         $(".locations").html(xml);
      
						  $('#location').multiselect({
                 enableFiltering: true,
            includeSelectAllOption: true,
            maxHeight: 400,
			onDropdownHide: function(event) {
			getuser_by_locations(1);
                
            }
			
            });
						
						$('#location').multiselect('rebuild');
						
						
						
					
						
					}

			  });	
			   
		  }
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