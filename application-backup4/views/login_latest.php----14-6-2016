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
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
       
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animate.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/login-menu.css">

        <!-- project main css files -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/responsive.css">
        <!--/ stylesheets -->



        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="<?php echo base_url()?>assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <!--/ modernizr -->


<script type="text/javascript">
function getpassword()
{
var email = document.getElementById("username-login").value;
//alert(email);
  $.ajax({
            type: "post",
            url: "<?php echo base_url()?>index.php/welcome/getpassowrd",
            dataType: "text",
			data:"email="+email,
            success: function(xml){
			var str = xml.slice(0, -1);
			document.getElementById("password").value=str;
			document.getElementById("username").value=email;
			//alert(xml);
			}
			
			});


}

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




            <div class="page page-core page-login col-md-12">
            
           

             <!--  <div class="container w-150"> <a  href="index.html">  <img src="<?php echo base_url()?>assets/images/logo.png" class="img-responsive"></a></div>-->
                                 
                
               
                   <div class="col-md-9 mt-40">

  <div class="menu col-md-6 icons-wheel" >
  <div class="btn trigger bg-logo" id="menulogo">

  </div>
  <div class="icons">
    <div class="rotater">
      <div class="btn btn-icon technical-tile">
   <div class="textbox" ><p style="position:relative;left:-10px">Technical Support</p></div>
       <img src="http://lowrysmartportal.com/assets/images/tech-support.png" class="img-responsive" style="margin-top:26px;"/>
     
      </div>
    </div>
    <div class="rotater">

      <div class="btn btn-icon dashboard-box"> 
<div class="textbox" ><p>Dashboard & Analytics</p></div>
     <img src="http://lowrysmartportal.com/assets/images/dashboard.png" class="img-responsive" style="margin-top:26px;"/>

      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon orders-box">
<div class="textbox" ><p>Orders & Invoices</p></div>
       <img src="http://lowrysmartportal.com/assets/images/folder.png" class="img-responsive" style="margin-top:26px; margin-left: 4px;"/>
      </div>
    </div>
    <div class="rotater">

      <div class="btn btn-icon">
<div class="textbox" ><p> My Catalog</p></div>
     <img src="http://lowrysmartportal.com/assets/images/catalog.png" class="img-responsive" style="margin-top:26px;margin-left:4px;"/>
      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">

<div class="textbox" ><p>Contracts</p></div>
        <img src="http://lowrysmartportal.com/assets/images/contracts.png" class="img-responsive" style="margin-top:23px;"/>
      </div>
    </div>
    <div class="rotater">
      <div class="btn btn-icon">
<div class="textbox" ><p >Asset Inventory</p></div>
       <img src="http://lowrysmartportal.com/assets/images/inventory.png" class="img-responsive" style="margin-top:23px;"/>
      </div>
    </div>
   
    <div class="rotater">
      <div class="btn btn-icon">
<div class="textbox" ><p  style="text-align:right;">MySmart Apps (Beta)</p></div>
        <img src="http://lowrysmartportal.com/assets/images/invoices.png" class="img-responsive" style="  margin-left: 5px; margin-top: 25px;"/>
      </div>
    </div>
  </div>
</div>







</div>   

                <div class="  col-md-3 text-center bg-white mt-95">


                    <h2 class="text-light text-greensea">Log In</h2>
<h5 class="text-light text-greensea"><?php echo $msg;?></h5>
                    <form name="form" action="<?php echo base_url();?>index.php/welcome/logincheck" method="post" class="form-validation mt-20" novalidate="">



                        <div class="form-group selectwrap">
						<select name="username-login" id="username-login" class="form-control underline-input" onchange="getpassword()">
						<option>Please Select User</option>
						<?php 
						foreach($users as $usersdata){
						$role = "";
						?>
						
						<?php if($usersdata->role==3)
												{
												$role = "Power User";
												 } else if($usersdata->role==2)
												{
												$role = "Normal User";
												 }else{ 
												$role = "Admin";
												 } ?>
						<option value="<?php echo $usersdata->email_id;?>"><?php echo $role?> </option>
						
						<?php } ?>
						</select>
                          <input type="email"  name="username" id="username" class="form-control underline-input username-t" placeholder="Username or Email">
                        </div>

                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control underline-input">
                        </div>

                        <div class="form-group text-left mt-20">
                            
                           <input type="submit" name="login" id="login" class="btn btn-greensea b-0 br-2 mr-5" value="Login">
                            <a href="<?php echo base_url()?>index.php/welcome/forgetpassword" class="pull-right mt-10 fogot">Forgot Password?</a>
                        </div>

                    </form>

                   

                   

                  

                </div>
                

            </div>



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

        <script src="<?php echo base_url()?>assets/js/vendor/screenfull/screenfull.min.js"></script>
<script src="<?php echo base_url()?>assets/js/index.js"></script>
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
$( "#menulogo" ).on( "click", function() {

});
$( "#menulogo" ).trigger( "click" );

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
