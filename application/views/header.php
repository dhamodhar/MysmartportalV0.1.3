<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>::Welcome to Mysmartportal</title>
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
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/scrolltabs.css">

      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/daterangepicker/daterangepicker-bs3.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/morris/morris.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/rickshaw/rickshaw.min.css">
      
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datatables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datatables/datatables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/chosen/chosen.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/summernote/summernote.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
 
 

        <!-- project main css files -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/simpletextrotator.css">
 <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/acc.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/accordion.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/css/map.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive-in.css">
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
                        <a  href="<?php echo base_url()?>index.php/welcome/technical_support">
                            <img src="<?php echo base_url()?>assets/images/logo.png" class="img-responsive">
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->



                  




                    <!-- Search -->
                    <h3 class="sub-title">MySmart Portal</h3>
                    <!-- Search end -->
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
                                 <img class="img-circle size-30x30" alt="" src="http://lowrysmartportal.com/assets/images/logo.png">
                              
                                <span>Your Lowry Team<i class="fa fa-angle-down"></i></span>
                            </a>

                   
                        <ul role="menu" class="dropdown-menu animated littleFadeInRight cn-lowry" id="sales">
            <li><strong>Sales Rep</strong></li>
            <li> <strong id="RepName">Name:</strong><?php echo $this->session->userdata('repname')?></li>
            <li> <strong>E-mail:</strong><a href="mailto:<?php echo $this->session->userdata('repemail')?>" ><?php echo $this->session->userdata('repemail')?></a></li>
            <li> <strong>Phone:</strong><a href="tel:<?php echo $this->session->userdata('repphone')?>" ><?php echo $this->session->userdata('repphone')?></a></li>
            <li class="divider"></li>
            <li><strong>Customer Service Rep</strong></li>
            <li> <strong>Name:</strong><?php echo $this->session->userdata('csr_fname')?></li>
            <li> <strong>E-mail:</strong><a href="mailto:<?php echo $this->session->userdata('csr_email')?>" ><?php echo $this->session->userdata('csr_email')?></a></li>
            <li> <strong>Phone:</strong><a href="tel:<?php echo $this->session->userdata('csr_phone')?>" ><?php echo $this->session->userdata('csr_phone')?></a></li></ul>
                          

                        </li> 


                         <?php
								$count = 0;
                                foreach($user_notifications as $user_notificationsdatafinal)
								{	
								if($user_notificationsdatafinal->from_user_id != $this->session->userdata('userid')){
								if($user_notificationsdatafinal->read_status == 0)
								{
								$count++;
								
								}
								}
								
                                }								
								?>

                        <li class="dropdown messages">

                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" onClick="test();">
                                <i class="fa fa-envelope"></i>
                                <span class="badge bg-lightred" id="num_un_read"><?php echo $count;?></span>
                            </a>

                            <div class="dropdown-menu pull-right with-arrow panel panel-default animated littleFadeInDown" role="menu">

                                <div class="panel-heading">
                                    You have <strong><?php echo $count;?></strong> new messages.
                                </div>

                                <ul class="list-group" style="overflow-y:scroll; height:375px;">

                              	<?php
                                foreach($user_notifications as $user_notificationsdata){
									if($user_notificationsdata->from_user_id != $this->session->userdata('userid')){
                                if($user_notificationsdata->read_status == 0){	
								
								?>
  
                                    <li class="list-group-item">
                                        <a href="<?php echo base_url()?>index.php/welcome/viewmessage/<?php echo $user_notificationsdata->id;?>" role="button" tabindex="0" class="media">
                                            <span class="pull-left media-object thumb thumb-sm">
                                                <img src="<?php echo base_url()?>assets/images/logo.png" alt="" class="img-circle">
                                            </span>
                                            <div class="media-body">
                                                <span class="block"><?php echo $user_notificationsdata->msg_subject; ?></span>
                                                <small class="text-muted"><?php echo $user_notificationsdata->created_date; ?> </small>
                                            </div>
                                        </a>
                                    </li>
									
									<?php }}} ?>

                                  


                                </ul>

                                <div class="panel-footer" style="background-color:#1e7b3e;">
                                    <a href="<?php echo base_url();?>index.php/welcome/usermessages" role="button" style="color:#ffffff;" tabindex="0">SHOW ALL MESSAGES <i class="pull-right fa fa-angle-right"></i></a>
                                </div>

                            </div>

                        </li>

                        
                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url()?>assets/images/logo.png" alt="" class="img-circle size-30x30">
                                <span><?php echo ucfirst($this->session->userdata('firstname'))?> <?php echo ucfirst($this->session->userdata('lastname'))?> <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <!--<li>
                                    <a role="button" tabindex="0" href="#">
                                        <span class="badge bg-greensea pull-right">86%</span>
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                              
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>-->
                                 <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/user_profile" role="button" tabindex="0">
                                        <i class="fa fa-user"></i></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/help" role="button" tabindex="0">
                                        <i class="fa fa-question"></i></i>Help
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
										   <li <?php if($this->uri->segment(2) == url_title('technical_support', TRUE)){?> class="active"<?php }?>><a href="<?php echo $url;?>" class="support <?php if($this->uri->segment(2) == url_title('technical_support', TRUE)){?> tech-active<?php }?>"> <span>Technical Support</span></a></li>
										
										
										<?php }else if($menu[$i]['id']==2)
										  {
                                           if(in_array($menu[$i]['id'], $id) == 1){
                                           $url = base_url()."index.php/welcome/service_desk_tickets";
                                           $url2 = base_url()."index.php/welcome/service_contracts_analytics";
                                           $url1 = base_url()."index.php/welcome/labels_supplies";
                                           }else{
                                            $url = base_url()."index.php/welcome/accessdenied";
                                            $url1 = base_url()."index.php/welcome/accessdenied";
                                            $url2 = base_url()."index.php/welcome/accessdenied";
};
?>
<li <?php if($this->uri->segment(2) == url_title('service_desk_tickets', TRUE) or $this->uri->segment(2) == url_title('labels_supplies', TRUE) or 
$this->uri->segment(2) == url_title('service_desk_tickets', TRUE) or 
$this->uri->segment(2) == url_title('service_contracts_analytics', TRUE)){?> class="active open"<?php }?>>
<a role="button" tabindex="0" class="contracts contracts-active <?php if($this->uri->segment(2) == url_title('service_desk_tickets', TRUE) or 
$this->uri->segment(2) == url_title('labels_supplies', TRUE) or 
$this->uri->segment(2) == url_title('service_contracts_analytics', TRUE)){?> service-active<?php }?>"><span >Dashboard & Analytics</span></a>
<ul <?php if($this->uri->segment(2) == url_title('service_desk_tickets', TRUE) or 
$this->uri->segment(2) == url_title('labels_supplies', TRUE) or 
$this->uri->segment(2) == url_title('service_contracts_analytics', TRUE)){?> style="display:block;" <?php } ?>>
 <li class="top-41"> <a href="<?php echo $url?>" <?php if($this->uri->segment(2) == url_title('service_desk_tickets', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Service Tickets</a></li>
													 
<li> <a href="<?php echo $url2?>" <?php if($this->uri->segment(2) == url_title('service_contracts_analytics', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Service Contracts</a></li>
													
<li> <a href="<?php echo $url1?>" <?php if($this->uri->segment(2) == url_title('labels_supplies', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Labels & Supplies</a></li>
													
</ul>                                       
										
										<?php }else if($menu[$i]['id']==3)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										   echo "<input type='hidden' name='passdueacess' id='passdueacess' value='1'>";
										 $url = base_url()."index.php/welcome/orders";
										 $url1 = base_url()."index.php/welcome/open_orders";
										 $url2 = base_url()."index.php/welcome/open_invoices";
										 $past_due_invoices = base_url()."index.php/welcome/past_due_invoices";
										 }else{
										 echo "<input type='hidden' name='passdueacess' id='passdueacess' value='0'>";
										
										 $url = base_url()."index.php/welcome/accessdenied";
		                                  $url1 = base_url()."index.php/welcome/accessdenied";
										   $url2 = base_url()."index.php/welcome/accessdenied";
										   $past_due_invoices = base_url()."index.php/welcome/accessdenied";
										 };
										?>
										
                                         <li <?php if($this->uri->segment(2) == url_title('orders', TRUE) or $this->uri->segment(2) == url_title('open_orders', TRUE) or $this->uri->segment(2) == url_title('order_view', TRUE) or $this->uri->segment(2) == url_title('invoice_view', TRUE) or $this->uri->segment(2) == url_title('open_invoices', TRUE) or $this->uri->segment(2) == url_title('past_due_invoices', TRUE)){?> class="active open"<?php }?>>
                                                <a role="button" tabindex="0" class="pa <?php if($this->uri->segment(2) == url_title('open_orders', TRUE) or $this->uri->segment(2) == url_title('orders', TRUE) or $this->uri->segment(2) == url_title('open_invoices', TRUE) or $this->uri->segment(2) == url_title('invoice_view', TRUE) or $this->uri->segment(2) == url_title('order_view', TRUE) or $this->uri->segment(2) == url_title('past_due_invoices', TRUE)){?> pa-active<?php }?>"> <span >Orders & Invoices</span></a>
                                                <ul <?php if($this->uri->segment(2) == url_title('open_orders', TRUE) or $this->uri->segment(2) == url_title('orders', TRUE) or $this->uri->segment(2) == url_title('open_invoices', TRUE) or $this->uri->segment(2) == url_title('order_view', TRUE) or $this->uri->segment(2) == url_title('past_due_invoices', TRUE))   {?> style="display:block"<?php }?>>
                                                   <!-- <li class="top-41"> <a href="<?php echo $url?>" <?php if($this->uri->segment(2) == url_title('orders', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Orders & Invoices</a></li>-->
													 <li class="top-41"><a href="<?php echo $url1; ?>" <?php if($this->uri->segment(2) == url_title('open_orders', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i>Open Orders</a></li>
                                                    <li><a href="<?php echo $url2; ?>" <?php if($this->uri->segment(2) == url_title('open_invoices', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i>Invoices</a></li>
                                                    <li><a href="<?php echo $past_due_invoices; ?>" <?php if($this->uri->segment(2) == url_title('past_due_invoices', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i>Past Due Invoices</a></li>
                                                   
                                                </ul>
                                            </li>
										
										<?php }else if($menu[$i]['id']==4)
										  {
										  if(in_array($menu[$i]['id'], $id) == 1){
										 $url =  base_url()."index.php/welcome/varstreetLoginAthenticationTest";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										<li>
										<a href="<?php echo $url;?>" target="_blank" class="catalog <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> catalog-active<?php }?>"> <span >My Catalog</span></a></li>
                                         
										<?php } else if($menu[$i]['id']==5)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = base_url()."index.php/welcome/active_service_contracts";
										  $url2 = base_url()."index.php/welcome/expired_service_contracts";
										 $url1 = base_url()."index.php/welcome/renew_service_contracts";
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		                                 $url1 = base_url()."index.php/welcome/accessdenied";
										  $url2 = base_url()."index.php/welcome/accessdenied";
										 };
										?>
										    <li <?php if($this->uri->segment(2) == url_title('active_service_contracts', TRUE) or $this->uri->segment(2) == url_title('renew_service_contracts', TRUE) or $this->uri->segment(2) == url_title('active_service_contracts', TRUE) or $this->uri->segment(2) == url_title('expired_service_contracts', TRUE)){?> class="active open"<?php }?>>
											<a role="button" tabindex="0" class="contracts contracts-active <?php if($this->uri->segment(2) == url_title('active_service_contracts', TRUE) or $this->uri->segment(2) == url_title('renew_service_contracts', TRUE) or $this->uri->segment(2) == url_title('expired_service_contracts', TRUE)){?> service-active<?php }?>"><span >Service Contracts</span></a>
                                         <ul <?php if($this->uri->segment(2) == url_title('active_service_contracts', TRUE) or $this->uri->segment(2) == url_title('renew_service_contracts', TRUE) or $this->uri->segment(2) == url_title('expired_service_contracts', TRUE)){?> style="display:block;" <?php } ?>>
                                                    <li class="top-41"> <a href="<?php echo $url?>" <?php if($this->uri->segment(2) == url_title('active_service_contracts', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Active Contracts</a></li>
													 
													 <li> <a href="<?php echo $url2?>" <?php if($this->uri->segment(2) == url_title('expired_service_contracts', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Expired Contracts</a></li>
													
													<li> <a href="<?php echo $url1?>" <?php if($this->uri->segment(2) == url_title('renew_service_contracts', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i> Upcoming for renewal</a></li>
													
                                                </ul>
										      
									</li>
										 
										<?php } else if($menu[$i]['id']==6)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = base_url()."index.php/welcome/assets";
										 $url1 = base_url()."index.php/welcome/assets_under_contracts";
										 $url2 = base_url()."index.php/welcome/assetsendoflife";
										 $url_no_contarcts = base_url()."index.php/welcome/assets_no_contracts";
										 $assets_under_warranty = base_url()."index.php/welcome/assets_under_warranty";
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		                                   $url1 = base_url()."index.php/welcome/accessdenied";
										   $url2 = base_url()."index.php/welcome/accessdenied";
										   $url_no_contarcts = "#";
										   $assets_under_warranty = "#";
										 };
										?>
										     <li <?php if($this->uri->segment(2) == url_title('assets', TRUE) or $this->uri->segment(2) == url_title('assets_under_contracts', TRUE) or $this->uri->segment(2) == url_title('assets_no_contracts', TRUE) or $this->uri->segment(2) == url_title('assets_under_warranty', TRUE) or $this->uri->segment(2) == url_title('assetsendoflife', TRUE)){?> class="active open"<?php }?>><a role="button" href="<?php echo $url?>" tabindex="0" class="asset  <?php if($this->uri->segment(2) == url_title('assets', TRUE)){?> asset-active <?php }?>"> <span>Asset Inventory</span></a>
                                         <ul <?php if($this->uri->segment(2) == url_title('assets_under_contracts', TRUE) or $this->uri->segment(2) == url_title('assets', TRUE) or $this->uri->segment(2) == url_title('assetsendoflife', TRUE) or $this->uri->segment(2) == url_title('assets_no_contracts', TRUE) or $this->uri->segment(2) == url_title('assets_under_warranty', TRUE)){?> style="display:block;" <?php } ?>>
                                                    
													 <li class="top-41"> <a href="<?php echo $url1?>" <?php if($this->uri->segment(2) == url_title('assets_under_contracts', TRUE)){?> class="orders-active"  <?php } ?>><i class="fa fa-caret-right"></i> Under Contract</a></li>
													 <li> <a href="<?php echo $url_no_contarcts;?>" <?php if($this->uri->segment(2) == url_title('assets_no_contracts', TRUE)){?> class="orders-active"  <?php } ?>><i class="fa fa-caret-right"></i> No Contract</a></li>
													 <li> <a href="<?php echo $assets_under_warranty;?>" <?php if($this->uri->segment(2) == url_title('assets_under_warranty', TRUE)){?> class="orders-active"  <?php } ?>><i class="fa fa-caret-right"></i> Under Warranty</a></li>
													 <li> <a href="<?php echo $url2;?>" <?php if($this->uri->segment(2) == url_title('assetsendoflife', TRUE)){?> class="orders-active"  <?php } ?>><i class="fa fa-caret-right"></i> End of Life Assets</a></li>
                                                     <li> <a href="<?php echo $url?>" <?php if($this->uri->segment(2) == url_title('assets', TRUE)){?> class="orders-active" <?php } ?>><i class="fa fa-caret-right"></i>All Assets</a></li>
													
                                                </ul>
										
									   </li>
										
										<?php } else if($menu[$i]['id']==7)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "https://mdm-trial.lowrysolutions.com/mobicontrol/";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										
										    <li><a href="<?php echo $url ?>" target="_blank" class="devices <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> device-active<?php }?>"> <span>Managed Devices</span></a></li>
                                  
										
										<?php } else if($menu[$i]['id']==8)
										  {
										  if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "#";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										 <li><a href="<?php echo $url ?>" class="projects <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> project-active<?php }?>"> <span >My Projects</span></a></li>
                                         
										 
										
										
										<?php } else if($menu[$i]['id']==9)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "#";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
										 <li><a href="<?php echo $url ?>" class="printer <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> print-active<?php }?>"> <span>Printer Management</span></a></li>
     
										<?php } else if($menu[$i]['id']==10)
										  {
										   if(in_array($menu[$i]['id'], $id) == 1){
										 $url = "#";
										 
										 }else{
										 $url = base_url()."index.php/welcome/accessdenied";
		
										 };
										?>
											
									  <li><a href="<?php echo $url ?>" class="socialmedia <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> social-active<?php }?>"> <span>Mobility Social Media</span></a></li>
                                          
										
									
										
										<?php } else if($menu[$i]['id']==11)
										  {
										?>
									   
										
									  <li><a href="javascript:$zopim.livechat.window.show()" class="chat <?php if($this->uri->segment(2) == url_title('dashboard', TRUE)){?> chat-active<?php }?>"> <span>Chat Now</span></a></li>
                                           
                                        
										
										<?php } ?>
										
										<?php
										} 
										?>
                                            
                                            
                                            
                                        
                                            </ul>
                                          
                                          
                                        
                                        <!--/ NAVIGATION Content -->


                                    </div>
 <!-- tile -->
                           <!-- <section class="products-cat">

                                    <div id="pie-chart" style="height: 250px"></div>
									</section>-->

                                </div>
                            </div>
                           
                            
                            </div>
                            
                        </div>

                    </div>


                </aside>
                <!--/ SIDEBAR Content -->





            </div>
            <!--/ CONTROLS Content -->