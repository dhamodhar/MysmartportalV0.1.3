            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
            <section id="content">

                <div class="page page-dashboard">

                    <div class="pageheader">

                        <h2 style="color:green;" color="green" align="left">Hello, <?php echo $this->session->userdata('firstname');?>&nbsp;-&nbsp;<?php $hour = date('H');
$dayTerm = ($hour > 17) ? "Evening" : ($hour > 12) ? "Afternoon" : "Morning";
echo "Good " . $dayTerm;?>.</h2>

                      

                    </div>

                    <!-- cards row -->
                    <div class="row">

                        <!-- col -->
                        <div class="margin-left-2 card-container col-lg-2 col-sm-6 col-sm-12">
                            
                                <div class="front bg-greensea2">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-users fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0">659</p>
                                            <span>New Users</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                
                                
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-2 col-sm-6 col-sm-12">
                          
                                <div class="front bg-lightred2">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-shopping-cart fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0">364</p>
                                            <span>Pending Orders</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                               
                                
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-2 col-sm-6 col-sm-12">
                          
                                <div class="front bg-blue2">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-2">
                                            <i class="fa fa-usd fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <p class="text-elg text-strong mb-0">19500</p>
                                            <span>Invoices</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                
                               
                            </div>
                        </div>
                        <!-- /col -->

                        <!-- col -->
                        <div class="card-container col-lg-2 col-sm-6 col-sm-12">
                          
                                <div class="front bg-slategray2">

                                    <!-- row -->
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-xs-4">
                                            <i class="fa fa-shopping-cart fa-4x"></i>
                                        </div>
                                        <!-- /col -->
                                        <!-- col -->
                                        <div class="col-xs-8">
                                            <p class="text-elg text-strong mb-0">520</p>
                                            <span>Delivered Orders</span>
                                        </div>
                                        <!-- /col -->
                                    </div>
                                    <!-- /row -->

                                </div>
                                
                            </div>
                        </div>
                        <!-- /col -->



<div class="row">
    <div class="col-md-12 db-reports">
                            <h2>Reports</h2>
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

                               

                            </section></div></div>



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
                    <!-- /row -->




                </div>






                
            </section>
            <!--/ CONTENT -->






        














