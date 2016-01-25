<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>::Welcome to Mysmart portal</title>
        <link rel="icon" type="image/ico" href="<?php echo base_url()?>assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
		
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animate.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/morris/morris.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/rickshaw/rickshaw.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/summernote/summernote.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/responsive.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/simpletextrotator.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="<?php echo base_url()?>assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->


<!--Start of Zopim Live Chat Script-->
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?3Zf5QymdG6au1kyopEzGeOmccuS5f5V7";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zopim Live Chat Script-->
<script>
 
  $zopim(function() {
    $zopim.livechat.bubble.hide();
  });
 
</script>
<script>
   $zopim(function(){
  // alert()
           $zopim.livechat.setName('<?php echo $this->session->userdata('firstname')?>');
           $zopim.livechat.setEmail('<?php echo $this->session->userdata('email')?>');
    });
</script>
    </head>





    <body id="minovate" class="appWrapper">






        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->












        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">






            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                       <a href="<?php echo base_url()?>index.php/welcome/technical_support">
                            <img src="<?php echo base_url()?>assets/images/logo.png" class="img-responsive">
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                      <h3 class="sub-title">MySmart Portal</h3>
                


                      <ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a role="button" tabindex="0" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                        
                    </ul>

                          	
					
           


                   



                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
 <li class="dropdown nav-profile">

                             <a data-toggle="dropdown" class="dropdown-toggle" href="">
                                  
<img class="img-circle size-30x30" alt="" src="http://lowrysmartportal.com/assets/images/peter-avatar.jpg">
                              
                                <span>Your Lowry Team<i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul role="menu" class="dropdown-menu animated littleFadeInRight cn-lowry" id="sales">

                              

                            </ul>

                        </li> 
                     

                        <li class="dropdown messages">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge bg-lightred">4</span>
                            </a>

                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInDown" role="menu">

                                <div class="panel-heading">
                                    You have <strong>4</strong> messages
                                </div>

                                <ul class="list-group">

                                    <li class="list-group-item">
                                        <a role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object thumb thumb-sm">
                                                <img src="<?php echo base_url()?>assets/images/ici-avatar.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Imrich sent you a message</span>
                                                <small class="text-muted">12 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="<?php echo base_url()?>assets/images/peter-avatar.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Peter sent you a message</span>
                                                <small class="text-muted">46 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="<?php echo base_url()?>assets/images/random-avatar1.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Bill sent you a message</span>
                                                <small class="text-muted">1 hour ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object  thumb thumb-sm">
                                                <img src="<?php echo base_url()?>assets/images/random-avatar3.jpg" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block">Ken sent you a message</span>
                                                <small class="text-muted">3 hours ago</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                                <div class="panel-footer">
                                    <a role="button" tabindex="0">Show all messages <i class="pull-right fa fa-angle-right"></i></a>
                                </div>

                            </div>

                        </li>

                        <li class="dropdown notifications">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge bg-lightred">3</span>
                            </a>

                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInLeft">

                                <div class="panel-heading">
                                    You have <strong>3</strong> notifications
                                </div>

                                <ul class="list-group">

                                    <li class="list-group-item">
                                        <a role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object media-icon bg-danger">
                                                <i class="fa fa-ban"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">User Imrich cancelled account</span>
                                                <small class="text-muted">6 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object media-icon bg-primary">
                                                <i class="fa fa-bolt"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">New user registered</span>
                                                <small class="text-muted">12 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="list-group-item">
                                        <a role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object media-icon bg-greensea">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <div class="media-body">
                                                <span class="block">User Robert locked account</span>
                                                <small class="text-muted">18 minutes ago</small>
                                            </div>
                                        </a>
                                    </li>

                                </ul>

                                <div class="panel-footer">
                                    <a role="button" tabindex="0">Show all notifications <i class="fa fa-angle-right pull-right"></i></a>
                                </div>

                            </div>

                        </li>

                            



  <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url()?>assets/images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                                <span><?php echo ucfirst($this->session->userdata('firstname'))?> <?php echo ucfirst($this->session->userdata('lastname'))?><i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0" href="">
                                        <span class="badge bg-greensea pull-right">86%</span>
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                              
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                        
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/logout" role="button" tabindex="0">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>

                            </ul>

                        </li>






                        <li class="toggle-right-sidebar">
                            <a role="button" tabindex="0">
                               
                            </a>
                        </li>
                    </ul>
                    <!-- Right-side navigation end -->



                </header>

            </section>
            <!--/ HEADER Content  -->





            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">





                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <!--<h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>-->
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                        <ul id="navigation">
										
										     <?php 
										
										$id = explode(",",$ids);
                                       // echo $ids;
										for($i=1;$i<sizeof($menu);$i++){ 
										if(@$menu[$i]['id']==1)
										{
										  if(in_array($menu[$i]['id'], $id) == 1){
										 $url = base_url()."index.php/welcome/technical_support";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										  <li <?php if($this->uri->segment(2) == url_title('technical_support', TRUE)){?> class="active"<?php }?>><a href="<?php echo $url;?>" class="support <?php if($this->uri->segment(2) == url_title('technical_support', TRUE)){?> report-active<?php }?>"> <span>Technical Support</span></a></li>
										  
										<?php }else if($menu[$i]['id']==2)
										  {
											  
											   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = base_url()."index.php/welcome/dashboard";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										 
										
										?>
										<li <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> class="active"<?php }?>> <a href="<?php echo $url;?>" class="reports  <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>" > <span>Dashboard & Analytics</span></a></li>
                                         
										
										<?php }else if($menu[$i]['id']==3)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = base_url()."index.php/welcome/orders";
										 $url1 = base_url()."index.php/welcome/open_orders";
										 $url2 = base_url()."index.php/welcome/open_invoices";
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		                                  $url1 = base_url()."index.php/welcome/accessdenied";
										   $url2 = base_url()."index.php/welcome/accessdenied";
										 };
										?>
										
                                         <li <?php if($this->uri->segment(2) == url_title('orders', TRUE) or $this->uri->segment(2) == url_title('open_orders', TRUE) or $this->uri->segment(2) == url_title('orders', TRUE) or  $this->uri->segment(2) == url_title('open_invoices', TRUE)){?> class="active"<?php }?>>
                                                <a role="button" tabindex="0" class="pa <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span >Orders & Invoices</span></a>
                                                <ul>
                                                    <li class="top-41"> <a href="<?php echo $url?>" <?php if($this->uri->segment(2) == url_title('orders', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Orders & invoices</a></li>
													 <li><a href="<?php echo $url1; ?>" <?php if($this->uri->segment(2) == url_title('open_orders', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i>Open Orders</a></li>
                                                    <li><a href="<?php echo $url2; ?>" <?php if($this->uri->segment(2) == url_title('open_invoices', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i>Invoices</a></li>
                                                   
                                                </ul>
                                            </li>
										
										<?php }else if($menu[$i]['id']==4)
										  {
										  if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "https://b2b.lowrysolutions.com/";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										<li><a href="<?php echo $url;?>" target="_blank" class="catalog <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span >My Catalog</span></a></li>
                                         
										<?php } else if($menu[$i]['id']==5)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = base_url()."index.php/welcome/servicecontracts";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										    <li><a href="<?php echo $url;?>" class="contracts <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span >Service Contracts</span></a></li>
                                        
										      
									
										 
										<?php } else if($menu[$i]['id']==6)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "#";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										     <li><a href="<?php echo $url;?>" class="asset <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span>Asset Inventory</span></a></li>
                                        
										
									   
										
										<?php } else if($menu[$i]['id']==7)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "https://mdm-trial.lowrysolutions.com/mobicontrol/";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										
										    <li><a href="<?php echo $url ?>" target="_blank" class="devices <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span>Managed Devices</span></a></li>
                                  
										
										<?php } else if($menu[$i]['id']==8)
										  {
										  if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "#";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										 <li><a href="<?php echo $url ?>" class="projects <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span >My Projects</span></a></li>
                                         
										 
										
										
										<?php } else if($menu[$i]['id']==9)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "#";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										 <li><a href="<?php echo $url ?>" class="printer <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span>Printer Management</span></a></li>
     
										<?php } else if($menu[$i]['id']==10)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "#";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
											
									  <li><a href="<?php echo $url ?>" class="socialmedia <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span>Mobility Social Media</span></a></li>
                                          
										
									
										
										<?php } else if($menu[$i]['id']==11)
										  {
										?>
									   
										
									  <li><a href="javascript:$zopim.livechat.window.show()" class="chat <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> report-active<?php }?>"> <span>Chat Now</span></a></li>
                                           
                                        
										
										<?php } ?>
										
										<?php
										} 
										?>
                                            
                                            
                                            
                                        
                                            </ul>
                                          
                                        
                                        <!--/ NAVIGATION Content -->


                                    </div>
 <!-- tile -->
                            <section class="products-cat">


                                <!-- tile body -->
                                <div class="tile-body">
  <h3 class="white" style="font-weight:bold;padding-left:10px;">Lowry Total Solution</h3>

                                    <div id="feed-carousel">
                                
                                 <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Barcode Printers</h4> <a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank"> <img src="http://lowrysmartportal.com/assets/images/side-img-01.jpg"/ class="product-img"> </a></div>
                                   <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Barcode Scanner</h4> <a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank"> <img src="http://lowrysmartportal.com/assets/images/side-img-02.jpg" class="product-img"/></a> </div>   
                                   <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Home Mobile</h4> <a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank"> <img src="http://lowrysmartportal.com/assets/images/side-img-03.jpg" class="product-img"/></a> </div>   
                                   <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Home RFID</h4>  <a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank"><img src="http://lowrysmartportal.com/assets/images/side-img-04.jpg" class="product-img"/> </a></div> 
                                  <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Home Software</h4> <a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank"> <img src="http://lowrysmartportal.com/assets/images/side-img-05.jpg" class="product-img"/> </a></div>  
                                  <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Home Wireless</h4><a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank">  <img src="http://lowrysmartportal.com/assets/images/side-img-06.jpg" class="product-img"/> </a></div>   
                                  <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Rugged Tablets</h4> <a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank"> <img src="http://lowrysmartportal.com/assets/images/side-img-07.jpg" class="product-img"/></a> </div>
                                 <div class="media-body"> <h4 class="white" style="padding-left:10px;margin-top:0px;">Zebra Desktop</h4> <a href="http://lowrysmartportal.com/assets/Lowry-Support_Services_Ebook.pdf" target="_blank"> <img src="http://lowrysmartportal.com/assets/images/side-img-08.jpg" class="product-img"/></a> </div>  
                                                                      
                                  
                                    </div>
                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->


                                </div>
                            </div>
                            
                           
                            </div>
                        </div>

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->





                <!-- =================================================
                ================= RIGHTBAR Content ===================
                ================================================== -->
                <aside id="rightbar">

                    <div role="tabpanel">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#users" aria-controls="users" role="tab" data-toggle="tab"><i class="fa fa-users"></i></a></li>
                            <li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab"><i class="fa fa-clock-o"></i></a></li>
                            <li role="presentation"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab"><i class="fa fa-heart"></i></a></li>
                            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><i class="fa fa-cog"></i></a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="users">
                                <h6><strong>Online</strong> Users</h6>

                                <ul>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/ici-avatar.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/arnold-avatar.jpg" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/peter-avatar.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Peter <strong>Kay</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Kosice, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/george-avatar.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">George <strong>McCain</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Prague, Czech Republic</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar1.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Lucius <strong>Cashmere</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar2.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Jesse <strong>Phoenix</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Berlin, Germany</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>

                                <h6><strong>Offline</strong> Users</h6>

                                <ul>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar4.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Dell <strong>MacApple</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Paris, France</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar5.jpg" alt>
                                            </a>

                                            <div class="media-body">
                                                <span class="media-heading">Roger <strong>Flopple</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Rome, Italia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar6.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Nico <strong>Vulture</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Kyjev, Ukraine</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar7.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Bobby <strong>Socks</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Moscow, Russia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar8.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Anna <strong>Opichia</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="history">
                                <h6><strong>Chat</strong> History</h6>

                                <ul>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/ici-avatar.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/arnold-avatar.jpg" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/peter-avatar.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Peter <strong>Kay</strong></span>
                                                <small>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit </small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="friends">
                                <h6><strong>Friends</strong> List</h6>
                                <ul>

                                    <li class="online">
                                        <div class="media">

                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/arnold-avatar.jpg" alt>
                                            </a>
                                            <span class="badge bg-lightred unread">3</span>

                                            <div class="media-body">
                                                <span class="media-heading">Arnold <strong>Karlsberg</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Bratislava, Slovakia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>

                                        </div>
                                    </li>

                                    <li class="offline">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar8.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Anna <strong>Opichia</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Budapest, Hungary</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="busy">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/random-avatar1.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Lucius <strong>Cashmere</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Wien, Austria</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="online">
                                        <div class="media">
                                            <a class="pull-left thumb thumb-sm" role="button" tabindex="0">
                                                <img class="media-object img-circle" src="<?php echo base_url()?>assets/images/ici-avatar.jpg" alt>
                                            </a>
                                            <div class="media-body">
                                                <span class="media-heading">Ing. Imrich <strong>Kamarel</strong></span>
                                                <small><i class="fa fa-map-marker"></i> Ulaanbaatar, Mongolia</small>
                                                <span class="badge badge-outline status"></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="settings">
                                <h6><strong>Chat</strong> Settings</h6>

                                <ul class="settings">

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Offline Users</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-offline" checked="">
                                                    <label class="onoffswitch-label" for="show-offline">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Fullname</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-fullname">
                                                    <label class="onoffswitch-label" for="show-fullname">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">History Enable</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-history" checked="">
                                                    <label class="onoffswitch-label" for="show-history">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Locations</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-location" checked="">
                                                    <label class="onoffswitch-label" for="show-location">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Notifications</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-notifications">
                                                    <label class="onoffswitch-label" for="show-notifications">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="form-group">
                                            <label class="col-xs-8 control-label">Show Undread Count</label>
                                            <div class="col-xs-4 control-label">
                                                <div class="onoffswitch greensea">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="show-unread" checked="">
                                                    <label class="onoffswitch-label" for="show-unread">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </aside>
                <!--/ RIGHTBAR Content -->




            </div>
            <!--/ CONTROLS Content -->




            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">
<div class="page-core-dashboard">

                <div class="page page-dashboard">

                    <div class="pageheader">
                           <h2>Dashboard & Analytics</h2>
                        <!--<h2 style="color:green;margin-left:45%" color="green" align="center">Hello, <?php echo $this->session->userdata('firstname');?></h2>-->

                     <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href=" " class="sub-active">Dashboard & Analytics</a>
                                </li>
                            
                            </ul>
                            
                        </div>  

                    </div>

                   
                    <!-- row -->
                    <div class="row">
                   <div class="side-icons db-reports">

                    

                      
                    
                      
                     
                     <div class="col-md-3  col-xs-6 col-sm-3">
                      <div class="col-centered">
                     <a href="#"> <div class="myIcon icon-default transparent icon-ef-1 icon-ef-1a ">
                  <i class="glyphicon glyphicon-stats"></i> <span> Check Status </span>
                    </div></a>
</div>
                    
                    
                 
                        <div class="col-centered">

                   <a href="#">  <div class="myIcon icon-default transparent icon-ef-1 icon-ef-1a ">
                  <i class="glyphicon glyphicon-envelope"></i> <span>  E-mail </span>
                    </div></a>
</div>
                    
                    
                   
                     <div class="col-centered">
<a href="tel:+1-800-733-0010"> <div class="myIcon icon-default transparent icon-ef-1 icon-ef-1a ">
                  <i class="glyphicon glyphicon-phone"></i> <span>Call Us</span>
                    </div></a> 

                   </div>
                    
                    
                    
                      <div class="col-centered">
                    <a href="javascript:$zopim.livechat.window.show()"> <div class="myIcon icon-default transparent icon-ef-1 icon-ef-1a ">
                   <i class="glyphicon glyphicon-comment"></i> <span>  Chat </span>
                    </div></a>
</div>
                    
                                      
                    
                      </div>
                              </div>
                                      



                        <!-- col -->
                        <div class="col-md-12 db-reports">
                            
                            <!-- tile -->
                            <section class="tile">   
                            

                                <!-- tile header -->
                                <div class="tile-header bg-greensea dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Open Tickets</strong></h1>
                                    <ul class="controls">
                                        <li>
                                            <a role="button" tabindex="0" class="pickDate">
                                                <span></span>&nbsp;&nbsp;<i class="fa fa-angle-down"></i>
                                            </a>
                                        </li>
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                               
                                            </ul>

                                        </li>
                                        
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget bg-greensea">
                                    <div id="statistics-chart" style="height: 250px;"></div>
                                </div>
                                <!-- /tile widget -->

                               

                            </section>
							   <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Order & Invoices </strong>Charts</h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">

                                    <div class="row">

                                        <div class="col-md-4">

                                            <h4 class="custom-font"><strong>Open Orders</strong> chart</h4>
                                            <span id="sparkline01"></span>

                                        </div>

                                        <div class="col-md-4">

                                            <h4 class="custom-font"><strong>Open Invoices</strong> chart</h4>
                                            <span id="sparkline02" data-values="5,6,7,2,1,-4,-2,4,6,8" data-type="bar" data-height="250px"></span>

                                        </div>

                                        <div class="col-md-4 text-center">

                                            <h4 class="custom-font text-left"><strong>All Orders & Invoices</strong> chart</h4>
                                            <span id="sparkline03"></span>

                                        </div>

                                    </div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                            <!-- /tile -->

                        </div>
                        <!-- /col -->



                        


                    </div>
                    <!-- /row -->










                   




                  





                </div>
				                    <div class="col-md-4">

                            <!-- tile -->
                            <section class="tile" fullscreen="isFullscreen02">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Orders & Invoices </strong></h1>
                                    <ul class="controls">
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile widget -->
                                <div class="tile-widget">
                                    <div id="browser-usage" style="height: 250px"></div>
                                </div>
                                <!-- /tile widget -->

                                <!-- tile body -->
                                <div class="tile-body p-0">

                                    <div class="panel-group icon-plus" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default panel-transparent">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <span><i class="fa fa-minus text-sm mr-5"></i> This Month</span>
                                                        <span class="badge pull-right bg-lightred">3</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <table class="table table-no-border m-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Total Orders</td>
                                                            <td>6985</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Pending Orders</td>
                                                            <td>2697</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Total Invoices</td>
                                                            <td>3597</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Pending Invoices</td>
                                                            <td>2145</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-transparent">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        <span><i class="fa fa-minus text-sm mr-5"></i> Last Month</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <table class="table table-no-border m-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Total Orders</td>
                                                            <td>6985</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Pending Orders</td>
                                                            <td>2697</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Total Invoices</td>
                                                            <td>3597</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Pending Invoices</td>
                                                            <td>2145</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default panel-transparent">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        <span><i class="fa fa-minus text-sm mr-5"></i> This Year</span>
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <table class="table table-no-border m-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Total Orders</td>
                                                            <td>6985</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Pending Orders</td>
                                                            <td>2697</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Total Invoices</td>
                                                            <td>3597</td>
                                                            <td><i class="fa fa-caret-down text-danger"></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Pending Invoices</td>
                                                            <td>2145</td>
                                                            <td><i class="fa fa-caret-up text-success"></i></td>
                                                        </tr>
                                                  
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        </div>
                        <!-- /col -->



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

        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/d3/d3.layout.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/rickshaw/rickshaw.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/daterangepicker/daterangepicker.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/flot-spline/jquery.flot.spline.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/easypiechart/jquery.easypiechart.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/raphael/raphael-min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/morris/morris.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/datatables/extensions/dataTables.bootstrap.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/summernote/summernote.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/coolclock.js"></script>
        <script src="<?php echo base_url()?>assets/js/vendor/coolclock/excanvas.js"></script>
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
			  // Sparkline Line Chart
                $('#sparkline01').sparkline([15,16,18,17,16,18,25,26,23], {
                    type: 'line',
                    width: '100%',
                    height:'250px',
                    fillColor: 'rgba(34, 190, 239, .3)',
                    lineColor: 'rgba(34, 190, 239, .5)',
                    lineWidth: 2,
                    spotRadius: 5,
                    valueSpots:[5,6,8,7,6,8,5,4,7],
                    minSpotColor: '#eaf9fe',
                    maxSpotColor: '#00a3d8',
                    highlightSpotColor: '#00a3d8',
                    highlightLineColor: '#bec6ca',
                    normalRangeMin: 0
                });
                $('#sparkline01').sparkline([1,2,1,3,1,2,4,1,3], {
                    type: 'line',
                    composite: true,
                    width: '100%',
                    height:'250px',
                    fillColor: 'rgba(255, 74, 67, .6)',
                    lineColor: 'rgba(255, 74, 67, .8)',
                    lineWidth: 2,
                    minSpotColor: '#ffeced',
                    maxSpotColor: '#d90200',
                    highlightSpotColor: '#d90200',
                    highlightLineColor: '#bec6ca',
                    spotRadius: 5,
                    valueSpots:[2,3,4,3,1,2,4,1,3],
                    normalRangeMin: 0
                });

                // Sparkline Bar Chart

                var $el = $('#sparkline02');

                var values = $el.data('values').split(',').map(parseFloat);
                var type = $el.data('type') || 'line' ;
                var height = $el.data('height') || 'auto';

                var parentWidth = $el.parent().width();
                var valueCount = values.length;
                var barSpacing = 5;

                var barWidth = Math.round((parentWidth - ( valueCount - 1 ) * barSpacing ) / valueCount);

                $el.sparkline(values, {
                    width:'100%',
                    type: type,
                    height: height,
                    barWidth: barWidth,
                    barSpacing: barSpacing,
                    barColor: '#16a085',
                    negBarColor: '#FF0066'
                });

                // Sparkline Pie Chart

                $('#sparkline03').sparkline([5,10,20,15 ], {
                    type: 'pie',
                    width: 'auto',
                    height: '250px',
                    sliceColors: ['#22beef','#a2d200','#ffc100','#ff4a43']
                });

                // Initialize Statistics chart
                var data = [{
                    data: [[1,15],[2,40],[3,35],[4,39],[5,42],[6,50],[7,46],[8,49],[9,59],[10,60],[11,58],[12,74]],
                    label: 'Unique Visits',
                    points: {
                        show: true,
                        radius: 4
                    },
                    splines: {
                        show: true,
                        tension: 0.45,
                        lineWidth: 4,
                        fill: 0
                    }
                }, {
                    data: [[1,50],[2,80],[3,90],[4,85],[5,99],[6,125],[7,114],[8,96],[9,130],[10,145],[11,139],[12,160]],
                    label: 'Page Views',
                    bars: {
                        show: true,
                        barWidth: 0.6,
                        lineWidth: 0,
                        fillColor: { colors: [{ opacity: 0.3 }, { opacity: 0.8}] }
                    }
                }];

                var options = {
                    colors: ['#e05d6f','#61c8b8'],
                    series: {
                        shadowSize: 0
                    },
                    legend: {
                        backgroundOpacity: 0,
                        margin: -7,
                        position: 'ne',
                        noColumns: 2
                    },
                    xaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        },
                        position: 'bottom',
                        ticks: [
                            [ 1, 'JAN' ], [ 2, 'FEB' ], [ 3, 'MAR' ], [ 4, 'APR' ], [ 5, 'MAY' ], [ 6, 'JUN' ], [ 7, 'JUL' ], [ 8, 'AUG' ], [ 9, 'SEP' ], [ 10, 'OCT' ], [ 11, 'NOV' ], [ 12, 'DEC' ]
                        ]
                    },
                    yaxis: {
                        tickLength: 0,
                        font: {
                            color: '#fff'
                        }
                    },
                    grid: {
                        borderWidth: {
                            top: 0,
                            right: 0,
                            bottom: 1,
                            left: 1
                        },
                        borderColor: 'rgba(255,255,255,.3)',
                        margin:0,
                        minBorderMargin:0,
                        labelMargin:20,
                        hoverable: true,
                        clickable: true,
                        mouseActiveRadius:6
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: '%s: %y',
                        defaultTheme: false,
                        shifts: {
                            x: 0,
                            y: 20
                        }
                    }
                };

                var plot = $.plot($("#statistics-chart"), data, options);

                $(window).resize(function() {
                    // redraw the graph in the correctly sized div
                    plot.resize();
                    plot.setupGrid();
                    plot.draw();
                });
                // * Initialize Statistics chart

                //Initialize morris chart
                Morris.Donut({
                    element: 'browser-usage',
                    data: [
                        {label: 'Total Orders', value: 25, color: '#00a3d8'},
                        {label: 'Pending Orders', value: 20, color: '#2fbbe8'},
                        {label: 'Total Invoices', value: 15, color: '#72cae7'},
                        {label: 'Pending Invoices', value: 5, color: '#d9544f'}
                       
                    ],
                    resize: true
                });
                //*Initialize morris chart


                // Initialize owl carousels
                $('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    singleItem : true,
                    responsive: true
                });

                $('#appointments-carousel').owlCarousel({
                    autoPlay: 5000,
                    stopOnHover: true,
                    slideSpeed : 300,
                    paginationSpeed : 400,
                    navigation: true,
                    navigationText : ['<i class=\'fa fa-chevron-left\'></i>','<i class=\'fa fa-chevron-right\'></i>'],
                    singleItem : true
                });
                //* Initialize owl carousels


                // Initialize rickshaw chart
                var graph;

                var seriesData = [ [], []];
                var random = new Rickshaw.Fixtures.RandomData(50);

                for (var i = 0; i < 50; i++) {
                    random.addData(seriesData);
                }

                graph = new Rickshaw.Graph( {
                    element: document.querySelector("#realtime-rickshaw"),
                    renderer: 'area',
                    height: 133,
                    series: [{
                        name: 'Series 1',
                        color: 'steelblue',
                        data: seriesData[0]
                    }, {
                        name: 'Series 2',
                        color: 'lightblue',
                        data: seriesData[1]
                    }]
                });

                var hoverDetail = new Rickshaw.Graph.HoverDetail( {
                    graph: graph,
                });

                graph.render();

                setInterval( function() {
                    random.removeData(seriesData);
                    random.addData(seriesData);
                    graph.update();

                },1000);
                //* Initialize rickshaw chart

                //Initialize mini calendar datepicker
                $('#mini-calendar').datetimepicker({
                    inline: true
                });
                //*Initialize mini calendar datepicker


                //todo's
                $('.widget-todo .todo-list li .checkbox').on('change', function() {
                    var todo = $(this).parents('li');

                    if (todo.hasClass('completed')) {
                        todo.removeClass('completed');
                    } else {
                        todo.addClass('completed');
                    }
                });
                //* todo's


                //initialize datatable
                $('#project-progress').DataTable({
                    "aoColumnDefs": [
                      { 'bSortable': false, 'aTargets': [ "no-sort" ] }
                    ],
                });
                //*initialize datatable

                //load wysiwyg editor
                $('#summernote').summernote({
                    toolbar: [
                        //['style', ['style']], // no style button
                        ['style', ['bold', 'italic', 'underline', 'clear']],
                        ['fontsize', ['fontsize']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['height', ['height']],
                        //['insert', ['picture', 'link']], // no insert buttons
                        //['table', ['table']], // no table button
                        //['help', ['help']] //no help button
                    ],
                    height: 143   //set editable area's height
                });
                //*load wysiwyg editor
            });
        </script>
        <!--/ Page Specific Scripts -->

<script>

 $(document).ready(function(){
   //initialize datatable
            
	  var test1 = "";
	  $(document).ajaxStart(function(){
    $("#wait").css("display", "block");
     });
	 
	 $(document).ajaxComplete(function(){
    $("#wait").css("display", "none");
     });
        $.ajax({
            type: "GET",
            url: "<?php echo base_url()?>index.php/welcome/SalesPersonDetails",
            dataType: "text",
            success: function(xml){
			
			$(xml).find('salesrep').each(function(){
			          var repid= $(this).find('repid').text();
						var repname = $(this).find('repname').text();
						var repphone= $(this).find('repphone').text();
						var repemail= $(this).find('repemail').text();
						var repfax= $(this).find('repfax').text();
						var region_desc= $(this).find('region_desc').text();
                        var branch_desc= $(this).find('branch_desc').text();
						var csr_fname= $(this).find('csr_fname').text();
						var csr_lname= $(this).find('csr_lname').text();
						var csr_email= $(this).find('csr_email').text();
						var csr_phone= $(this).find('csr_phone').text();
						//alert(repid);
						$("#sales").html("<li><strong>Sales Rep Id- </strong>"+repid+"</li><li><strong>Name: </strong>"+repname+"</li><li><strong>Email: </strong>"+repemail+"</li><li><strong>Phone: </strong>"+repphone+"</li><li class='divider'></li><li><strong>Customer Service Rep </strong></li><li><strong>Name: </strong>"+csr_fname+" "+csr_lname+"</li><li><strong>Email: </strong>"+csr_email+"</li><li><strong>Phone: </strong>"+csr_phone+"</li>");
			   });
		     
            },
            error: function() {
            alert("An error occurred while processing XML file.");
            }
        });
    });    

           
        </script>





    </body>
</html>