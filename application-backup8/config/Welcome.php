<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 *
	 */
	 const SERVICE_URL = "http://192.185.56.80/~mysmartportal/development/orders.xml";
	 
	 
	 /**
	 * Login Page View.
	 *
	 *
	 */
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
	
	 /**
	 * Sub Login Page View.
	 *
	 *
	 */
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
	 /**
	 * Sub Login check.
	 * input params@
	 *  @username
	 */
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
	 /**
	 * Sub Login check.
	 * input params@
	 *  @username
	 */
	public function getpassowrd()
	{
			$email = $this->input->post("email");
			$this->load->model('mysmartportal_model');
			$password = $this->mysmartportal_model->getpassowrd($email);
			echo $password[0]->password;
	}
	
	/**
	 * Login check.
	 * input params@
	 *  @username
	 *  @password
	 */
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
				                              echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
										   foreach ($rss->getElementsByTagName('OrderDetails') as $node)
										   {									  
											  echo "<OrderDetails><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><item_no>".$node->getElementsByTagName('item_no')->item(0)->nodeValue."</item_no><part_code>".$node->getElementsByTagName('part_code')->item(0)->nodeValue."</part_code><part_desc>".$node->getElementsByTagName('part_desc')->item(0)->nodeValue."</part_desc><qty>".$node->getElementsByTagName('qty')->item(0)->nodeValue."</qty><uom>".$node->getElementsByTagName('uom')->item(0)->nodeValue."</uom><item_price>".$node->getElementsByTagName('item_price')->item(0)->nodeValue."</item_price><extended_price>".$node->getElementsByTagName('extended_price')->item(0)->nodeValue."</extended_price><item_stat>".$node->getElementsByTagName('item_stat')->item(0)->nodeValue."</item_stat><item_status>".$node->getElementsByTagName('item_status')->item(0)->nodeValue."</item_status><act_ship_date>".$node->getElementsByTagName('act_ship_date')->item(0)->nodeValue."</act_ship_date><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no><totshipqty>".$node->getElementsByTagName('TotShipQty')->item(0)->nodeValue."</totshipqty><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></OrderDetails>";
										   }
											  echo "</DocumentElement></diffgr:diffgram></DataTable>";
											  
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
												  echo "<carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><rel_numb>".$node->getElementsByTagName('rel_numb')->item(0)->nodeValue."</rel_numb><order_numb>".$node->getElementsByTagName('order_numb')->item(0)->nodeValue."</order_numb><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><post_date>".$node->getElementsByTagName('post_date')->item(0)->nodeValue."</post_date><ship_date>".$node->getElementsByTagName('ship_date')->item(0)->nodeValue."</ship_date><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billadd1>".$node->getElementsByTagName('billadd1')->item(0)->nodeValue."</billadd1><billadd2>".$node->getElementsByTagName('billadd2')->item(0)->nodeValue."</billadd2><billadd3>".$node->getElementsByTagName('billadd3')->item(0)->nodeValue."</billadd3><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><billzip>".$node->getElementsByTagName('billzip')->item(0)->nodeValue."</billzip><billcountry>".$node->getElementsByTagName('billcountry')->item(0)->nodeValue."</billcountry><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipadd1>".$node->getElementsByTagName('shipadd1')->item(0)->nodeValue."</shipadd1><shipadd2>".$node->getElementsByTagName('shipadd2')->item(0)->nodeValue."</shipadd2><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><shipzip>".$node->getElementsByTagName('shipzip')->item(0)->nodeValue."</shipzip><shipcountry>".$node->getElementsByTagName('shipcountry')->item(0)->nodeValue."</shipcountry><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><total_tax>".$node->getElementsByTagName('total_tax')->item(0)->nodeValue."</total_tax><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><shipping_charge>".$node->getElementsByTagName('shipping_charge')->item(0)->nodeValue."</shipping_charge><handling_charge>".$node->getElementsByTagName('handling_charge')->item(0)->nodeValue."</handling_charge><ship_charge>".$node->getElementsByTagName('ship_charge')->item(0)->nodeValue."</ship_charge><order_stat>".$node->getElementsByTagName('order_stat')->item(0)->nodeValue."</order_stat><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error><pay_type>".$node->getElementsByTagName('pay_type')->item(0)->nodeValue."</pay_type>";
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
												  echo "<carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><rel_numb>".$node->getElementsByTagName('rel_numb')->item(0)->nodeValue."</rel_numb><order_numb>".$node->getElementsByTagName('order_numb')->item(0)->nodeValue."</order_numb><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><post_date>".$node->getElementsByTagName('post_date')->item(0)->nodeValue."</post_date><ship_date>".$node->getElementsByTagName('ship_date')->item(0)->nodeValue."</ship_date><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billadd1>".$node->getElementsByTagName('billadd1')->item(0)->nodeValue."</billadd1><billadd2>".$node->getElementsByTagName('billadd2')->item(0)->nodeValue."</billadd2><billadd3>".$node->getElementsByTagName('billadd3')->item(0)->nodeValue."</billadd3><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><billzip>".$node->getElementsByTagName('billzip')->item(0)->nodeValue."</billzip><billcountry>".$node->getElementsByTagName('billcountry')->item(0)->nodeValue."</billcountry><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipadd1>".$node->getElementsByTagName('shipadd1')->item(0)->nodeValue."</shipadd1><shipadd2>".$node->getElementsByTagName('shipadd2')->item(0)->nodeValue."</shipadd2><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><shipzip>".$node->getElementsByTagName('shipzip')->item(0)->nodeValue."</shipzip><shipcountry>".$node->getElementsByTagName('shipcountry')->item(0)->nodeValue."</shipcountry><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><total_tax>".$node->getElementsByTagName('total_tax')->item(0)->nodeValue."</total_tax><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><shipping_charge>".$node->getElementsByTagName('shipping_charge')->item(0)->nodeValue."</shipping_charge><handling_charge>".$node->getElementsByTagName('handling_charge')->item(0)->nodeValue."</handling_charge><ship_charge>".$node->getElementsByTagName('ship_charge')->item(0)->nodeValue."</ship_charge><order_stat>".$node->getElementsByTagName('order_stat')->item(0)->nodeValue."</order_stat><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error><pay_type>".$node->getElementsByTagName('pay_type')->item(0)->nodeValue."</pay_type>";
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
	
	
	public function all_orders($email=null,$count=25)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$rss = new DOMDocument(); 
					 $cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					if($email == 1)
					{
						$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOpenOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/'.$count.'/1/%20/%20/$20/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_number/asc'),
										  );
					
					}else{
					$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/'.$count.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_date/asc'),
										  );
										  }
										  
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
																   echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no></Order>";
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
					
						if($email == 1)
					{
					$csv_data = "Order Number,Order Date,Customer PO,Tracking Number,Arrival Date,Order Amount,Shipping City/State";  
					$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOpenOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/50/1/%20/%20/$20/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_number/asc'),
										  );
					
					}else{
					$csv_data = "Order Number,Order Date,Customer PO,Invoice,Order Amount,Shipping City,State,Status";  
					$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/1000/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_date/asc'),
										  );
										  }
										  
										
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
											   foreach ($rss->getElementsByTagName('Order') as $node)
											   {
											   if (strpos($node->getElementsByTagName('order_number')->item(0)->nodeValue,'Error Number') !== false) {                                  
												  }else{
												  
												   if($email == 1)
													  {
															  if($node->getElementsByTagName('order_status')->item(0)->nodeValue!="Invoiced" AND $node->getElementsByTagName('order_status')->item(0)->nodeValue!="Cancelled"){
													
											                    $csv_data = $csv_data."_".$node->getElementsByTagName('order_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('order_date')->item(0)->nodeValue).",".$node->getElementsByTagName('po_number')->item(0)->nodeValue.",".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('order_date')->item(0)->nodeValue).",".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue.",".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."/".$node->getElementsByTagName('ship_state')->item(0)->nodeValue;
												                }
																}else
																{
																  $csv_data = $csv_data."_".$node->getElementsByTagName('order_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('order_date')->item(0)->nodeValue).",".$node->getElementsByTagName('po_number')->item(0)->nodeValue.",".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue.",".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue.",".$node->getElementsByTagName('ship_city')->item(0)->nodeValue.",".$node->getElementsByTagName('ship_state')->item(0)->nodeValue.",".$node->getElementsByTagName('order_status')->item(0)->nodeValue;
												               
																}
																
													  

												// echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status></Order>";
												  }
											   }
											   
											   $odersdata = explode("_",$csv_data);
												
                                                if($email == 1)
												{
                                                  $file = fopen("Open_Orders.csv","w");												
										
                                                 }else
												 {
												 	   $file = fopen("Orders_and_Invoices.csv","w");
												 
												 }
												foreach ($odersdata as $line)
												  {
												    fputcsv($file,explode(',',$line));
												  }

												fclose($file);
												
												 if($email == 1)
												{
												  header("Content-type: text/csv");
												  header("Content-disposition: attachment; filename = Open_Orders.csv");
												  readfile($_SERVER['DOCUMENT_ROOT']."/Open_Orders.csv");
												  }else
												  {
												   header("Content-type: text/csv");
												  header("Content-disposition: attachment; filename = Orders_and_Invoices.csv");
												  readfile($_SERVER['DOCUMENT_ROOT']."/Orders_and_Invoices.csv");
												  
												  }
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
			
				if($page == 1)
					{
					$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOpenOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/25/1/'.$order_id.'/'.$from.'/'.$to.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_number/asc'),
										  );
					
					}else{
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetOrderList_DateSearch/'.$cust_code.'/'.$email1.'/'.$from.'/'.$to.'/'.$order_id.'/'.$invoicenumber.'/UserType/PermLevel/25/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_date/asc'),
								  );
								  }
								  
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
				$this->load->view('admin_footer'); 
				
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
						 $paramsid = "1,".$ids;
									 
								        $save = $this->Mysmartportal_model->saveuser($params,$paramsid);
										
										 $email1 = $email;
									  $ran_val = rand(9999999,99999999999);	  
									  $params1= array('veryfy_code'=>$ran_val,
	                                                 'updated_date'=>date("y-m-d h:s"));
	                                    $update = $this->Mysmartportal_model->updatevyryfycode($params1,$email1); 
									 
								 }
								 
								 $fname = $this->input->post('first_name');
								 //sending email code  start
										 $to = "bhaskar@livait.com,nikd@lowrysolutions.com,rami@lowrysolutions.com,dhamodhar.enaganti@livait.net,uzwal.chaganti@livait.com,tomha@lowrysolutions.com";
										 $subject = "LowrySmart Portal - New Account Registration";
										 

$message = '<span>Dear '.@$this->input->post('first_name').'</span><p>Welcome to LowrySmart Portal.  We’re very excited to have you as our premier member in our fully customized and secure web portal.  Before you can access the portal, please note that you must first activate it.</p><p>Please click on the link below or copy and paste the link to the address line of your Internet browser to create a password for your profile.</p>
<p>  http://lowrysmartportal.com/index.php/welcome/resetpassowrd/'.$ran_val.' </p>
<p></p><p>Once your account is activated, please verify that the following information is correct.</p>
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

</table>
</div>
<br/>
<br/>
<div style="width:500px; margin:0 auto;background:none;padding:5px;">
<img src="http://lowrysmartportal.com/assets/logo.png" />
</div>
<div>
<p>If you have any questions, please call us at 810-333-3322
Thank you for registering with Lowrysmartportal.</p>
<b>**DO NOT REPLY - THIS EMAIL WAS SENT FROM AN UNMONITORED ACCOUNT.</b>
</div>
<footer style="background-color: #51445f;width:100%;height:40px;position:absolute;bottom:0px;color:#fff;text-align:right;font-size:12px;line-height:40px;">Copyright © 2016 lowrysmartportal.com. All rights reserved. </footer>
</body>
</html>';
										 
										 $headers  = 'MIME-Version: 1.0' . "\r\n";
                                         $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
										 
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
					$this->load->view('admin_footer'); 
					
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
					$count_of_modules =  sizeof($this->input->post('check'));
					if($count_of_modules > 0){
							foreach(@$this->input->post('check') as $value){
									
									if($ids=="")
									{
									$ids = $value;
									
									}else{
									$ids= $ids.",".$value;
									}
					   
							 }
			
			             }else
						 {
						 $ids = 1;
						 
						 }
					$params = array('first_name'=>$this->input->post('first_name'),
									'last_name'=>$this->input->post('last_name'),
									'email_id'=>$this->input->post('email'),
									'user_name'=>$this->input->post('email'),
									'phone_number'=>$this->input->post('phone1'),
									'cus_code'=>$this->input->post('cust_code'),
									'company_name'=>$this->input->post('bus_name'),
									
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
					$this->load->view('userprofile');
					$this->load->view('footer'); 
					}
		
	}

        public function edit_profile()
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
					$this->load->view('edituserprofile');
					$this->load->view('footer'); 
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
	public function technical_support($msg="")
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
									   
									   
									   
									   
									   $ticket_info = "";
									        $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/CheckServiceTicket_Email/'.$email1.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									  foreach ($rss->getElementsByTagName('CheckServiceTicket') as $node)
									   {
                                       
										$ticket_info = $ticket_info.",".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue;
		                               
																			   
										 }                          					    
									    
									    }	

								$data['ticket_info']= $ticket_info;	   
								
								
								$data['msg'] = $msg;
	
					$this->load->view('header',$data);
					$this->load->view('technical',$data);
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
			
				  if($ext!="xls" AND $ext!="xlsx")
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
					
						 $this->load->model('Mysmartportal_model');
						 $check = $this->Mysmartportal_model->checkuser($email,$email);
						
						
						  if(($check>0) or ($sheetData[$j]['F']==1) ){
								$errormail = str_replace("@","ZZ",$email);
								
							   redirect(base_url()."index.php/welcome/allusers/inserted1/duplicated_".$errormail);
															   
							 }
							
							 if($sheetData[$j]['A']==null AND $sheetData[$j]['C']==null AND $sheetData[$j]['D']==null AND $sheetData[$j]['E']==null AND $sheetData[$j]['F']==null AND $sheetData[$j]['G']==null AND $sheetData[$j]['H']==null AND $sheetData[$j]['I']==null AND $sheetData[$j]['J']==null AND $sheetData[$j]['K']==null AND $sheetData[$j]['L']==null AND $sheetData[$j]['M']==null AND $sheetData[$j]['N']==null AND $sheetData[$j]['O']==null AND $sheetData[$j]['P']==null AND $sheetData[$j]['Q']==null AND $sheetData[$j]['R']==null)
							 {
							  redirect(base_url()."index.php/welcome/allusers/error");
							 
							 
							 
							 }

		          }
		
		
		if(sizeof($sheetData) < 2)
		{
		 redirect(base_url()."index.php/welcome/allusers/nullvalues");
		
		}
		for($x=2; $x <= sizeof($sheetData); $x++) 
		{
				                              $fname=$sheetData[$x]['A'];
											  $lname=$sheetData[$x]['B'];
											  $email=$sheetData[$x]['C'];
											 // $phonenumber=$sheetData[$x]['D'];
											 // $username=$sheetData[$x]['E'];
											  $password=$sheetData[$x]['D'];
                                                                                          $company_name = $sheetData[$x]['E'];     
											  $cus_code=$sheetData[$x]['F'];
											  $role=$sheetData[$x]['G'];
											  /*
											  $address1 = $sheetData[$x]['J'];
											  $address2 = $sheetData[$x]['K'];
											  $address3 = $sheetData[$x]['L'];
											  $city = $sheetData[$x]['M'];
											  $state = $sheetData[$x]['N'];
											  $zip = $sheetData[$x]['O'];
											  $country = $sheetData[$x]['P'];*/
											  $menu1 = $sheetData[$x]['H'];
											  $menu2 = $sheetData[$x]['I'];
											  $menu3 = $sheetData[$x]['J'];
											  $menu4 = $sheetData[$x]['K'];
											  $menu5 = $sheetData[$x]['L'];
											  $menu6 = $sheetData[$x]['M'];
											  $menu7 = $sheetData[$x]['N'];
											  $menu8 = $sheetData[$x]['O'];
											  $menu9 = $sheetData[$x]['P'];
											  $menu10 = $sheetData[$x]['Q'];
											  $menu11 = $sheetData[$x]['R'];
											  
											  $ststatus=1;
											 
											  if($role==1 or $email==null or $sheetData[$x]['A']=="" or $sheetData[$x]['C']=="")
											  {
											     redirect(base_url()."index.php/welcome/allusers/inserted1/duplicated_error");
											  }else
											  {
											    $this->load->model('Mysmartportal_model');
											    $check = $this->Mysmartportal_model->checkuser($email,$email);
											   
											   if($check>0)
											   {
											     $errormail = str_replace("@","ZZ",$email);
											     redirect(base_url()."index.php/welcome/allusers/inserted1/duplicated_".$errormail);
											   
											   }else{
											 
														$params = array('first_name'=>$fname,
														'last_name'=>$lname,
														'email_id'=>$email,
														//'phone_number'=>$phonenumber,
														'user_name'=>$email,
														'password'=>$password,
														'cus_code'=>$cus_code,
														'company_name'=>$company_name,
														//'address1'=>$address1,
														//'address2'=>$address2,
														//'address3'=>$address3,
														//'city'=>$city,
														//'state'=>$state,
														//'zip'=>$zip,
														//'country'=>$country, 
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
										 $to = "bhaskar@livait.com,nikd@lowrysolutions.com,rami@lowrysolutions.com,dhamodhar.enaganti@livait.net,uzwal.chaganti@livait.com,tomha@lowrysolutions.com";
										 $subject = "LowrySmart Portal - New Account Registration";
										 

$message = '<span>Dear '.@$fname.'</span><p>Welcome to LowrySmart Portal.  We’re very excited to have you as our premier member in our fully customized and secure web portal.  Before you can access the portal, please note that you must first activate it.</p><p>Please click on the link below or copy and paste the link to the address line of your Internet browser to create a password for your profile.</p>
<p></p><p>Once your account is activated, please verify that the following information is correct.</p>
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
    <td width="59%" align="left" bgcolor="#E9E9E9">'.@$fname.'</td>
  </tr>
  <tr>
    <td align="right">Last Name:</td>
    <td>&nbsp;</td>
    <td align="left">'.@$lname.'</td>
  </tr>
  <tr>
    <td align="right" bgcolor="#E9E9E9">Email:</td>
    <td bgcolor="#E9E9E9">&nbsp;</td>
    <td align="left" bgcolor="#E9E9E9">'.@$email.'</td>
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
                                         $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
										 
										 $retval = mail ($to,$subject,$message,$headers);
							 
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
	
	public function all_invoices($count=25)
	{
			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetInvoiceList/'.$cust_code.'/'.$email1.'/UserType/PermLevel/'.$count.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/invoice_numb/desc'),
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
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetInvoiceList/'.$cust_code.'/'.$email1.'/UserType/PermLevel/25/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/invoice_numb/desc'),
								  );
							$csv_data = "Invoice Number,Invoice Date,Amount,Due Date,Tracking Number,Customer PO";	  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      //echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('Invoice') as $node)
									   {	
									   							  
									               if($csv_data=="")
												   {
												    $csv_data = $node->getElementsByTagName('invoice_numb')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('inv_date')->item(0)->nodeValue).",".$node->getElementsByTagName('totalamount')->item(0)->nodeValue.",".str_replace(",","",$node->getElementsByTagName('due_date')->item(0)->nodeValue).",".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue.",".$node->getElementsByTagName('cust_po')->item(0)->nodeValue;
												   }else{
												   $csv_data = $csv_data."_".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('inv_date')->item(0)->nodeValue).",".$node->getElementsByTagName('totalamount')->item(0)->nodeValue.",".str_replace(",","",$node->getElementsByTagName('due_date')->item(0)->nodeValue).",".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue.",".$node->getElementsByTagName('cust_po')->item(0)->nodeValue;
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
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetInvoiceList_Search/'.$cust_code.'/'.$email1.'/'.$from.'/'.$to.'/'.$invoice_number.'/UserType/PermLevel/25/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/invoice_numb/desc'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('Invoice') as $node)
									   {	
									    if(strpos($node->getElementsByTagName('carr_code')->item(0)->nodeValue,'Error Number') !== false) {
                                                     
                                        }else{								  
									               echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><entry_type>".$node->getElementsByTagName('entry_type')->item(0)->nodeValue."</entry_type><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po></Invoice>";
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
  
  
  public function pdf($order_id = null,$email = null,$type=null)
  {
    $this->load->helper('pdf_helper');
    $data['tittle'] = "PDF";
	$data['usemail'] = str_replace('ZZZ', '@', $email);
	$data['type'] = $type;
	            $cust_code= $this->session->userdata('cust_code'); 
				$email1= $this->session->userdata('email'); 
				$rss = new DOMDocument(); 
			    @$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderInvoiceHeader/".$cust_code."/".$order_id."/ /".$email1."/UserType/PermLevel/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
					
					
			    	
									   foreach (@$rss->getElementsByTagName('InvoiceHeader') as $node)
										   {		
                                           $data['invoice_numb'] = $node->getElementsByTagName('invoice_numb')->item(0)->nodeValue;
                                           $data['order_numb'] = $node->getElementsByTagName('order_numb')->item(0)->nodeValue;
										   $data['rel_numb'] = $node->getElementsByTagName('rel_numb')->item(0)->nodeValue;
										   $data['order_date'] = $node->getElementsByTagName('order_date')->item(0)->nodeValue;
										   $data['post_date'] = $node->getElementsByTagName('post_date')->item(0)->nodeValue;
										   $data['ship_date'] = $node->getElementsByTagName('ship_date')->item(0)->nodeValue;
										   $data['billto_code'] = $node->getElementsByTagName('billto_code')->item(0)->nodeValue;
										   $data['billname'] = $node->getElementsByTagName('billname')->item(0)->nodeValue;
										   $data['billadd1'] = $node->getElementsByTagName('billadd1')->item(0)->nodeValue;
										   $data['billadd2'] = $node->getElementsByTagName('billadd2')->item(0)->nodeValue;
										   $data['billadd3'] = $node->getElementsByTagName('billadd3')->item(0)->nodeValue;
										   $data['billcity'] = $node->getElementsByTagName('billcity')->item(0)->nodeValue;
										   $data['billst'] = $node->getElementsByTagName('billst')->item(0)->nodeValue;
										   $data['billzip'] = $node->getElementsByTagName('billzip')->item(0)->nodeValue;
										   $data['billcountry'] = $node->getElementsByTagName('billcountry')->item(0)->nodeValue;
										   $data['ship_status'] = $node->getElementsByTagName('ship_status')->item(0)->nodeValue;
										   $data['shipto_code'] = $node->getElementsByTagName('shipto_code')->item(0)->nodeValue;
										   $data['shipname'] = $node->getElementsByTagName('shipname')->item(0)->nodeValue;
										   $data['shipadd1'] = $node->getElementsByTagName('shipadd1')->item(0)->nodeValue;
										   $data['shipadd2'] = $node->getElementsByTagName('shipadd2')->item(0)->nodeValue;
										   $data['shipadd3'] = $node->getElementsByTagName('shipadd3')->item(0)->nodeValue;
										   $data['shipcity'] = $node->getElementsByTagName('shipcity')->item(0)->nodeValue;
										   $data['shipst'] = $node->getElementsByTagName('shipst')->item(0)->nodeValue;
										   $data['shipzip'] = $node->getElementsByTagName('shipzip')->item(0)->nodeValue;
										   $data['shipcountry'] = $node->getElementsByTagName('shipcountry')->item(0)->nodeValue;
										   $data['cust_po'] = $node->getElementsByTagName('cust_po')->item(0)->nodeValue;
										   $data['totalamount'] = $node->getElementsByTagName('total_tax')->item(0)->nodeValue;
										   $data['totalamount'] = $node->getElementsByTagName('totalamount')->item(0)->nodeValue;
										   $data['shipping_charge'] = $node->getElementsByTagName('shipping_charge')->item(0)->nodeValue;
										   $data['ship_charge'] = $node->getElementsByTagName('ship_charge')->item(0)->nodeValue;
										   $data['handling_charge'] = $node->getElementsByTagName('handling_charge')->item(0)->nodeValue;
										   $data['entry_type'] = $node->getElementsByTagName('entry_type')->item(0)->nodeValue;
										   $data['order_stat'] = $node->getElementsByTagName('order_stat')->item(0)->nodeValue;
										   $data['tracker_no'] = $node->getElementsByTagName('tracker_no')->item(0)->nodeValue;
											 
										   }
										   
										    $rss1 = new DOMDocument(); 
										   	@$rss1->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderDetails/".$cust_code."/".$order_id."/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
				                 $params = array();
								 $i=0;
								           foreach (@$rss1->getElementsByTagName('OrderDetails') as $node)
										   {
										   $item_no = $node->getElementsByTagName('item_no')->item(0)->nodeValue;
										   $part_desc = $node->getElementsByTagName('part_desc')->item(0)->nodeValue;
										   $uom = $node->getElementsByTagName('uom')->item(0)->nodeValue;
										   $qty = $node->getElementsByTagName('qty')->item(0)->nodeValue;
										   $item_price = $node->getElementsByTagName('item_price')->item(0)->nodeValue;
										   
										   
										   $params1[$i] = array('item_no'=> $item_no,
										                        'part_desc'=>$part_desc,
																'uom'=>$uom,
																'qty'=>$qty,
																'item_price'=>$item_price
										   
										   
										   );
                                            $data['item_no'] = $node->getElementsByTagName('item_no')->item(0)->nodeValue;
                                            $data['part_desc'] = $node->getElementsByTagName('part_desc')->item(0)->nodeValue;
                                            $data['uom'] = $node->getElementsByTagName('uom')->item(0)->nodeValue;
                                            $data['qty'] = $node->getElementsByTagName('qty')->item(0)->nodeValue;
                                            $data['item_price'] = $node->getElementsByTagName('item_price')->item(0)->nodeValue;
											//$data['total_price'] = $node->getElementsByTagName('item_price')->item(0)->nodeValue;
											$i++;
											  //echo "<order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><item_no>".$node->getElementsByTagName('item_no')->item(0)->nodeValue."</item_no><part_code>".$node->getElementsByTagName('part_code')->item(0)->nodeValue."</part_code><part_desc>".$node->getElementsByTagName('part_desc')->item(0)->nodeValue."</part_desc><qty>".$node->getElementsByTagName('qty')->item(0)->nodeValue."</qty><uom>".$node->getElementsByTagName('uom')->item(0)->nodeValue."</uom><item_price>".$node->getElementsByTagName('item_price')->item(0)->nodeValue."</item_price><extended_price>".$node->getElementsByTagName('extended_price')->item(0)->nodeValue."</extended_price><item_stat>".$node->getElementsByTagName('item_stat')->item(0)->nodeValue."</item_stat><item_status>".$node->getElementsByTagName('item_status')->item(0)->nodeValue."</item_status><act_ship_date>".$node->getElementsByTagName('act_ship_date')->item(0)->nodeValue."</act_ship_date><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error>";
                                          $params	= $params1;									  
										  }
									$data['params'] =  $params;
				
										   
											//echo $data['invoice_numb'];
                                            $this->load->view('pdfreport', $data);
											exit;
											if($type==2)
											{
												
											}else{
											redirect(base_url()."index.php/welcome/orders");
											}
											//
											
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
  
  public function all_servicecontracts($userstatus = null,$count=25)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
	  $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractList/'.$cust_code.'/ / / /'.$count.'/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('ServiceContractList') as $node)
									   {
                                        if($userstatus=="Active"){
										if($node->getElementsByTagName('contract_status')->item(0)->nodeValue=="Active")
										{
										echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
		                               
										}
										
										}else if($userstatus=="Expired")
										{
										if($node->getElementsByTagName('contract_status')->item(0)->nodeValue=="Expired")
										{
										echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
		                                 }
										
										}else if($userstatus=="Cancelled")
										{
										if($node->getElementsByTagName('contract_status')->item(0)->nodeValue=="Cancelled")
										{
										echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
		                                 }
										
										}else{
										echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
		                               
										}									   
										 }                          					    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									    }	
						  

	}  
  }
  
  
    public function all_servicecontracts_search($userstatus = null,$from,$to,$contractnumber)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
					$rss = new DOMDocument(); 
					$cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractList/'.$cust_code.'/'.$contractnumber.'/'.$from.'/'.$to.'/100/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
										  );
										  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('ServiceContractList') as $node)
									   {
                                        if($userstatus=="Active")
										{
											if($node->getElementsByTagName('contract_status')->item(0)->nodeValue=="Active")
											{
											echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
										   
											}
											
										}else if($userstatus=="Expired")
										{
											if($node->getElementsByTagName('contract_status')->item(0)->nodeValue=="Expired")
											{
											echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
											 }
											
										}else{
										    echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
		                               
										}									   
										 }                          					    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									    }	
						  

	}  
  }
  
  
  
  //service cpntracts to map  1509R0037
   public function all_servicecontracts_to_map_view($servicenumber)
  {
  			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractList/'.$cust_code.'/'.$servicenumber.'/ / /1000/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
					 foreach ($urlArray as $url) 
						  {
						        echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									  
			                           $rss->load($url['url']);
									  foreach ($rss->getElementsByTagName('ServiceContractList') as $node)
									   {	
									   	echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";	 
                                       }						 
							    echo "</DocumentElement></diffgr:diffgram></DataTable>";
			   
						  }
						  
						  
	
  
  }
  
  public function all_servicecontracts_to_csv()
  {
  			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractList/'.$cust_code.'/ / / /1000/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
							$csv_data = "Cotract Number,Start Date,End Date,Description,Service Level,Location,Status";	  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      //echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('ServiceContractList') as $node)
									   {	
									   							  
									               if($csv_data=="")
												   {
												    $csv_data = $node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('start_date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('end_date')->item(0)->nodeValue).",".$node->getElementsByTagName('description')->item(0)->nodeValue.",".$node->getElementsByTagName('service_level')->item(0)->nodeValue.",".$node->getElementsByTagName('location')->item(0)->nodeValue.",".$node->getElementsByTagName('contract_status')->item(0)->nodeValue;
												   }else{
												   $csv_data = $csv_data."_".$node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('start_date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('end_date')->item(0)->nodeValue).",".$node->getElementsByTagName('description')->item(0)->nodeValue.",".$node->getElementsByTagName('service_level')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('location')->item(0)->nodeValue).",".$node->getElementsByTagName('contract_status')->item(0)->nodeValue;
                                                    }												 
												 // echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><entry_type>".$node->getElementsByTagName('entry_type')->item(0)->nodeValue."</entry_type><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date></Invoice>";
		                                	}						 
							

							//echo "</DocumentElement></diffgr:diffgram></DataTable>";
							//echo $csv_data;
							  $odersdata = explode("_",$csv_data);
												// echo $odersdata;
											   $file = fopen("servicecontracts.csv","w");

												foreach ($odersdata as $line)
												  {
												  fputcsv($file,explode(',',$line));
												  }

												fclose($file);
												
												
												  header("Content-type: text/csv");
												  header("Content-disposition: attachment; filename = servicecontracts.csv");
												  readfile($_SERVER['DOCUMENT_ROOT']."/servicecontracts.csv");
									   
						  }
						  
						  
	
  
  }
  
  
  public function resetpassword_link($email1)
  {
	  $ran_val = rand(9999999,99999999999);
	  
	  
	  $email = str_replace("zzz","@",$email1);
	  $this->load->model('mysmartportal_model');
	  $params= array('veryfy_code'=>$ran_val,
	                  'updated_date'=>date("y-m-d h:s"));
	  $update = $this->mysmartportal_model->updatevyryfycode($params,$email);  
	  
	   //sending email code  start
										  $to = "bhaskar@livait.com,nikd@lowrysolutions.com,rami@lowrysolutions.com,dhamodhar.enaganti@livait.net,uzwal.chaganti@livait.com,tomha@lowrysolutions.com ";
										 $subject = "LowrySmart Portal – Password Recovery";
										 

$message = '<p>A password reset was requested for your account.  If you did not authorize this, you may simply ignore this email.</p><br>

<p>To continue with your password reset, please click on the link below or copy and paste the link to the address line of your Internet browser</p><br>

<p>  http://lowrysmartportal.com/index.php/welcome/resetpassowrd/'.$ran_val.' </p>
<p>If you have any questions, please call us at 810-333-3322
Thank you for registering your card.</p>';
										 
										 $headers  = 'MIME-Version: 1.0' . "\r\n";
                                         $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
										 
										 $retval = mail ($to,$subject,$message,$headers);	  
  }
  
  public function resetpassowrd($code)
  {
	   $data['veryfycode'] = $code;
	   $this->load->model('mysmartportal_model');
	   $checklink = $this->mysmartportal_model->checklink($code);
	   @$checklink[0]->updated_date;
	   
	    $date1 = @$checklink[0]->updated_date;
        $date2 = date("Y-m-d h:m:s"); 
		
         $diff = strtotime($date2) - strtotime($date1);
         $diff_in_hrs = $diff/3600;
		 //echo round($diff_in_hrs);
		 //exit;
         $data["linkstatus"] = round($diff_in_hrs);
	   
	   $this->load->view("password_header"); 
	   $this->load->view("resetpassword",$data); 
	   $this->load->view("footer"); 
	  
  }
  public function saveresetpassword()
  {
	  $params = array('password'=>$this->input->post('password'));
	  //$email = $this->session->userdata('email');
	  $code = $this->input->post('veryfy');  
	  $this->load->model('Mysmartportal_model');
	  $sve = $this->Mysmartportal_model->savepassword($params,$code);
	  redirect(base_url()."index.php/welcome/index");
  }
  
  
   public function forgetpassword($error=null)
  {
       $data["error"] = $error;
	   $this->load->view("password_header"); 
	   $this->load->view("forgetpassword",$data); 
	   $this->load->view("footer"); 
	  
  }
  
  public function forget_pass_link()
  {
    $email = $this->input->post("email");
	$this->load->model('Mysmartportal_model');
	$check = $this->Mysmartportal_model->checkuser($email,$email);

		   if($check<1)
		  {
		  redirect(base_url()."index.php/welcome/forgetpassword/error");
		  
		  
		  }else{
		  
				   $ran_val = rand(9999999,99999999999);
					  

					  $params= array('veryfy_code'=>$ran_val,
									  'updated_date'=>date("y-m-d h:s"));
					  $update = $this->Mysmartportal_model->updatevyryfycode($params,$email);  
					  
					   //sending email code  start
														  $to = "bhaskar@livait.com,nikd@lowrysolutions.com,rami@lowrysolutions.com,dhamodhar.enaganti@livait.net,uzwal.chaganti@livait.com,tomha@lowrysolutions.com ";
														 $subject = "LowrySmart Portal – Password Recovery";
														 

														$message = '<p>A password reset was requested for your account.  If you did not authorize this, you may simply ignore this email.</p><br>

														<p>To continue with your password reset, please click on the link below or copy and paste the link to the address line of your Internet browser</p><br>

														<p>  http://lowrysmartportal.com/index.php/welcome/resetpassowrd/'.$ran_val.' </p>
														<p>If you have any questions, please call us at 810-333-3322
														Thank you for registering your card.</p>';
														 
														 $headers  = 'MIME-Version: 1.0' . "\r\n";
														 $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
														 
														 $retval = mail ($to,$subject,$message,$headers);	
														  redirect(base_url()."index.php/welcome/index");
		  
		  
		  }
		  
  
  
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
										$sessionvals_salesrep_details1=array(
									      'repid' =>$node->getElementsByTagName('RepId')->item(0)->nodeValue,
										  'repname' =>$node->getElementsByTagName('RepName')->item(0)->nodeValue,
										  'repphone' =>$node->getElementsByTagName('RepPhone')->item(0)->nodeValue,
										  'repemail'=>$node->getElementsByTagName('RepEmail')->item(0)->nodeValue);
										  
										  $this->session->set_userdata($sessionvals_salesrep_details1);	
							  	        foreach ($rss->getElementsByTagName('CSRDetails') as $node)
									    {

                                         $sessionvals_salesrep_details=array(
										  'csr_fname' =>$node->getElementsByTagName('CSR_Fname')->item(0)->nodeValue,
										  'csr_lname'=> $node->getElementsByTagName('CSR_Lname')->item(0)->nodeValue,
										  'csr_email'=>$node->getElementsByTagName('CSR_Email')->item(0)->nodeValue,
										  'csr_phone'=>$node->getElementsByTagName('CSR_Phone')->item(0)->nodeValue
										 );													  								  
					                      $this->session->set_userdata($sessionvals_salesrep_details);										
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
  
  
  
  public function assets($Contract_Number=null)
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
					 $data['c_number'] = $Contract_Number;
						 $this->load->view('header',$data);
						 $this->load->view('assetinventory');
						 $this->load->view('assetinventory_footer',$data);
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  
  }
  
  
   public function all_assets_to_csv()
  {
  			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
		$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/AssetsPage/'.$cust_code.'/ / /25/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
							$csv_data = "Serial Number,Part Number,Part Description,Type,Contract Number,Start Date,End Date,Status,Options";	  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      //echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('AssetsPage') as $node)
									   {	
									   							  
									               if($csv_data=="")
												   {
												    $csv_data = $node->getElementsByTagName('SerialNumber')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Part_Number')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('Part_Description')->item(0)->nodeValue).",".$node->getElementsByTagName('Type')->item(0)->nodeValue.",".$node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Start_Date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('End_date')->item(0)->nodeValue).",".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue.",".$node->getElementsByTagName('Options')->item(0)->nodeValue;
												   }else{
												   $csv_data = $csv_data."_".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Part_Number')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('Part_Description')->item(0)->nodeValue).",".$node->getElementsByTagName('Type')->item(0)->nodeValue.",".$node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Start_Date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('End_date')->item(0)->nodeValue).",".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue.",".$node->getElementsByTagName('Options')->item(0)->nodeValue;
                                                    }												 
												 // echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><entry_type>".$node->getElementsByTagName('entry_type')->item(0)->nodeValue."</entry_type><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date></Invoice>";
		                                	}						 
							

							//echo "</DocumentElement></diffgr:diffgram></DataTable>";
							//echo $csv_data;
							  $odersdata = explode("_",$csv_data);
												// echo $odersdata;
											   $file = fopen("assets.csv","w");

												foreach ($odersdata as $line)
												  {
												  fputcsv($file,explode(',',$line));
												  }

												fclose($file);
												
												
												  header("Content-type: text/csv");
												  header("Content-disposition: attachment; filename = assets.csv");
												  readfile($_SERVER['DOCUMENT_ROOT']."/assets.csv");
									   
						  }
						  
						  
	
  
  }
  
  
    public function all_assets($Contract_Number=null,$count1=25)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
				$user_status = "";
				if($Contract_Number==null)
				{
				$Contract_Number = " ";
				
				}else if($Contract_Number=="%20")
				{
				
				$Contract_Number = " ";
				
				}else if($Contract_Number=="All")
				{
				$user_status = "all";
				$Contract_Number = " ";
				
				}else if($Contract_Number=="Active")
				{
				$user_status = "Active";
				$Contract_Number = " ";
				
				}else if($Contract_Number=="Expired")
				{
				$user_status = "Expired";
				$Contract_Number = " ";
				
				}
	        $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
	
			
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/AssetsPage/'.$cust_code.'/ /'.$Contract_Number.'/'.$count1.'/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('AssetsPage') as $node)
									   {
                                        if($user_status == "Active")
										{ 
										
										if($node->getElementsByTagName('Contract_Status')->item(0)->nodeValue == "Active"){
											echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Part_Number')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('Part_Description')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('Type')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('Start_Date')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('End_date')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</Contract_Status><Options>".$node->getElementsByTagName('Options')->item(0)->nodeValue."</Options><assetaddress>".$node->getElementsByTagName('AssetAddress')->item(0)->nodeValue."</assetaddress><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
		                                     }
										
										}else if($user_status == "Expired")
										{
										
										if($node->getElementsByTagName('Contract_Status')->item(0)->nodeValue == "Expired"){
											echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Part_Number')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('Part_Description')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('Type')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('Start_Date')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('End_date')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</Contract_Status><Options>".$node->getElementsByTagName('Options')->item(0)->nodeValue."</Options><assetaddress>".$node->getElementsByTagName('AssetAddress')->item(0)->nodeValue."</assetaddress><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
		                               }
										
										}else{
											echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Part_Number')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('Part_Description')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('Type')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('Start_Date')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('End_date')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</Contract_Status><Options>".$node->getElementsByTagName('Options')->item(0)->nodeValue."</Options><assetaddress>".$node->getElementsByTagName('AssetAddress')->item(0)->nodeValue."</assetaddress><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
		                               
										
										}									   
									 }                              					    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
										  
					      }
									   
						  

	}  
  }
  
  public function all_assets_by_search($serialnumber)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
	  $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/AssetsPage_SerialNo/'.$serialnumber.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('AssetsPage') as $node)
									   {	
										echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Part_Number')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('Part_Description')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('Type')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('Start_Date')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('End_date')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</Contract_Status><Options>".$node->getElementsByTagName('Options')->item(0)->nodeValue."</Options><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
		}                          					    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						   }	

	}  
  }


  public function contracts_count()
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
	  $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/CustomerContractsCount/'.$cust_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('ContractsCount') as $node)
									   {	
										echo "<contractscount diffgr:id='contractscount' msdata:rowOrder='0' diffgr:hasChanges='inserted'><ContCnt>".$node->getElementsByTagName('ContCnt')->item(0)->nodeValue."</ContCnt><Contract_Status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</Contract_Status><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></contractscount>";
		}                           }						    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  

	}  
  }
  
  
  public function all_opentickets_by_email($userstatus = null)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
	        $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/CheckServiceTicket_Email/'.$email1.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('CheckServiceTicket') as $node)
									   {
                                       
										echo "<checkserviceticket diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><opened>".$node->getElementsByTagName('Opened')->item(0)->nodeValue."</opened><lastaction>".$node->getElementsByTagName('LastAction')->item(0)->nodeValue."</lastaction><enteredby>".$node->getElementsByTagName('Enteredby')->item(0)->nodeValue."</enteredby><ticketnumber>".$node->getElementsByTagName('TicketNumber')->item(0)->nodeValue."</ticketnumber><problemdescription>".$node->getElementsByTagName('ProblemDescription')->item(0)->nodeValue."</problemdescription><currentstatus>".$node->getElementsByTagName('CurrentStatus')->item(0)->nodeValue."</currentstatus><customername>".$node->getElementsByTagName('CustomerName')->item(0)->nodeValue."</customername><calledinby>".$node->getElementsByTagName('CalledInBy')->item(0)->nodeValue."</calledinby><email>".$node->getElementsByTagName('Email')->item(0)->nodeValue."</email><serviceagent>".$node->getElementsByTagName('ServiceAgent')->item(0)->nodeValue."</serviceagent><do>".$node->getElementsByTagName('DO')->item(0)->nodeValue."</do><serialnumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</serialnumber> <partnumber>".$node->getElementsByTagName('PartNumber')->item(0)->nodeValue."</partnumber><city>".$node->getElementsByTagName('City')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('State')->item(0)->nodeValue."</state></checkserviceticket>";
		                               
																			   
										 }                          					    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									    }	
						  

	}  
  }
  
  public function exportallusers_to_excel()
  {
  
  
                   $this->load->model("Mysmartportal_model");
				   $allusers = $this->Mysmartportal_model->getallusers();
				   $csv_data = "First Name,Last Name,Username/Email,Company,Customer Code,Role (3-power user::2-normal user),Status (1-Active::0-Inactive)";
				   foreach($allusers as $allusersdata)
				   {
						   if($csv_data == "")
						   {
							 $csv_data = $allusersdata->first_name.",".$allusersdata->last_name.",".$allusersdata->email_id.",".$allusersdata-company_name.",".$allusersdata->cus_code.",".$allusersdata->role.",".$allusersdata->status;
						  
						   }else{
						      $csv_data = $csv_data."_".$allusersdata->first_name.",".$allusersdata->last_name.",".$allusersdata->email_id.",".$allusersdata->company_name.",".$allusersdata->cus_code.",".$allusersdata->role.",".$allusersdata->status;
						   }
				   }
				   
  
                                     $odersdata = explode("_",$csv_data);
												// echo $odersdata;
											   $file = fopen("allusers.csv","w");

												foreach ($odersdata as $line)
												  {
												  fputcsv($file,explode(',',$line));
												  }

												fclose($file);
												
												
												  header("Content-type: text/csv");
												  header("Content-disposition: attachment; filename = allusers.csv");
												  readfile($_SERVER['DOCUMENT_ROOT']."/allusers.csv");
  
  
  }
  
  
  public function contracts_to_renew_count()
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
						$rss = new DOMDocument(); 
						$cust_code= $this->session->userdata('cust_code'); 
						$email1=$this->session->userdata('email');
						$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ContractsToRenewCount/'.$cust_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  );
											  
									  foreach ($urlArray as $url) 
									  {
												   $rss->load($url['url']);
													  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
												   foreach ($rss->getElementsByTagName('ContractsCount') as $node)
												   {	
													echo "<contractscount diffgr:id='contractscount' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contcnt>".$node->getElementsByTagName('ContCnt')->item(0)->nodeValue."</contcnt><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></contractscount>";
													}                           					    
													  echo "</DocumentElement></diffgr:diffgram></DataTable>";
													  }	
												   
									  

	                 }  
  }
  
    public function all_contracts_to_renew($count=25)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
						$rss = new DOMDocument(); 
						$cust_code= $this->session->userdata('cust_code'); 
						$email1=$this->session->userdata('email');
						$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractDueToRenew/'.$cust_code.'/'.$count.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  );
											  
									  foreach ($urlArray as $url) 
									  {
												   $rss->load($url['url']);
													  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
												   foreach ($rss->getElementsByTagName('ServiceContractList') as $node)
												   {	
													echo "<servicecontractlist diffgr:id='servicecontractlist' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('start_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('end_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('description')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level')->item(0)->nodeValue."</service_level><contract_status>".$node->getElementsByTagName('contract_status')->item(0)->nodeValue."</contract_status><location>".$node->getElementsByTagName('location')->item(0)->nodeValue."</location><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></servicecontractlist>";
													}                           					    
													  echo "</DocumentElement></diffgr:diffgram></DataTable>";
									  }	
												   
									  

	                 }  
  }
  
  public function device_query_info($serial)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
						$rss = new DOMDocument(); 
						$cust_code= $this->session->userdata('cust_code'); 
						$email1=$this->session->userdata('email');
						$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/QueryDeviceInfo/'.$serial.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  );
											  
									  foreach ($urlArray as $url) 
									  {
												   $rss->load($url['url']);
													  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
												   foreach ($rss->getElementsByTagName('CheckServiceTicket') as $node)
												   {	
													echo "<checkserviceticket diffgr:id='checkserviceticket' msdata:rowOrder='0' diffgr:hasChanges='inserted'><serial_no>".$node->getElementsByTagName('serial_no')->item(0)->nodeValue."</serial_no><descr>".$node->getElementsByTagName('descr')->item(0)->nodeValue."</descr><contract_id>".$node->getElementsByTagName('Contract_ID')->item(0)->nodeValue."</contract_id><contract_status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</contract_status><contract_expiry_date>".$node->getElementsByTagName('Contract_Expiry_date')->item(0)->nodeValue."</contract_expiry_date><address_1>".$node->getElementsByTagName('address_1')->item(0)->nodeValue."</address_1><address_2>".$node->getElementsByTagName('address_2')->item(0)->nodeValue."</address_2><address_3>".$node->getElementsByTagName('address_3')->item(0)->nodeValue."</address_3><city>".$node->getElementsByTagName('city')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('state')->item(0)->nodeValue."</state><zip>".$node->getElementsByTagName('zip')->item(0)->nodeValue."</zip><country>".$node->getElementsByTagName('country')->item(0)->nodeValue."</country><company_name>".$node->getElementsByTagName('Company_Name')->item(0)->nodeValue."</company_name><device_type>".$node->getElementsByTagName('Device_Type')->item(0)->nodeValue."</device_type><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></checkserviceticket>";
													}                           					    
													  echo "</DocumentElement></diffgr:diffgram></DataTable>";
									  }	

	                 }  
  }
  
  
  
    public function renew_service_contracts()
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
						 $this->load->view('renew_contracts');
						 $this->load->view('renew_contracts_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
	  
	  
	  
	  
	  
  }
  
  public function user_profile_edit_req()
  {
                                    $first_nam = $this->input->post('first_name_req');
	                                $last_name = $this->input->post('last_name_req');
									$email_id=$this->input->post('username_req');									
									$phone_number=$this->input->post('phone1_req');									
									$company_name=$this->input->post('bus_name_req');									
                                    $address1=$this->input->post('address1_req');
                                    $address2=$this->input->post('address2_req');
                                    $address3=$this->input->post('address3_req');
                                    $city=$this->input->post('city_req');
                                    $state=$this->input->post('state_req');
                                    $zip=$this->input->post('zip_req');
                                    $country=$this->input->post('country_req');	

                                    $first_nam_pre = $this->input->post('first_name');
	                                $last_name_pre = $this->input->post('last_name');
									$email_id_pre=$this->input->post('username');									
									$phone_number_pre=$this->input->post('phone1');									
									$company_name_pre=$this->input->post('bus_name');									
                                    $address1_pre=$this->input->post('address1');
                                    $address2_pre=$this->input->post('address2');
                                    $address3_pre=$this->input->post('address3');
                                    $city_pre=$this->input->post('city');
                                    $state_pre=$this->input->post('state');
                                    $zip_pre=$this->input->post('zip');
                                    $country_pre=$this->input->post('country');										
									
  
   $to = "bhaskar@livait.com,nikd@lowrysolutions.com,rami@lowrysolutions.com,dhamodhar.enaganti@livait.net,uzwal.chaganti@livait.com,tomha@lowrysolutions.com";
																			 $subject = "Profile Change Request";
										 

$message = '<span>Dear '.$first_nam.',<br>You have requested to update the below mentioned changes to your profile.</span><br><table border="1"><tr><td>First Name : </td><td>'.$first_nam.'</td></tr><tr><td>Last Name : </td><td>'.$last_name.'</td></tr><tr><td>Email/User Name : </td><td>'.$email_id.'</td></tr><tr><td>Phone Number : </td><td>'.$phone_number.'</td></tr><tr><td>Company Name : </td><td>'.$company_name.'</td></tr><tr><td>Address1 : </td><td>'.$address1.'</td></tr><tr><td>Address2 : </td><td>'.$address2.'</td></tr><tr><td>Address3 : </td><td>'.$address3.'</td></tr><tr><td>City : </td><td>'.$city.'</td></tr><tr><td>State : </td><td>'.$state.'</td></tr><tr><td>Zip : </td><td>'.$zip.'</td></tr><tr><td>Country : </td><td>'.$country.'</td></tr></table><p> Old Values</p><br><table border="1"><tr><td>First Name : </td><td>'.$first_nam_pre.'</td></tr><tr><td>Last Name : </td><td>'.$last_name_pre.'</td></tr><tr><td>Email/User Name : </td><td>'.$email_id_pre.'</td></tr><tr><td>Phone Number : </td><td>'.$phone_number_pre.'</td></tr><tr><td>Company Name : </td><td>'.$company_name_pre.'</td></tr><tr><td>Address1 : </td><td>'.$address1_pre.'</td></tr><tr><td>Address2 : </td><td>'.$address2_pre.'</td></tr><tr><td>Address3 : </td><td>'.$address3_pre.'</td></tr><tr><td>City : </td><td>'.$city_pre.'</td></tr><tr><td>State : </td><td>'.$state_pre.'</td></tr><tr><td>Zip : </td><td>'.$zip_pre.'</td></tr><tr><td>Country : </td><td>'.$country_pre.'</td></tr></table><p>If you have not requested for this update, please contact Lowry Customer Service immediately. An officer will be able to assist you with your query.</p><br><p>Thank you, It has been a pleasure serving you</p><br><br> Yours sincerely,<br>Lowry.';
										 
										 $headers  = 'MIME-Version: 1.0' . "\r\n";
                                         $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
										 
										 $retval = mail ($to,$subject,$message,$headers);	
  redirect(base_url()."index.php/welcome/user_profile"); 
  
  
  }
  
  public function save_new_service_req()
  {
  
                                    $serial_no = $this->input->post('serial_no');
	                                $device_type = $this->input->post('device_type');
									$descr=$this->input->post('descr');	
                                    $device_type=$this->input->post('device_type');		
									
									$contract_id=$this->input->post('contract_id');																										
                                    $contract_expiry_date=$this->input->post('contract_expiry_date');
                                    $contract_status=$this->input->post('contract_status');
									
                                    $email=$this->input->post('email');
                                    $full_name=$this->input->post('full_name');
                                    $phonenumber=$this->input->post('phonenumber');
                                    $company_name=$this->input->post('company_name');
                                    $address_1=$this->input->post('address_1');									
                                    $address_2=$this->input->post('address_2');									
                                    $city=$this->input->post('city');									
                                    $state=$this->input->post('state');									
                                    $zip=$this->input->post('zip');		
					$verify=$this->input->post('customRadio');				
                                    $printer=$this->input->post('printer1');									
                                    $scanner=$this->input->post('printer1');									
                                    $Software=$this->input->post('printer1');									
                                    $Other=$this->input->post('printer1');										
                                    
									
                                    $printer_type=$this->input->post('printer_type');									
                                    $scaner_type=$this->input->post('scaner_type');									
                                    $message=$this->input->post('message');									
                                  									
									
  $to = "dhamodhar.enaganti@livait.net,uzwal.chaganti@livait.com";
																			 $subject = "Your Lowry service request has been received!";
										 

$message = '<span style="color:#003366">Dear '.$full_name.',</span><br><br>
<span style="color:#003366">Thank you for submitting a new service request for device #'.$serial_no.'. Your request has been received. A service coordinator will be contacting you shortly.</span><br><h3><span style="color:#003366">Summary of Service Request</span></h3><br>
<table width="99%" border="0" cellpadding="1" cellspacing="0" bgcolor="#EAEAEA"><tbody><tr><td>
<table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF"><tbody>
<tr><td colspan="2" style="font-size:14px;font-weight:bold;background-color:#eee;border-bottom:1px solid #dfdfdf;padding:7px 7px">Device Information</td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Serial #</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$serial_no.'</font></td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Type</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style=3D"font-family:sans-serif;font-size:12px">'.$device_type.'</font></td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Description</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style=3D"font-family:sans-serif;font-size:12px">'.$descr.'</font></td></tr>
<tr><td colspan="2" style="font-size:14px;font-weight:bold;background-color:#eee;border-bottom:1px solid #dfdfdf;padding:7px 7px">Contract Information</td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Contract #</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$contract_id.'</font></td></tr><tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Expires</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style=3D"font-family:sans-serif;font-size:12px">'.$contract_expiry_date.'</font></td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Status</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style=3D"font-family:sans-serif;font-size:12px">'.$descr.'</font></td></tr>
<tr><td colspan="2" style="font-size:14px;font-weight:bold;background-color:#eee;border-bottom:1px solid #dfdfdf;padding:7px 7px">Contact Information</td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Email</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$email.'</font></td></tr><tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Full Name</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style=3D"font-family:sans-serif;font-size:12px">'.$full_name.'</font></td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Phone</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style=3D"font-family:sans-serif;font-size:12px">'.$phonenumber.'</font></td></tr>
<tr><td colspan="2" style="font-size:14px;font-weight:bold;background-color:#eee;border-bottom:1px solid #dfdfdf;padding:7px 7px">Device Location</td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Company</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$company_name.'</font></td></tr><tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Address</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$address_1.'</font></td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Verify</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$verify.'</font></td></tr>
<tr><td colspan="2" style="font-size:14px;font-weight:bold;background-color:#eee;border-bottom:1px solid #dfdfdf;padding:7px 7px">Incident Information</td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Incident Type</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$printer.'</font></td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Please describe the problem</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$message.'</font></td></tr>                           </tbody></table>
                        </td>
                   </tr>
               </tbody></table><br>
<a href="http://lowrysolutions.com" target="_blank"><img src="http://service.lowrysolutions.com/wp-content/uploads/2015/08/logo.png" alt="logo" width="139" height="92"></a><br>
<p style="text-align:left"><strong><span style="color:#003366">24/7 Tech Support</span><br>
</strong><span style="color:#003366">Phone: </span><span style="color:#0000ff"><a style="color:#0000ff" href="tel:+18007330010" target="_blank">(800) 733-0010</a></span><br><span style="color:#003366">Email: </span><a href="mailto:servicerequest@lowrysolutions.com" target="_blank">servicerequest@lowrysolutions.com</a><strong><br></strong><a href="http://www.lowrysolutions.com" target="_blank">www.lowrysolutions.com</a>';
										 
										 $headers  = 'MIME-Version: 1.0' . "\r\n";
                                         $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
										 
										 $retval = mail ($to,$subject,$message,$headers);	
  redirect(base_url()."index.php/welcome/technical_support/sucess");  
  
  
  
  }
  
  
  public function usermessages()
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
					
					
					 $this->load->view('header',$data);
                     $this->load->view('messages');  
					 
					 
					 }
  }
 
public function assetsmap()
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
					
					
					 $this->load->view('header',$data);
                     $this->load->view('newmap');  
					 
					 
					 }
  }
  
  
  public function service_contracts_map($servicenumber = null)
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
							
							$data['servicenumber'] = $servicenumber;
							 $this->load->view('header',$data);
							 $this->load->view('service_contracts_map_view',$data);  
							 
							 
					 }
  }
  
  public function servicerequest($device_number = "")
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
					
					$data['device_number'] = $device_number;
					 $this->load->view('header',$data);
                     $this->load->view('servicerequest',$data);  
					 
					 
					 }
  }
  

	
  
}