            <!-- ====================================================
            ================= CONTENT ===============================
            ===================================================== -->
          
<style>
.demo table td {
    border: 1px solid #ddd;
}
#assets-list th, #contracts-list th, #orders-list th{
padding:19px!important;
}
table td{
border-top:none!important;
font-size:12px!important;
}
table .odd{
border-bottom:1px solid #ddd!important;
}
.blink {
  background-color: #e6894d!important;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
}
@-webkit-keyframes glowing {
  0% { background-color: #EF7E0B; -webkit-box-shadow: 0 0 3px #338cc2; }
  50% { background-color: #338cc2; -webkit-box-shadow: 0 0 10px #338cc2; }
  100% { background-color: #EF7E0B; -webkit-box-shadow: 0 0 3px #338cc2; }
}

@-moz-keyframes glowing {
  0% { background-color: #EF7E0B; -moz-box-shadow: 0 0 3px #338cc2; }
  50% { background-color: #338cc2; -moz-box-shadow: 0 0 10px #338cc2; }
  100% { background-color: #EF7E0B; -moz-box-shadow: 0 0 3px #338cc2; }
}

@-o-keyframes glowing {
  0% { background-color: #EF7E0B; box-shadow: 0 0 3px #338cc2; }
  50% { background-color: #338cc2; box-shadow: 0 0 10px #338cc2; }
  100% { background-color: #EF7E0B; box-shadow: 0 0 3px #338cc2; }
}

@keyframes glowing {
  0% { background-color: #EF7E0B; box-shadow: 0 0 3px #338cc2; }
  50% { background-color: #338cc2; box-shadow: 0 0 10px #338cc2; }
  100% { background-color: #EF7E0B; box-shadow: 0 0 3px #338cc2; }
}

.blink {
  -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite;
  animation: glowing 1500ms infinite;
}
</style>
		  <section id="content" class="header-bg small-header-bg">
		  

                <div class="page page-shop-orders">

                    <div class="pageheader">

                        

                        <div class="page-bar col-md-12 col-xs-12 xs-mb-10">

                            <ul class="page-breadcrumb" style="width:100%;">
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/technical_support"><i class="fa fa-home"></i> Lowry Solutions</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>index.php/welcome/user_profile"></i>Managed Devices</a>
                                </li>

                                
                            
	<li class="content-none" style=" margin-left: 10%;text-align:center;"> <span style=" color:red;font-size: 20px;">* * * &nbsp &nbsp  SIMULATION ONLY &nbsp &nbsp * * *</span></li>						
						
<li data-toggle="collapse" data-target="#notify" class="accordion-toggle content-none float-right mt-7 "> <button class="btn btn-primary btn-xs ml-10 mr-10 blink"  onclick="showDetails1()" >Notify Me When Available</button></li> 
</ul>


 <div style="text-align: center; margin-top:30px; margin-left:5px; margin-right:5px;" class="col-md-12 accordian-body collapse demo" id="notify">
<h1 style="text-transform: uppercase;font-size:20px;"><b>A v a i l a b l e &nbsp &nbsp  S o o n</b></h1>
<h4 class="blink_me" style="font-size: 17px; !IMPORTANT">If you would like to receive updates about our "Managed Devices" module please click on NOTIFY ME button which is next to your email address.</h4> 

<div class="col-md-12 " id="notify">
<div class="form-group col-md-3 col-sm-2  mt-10 col-md-offset-4"><input type="text" placeholder="Enter Email Here" class="form-control" id="user_notyfy_email" name="user_notyfy_email" value="<?php echo $this->session->userdata('email');?>"> </div> 

<div class="col-md-2 mt-10 "> <button value="notifyme" onclick="notifyuser_for_commingsoon('Managed Devices')" class="btn btn-primary float-left " >Notify Me</button> </div> </div> </div>

                    </div> 
                            
                  </div>

</div>
					
				
					<div class="col-sm-12 mt-20">
					<div class="col-sm-6 mt-20">
					<div id="chartContainer" style="height: 300px; width: 100%;"></div>
					</div>
					<div class="col-sm-6 mt-20">
					<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
					</div>
					</div>
					
<div class="col-sm-12 mt-20">
					<div class="col-sm-4 mt-20">
					<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
					</div>
					<div class="col-sm-4 mt-20">
					<div id="chartContainer3" style="height: 300px; width: 100%;"></div>
					</div>
					<div class="col-sm-4 mt-20">
					<div id="chartContainer4" style="height: 300px; width: 100%;"></div>
					</div>
					</div>
					
					
					

<!-- code start-->
<div class="col-sm-12 mt-20">

<table id="contracts-list" class="table table-striped table-hover table-custom dataTable no-footer DTTT_selectable">

      
	  <tbody>
     
  <tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<thead>
  <tr>
        <th align="left">Icon</th>
        <th align="left">Device Name</th>
		<th align="left">User</th>
	  <th align="left">Location</th>
      <th align="left">Operating System</th>
      <th align="left">Serial Number</th> 
      <th align="left">MAC Address</th>
      <th align="left">Last Check-In</th>
      <th align="left">Manufacturer</th>
      <th align="left">Status</th>
      <th align="left">More Details</th>
        <th align="left">Actions</th>
<th align="left">&nbsp;</th>
    </tr>
  </thead>
  
<tr>
        <td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/smartphone.png"></td>
        <td width="10%" align="left">CK71 - Production Floor</td>
		 <td width="5%" align="left">Matt</td>
		  <td width="7%" align="left">Horse Cave, KY</td>
        <td width="12%" align="left">WindowsCE 6.5</td>
        <td width="10%" align="left">033123858</td> 
        <td width="10%" align="left" >02010402227B10</td>
        <td align="left">2016-5-2 3:57 PM</td>
        <td width="13%" align="left">Intermec Technologies</td>
        <td width="4%" align="left"><img style="width:22px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/status-green.png"></td>
        <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo1"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>

<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
      </tr>

 <tr>
   
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo1"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>WindowsCE 6.5</td></tr>
		   <tr><td>Serial Number:</td><td>012315858</td></tr>
        <tr><td>Part Number:</td><td>CK71AA2MN00W4100</td></tr>
        <tr><td>MAC Address:</td><td>02010402227B10</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
       
               	</table>
              
<div class="float-right col-md-6">Location:<br/> <br/> <img src="http://lowrysmartportal.com/assets/images/online.png" alt="Location" style="width:100%;height:400px;" class="img-responsive"> </div>
              </div> </td>
         </td>
  </tr>
</table>
</td>

<tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>

<td width="4%" align="left"> <img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer.png"></td>
        <td width="10%" align="left">CV41 - Cab On Floor 2</td>
		<td width="5%" align="left">Kendal</td>
		  <td width="7%" align="left">Horse Cave, KY</td>
        <td width="12%" align="left">WindowsWM</td>
        <td width="10%" align="left">4357800678</td> 
        <td width="10%" align="left">348505623AE7B</td>
        <td align="left">2016-4-19 4:20 PM</td>
        <td width="13%" align="left">Intermec Technologies</td>
<td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer-red.png"></td>
    <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo2"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>
<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
  </tr>

<tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo2"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>WindowsCE 6.5</td></tr>
        <tr><td>Serial Number:</td><td>4357800678</td></tr>
		 <tr><td>Part Number:</td><td>C41ACA1A2ANA01A</td></tr>
        <tr><td>MAC Address:</td><td>348505623AE7B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
        
       	</table>
<div class="float-right col-md-6">Location:<br/> <br/> <img src="http://lowrysmartportal.com/assets/images/offline.png" alt="Location" style="width:100%;height:400px;" class="img-responsive"> </div>
              </div> 
              
  </div> 

 </td>
  </tr>
</table>
</td>



<tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>

<td width="4%" align="left"> <img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer.png"></td>
        <td width="10%" align="left">CV41 - Cab On Floor 2</td>
		<td width="5%" align="left">Peter</td>
		  <td width="7%" align="left">Horse Cave, KY</td>
        <td width="12%" align="left">WindowsWM</td>
        <td width="10%" align="left">568345672</td> 
        <td width="10%" align="left">238905623AE7B</td>
        <td align="left">2016-4-19 4:20 PM</td>
        <td width="13%" align="left">Intermec Technologies</td>
<td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer-red.png"></td>
    <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo5"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>
<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
  </tr>

<tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo5"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>WindowsCE 6.5</td></tr>
        <tr><td>Serial Number:</td><td>568345672</td></tr>
		 <tr><td>Part Number:</td><td>C41ACA1A2ANA01A</td></tr>
        <tr><td>MAC Address:</td><td>238905623AE7B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
        
       	</table>
<div class="float-right col-md-6">Location:<br/> <br/> <img src="http://lowrysmartportal.com/assets/images/offline.png" alt="Location" style="width:100%;height:400px;" class="img-responsive"> </div>
              </div> 
              
  </div> 

 </td>
  </tr>
</table>
</td>





<tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>

<td width="4%" align="left"> <img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer.png"></td>
        <td width="10%" align="left">MC9200</td>
		<td width="5%" align="left">Robert</td>
		  <td width="7%" align="left">Horse Cave, KY</td>
        <td width="12%" align="left">WindowsCE 6.5</td>
        <td width="10%" align="left">9563256100</td> 
        <td width="10%" align="left">67435678098837B</td>
        <td align="left">2016-4-19 4:20 PM</td>
        <td width="13%" align="left">Motorola</td>
<td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer-red.png"></td>
    <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo6"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>
<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
  </tr>

<tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo6"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>WindowsCE 6.5</td></tr>
        <tr><td>Serial Number:</td><td>9563256100</td></tr>
		 <tr><td>Part Number:</td><td>1PWA4L21003100120W</td></tr>
        <tr><td>MAC Address:</td><td>67435678098837B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
        
       	</table>
<div class="float-right col-md-6">Location:<br/> <br/> <img src="http://lowrysmartportal.com/assets/images/offline.png" alt="Location" style="width:100%;height:400px;" class="img-responsive"> </div>
              </div> 
              
  </div> 

 </td>
  </tr>
</table>
</td>





<tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>

<td width="4%" align="left"> <img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer.png"></td>
        <td width="10%" align="left">MC9200</td>
		<td width="5%" align="left">Laura</td>
		  <td width="7%" align="left">Horse Cave, KY</td>
        <td width="12%" align="left">WindowsCE 6.5</td>
        <td width="10%" align="left">84571005858</td> 
        <td width="10%" align="left">063400623AE7B</td>
        <td align="left">2016-4-19 4:20 PM</td>
        <td width="13%" align="left">Motorola</td>
<td width="4%" align="left"><img style="width:22px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/status-green.png"></td>
    <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo7"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>
<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
  </tr>

<tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo7"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>WindowsCE 6.5</td></tr>
        <tr><td>Serial Number:</td><td>84571005858</td></tr>
		 <tr><td>Part Number:</td><td>1PWA4L21003100120W</td></tr>
        <tr><td>MAC Address:</td><td>063400623AE7B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
        
       	</table>
<div class="float-right col-md-6">Location:<br/> <br/> 


<img src="http://lowrysmartportal.com/assets/images/online.png" alt="Location" style="width:100%;height:400px;" class="img-responsive"> </div>
              </div> 
              
  </div> 

 </td>
  </tr>
</table>
</td>





<tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>

<td width="4%" align="left"> <img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer.png"></td>
        <td width="10%" align="left">Samsung Galaxy S7</td>
		<td width="5%" align="left">Debi</td>
		  <td width="7%" align="left">Horse Cave, KY</td>
        <td width="12%" align="left">Android</td>
        <td width="10%" align="left">007238987</td> 
        <td width="10%" align="left">34612323AE7B</td>
        <td align="left">2016-4-19 4:20 PM</td>
        <td width="13%" align="left">Samsung</td>
<td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer-red.png"></td>
    <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo8"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>
<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
  </tr>

<tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo8"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>Android</td></tr>
        <tr><td>Serial Number:</td><td>007238987</td></tr>
		 <tr><td>Part Number:</td><td>C41ACA1A2ANA01A</td></tr>
        <tr><td>MAC Address:</td><td>34612323AE7B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
        
       	</table>
<div class="float-right col-md-6">Location:<br/> <br/> <img src="http://lowrysmartportal.com/assets/images/offline.png" alt="Location" style="width:100%;height:400px;" class="img-responsive"> </div>
              </div> 
              
  </div> 

 </td>
  </tr>
</table>
</td>





<tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr>

<td width="4%" align="left"> <img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer.png"></td>
        <td width="10%" align="left">Dolphin 70e</td>
		<td width="5%" align="left">Kelli</td>
		  <td width="7%" align="left">Horse Cave, KY</td>
        <td width="12%" align="left">Android</td>
        <td width="10%" align="left">12345678</td> 
        <td width="10%" align="left">00105623AE7B</td>
        <td align="left">2016-4-19 4:20 PM</td>
        <td width="13%" align="left">Honeywell</td>
<td width="4%" align="left"><img style="width:22px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/status-green.png"></td>
    <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo9"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>
<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
  </tr>

<tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo9"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>Android</td></tr>
        <tr><td>Serial Number:</td><td>012315858</td></tr>
		 <tr><td>Part Number:</td><td>C41ACA1A2ANA01A</td></tr>
        <tr><td>MAC Address:</td><td>00104098837B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
        
       	</table>
<div class="float-right col-md-6">Location:<br/> <br/> 
<img src="http://lowrysmartportal.com/assets/images/online.png" alt="Location" style="width:100%;height:400px;" class="img-responsive"> </div>
              </div> 
              
  </div> 

 </td>
  </tr>
</table>
</td>



<tr>


<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    
 <tr>
        <td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/smartphone.png"></td>
        <td width="10%" align="left">Samsung Galaxy S7</td>
		<td width="5%" align="left">William</td>
		  <td width="7%" align="left">Lodi, CA</td>
        <td width="12%" align="left">Android</td>
        <td width="10%" align="left">012315858</td> 
        <td width="10%" align="left">00104098837B</td>
        <td align="left">2016-5-2 3:57 PM</td>
        <td width="13%" align="left">Samsung</td>
        <td width="4%" align="left"><img style="width:22px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/status-green.png"></td>
        <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo3"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>

<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>
</select>
</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
      </tr>

 <tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo3"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>Android</td></tr>
        <tr><td>Serial Number:</td><td>012315858</td></tr>
		 <tr><td>Part Number:</td><td>254E23235W</td></tr>
        <tr><td>MAC Address:</td><td>00104098837B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
       
           	</table>
              
<div class="float-right col-md-6">Location:<br/> <br/> <img src="http://lowrysmartportal.com/assets/images/online.png" alt="Location" style="width:100%;height:400px;" class="img-responsive">
 </div>
   </div> 

  </td>
  </tr>
</table>
</td>
		

<tr>
<td colspan="13">
<table width="100%" border="0" cellspacing="0" cellpadding="0">


		      <tr>
          <td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer.png"></td>
        <td width="10%" align="left">CV41 - Cab On Floor 2</td>
		<td width="5%" align="left">Kendal</td>
		  <td width="7%" align="left">Lodi, CA</td>
        <td width="12%" align="left">WindowsCE 6.5</td>
        <td width="10%" align="left">12345678</td> 
        <td width="10%" align="left">00105623AE7B</td>
        <td  align="left">2016-4-19 4:20 PM</td>
        <td width="13%" align="left">Intermec Technologies</td>
<td width="4%" align="left"><img style="width:35px;height:35px;" alt="Offline Device" src="http://lowrysmartportal.com/assets/images/computer-red.png"></td>
         <td align="left" class="accordion-toggle" data-toggle="collapse" data-target="#demo4"><button class="btn btn-primary btn-xs" onclick="showDetails1()">Details</button></td>
<td align="left"><select name="orders-list_length" aria-controls="orders-list" class="form-control input-sm">
<option value="Wipe">Wipe</option>
<option value="Wipe">Lock</option>
<option value="Wipe">Check-in</option>
<option value="Wipe">Un-enroll</option>
<option value="Wipe">Send Message</option>
<option value="Wipe">Locate</option>

</td>
<td align="left"><button onclick="showDetails1()" class="btn btn-primary btn-xs">Go</button></td>
  </tr>

<tr>
            <td colspan="13" class="hiddenRow">
<div class="accordian-body collapse demo" id="demo4"> 
              <table class="table table-striped location-tab">
                      
        <tr>
           
<div class="accordian-body collapse demo" id="demo4"> 
              <table class="table table-striped location-tab">
                      <tr><th colspan="2" align="center">Information</th></tr>
        <tr><td>Operating System:</td><td>WindowsCE 6.5</td></tr>
        <tr><td>Serial Number:</td><td>012315858</td></tr>
		 <tr><td>Part Number:</td><td>C41ACA1A2ANA01A</td></tr>
        <tr><td>MAC Address:</td><td>00104098837B</td></tr>
        <tr><td>WiFi Network (SSID):</td><td>LowryInternet</td></tr>
        <tr><td>Battery Status:</td><td>54% Remaining</td></tr>
        <tr><td>IP Address:</td><td>192.168.1.2</td></tr>
        <tr><td>Exchange Status:</td><td>This device may access Exchange.</td></tr>
        <tr><td>Phone ID (IMEI/MEID/ESN):</td><td>S103023413450086</td></tr>
        <tr><td>Processor:</td><td>PXA270-520MHz</td></tr>
        <tr><td>Offline:</td><td>0 Day(s), 1 Hour(s)</td></tr>
        <tr><td>Custom Data:</td><td>N/A</td></tr>
       
       	  </table>
              
<div class="float-right col-md-6">Location:<br/> <br/> Not Available </div>
          </div>
          </td>
  </tr>
</table>
</td>

  </div> 
              
              </div> </td></tr>

    </tbody></table>

	
	</div>

<!-- Code End-->

                </div>

 <!--Feedback form-->

<div style="margin-top: -243.5px; top: 50%; display: block; right: -462px;" id="mrova-feedback">
		<div id="mrova-contact-thankyou" style="display: none;">
			Thank you.  We'hv received your feedback.
		</div>
		<div id="mrova-form">
			<form id="mrova-contactform" action="<?php echo base_url()."index.php/welcome/savefeedback"?>" method="post">
				<ul>
<li><h2 class="mt-10">Feedback </h2></li>
					<li>
						<label for="mrova-name">Your Name*</label> <input name="first_name_req" class="required" id="first_name_req" value="<?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname');?>" type="text">
					</li>
					<li>
						<label for="mrova-email">Email*</label> <input name="username_req" class="required" id="username_req" value="<?php echo $this->session->userdata('email')?>" type="text">
					</li>
<li> <label for="mrova-name">Select Type*</label>
<select name="bus_name_req" id="bus_name_req" aria-controls="orders-list" class="form-control input-sm">
<option value="">--Select Type--</option>
<?php 
foreach($feedback as $feedbackdata){
?>
<option><?php echo $feedbackdata->component_name; ?></option>

<?php } ?>
</select>
</li>
					<li>
						<label for="mrova-message">Message*</label>
						<textarea class="required" id="datauser" name="datauser" rows="5" cols="30"></textarea>
					</li>
<li><input type="submit" value="Send" name="feedbacksubmit" id="feedbacksubmit"></li>
				</ul>
				
			</form>
		</div>
		<div style="margin-top: -84px; top: 50%;" id="mrova-img-control"></div>
	</div>

<!-- end feed back -->
                
            </section>
            
            <!--/ CONTENT -->






        </div>
        <!--/ Application Content -->


