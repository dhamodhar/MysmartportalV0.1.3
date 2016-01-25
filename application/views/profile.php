<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->



    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Minovate - Admin Dashboard</title>
        <link rel="icon" type="image/ico" href="<?php echo base_url();?>assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">




        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/animate.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/chosen/chosen.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="<?php echo base_url();?>assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->




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
                        <a  href="index.html">
                            <img src="<?php echo base_url();?>assets/images/logo.png" class="img-responsive">
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                      <h1 class="sub-title">MySmart Portal</h1>

                   

                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">
                        

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
                                                <img src="<?php echo base_url();?>assets/images/ici-avatar.jpg" alt="" class="img-circle">
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
                                                <img src="<?php echo base_url();?>assets/images/peter-avatar.jpg" alt="" class="img-circle">
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
                                                <img src="<?php echo base_url();?>assets/images/random-avatar1.jpg" alt="" class="img-circle">
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
                                                <img src="<?php echo base_url();?>assets/images/random-avatar3.jpg" alt="" class="img-circle">
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
                                <img src="<?php echo base_url();?>assets/images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                                <span>John Douey <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0">
                                        <span class="badge bg-greensea pull-right">86%</span>
                                        <i class="fa fa-user"></i>Profile
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0">
                                        <span class="label bg-lightred pull-right">new</span>
                                        <i class="fa fa-check"></i>Tasks
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-cog"></i>Settings
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-lock"></i>Lock
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0">
                                        <i class="fa fa-sign-out"></i>Logout
                                    </a>
                                </li>

                            </ul>

                        </li>

                        <li class="toggle-right-sidebar">
                            <a role="button" tabindex="0">
                                <i class="fa fa-comments"></i>
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
                                            <li><a href="<?php echo base_url()?>index.php/welcome/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                              <li>
                                                <a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Orders & invoices</span></a>
                                                <ul>
                                                    <li><a href="<?php echo base_url()?>index.php/welcome/orders"><i class="fa fa-caret-right"></i> Orders</a></li>
                                                    <li><a href="#"><i class="fa fa-caret-right"></i>Invoices</a></li>
                                                   
                                                </ul>
                                            </li>
                                            <li><a href="#"><i class="fa fa-cog"></i> <span>Technical Support</span></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i> <span>Purchasing & Accounting</span></a></li>
                                            <li><a href="#"><i class="fa fa-mobile"></i> <span>Mobile Device Mangement</span></a></li>
                                            <li><a href="#"><i class="fa fa-print"></i> <span>Printer Management</span></a></li>
                                            <li><a href="#"><i class="fa fa-cubes"></i> <span>Asset Inventory</span></a></li>
                                            <li><a href="#"><i class="fa fa-navicon"></i> <span>Catalog</span></a></li>
                                            <li><a href="#"><i class="fa fa-pencil-square-o"></i> <span>Contracts</span></a></li>
                                            <li><a href="#"><i class="fa fa-folder-open"></i> <span>Projects</span></a></li>
                                            <li><a href="#"><i class="fa fa-users"></i> <span>Mobility Social Media</span></a></li>
                                            <li><a href="javascript:$zopim.livechat.window.show()"><i class="fa fa-users"></i> <span>Chat Now</span></a></li>
                                           
                                        
                                            </ul>
                                          
                                        
                                        <!--/ NAVIGATION Content -->


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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/ici-avatar.jpg" alt>
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

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/arnold-avatar.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/peter-avatar.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/george-avatar.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar1.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar2.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar4.jpg" alt>
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

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar5.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar6.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar7.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar8.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/ici-avatar.jpg" alt>
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

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/arnold-avatar.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/peter-avatar.jpg" alt>
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

                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/arnold-avatar.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar8.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/random-avatar1.jpg" alt>
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
                                            <a class="pull-left thumb thumb-sm" href="#">
                                                <img class="media-object img-circle" src="<?php echo base_url();?>assets/images/ici-avatar.jpg" alt>
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

                <div class="page page-profile">

                    <div class="pageheader">

                        <h2>My Profile</h2>

                       <!-- <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Minovate</a>
                                </li>
                                <li>
                                    <a href="#">Extra Pages</a>
                                </li>
                                <li>
                                    <a href="profile.html">Profile Page</a>
                                </li>
                            </ul>
                            
                        </div>
-->
                    </div>

                    <!-- page content -->
                    <div class="pagecontent">


                        <!-- row -->
                        <div class="row">






                            <!-- col -->
                            <div class="col-md-3">

                                <!-- tile -->
                                <section class="tile tile-simple">

                                    <!-- tile widget -->
                                    <div class="tile-widget p-40 text-center">

                                        <div class="thumb thumb-xl">
                                            <img class="img-circle" src="<?php echo base_url();?>assets/images/arnold-avatar.jpg" alt="">
                                        </div>
                                        <h4 class="mb-0"><strong>John</strong> Douey</h4>
                                        <span class="text-muted">Project Manager</span>
                                        <div class="mt-10">
                                      
                                        <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-10" data-toggle="modal" data-target="#splash" data-options="splash-2 splash-ef-12"><i class="fa fa-plus"></i><span>Add Portal</span></button>
                                           
                                        </div>

                                    </div>
                                    <!-- /tile widget -->

                                  
                                </section>
                                <!-- /tile -->
                                   </div>
                            <!-- /col -->
                            
                            
                             <!-- col -->
                            <div class="col-md-3 padding-10">

                                <!-- tile -->
                                <section class="tile tile-simple">
                            <div class="more-btn"> <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11 float-right"><i class="fa fa-ellipsis-h"></i><span>More</span></button></div>
                                <div class="p-30-pr">
                                
                                
                                  <div class="portal-img"> <h4><strong>Portal</strong> </h4>  <img src="<?php echo base_url();?>assets/images/VARStreetLogo.png" class="img-responsive" width="100"> </div>
                                
                                   
                                 
                                    <!-- tile widget -->
                                    <div class="form-group"> 
                                                                     
                                    <label for="password">Username</label>
                                    <input type="Username" data-parsley-id="3372" name="username" id="username" class="form-control"  value="John Douey" data-parsley-trigger="change" data-parsley-range="[4, 20]" required=""><ul id="parsley-id-3372" class="parsley-errors-list"></ul></div>
                                    
                                    <div class="form-group">  
                                    <label for="password">Password</label>
                                   
                                    <input type="password" data-parsley-id="3372" name="password" class="form-control password" value="@Lowry" data-parsley-trigger="change"    data-parsley-range="[4, 20]" required=""></div>
                                            
                           <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11"><i class="fa fa-lock"></i><span>Test Connection</span></button>
                         <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11"><i class="fa fa-pencil"></i><span>Edit</span></button>
                         
                           
                           
                                            </div>
                                            
                                    <!-- /tile widget -->

                                  
                                </section>
                                <!-- /tile -->
                                   </div>
                            <!-- /col -->
                            
                             <!-- col -->
                            <div class="col-md-3 padding-10">

                                <!-- tile -->
                                <section class="tile tile-simple">
                                 <div class="more-btn"> <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11 float-right"><i class="fa fa-ellipsis-h"></i><span>More</span></button></div>
                                <div class="p-30">
                                   <div class="portal-img"> <h4 ><strong>Portal</strong> </h4>  <img src="<?php echo base_url();?>assets/images/oneview-logo.png" class="img-responsive" width="100"> </div>
                                    <!-- tile widget -->
                                    <div class="form-group"> 
                                                                     
                                    <label for="password">Username</label>
                                    <input type="username" data-parsley-id="3372" name="username" id="username" class="form-control" data-parsley-trigger="change"  value="John Douey" data-parsley-range="[4, 20]" required=""><ul id="parsley-id-3372" class="parsley-errors-list"></ul></div>
                                    
                                    <div class="form-group">  
                                    <label for="password">Password</label>
                                      <input type="password" data-parsley-id="3375" name="password" class="form-control password" data-parsley-trigger="change" value="@Lowry"   data-parsley-range="[4, 20]" required=""></div>
                                            
                           <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11"><i class="fa fa-lock"></i><span>Test Connection</span></button>
                         <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11"><i class="fa fa-pencil"></i><span>Edit</span></button>
                       
                           
                           
                                            </div>
                                            
                                    <!-- /tile widget -->

                                  
                                </section>
                                <!-- /tile -->
                                   </div>
                            <!-- /col -->

                               
 <!-- col -->
                            <div class="col-md-3 padding-10">

                                <!-- tile -->
                                <section class="tile tile-simple">
                                 <div class="more-btn"> <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11 float-right"><i class="fa fa-ellipsis-h"></i><span>More</span></button></div>
                                <div class="p-30">
                                    <div class="portal-img"> <h4 ><strong>Portal</strong> </h4>  <img src="<?php echo base_url();?>assets/images/mob.png" class="img-responsive" width="100"> </div>
                                    <!-- tile widget -->
                                    <div class="form-group"> 
                                                                     
                                    <label for="password">Username</label>
                                    <input type="username" data-parsley-id="3372" name="password" id="username" class="form-control" data-parsley-trigger="change"  value="John Douey" data-parsley-range="[4, 20]" required=""><ul id="parsley-id-3372" class="parsley-errors-list"></ul></div>
                                    
                                    <div class="form-group">  
                                    <label for="password">Password</label>
                                    <input type="password" data-parsley-id="3372" name="password" id="password"  class="form-control password" data-parsley-trigger="change" value="@Lowry" data-parsley-range="[4, 20]" required=""><ul id="parsley-id-3372" class="parsley-errors-list"></ul></div>
                                            
                           <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11"><i class="fa fa-lock"></i><span>Test Connection</span></button>
                         <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-11"><i class="fa fa-pencil"></i><span>Edit</span></button>
                        
                           
                           
                                            </div>
                                            
                                    <!-- /tile widget -->

                                  
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





   <!-- Splash Modal -->
        <div class="modal splash fade" id="splash" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                       <div class="modal-header  cl-btn">
                       <button data-dismiss="modal" class="close"><i class="glyphicon glyphicon-remove"></i></button>
                       </div>
                     
                    <div class="modal-body">
                       <div class="form-group">
                                           <label  for="add portal">Add Portal</label>
                                            <select required="" data-parsley-trigger="change" class="form-control mb-10" name="f2" data-parsley-id="5625">
                                                    <option value="">Select option...</option>
                                                    <option value="foo">Varstreet</option>
                                                    <option value="bar">ONEview</option>
                                                    <option value="bar">Soti Mobicontrol</option>
                                                </select>
                                        </div>

                                              <div class="form-group">  

                                                <label for="password">Username</label> 
                                                <input type="username" required="" data-parsley-range="[4, 20]" data-parsley-trigger="change" class="form-control" id="username" name="password"  data-parsley-id=    			"3372"><ul class="parsley-errors-list" id="parsley-id-3372"></ul>
                                            </div>
                                            
                                            <div class="form-group">  

                                                <label for="password">Password</label>
                                                <input type="password" required="" data-parsley-range="[4, 20]" data-parsley-trigger="change" class="form-control" id="password" name="password" data-parsley-id=    			"3372"><ul class="parsley-errors-list" id="parsley-id-3372"></ul>
                                            </div> 
                                        
                                        
                                        
                                        
                                        
                    </div>
                    
                    
                    
                    <div class="modal-footer">
                 
                        <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-10"><i class="fa fa-lock"></i><span>Test Connections</span></button>
                         <button class="btn btn-warning btn-ef btn-ef-5 btn-ef-5b mb-10"><i class="fa fa-save"></i><span>Save</span></button>
                    </div>
                </div>
            </div>
        </div>
        
         <!-- Splash Modal ends -->








        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
         <script src="<?php echo base_url();?>assets/js/password.js"></script>
        <script src="<?php echo base_url();?>assets/js/vendor/bootstrap/bootstrap.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/jRespond/jRespond.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/slimscroll/jquery.slimscroll.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/screenfull/screenfull.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/chosen/chosen.jquery.min.js"></script>

        <script src="<?php echo base_url();?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>
        
        <script>
    $(function() {
        $('.password').password().on('show.bs.password', function(e) {
            $('#eventLog').text('On show event');
            $('#methods').prop('checked', true);
        }).on('hide.bs.password', function(e) {
                    $('#eventLog').text('On hide event');
                    $('#methods').prop('checked', false);
                });
        $('#methods').click(function() {
            $('#password').password('toggle');
        });
    });
</script>
        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
        <!--/ custom javascripts -->






        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->
        <script>
            $(window).load(function(){

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
