<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 *
	 */
	 const SERVICE_URL = "http://192.185.56.80/~mysmartportal/development/orders.xml";
	 
	 
	 
	public function index($msg=null)
	{
			 if($this->session->userdata('subcode') == 1)
			 {

					 if($msg==null)
					 {
					   $data['msg']="";
					 
					 }else if($msg=="logout")
					 {
						 $data['msg']="<h4 style='color:green;'>successfully Logged out</h4>";
					 }else
					 {
					   $data['msg']="<h4 style='color:red;'>Invalid username and password</h4>";
					 
					 }
				$this->load->model('mysmartportal_model');
				$data['users'] = $this->mysmartportal_model->getallusers_sublogin();
				$this->load->view('login_latest',$data);
					 
			 }else
			 {
					 
				redirect(base_url()."index.php/welcome/sub_index");
					 
			 }
			
	}
	
	
	public function sub_index($msg=null)
	{
			 if($msg==null)
			 {
			   $data['msg']="";
			 
			 }else if($msg=="logout")
			 {
			   $data['msg']="<h4 style='color:green;'>successfully Logged out</h4>";
			 }else
			 {
			   $data['msg']="<h4 style='color:red;'>Invalid username and password</h4>";
			 
			 }
		$this->load->view('sub_login',$data);
			
	}
	
	public function subloginckeck()
	{
			 $username = $this->input->post('username');
			 if($username=="48617")
			 {
					$sessionvals1=array(
									'subcode' =>1,
										);													  								  
					$this->session->set_userdata($sessionvals1);
					redirect(base_url()."index.php/welcome/index");
			 }else
			 {
				   $sessionvals1="";
				   $this->session->set_userdata($sessionvals1);
				   redirect(base_url()."index.php/welcome/index");
		     }

	}
	
	public function getpassowrd()
	{
			$email = $this->input->post("email");
			$this->load->model('mysmartportal_model');
			$password = $this->mysmartportal_model->getpassowrd($email);
			echo $password[0]->password;
	}
	
	
	public function logincheck()
	{
				  $username = $this->input->post('username');
				  $password = $this->input->post('password');
				  //load model
				  $this->load->model('mysmartportal_model');
				  
				  $user = $this->mysmartportal_model->checkLoginDetails($username,$password);
				  if($user == "faild")
				  {
					redirect(base_url()."index.php/welcome/index/error");
				  
				  }else{
								$sessionvals=array(
											'userid' => $user[0]->id,
											'username' => @$user[0]->username,
											'firstname' => $user[0]->first_name,
											'lastname' => $user[0]->last_name,
											'email' => $user[0]->email_id,
											'phone_number' => $user[0]->phone_number,
											'role' => $user[0]->role,
											'cust_code' => $user[0]->cus_code,
											'is_logged_in' => 1
												  );
										  $this->session->set_userdata($sessionvals);
										  if($this->session->userdata('role')==1)
											{
											   redirect(base_url()."index.php/welcome/allusers");
											}else
											{
												 redirect(base_url()."index.php/welcome/technical_support");
											
											}
										
				  
				  }
				  

	}
	
	public function logout()
	{
			   $sessionvals=array(
					            'userid' => '',
								'username' => '',
								'firstname' => '',
								'lastname' => '',
								'email' => '',
								'phone_number' => '',
								'role' => '',
								'cust_code' => '',
								'is_logged_in' => 0
				);
				 $this->session->unset_userdata($sessionvals);
				 $sessionvals1=array('subcode' =>0);
				 $this->session->unset_userdata($sessionvals1);
				 @session_destroy();
				 redirect(base_url()."index.php/welcome/index/logout");

	}
	
	public function dashboard()
	{
		if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
		{
		   redirect(base_url()."index.php/welcome/index");
		
		}else{
			    if($this->session->userdata('role')==1)
				{
					 $this->load->view('admin_header');
					 $this->load->view('admin_index');
					 $this->load->view('footer');
				}else
				{
				
				    $this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					for($i=1;$i<13;$i++)
					{
					  $finalusermenu = array('id'=>$i,
											 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
											 );
					  $usermenu1[$i] = $finalusermenu;
					}
					 $data['menu']=$usermenu1;
					 $data['ids']=$usermenu[0]->menu_id;
					 $email1=$this->session->userdata('email');
					 $cust_code= $this->session->userdata('cust_code'); 
					 $rss = new DOMDocument(); 
			         @$rss->load("http://216.234.105.194:8088/Alpha.svc/E21DashBoardData/".$cust_code."/".$email1."/UserType/PermLevel/1-1-2010/1-1-2016/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
			                            $pendingorders = "";	
										 $opencases = "";	
										 $openorders = "";	
										 $shippedorders = ""; 
      				   foreach ($rss->getElementsByTagName('E21DashBoardData') as $node)
									   {	
                                        if (strpos($node->getElementsByTagName('PendingOrders')->item(0)->nodeValue,'Error Number') !== false) {
                                           
                                               }else{									   
									     $pendingorders = $node->getElementsByTagName('PendingOrders')->item(0)->nodeValue;	
										 $opencases = $node->getElementsByTagName('OpenCases')->item(0)->nodeValue;	
										 $openorders = $node->getElementsByTagName('OpenOrders')->item(0)->nodeValue;	
										 $shippedorders = $node->getElementsByTagName('ShippedOrders')->item(0)->nodeValue;	
									}
										 $data['pendingorders'] = $pendingorders;
										 $data['opencases'] = $opencases;
										 $data['openorders'] = $openorders;
										 $data['shippedorders'] = $shippedorders;
									   }
	
					
					 $this->load->view('dashboard_user_latest',$data); 
					
				
				}
			 
			
			 }

	}
	
	public function orders()
	{
	
			  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
					$this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					$orderpageaccess = "";
					for($i=1;$i<13;$i++)
					{
					if($i==2)
					{
					$orderpageaccess = "ok";
					
					}
					  $finalusermenu = array('id'=>$i,
											 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
											 );
					  $usermenu1[$i] = $finalusermenu;
					}
					$data['menu']=$usermenu1;
					$data['ids']=$usermenu[0]->menu_id;
						 if($orderpageaccess=="ok")
						 {
							 $this->load->view('header',$data);
							 $this->load->view('orders');
							 $this->load->view('footer_orders');
				         }else
						 {
						     redirect(base_url()."index.php/welcome/dashboard");
						 
						 }
				 }
				
	}
	
	
	
	public function open_orders()
	{
	
			  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
					$this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					$orderpageaccess = "";
					for($i=1;$i<13;$i++)
					{
						if($i==2)
						{
						    $orderpageaccess = "ok";
						
						}
						  $finalusermenu = array('id'=>$i,
												 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
												 );
						  $usermenu1[$i] = $finalusermenu;
					}
					
					$data['menu']=$usermenu1;
					$data['ids']=$usermenu[0]->menu_id;
                         if($orderpageaccess=="ok")
					     {
							 $this->load->view('header',$data);
							 $this->load->view('open_orders');
							 $this->load->view('open_orders_footer');
				         }else
						 {
						     redirect(base_url()."index.php/welcome/dashboard");
						 
						 }
				 }
				
	}
	
	
	
	public function order_view($order_id=null)
	{
			 if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			 {
			   redirect(base_url()."index.php/welcome/index");
			
			 }else{
			 
			        $this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					for($i=1;$i<13;$i++)
					{
					  $finalusermenu = array('id'=>$i,
											 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
											 );
					  $usermenu1[$i] = $finalusermenu;
					}
					$data['menu']=$usermenu1;
					$data['ids']=$usermenu[0]->menu_id;
					$data['order_id'] = $order_id;
					
				 $this->load->view('header',$data);
				 $this->load->view('order-view');
				 $this->load->view('orderview_footer');
			 }
		
	}
	
	public function orderview_data($order_id)
	{
	
		  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{
				$cust_code= $this->session->userdata('cust_code'); 
				$rss = new DOMDocument(); 
				$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderDetails/".$cust_code."/".$order_id."/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
				//echo print_r($rss);
				                              echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''><OrderDetails>";
										   foreach ($rss->getElementsByTagName('OrderDetails') as $node)
										   {									  
											  echo "<order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><item_no>".$node->getElementsByTagName('item_no')->item(0)->nodeValue."</item_no><part_code>".$node->getElementsByTagName('part_code')->item(0)->nodeValue."</part_code><part_desc>".$node->getElementsByTagName('part_desc')->item(0)->nodeValue."</part_desc><qty>".$node->getElementsByTagName('qty')->item(0)->nodeValue."</qty><uom>".$node->getElementsByTagName('uom')->item(0)->nodeValue."</uom><item_price>".$node->getElementsByTagName('item_price')->item(0)->nodeValue."</item_price><extended_price>".$node->getElementsByTagName('extended_price')->item(0)->nodeValue."</extended_price><item_stat>".$node->getElementsByTagName('item_stat')->item(0)->nodeValue."</item_stat><item_status>".$node->getElementsByTagName('item_status')->item(0)->nodeValue."</item_status><act_ship_date>".$node->getElementsByTagName('act_ship_date')->item(0)->nodeValue."</act_ship_date><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no>";
										   }
											  echo "</OrderDetails></DocumentElement></diffgr:diffgram></DataTable>";
											  
				}
										   
		
		
	}
	
	
	
	public function contact_info($email=null)
	{
	
	$email_final = str_replace('ZZZ', '@', $email);
		  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{
				$email= $this->session->userdata('email'); 
				$rss = new DOMDocument(); 
				
				$rss->load("http://216.234.105.194:8088/Alpha.svc/E21LowryContact/".$email_final."/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
				//echo print_r($rss);
				 echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''><CustomerContact>";
										   foreach ($rss->getElementsByTagName('CustomerContact') as $node)
										   {									  
											  echo "<first_name>".$node->getElementsByTagName('first_name')->item(0)->nodeValue."</first_name><last_name>".$node->getElementsByTagName('last_name')->item(0)->nodeValue."</last_name><phone1>".$node->getElementsByTagName('phone1')->item(0)->nodeValue."</phone1><cust_code>".$node->getElementsByTagName('cust_code')->item(0)->nodeValue."</cust_code><Record_Type>".$node->getElementsByTagName('Record_Type')->item(0)->nodeValue."</Record_Type><address1>".$node->getElementsByTagName('address1')->item(0)->nodeValue."</address1><address2>".$node->getElementsByTagName('address2')->item(0)->nodeValue."</address2><address3>".$node->getElementsByTagName('address3')->item(0)->nodeValue."</address3><city>".$node->getElementsByTagName('city')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('state')->item(0)->nodeValue."</state><zip>".$node->getElementsByTagName('zip')->item(0)->nodeValue."</zip><country>".$node->getElementsByTagName('country')->item(0)->nodeValue."</country><job_code>".$node->getElementsByTagName('job_code')->item(0)->nodeValue."</job_code><internet_addr>".$node->getElementsByTagName('internet_addr')->item(0)->nodeValue."</internet_addr><bus_name>".$node->getElementsByTagName('bus_name')->item(0)->nodeValue."</bus_name>";
										   }
											  echo "</CustomerContact></DocumentElement></diffgr:diffgram></DataTable>";
											  
				}
										   
		
		
	}
	
	
	
	
	public function orderview_header_data($order_id)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$email1 = $this->session->userdata('email');
					$cust_code= $this->session->userdata('cust_code'); 
					$rss = new DOMDocument(); 
					$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderInvoiceHeader/".$cust_code."/".$order_id."/"."%20/".$email1."/UserType/PermLevel/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
					echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''><InvoiceHeader>";
											   foreach ($rss->getElementsByTagName('InvoiceHeader') as $node)
											   {	
													 
												   if (strpos($node->getElementsByTagName('carr_code')->item(0)->nodeValue,'Error Number') !== false) {
															 
													   }else{
												  echo "<carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><rel_numb>".$node->getElementsByTagName('rel_numb')->item(0)->nodeValue."</rel_numb><order_numb>".$node->getElementsByTagName('order_numb')->item(0)->nodeValue."</order_numb><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><post_date>".$node->getElementsByTagName('post_date')->item(0)->nodeValue."</post_date><ship_date>".$node->getElementsByTagName('ship_date')->item(0)->nodeValue."</ship_date><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billadd1>".$node->getElementsByTagName('billadd1')->item(0)->nodeValue."</billadd1><billadd2>".$node->getElementsByTagName('billadd2')->item(0)->nodeValue."</billadd2><billadd3>".$node->getElementsByTagName('billadd3')->item(0)->nodeValue."</billadd3><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><billzip>".$node->getElementsByTagName('billzip')->item(0)->nodeValue."</billzip><billcountry>".$node->getElementsByTagName('billcountry')->item(0)->nodeValue."</billcountry><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipadd1>".$node->getElementsByTagName('shipadd1')->item(0)->nodeValue."</shipadd1><shipadd2>".$node->getElementsByTagName('shipadd2')->item(0)->nodeValue."</shipadd2><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><shipzip>".$node->getElementsByTagName('shipzip')->item(0)->nodeValue."</shipzip><shipcountry>".$node->getElementsByTagName('shipcountry')->item(0)->nodeValue."</shipcountry><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><total_tax>".$node->getElementsByTagName('total_tax')->item(0)->nodeValue."</total_tax><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><shipping_charge>".$node->getElementsByTagName('shipping_charge')->item(0)->nodeValue."</shipping_charge><handling_charge>".$node->getElementsByTagName('handling_charge')->item(0)->nodeValue."</handling_charge><ship_charge>".$node->getElementsByTagName('ship_charge')->item(0)->nodeValue."</ship_charge><order_stat>".$node->getElementsByTagName('order_stat')->item(0)->nodeValue."</order_stat>";
											   }
												
											   }
												  echo "</InvoiceHeader></DocumentElement></diffgr:diffgram></DataTable>";
											   
			
					}
	}
	
	
	
	public function invoiceview_header_data($invoiceid)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$email1 = $this->session->userdata('email');
					$cust_code= $this->session->userdata('cust_code'); 
					$rss = new DOMDocument(); 
					$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderInvoiceHeader/".$cust_code."/%20/".$invoiceid."/".$email1."/UserType/PermLevel/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
					echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''><InvoiceHeader>";
											   foreach ($rss->getElementsByTagName('InvoiceHeader') as $node)
											   {	
													 
												   if (strpos($node->getElementsByTagName('carr_code')->item(0)->nodeValue,'Error Number') !== false) {
															 
													   }else{
												  echo "<carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><rel_numb>".$node->getElementsByTagName('rel_numb')->item(0)->nodeValue."</rel_numb><order_numb>".$node->getElementsByTagName('order_numb')->item(0)->nodeValue."</order_numb><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><post_date>".$node->getElementsByTagName('post_date')->item(0)->nodeValue."</post_date><ship_date>".$node->getElementsByTagName('ship_date')->item(0)->nodeValue."</ship_date><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billadd1>".$node->getElementsByTagName('billadd1')->item(0)->nodeValue."</billadd1><billadd2>".$node->getElementsByTagName('billadd2')->item(0)->nodeValue."</billadd2><billadd3>".$node->getElementsByTagName('billadd3')->item(0)->nodeValue."</billadd3><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><billzip>".$node->getElementsByTagName('billzip')->item(0)->nodeValue."</billzip><billcountry>".$node->getElementsByTagName('billcountry')->item(0)->nodeValue."</billcountry><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipadd1>".$node->getElementsByTagName('shipadd1')->item(0)->nodeValue."</shipadd1><shipadd2>".$node->getElementsByTagName('shipadd2')->item(0)->nodeValue."</shipadd2><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><shipzip>".$node->getElementsByTagName('shipzip')->item(0)->nodeValue."</shipzip><shipcountry>".$node->getElementsByTagName('shipcountry')->item(0)->nodeValue."</shipcountry><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><total_tax>".$node->getElementsByTagName('total_tax')->item(0)->nodeValue."</total_tax><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><shipping_charge>".$node->getElementsByTagName('shipping_charge')->item(0)->nodeValue."</shipping_charge><handling_charge>".$node->getElementsByTagName('handling_charge')->item(0)->nodeValue."</handling_charge><ship_charge>".$node->getElementsByTagName('ship_charge')->item(0)->nodeValue."</ship_charge><order_stat>".$node->getElementsByTagName('order_stat')->item(0)->nodeValue."</order_stat>";
											   }
												
											   }
												  echo "</InvoiceHeader></DocumentElement></diffgr:diffgram></DataTable>";
											   
			
					}
	}
	
	public function admin_dashboard()
	{
	
		   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{		
					  if($this->session->userdata('role')==1)
						{
							 $this->load->view('admin_header');
							 $this->load->view('admin_index');
						}else
						{
							 $this->load->view('header'); 
							 $this->load->view('index');
						
						}
					   $this->load->view('footer'); 
				 }

	}
	
	
	public function all_orders($email=null)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$rss = new DOMDocument(); 
					 $cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					
					$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_number/desc'),
										  );
										  
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
												  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
											   foreach ($rss->getElementsByTagName('Order') as $node)
											   {
											   if (strpos($node->getElementsByTagName('order_number')->item(0)->nodeValue,'Error Number') !== false) {
															 
													   }else{
											  if($email == 1)
											  {
											  if($node->getElementsByTagName('order_status')->item(0)->nodeValue!="Invoiced" AND $node->getElementsByTagName('order_status')->item(0)->nodeValue!="Cancelled"){
											   echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status></Order>";
											   }
												
											  }else{
												  echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no></Order>";
													}									     
												 }
											   }
												  echo "</DocumentElement></diffgr:diffgram></DataTable>";
											   
								  }
								  
					}

	}
	
	
	public function all_orders_to_csv($email=null)
	{
			
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$rss = new DOMDocument(); 
					 $cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					
					$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_number/desc'),
										  );
										$csv_data = "";  
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
											   foreach ($rss->getElementsByTagName('Order') as $node)
											   {
											   if (strpos($node->getElementsByTagName('order_number')->item(0)->nodeValue,'Error Number') !== false) {                                  
												  }else{
											  $csv_data = $csv_data."_".$node->getElementsByTagName('order_number')->item(0)->nodeValue.",".$node->getElementsByTagName('order_date')->item(0)->nodeValue.",".$node->getElementsByTagName('po_number')->item(0)->nodeValue.",".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue.",".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue.",".$node->getElementsByTagName('ship_city')->item(0)->nodeValue.",".$node->getElementsByTagName('ship_state')->item(0)->nodeValue.",".$node->getElementsByTagName('order_status')->item(0)->nodeValue;
												 // echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status></Order>";
												  }
											   }
											   
											   $odersdata = explode("_",$csv_data);
												 
											   $file = fopen("orders.csv","w");

												foreach ($odersdata as $line)
												  {
												  fputcsv($file,explode(',',$line));
												  }

												fclose($file);
												
												
												  header("Content-type: text/csv");
												  header("Content-disposition: attachment; filename = orders.csv");
												  readfile($_SERVER['DOCUMENT_ROOT']."/orders.csv");
								  }
								  
					}

	}
	
	
	public function orders_search_by_dates($from,$to,$order_id,$invoicenumber,$page)
	{
	
	      if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
		  {
		   redirect(base_url()."index.php/welcome/index");
		
		  }else{
			$rss = new DOMDocument(); 
			 $cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetOrderList_DateSearch/'.$cust_code.'/'.$email1.'/'.$from.'/'.$to.'/'.$order_id.'/'.$invoicenumber.'/UserType/PermLevel/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_date/asc'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('Order') as $node)
									   {	
									   
									    if (strpos($node->getElementsByTagName('order_number')->item(0)->nodeValue,'Error Number') !== false) {
                                                     
                                               }else{	
                                             if($page==1)
											 {
											 if($node->getElementsByTagName('order_status')->item(0)->nodeValue!="Invoiced")
											 {
											  echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status></Order>";
                                           
											 }
											 
											 }else{											   
									      echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status></Order>";
                                                   }									     
										 }
									   }
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  }
						  
				}

	}
	public function adduser()
	{
		
		if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{
				$this->load->view('admin_header');
				$this->load->view('adduser');
				$this->load->view('footer'); 
				
				}
				
	}
	
	public function saveuser()
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				 $params = array('first_name'=>$this->input->post('first_name'),
								'last_name'=>$this->input->post('last_name'),
								'email_id'=>$this->input->post('email'),
								'phone_number'=>$this->input->post('phone1'),
								'user_name'=>$this->input->post('username'),
								'password'=>$this->input->post('password'),
								'cus_code'=>$this->input->post('cust_code'),
								'company_name'=>$this->input->post('bus_name'),
                                'address1'=>$this->input->post('address1'),
                                'address2'=>$this->input->post('address2'),
                                'address3'=>$this->input->post('address3'),
                                'city'=>$this->input->post('city'),
                                'state'=>$this->input->post('state'),
                                'zip'=>$this->input->post('zip'),
                                'country'=>$this->input->post('country'),    
								'role'=>$this->input->post('role')   
								 );
								 $this->load->model('Mysmartportal_model');
								 $email = $this->input->post('email');
								 $username = $this->input->post('username');
								 $check = $this->Mysmartportal_model->checkuser($email,$username);
								 if($check>0)
								 {
								 redirect(base_url()."index.php/welcome/allusers/error");
								 }else{
									 
									 $ids= "";
					foreach($this->input->post('check') as $value){
					if($ids=="")
					{
					$ids = $value;
					
					}else{
					$ids= $ids.",".$value;
					}
					}
						 $paramsid = $ids;
									 //$saveid = $this->Mysmartportal_model->saveeditusermenu($paramsid,$uid);
									 
								 $save = $this->Mysmartportal_model->saveuser($params,$paramsid);
								 }
								 
								 $fname = $this->input->post('first_name');
								 //sending email code  start
										 $to = "dhamu.enaganti@gmail.com";
										 $subject = "LowrySmart Portal - New Account Registration";
										 

$message = '<span>Dear '.@$this->input->post('first_name').'</span><p>Welcome to LowrySmart Portal.  We’re very excited to have you as our premier member in our fully customized and secure web portal.  Before you can access the portal, please note that you must first activate it.</p><p>Please click on the link below or copy and paste the link to the address line of your Internet browser to create a password for your profile.</p>
<p>https://Lowrysmartportal/autoActivation?autoActivationCode=ABCD123</p><p>Once your account is activated, please verify that the following information is correct.</p>
										 <html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::Welcome to Lowry Mysmartportal</title>
</head>
<body style="margin:0;padding:0;background-color: #e7eaeb;  color: #616f77;   font-family: "Lato","Arial",sans-serif; font-size: 16px;  font-weight: 400;">
<div  style="background-color: #51445f; transition: right 0.25s cubic-bezier(0.6, 0.04, 0.98, 0.335) 0s, padding-right 0.25s cubic-bezier(0.6, 0.04, 0.98, 0.335) 0s;  z-index: 1001;width:100%;">
<div style="color: #fff; font-size: 32px;  padding: 5px;  text-align: center;">Lowry Smart Portal Registration</div>
</div>
<br/><br/><br/>
<div style="width:500px; margin:0 auto;background:#fff;padding:5px;">
<table width="100%" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="31%" align="right" bgcolor="#E9E9E9">First Name:</td>
    <td width="10%" bgcolor="#E9E9E9">&nbsp;</td>
    <td width="59%" align="left" bgcolor="#E9E9E9">'.@$this->input->post('first_name').'</td>
  </tr>
  <tr>
    <td align="right">Last Name:</td>
    <td>&nbsp;</td>
    <td align="left">'.@$this->input->post('last_name').'</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#E9E9E9">Email:</td>
    <td bgcolor="#E9E9E9">&nbsp;</td>
    <td align="left" bgcolor="#E9E9E9">'.@$this->input->post('email').'</td>
  </tr>
  <tr>
    <td align="right">Phone:</td>
    <td>&nbsp;</td>
    <td align="left">'.$this->input->post('ph_number').'</td>
  </tr>
</table>
</div>
<br/>
<br/>
<div style="width:500px; margin:0 auto;background:none;padding:5px;">
<img src="http://lowrysmartportal.com/assets/logo.png" />
</div>
<div>
<p>If you have any questions, please call us at 810-333-3322
Thank you for registering your card.</p>
<b>**DO NOT REPLY - THIS EMAIL WAS SENT FROM AN UNMONITORED ACCOUNT.</b>
</div>
<footer style="background-color: #51445f;width:100%;height:40px;position:absolute;bottom:0px;color:#fff;text-align:right;font-size:12px;line-height:40px;">Copyright © 2016 lowrysmartportal.com. All rights reserved. </footer>
</body>
</html>';
										 
										 $headers  = 'MIME-Version: 1.0' . "\r\n";
                                         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										 
										 $retval = mail ($to,$subject,$message,$headers);
							 
								 //end email code
												  //$this->Mysmartportal_model->saveuser($params);
								redirect(base_url()."index.php/welcome/allusers/inserted");
				}
			
	}
	
	
	
	public function allusers($msg=null,$count=null)
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
			
					$data['msg']=$msg;
					$data['count']=$count;
					$this->load->model('Mysmartportal_model');
					$data['allusers'] = $this->Mysmartportal_model->getallusers();
					$this->load->view('admin_header');
					$this->load->view('allusers',$data);
					$this->load->view('footer_users'); 
					
					}
			
	}
	

	public function edituser($id=null)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$this->load->model('Mysmartportal_model');
					$data['edituser'] = $this->Mysmartportal_model->getedituser($id);
					$usermenu=$this->Mysmartportal_model->getmenu($id);
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					//echo "TTTTTTTT".@$usermenu[0]->menu_id;
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					for($i=0;$i<sizeof(@$split);$i++)
					{
					  $finalusermenu = array('id'=>$split[$i],
											 'menuname'=>$this->Mysmartportal_model->getmenuname($split[$i])
					  );
					$usermenu1[$i] = $finalusermenu;
					}
					$data['menu']=@$usermenu1;
					$data['allmenu'] = $userallmenu;
					$data['assinedid'] = @$usermenu[0]->menu_id;
					$this->load->view('admin_header');
					$this->load->view('edituser',$data);
					$this->load->view('footer'); 
					
					}
	}	
	
		public function deleteuser($id,$action)
		{
				if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$this->load->model("Mysmartportal_model");
					$this->Mysmartportal_model->deleteuser($id,$action);
				 redirect(base_url()."index.php/welcome/allusers/updated");	
				}
				
				
		}
		
	
	public function saveedituser()
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$uid= $this->input->post('uid');
					$ids= "";
					foreach($this->input->post('check') as $value){
					if($ids=="")
					{
					$ids = $value;
					
					}else{
					$ids= $ids.",".$value;
					}
			   
					 }
			
			
					$params = array('first_name'=>$this->input->post('first_name'),
									'last_name'=>$this->input->post('last_name'),
									'email_id'=>$this->input->post('email'),
									'phone_number'=>$this->input->post('phone1'),
									'cus_code'=>$this->input->post('cust_code'),
									'company_name'=>$this->input->post('bus_name'),
									'password'=>$this->input->post('password'),
									'status'=>$this->input->post('status'),
									'role'=>$this->input->post('role'),
                                    'address1'=>$this->input->post('address1'),
                                    'address2'=>$this->input->post('address2'),
                                    'address3'=>$this->input->post('address3'),
                                    'city'=>$this->input->post('city'),
                                    'state'=>$this->input->post('state'),
                                    'zip'=>$this->input->post('zip'),
                                    'country'=>$this->input->post('country')									
									 );
									 $this->load->model('Mysmartportal_model');
									 $save = $this->Mysmartportal_model->saveedituser($params,$uid);
									 
									 $paramsid = array('menu_id'=>$ids);
									 $saveid = $this->Mysmartportal_model->saveeditusermenu($paramsid,$uid);
									 
					redirect(base_url()."index.php/welcome/allusers/updated");	
					
					}
	}
	
	public function user_profile()
	{
		
		  if($this->session->userdata('is_logged_in') != '')
		  {
			 $this->load->view('profile'); 
		  }else
		  {
		  redirect(base_url()."index.php/welcome/");
		  
		  }
		
		
	}
	
	public function bulkuserupload()
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$this->load->view('admin_header');
					$this->load->view('bulkuserupload');
					$this->load->view('footer'); 
					}
			
			
			
	}
	public function technical_support()
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
				 $this->load->model('Mysmartportal_model');
							$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
							$userallmenu=$this->Mysmartportal_model->getallusermenu();
							$split = explode(",",@$usermenu[0]->menu_id);
							$usermenu1 = array();
							for($i=1;$i<13;$i++)
							{
							  $finalusermenu = array('id'=>$i,
													 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
													 );
							  $usermenu1[$i] = $finalusermenu;
							}
							$data['menu']=$usermenu1;
							$data['ids']=$usermenu[0]->menu_id;
					$this->load->view('header',$data);
					$this->load->view('technical');
					$this->load->view('footer'); 
					}
			
			
	
	}
	
	public function accessdenied()
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
				 $this->load->model('Mysmartportal_model');
							$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
							$userallmenu=$this->Mysmartportal_model->getallusermenu();
							$split = explode(",",@$usermenu[0]->menu_id);
							$usermenu1 = array();
							for($i=1;$i<13;$i++)
							{
							  $finalusermenu = array('id'=>$i,
													 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
													 );
							  $usermenu1[$i] = $finalusermenu;
							}
							$data['menu']=$usermenu1;
							$data['ids']=$usermenu[0]->menu_id;
					$this->load->view('header',$data);
					$this->load->view('access');
					$this->load->view('footer'); 
					}
			
			
			
	}
	
	
	
	
	public function ticket_status()
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
				 $this->load->model('Mysmartportal_model');
							$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
							$userallmenu=$this->Mysmartportal_model->getallusermenu();
							$split = explode(",",@$usermenu[0]->menu_id);
							$usermenu1 = array();
							for($i=1;$i<13;$i++)
							{
							  $finalusermenu = array('id'=>$i,
													 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
													 );
							  $usermenu1[$i] = $finalusermenu;
							}
							$data['menu']=$usermenu1;
							$data['ids']=$usermenu[0]->menu_id;
					$this->load->view('header',$data);
					$this->load->view('ticket_status');
					$this->load->view('footer'); 
					}
			
			
			
	}
	
	public function ticket_status_api()
	{
			    $rss = new DOMDocument(); 
				$rss->load("http://216.234.105.194:8088/Alpha.svc/E21_ServiceDetails/15265523020659/SV765034-1/WT41N0-T2H27ER/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
  
  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
								  				  
							  foreach ($rss->getElementsByTagName('ServiceDetails') as $node)
									   { 
									     echo "<ServiceDetails diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><current_status>".$node->getElementsByTagName('Current_Status')->item(0)->nodeValue."</current_status></ServiceDetails1>";                                                 									    										
									   }
									    echo "</DocumentElement></diffgr:diffgram></DataTable>";    
			
			
	}
	
	function upload_attendance()
	{
	
				$image_name = $_FILES['exc1']['name'];
				$timestamp=rand(1,99999);
                $ext = pathinfo($image_name, PATHINFO_EXTENSION);
				  
				  if($ext!="xls" or $ext!="xlsx")
				  {
				     redirect(base_url()."index.php/welcome/allusers/extension");
				  }
				copy($_FILES['exc1']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/studentdetails/".$image_name);
				
				$this->load->library('excel');
                ini_set("memory_limit", "-1");
				   set_include_path(get_include_path() . PATH_SEPARATOR . "Classes/");
				   include $_SERVER['DOCUMENT_ROOT']."/application/third_party/PHPExcel/IOFactory.php";
				   $inputFileName = $_SERVER['DOCUMENT_ROOT']."/studentdetails/".$image_name;
				 try {
				   $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				  } catch(Exception $e) {
				   die("Error loading file :" . $e->getMessage());
				  }
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				$error_duplicate="";

				for($j=2; $j <= sizeof($sheetData); $j++) 
		          {
						 $email=$sheetData[$j]['C'];
						 $username1=$sheetData[$j]['E'];
						 $this->load->model('Mysmartportal_model');
						 $check = $this->Mysmartportal_model->checkuser($email,$username1);
						  if($check>0 or $sheetData[$j]['H']==1 or $sheetData[$j]['A']=="" or $sheetData[$j]['C']=="" or $sheetData[$j]['D']=="" or $sheetData[$j]['E']=="" or $sheetData[$j]['F']=="" or $sheetData[$j]['G']=="" or $sheetData[$j]['H']==""){
								$errormail = str_replace("@","ZZ",$email);
							   redirect(base_url()."index.php/welcome/allusers/inserted1/duplicated_".$errormail);
															   
							 }

		          }
		
		for($x=2; $x <= sizeof($sheetData); $x++) 
		{
				                              $fname=$sheetData[$x]['A'];
											  $lname=$sheetData[$x]['B'];
											  $email=$sheetData[$x]['C'];
											  $phonenumber=$sheetData[$x]['D'];
											  $username=$sheetData[$x]['E'];
											  $password=$sheetData[$x]['F'];
											  $cus_code=$sheetData[$x]['G'];
											  $role=$sheetData[$x]['H'];
											  $company_name = $sheetData[$x]['I'];
											  $address1 = $sheetData[$x]['J'];
											  $address2 = $sheetData[$x]['K'];
											  $address3 = $sheetData[$x]['L'];
											  $city = $sheetData[$x]['M'];
											  $state = $sheetData[$x]['N'];
											  $zip = $sheetData[$x]['O'];
											  $country = $sheetData[$x]['P'];
											  $menu1 = $sheetData[$x]['Q'];
											  $menu2 = $sheetData[$x]['R'];
											  $menu3 = $sheetData[$x]['S'];
											  $menu4 = $sheetData[$x]['T'];
											  $menu5 = $sheetData[$x]['U'];
											  $menu6 = $sheetData[$x]['V'];
											  $menu7 = $sheetData[$x]['W'];
											  $menu8 = $sheetData[$x]['X'];
											  $menu9 = $sheetData[$x]['Y'];
											  $menu10 = $sheetData[$x]['Z'];
											  $menu11 = $sheetData[$x]['AA'];
											  
											  $ststatus=1;
											  if($role==1 or $email==null)
											  {
											     redirect(base_url()."index.php/welcome/allusers/inserted1/duplicated_error");
											  }else
											  {
											    $this->load->model('Mysmartportal_model');
											    $check = $this->Mysmartportal_model->checkuser($email,$username);
											   
											   if($check>0)
											   {
											     $errormail = str_replace("@","ZZ",$email);
											     redirect(base_url()."index.php/welcome/allusers/inserted1/duplicated_".$errormail);
											   
											   }else{
											 
														$params = array('first_name'=>$fname,
														'last_name'=>$lname,
														'email_id'=>$email,
														'phone_number'=>$phonenumber,
														'user_name'=>$username,
														'password'=>$password,
														'cus_code'=>$cus_code,
														'company_name'=>$company_name,
														'address1'=>$address1,
														'address2'=>$address2,
														'address3'=>$address3,
														'city'=>$city,
														'state'=>$state,
														'zip'=>$zip,
														'country'=>$country, 
														'role'=>$role  
														 );
														 
														 $ids = "";
														 if($menu1 != "" or $menu1!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 1;
															 
															 }else
															 {
															  $ids = $ids.","."1";
															 }
															
														 
														 }
														 
														 
														 if($menu2 != "" or $menu2!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 2;
															 
															 }else
															 {
															  $ids = $ids.","."2";
															 }
															
														 
														 }
														 
														  if($menu3 != "" or $menu3!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 3;
															 
															 }else
															 {
															  $ids = $ids.","."3";
															 }
															
														 
														 }
														 
														 if($menu4 != "" or $menu4!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 4;
															 
															 }else
															 {
															  $ids = $ids.","."4";
															 }
															
														 
														 }
														 
														  if($menu5 != "" or $menu5!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 5;
															 
															 }else
															 {
															  $ids = $ids.","."5";
															 }
															
														 
														 }
														
														if($menu6 != "" or $menu6!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 6;
															 
															 }else
															 {
															  $ids = $ids.","."6";
															 }
															
														 
														 }
														
															if($menu7 != "" or $menu7!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 7;
															 
															 }else
															 {
															  $ids = $ids.","."7";
															 }
															
														 
														 }
															if($menu8 != "" or $menu8!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 8;
															 
															 }else
															 {
															  $ids = $ids.","."8";
															 }
															
														 
														 }
														 if($menu9 != "" or $menu9!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 9;
															 
															 }else
															 {
															  $ids = $ids.","."9";
															 }
															
														 
														 }
															if($menu10 != "" or $menu10!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 10;
															 
															 }else
															 {
															  $ids = $ids.","."10";
															 }
															
														 
														 }
														 if($menu11 != "" or $menu11!=0)
														 {
															 if($ids == "")
															 {
															  $ids = 11;
															 
															 }else
															 {
															  $ids = $ids.","."11";
															 }
															
														 
														 }
																									 
									
														 
														 $this->load->model('Mysmartportal_model');
														 $save = $this->Mysmartportal_model->saveuser($params,$ids);
														 //sending email code  start
																 $to = "dhamu.enaganti@gmail.com,bhaskar@livait.com";
																 $subject = "Lowry Smart Portal Credentials";
																 
																 $message = "Hi, ".$this->input->post('first_name');
																 $message .= "<h1>User Credentials</h1> <br> Username : ".$this->input->post('username')."<br>Password :".$this->input->post('password')."<br>Thanks,<br>Lowry.";
																 
																 $header = "From:lowry@mysmartportal.com \r\n";
															
																 $header .= "MIME-Version: 1.0\r\n";
																 $header .= "Content-type: text/html\r\n";
																 
																 $retval = mail ($to,$subject,$message,$header);
													 
														 //end email code
																		 }
											  }

                    }
				redirect(base_url()."index.php/welcome/allusers/inserted/".$x);
   
	        }
	        
	        
	public function open_invoices()
	{
	
			  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
					$this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					$orderpageaccess = "";
					for($i=1;$i<13;$i++)
					{
					if($i==2)
					{
					$orderpageaccess = "ok";
					
					}
					  $finalusermenu = array('id'=>$i,
											 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
											 );
					  $usermenu1[$i] = $finalusermenu;
					}
					
					$data['menu']=$usermenu1;
					$data['ids']=$usermenu[0]->menu_id;
                     if($orderpageaccess=="ok")
					 {
					 
						 $this->load->view('header',$data);
						 $this->load->view('invoices');
						 $this->load->view('invoice_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/dashboard"); 
					 }
				 }
				
	}
	
	public function all_invoices($email=null)
	{
			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetInvoiceList/'.$cust_code.'/'.$email1.'/UserType/PermLevel/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/invoice_numb/desc'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('Invoice') as $node)
									   {	
									    if(strpos($node->getElementsByTagName('order_number')->item(0)->nodeValue,'Error Number') !== false) {
                                                     
                                        }else{								  
									               echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><entry_type>".$node->getElementsByTagName('entry_type')->item(0)->nodeValue."</entry_type><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></Invoice>";
			}						    }
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  }

	}
	
	public function all_invoices_tocsv($email=null)
	{
			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetInvoiceList/'.$cust_code.'/'.$email1.'/UserType/PermLevel/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/invoice_numb/desc'),
								  );
							$csv_data = "Invoice Number,Invoice Date,Amount,Due Date,Carrier";	  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      //echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('Invoice') as $node)
									   {	
									   							  
									               if($csv_data=="")
												   {
												    $csv_data = $node->getElementsByTagName('invoice_numb')->item(0)->nodeValue.",".$node->getElementsByTagName('inv_date')->item(0)->nodeValue.",".$node->getElementsByTagName('totalamount')->item(0)->nodeValue.",".$node->getElementsByTagName('due_date')->item(0)->nodeValue.",".$node->getElementsByTagName('carr_code')->item(0)->nodeValue;
												   }else{
												   $csv_data = $csv_data."_".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue.",".$node->getElementsByTagName('inv_date')->item(0)->nodeValue.",".$node->getElementsByTagName('totalamount')->item(0)->nodeValue.",".$node->getElementsByTagName('due_date')->item(0)->nodeValue.",".$node->getElementsByTagName('carr_code')->item(0)->nodeValue;
                                                    }												 
												 // echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><entry_type>".$node->getElementsByTagName('entry_type')->item(0)->nodeValue."</entry_type><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date></Invoice>";
			}						 
							

							//echo "</DocumentElement></diffgr:diffgram></DataTable>";
							//echo $csv_data;
							  $odersdata = explode("_",$csv_data);
												// echo $odersdata;
											   $file = fopen("invoice.csv","w");

												foreach ($odersdata as $line)
												  {
												  fputcsv($file,explode(',',$line));
												  }

												fclose($file);
												
												
												  header("Content-type: text/csv");
												  header("Content-disposition: attachment; filename = invoice.csv");
												  readfile($_SERVER['DOCUMENT_ROOT']."/invoice.csv");
									   
						  }
						  
						  
						 

	}
	
	public function invoice_search($from,$to,$invoice_number)
	{
			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetInvoiceList_Search/10729-000/jdownes@cmsprintsolutions.com/'.$from.'/'.$to.'/'.$invoice_number.'/UserType/PermLevel/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/invoice_numb/desc'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('Invoice') as $node)
									   {	
									    if(strpos($node->getElementsByTagName('carr_code')->item(0)->nodeValue,'Error Number') !== false) {
                                                     
                                        }else{								  
									               echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><entry_type>".$node->getElementsByTagName('entry_type')->item(0)->nodeValue."</entry_type><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date></Invoice>";
			}						    }
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  }

	}
  public function invoice_view($order_id=null)
  {
		  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
					 {
					   redirect(base_url()."index.php/welcome/index");
					
					 }else{
					 
							$this->load->model('Mysmartportal_model');
							$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
							$userallmenu=$this->Mysmartportal_model->getallusermenu();
							$split = explode(",",@$usermenu[0]->menu_id);
							$usermenu1 = array();
							for($i=1;$i<13;$i++)
							{
							  $finalusermenu = array('id'=>$i,
													 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
													 );
							  $usermenu1[$i] = $finalusermenu;
							}
							$data['menu']=$usermenu1;
							$data['ids']=$usermenu[0]->menu_id;
							$data['invoicenumber'] = $order_id;
							
						 $this->load->view('header',$data);
						 $this->load->view('invoice_view');
						 $this->load->view('invoice_view_footer');
					 }
  }
  
  
  public function pdf()
  {
    $this->load->helper('pdf_helper');
    $data['tittle'] = "PDF";
    $this->load->view('pdfreport', $data);
  }
  
  
  public function servicecontracts()
  {
	  			  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
					$this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					$orderpageaccess = "";
					for($i=1;$i<13;$i++)
					{
					if($i==2)
					{
					$orderpageaccess = "ok";
					
					}
					  $finalusermenu = array('id'=>$i,
											 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
											 );
					  $usermenu1[$i] = $finalusermenu;
					}
					
					$data['menu']=$usermenu1;
					$data['ids']=$usermenu[0]->menu_id;
                     if($orderpageaccess=="ok")
					 {
					 
						 $this->load->view('header',$data);
						 $this->load->view('service_contracts');
						 $this->load->view('service_contracts_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
	  
	  
	  
	  
	  
  }
  
  public function all_servicecontracts()
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
	  $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractList/'.$cust_code.'/ /100/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('ServiceContractList') as $node)
									   {	
										echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
		}                           }						    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  

	}  
  }
  
  
  public function resetpassword_link($email1)
  {
	  $ran_val = rand(9999999,99999999999);
	  
	  str_replace("zzz","@",$email1);
	  $email = $email;
	  $this->load->model('mysmartportal_model');
	  $params= array('veryfy_code'=>$ran_val);
	  $update = $this->mysmartportal_model->updatevyryfycode($params,$email);  
	  
	   //sending email code  start
										 $to = "dhamu.enaganti@gmail.com";
										 $subject = "LowrySmart Portal – Password Recovery";
										 

$message = '<p>A password reset was requested for your account.  If you did not authorize this, you may simply ignore this email.</p><br>

<p>To continue with your password reset, please click on the link below or copy and paste the link to the address line of your Internet browser</p><br>

<p>  http://lowrysmartportal.com/index.php/welcome/resetpassowrd/'.$ran_val.' </p>
<p>If you have any questions, please call us at 810-333-3322
Thank you for registering your card.</p>';
										 
										 $headers  = 'MIME-Version: 1.0' . "\r\n";
                                         $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
										 
										 $retval = mail ($to,$subject,$message,$headers);
							 
								 //end email code
								
	  
  }
  
  public function resetpassowrd($code)
  {
	  $data['veryfycode'] = $code;
	   $this->load->view("password_header"); 
	  $this->load->view("resetpassword",$data); 
	  $this->load->view("footer"); 
	  
  }
  public function saveresetpassword()
  {
	  $params = array('passowrd'=>$this->input->post('password'));
	  //$email = $this->session->userdata('email');
	  $code = $this->inpput->post('veryfy');
	  
	$this->load->model('Mysmartportal_model');
	$sve = $this->Mysmartportal_model->savepassword($params,$code);
	
	  
	  
	  
  }
  
 public function SalesPersonDetails()
  {
	 if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{ 
				$salesdata = "";
	  $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/SalesPersonDetails/'.$cust_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
			array('name' => 'api1', 'url' => 'http://216.234.105.194:8088/Alpha.svc/CSRDetails/14470-000/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213')
								  );
								  
								   echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''><salesrep>";
	
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									     								   foreach ($rss->getElementsByTagName('SalesPersonDetails') as $node)
									   {	
										$salesdata = $salesdata."<repid>".$node->getElementsByTagName('RepId')->item(0)->nodeValue."</repid><repname>".$node->getElementsByTagName('RepName')->item(0)->nodeValue."</repname><repphone>".$node->getElementsByTagName('RepPhone')->item(0)->nodeValue."</repphone><repfax>".$node->getElementsByTagName('RepFax')->item(0)->nodeValue."</repfax><repemail>".$node->getElementsByTagName('RepEmail')->item(0)->nodeValue."</repemail><region_desc>".$node->getElementsByTagName('region_desc')->item(0)->nodeValue."</region_desc><branch_desc>".$node->getElementsByTagName('branch_desc')->item(0)->nodeValue."</branch_desc><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error>";
										
										} 
										
							  	        foreach ($rss->getElementsByTagName('CSRDetails') as $node)
									    {	
										$salesdata = $salesdata."<csr_fname>".$node->getElementsByTagName('CSR_Fname')->item(0)->nodeValue."</csr_fname><csr_lname>".$node->getElementsByTagName('CSR_Lname')->item(0)->nodeValue."</csr_lname><csr_email>".$node->getElementsByTagName('CSR_Email')->item(0)->nodeValue."</csr_email><csr_phone>".$node->getElementsByTagName('CSR_Phone')->item(0)->nodeValue."</csr_phone>";
										} 

										
										}						    
			   
						  }
echo $salesdata;
								  echo "</salesrep></diffgr:diffgram></DataTable>";
								
  }  
  
  
  public function getopenticket_details($tick_number=null)
  {
  
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
						{
						   redirect(base_url()."index.php/welcome/index");
						
						}else{  
			  $rss = new DOMDocument(); 
					$cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/QueryTicketInfo/'.$tick_number.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
										  );
										  
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
												  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
											   foreach ($rss->getElementsByTagName('QueryTicketInfo') as $node)
											   {	//echo "test";
												echo "<queryticketinfo diffgr:id='queryticketinfo' msdata:rowOrder='0' diffgr:hasChanges='inserted'><opened>".$node->getElementsByTagName('Opened')->item(0)->nodeValue."</opened><lastaction>".$node->getElementsByTagName('LastAction')->item(0)->nodeValue."</lastaction><enteredby>".$node->getElementsByTagName('Enteredby')->item(0)->nodeValue."</enteredby><ticketnumber>".$node->getElementsByTagName('TicketNumber')->item(0)->nodeValue."</ticketnumber><problemdescription>".$node->getElementsByTagName('ProblemDescription')->item(0)->nodeValue."</problemdescription><currentstatus>".$node->getElementsByTagName('CurrentStatus')->item(0)->nodeValue."</currentstatus><customername>".$node->getElementsByTagName('CustomerName')->item(0)->nodeValue."</customername><calledinby>".$node->getElementsByTagName('CalledInBy')->item(0)->nodeValue."</calledinby><email>".$node->getElementsByTagName('Email')->item(0)->nodeValue."</email><serviceagent>".$node->getElementsByTagName('ServiceAgent')->item(0)->nodeValue."</serviceagent><partnumber>".$node->getElementsByTagName('PartNumber')->item(0)->nodeValue."</partnumber><partdescription>".$node->getElementsByTagName('PartDescription')->item(0)->nodeValue."</partdescription><serialnumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</serialnumber><city>".$node->getElementsByTagName('City')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('State')->item(0)->nodeValue."</state><lastactivity>".$node->getElementsByTagName('LastActivity')->item(0)->nodeValue."</lastactivity><do>".$node->getElementsByTagName('DO')->item(0)->nodeValue."</do><do>".$node->getElementsByTagName('DO')->item(0)->nodeValue."</do></queryticketinfo>";
				                               }                              
				                   }						    
												  echo "</DocumentElement></diffgr:diffgram>";
											   
								  

			                  } 
		  
		  
		  
  
  }
  
  
  
  public function assetinventory()
  {
  
  
	  			  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
					$this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					$userallmenu=$this->Mysmartportal_model->getallusermenu();
					$split = explode(",",@$usermenu[0]->menu_id);
					$usermenu1 = array();
					$orderpageaccess = "";
					for($i=1;$i<13;$i++)
					{
					if($i==2)
					{
					$orderpageaccess = "ok";
					
					}
					  $finalusermenu = array('id'=>$i,
											 'menuname'=>$this->Mysmartportal_model->getmenuname($i)
											 );
					  $usermenu1[$i] = $finalusermenu;
					}
					
					$data['menu']=$usermenu1;
					$data['ids']=$usermenu[0]->menu_id;
                     if($orderpageaccess=="ok")
					 {
					 
						 $this->load->view('header',$data);
						 $this->load->view('assetinventory');
						 $this->load->view('assetinventory_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  
  }
  
    public function all_assets()
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
	  $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://192.168.0.110:8101/Alpha.svc/AssetsPage/'.$cust_code.'/50/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('AssetsPage') as $node)
									   {	
										echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Part_Number')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('Part_Description')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('Type')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('Start_Date')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('End_date')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</Contract_Status><Options>".$node->getElementsByTagName('Options')->item(0)->nodeValue."</Options><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
		}                           }						    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  

	}  
  }

}