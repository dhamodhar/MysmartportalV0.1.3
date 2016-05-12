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
											}else if($this->session->userdata('role')==4)
											{
											 redirect(base_url()."index.php/welcome/service_desk_tickets");
											
											}else
											{
												 redirect(base_url()."index.php/welcome/technical_support");
											
											}
										
				  
				  }
				  

	}
	/**
	 * Logout Method.	
	 */
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
	/**
	 * Service Desk Tickets.	
	 */
	public function service_desk_tickets()
	{
		if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				    redirect(base_url()."index.php/welcome/index");
				
				}else{
				
				
				//Code start
				  $rss = new DOMDocument(); 
						$cust_code= $this->session->userdata('cust_code'); 
						$email1=$this->session->userdata('email');
						//Getting Locations
						$this->load->model('Mysmartportal_model');
					    $locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
							$ship_to_code = "";
							$location = "";
							if($location==""){
							foreach($locations as $locationsdata)
							{
									if($ship_to_code == ""){
											$ship_to_code = $locationsdata->ship_to_code;
									}else{
											$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
									}
							}}else
							{
							$ship_to_code = $location;
							
							}
						
						
						$ServiceContractList_node = "ServiceContractList";

							$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetAllExpiredContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractDueToRenew/'.$cust_code.'/'.$ship_to_code.'/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21ActiveServiceContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213')
											  );
					
											$k=0;  
											$active = 0;
											$expired = 0;
											$Upcomming = 0;
											
									  foreach ($urlArray as $url) 
									  {
									  if($k==0)
									  {
									  $ServiceContractList_node = "AssetsUnderContract";
									  
									  }else if($k==1)
									  {
									  $ServiceContractList_node = "ServiceContractList";
									  
									  }else if($k==2)
									  {
									  $ServiceContractList_node = "ActiveServiceContracts";
									  
									  }
									  
												   $rss->load($url['url']);
												   foreach ($rss->getElementsByTagName($ServiceContractList_node) as $node)
												   {
															if($k==0)
															{
						                                      $Upcomming++;
															
															}else if($k==1)
															{
											                 $expired++;
															
															}else if($k==2)
															{
																$active++;
													
															}									   
													 }   

                                         $k++; 													 
													 
									   }	
									   
									   $data["active"] = $active;
									   $data["expired"] = $expired;
				
				//End code
				
				
				
				
				
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
						 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							 $this->load->view('header',$data);
							 $this->load->view('service_desk_tickets',$data);
							 $this->load->view('service_desk_tickets_footer',$data);
				         }else
						 {
						     redirect(base_url()."index.php/welcome/technical_support");
						 
						 }
				 }
				
	}
	/**
	 * All orders View Method.	
	 */
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
						 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							 $this->load->view('header',$data);
							 $this->load->view('orders');
							 $this->load->view('footer_orders');
				         }else
						 {
						     redirect(base_url()."index.php/welcome/dashboard");
						 
						 }
				 }
				
	}
	
     /**
	 * Open orders View Method.	
	 */
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
						 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							 $this->load->view('header',$data);
							 $this->load->view('open_orders');
							 $this->load->view('open_orders_footer');
				         }else
						 {
						     redirect(base_url()."index.php/welcome/dashboard");
						 
						 }
				 }
				
	}
	
	
	 /**
	 *  Orders View  UI Method.	
	 */
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
					
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
				 $this->load->view('header',$data);
				 $this->load->view('order-view');
				 $this->load->view('orderview_footer');
			 }
		
	}
	/**
	 *  Orders View  Data From API Method.	
	 *  @pamars
	 *  Order Id
	 */
	public function orderview_data($order_id)
	{
	
		  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{
				$cust_code= $this->session->userdata('cust_code'); 
				//Getting Locations 
				$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
						if($ship_to_code == ""){
								$ship_to_code = $locationsdata->ship_to_code;
						}else{
								$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
						}
                    }
				
				
				$rss = new DOMDocument(); 
				$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderDetails/".$cust_code."/".$ship_to_code."/".$order_id."/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
				                             echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
										   foreach ($rss->getElementsByTagName('OrderDetails') as $node)
										   {									  
											  echo "<OrderDetails><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><item_no>".$node->getElementsByTagName('item_no')->item(0)->nodeValue."</item_no><part_code>".$node->getElementsByTagName('part_code')->item(0)->nodeValue."</part_code><part_desc>".$node->getElementsByTagName('part_desc')->item(0)->nodeValue."</part_desc><qty>".$node->getElementsByTagName('qty')->item(0)->nodeValue."</qty><uom>".$node->getElementsByTagName('uom')->item(0)->nodeValue."</uom><item_price>".$node->getElementsByTagName('item_price')->item(0)->nodeValue."</item_price><extended_price>".$node->getElementsByTagName('extended_price')->item(0)->nodeValue."</extended_price><item_stat>".$node->getElementsByTagName('item_stat')->item(0)->nodeValue."</item_stat><item_status>".$node->getElementsByTagName('item_status')->item(0)->nodeValue."</item_status><act_ship_date>".$node->getElementsByTagName('act_ship_date')->item(0)->nodeValue."</act_ship_date><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no><totshipqty>".$node->getElementsByTagName('TotShipQty')->item(0)->nodeValue."</totshipqty><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></OrderDetails>";
										   }
											  echo "</DocumentElement></diffgr:diffgram></DataTable>";
											  
				}
										   
		
		
	}
	
	/**
	 *  Contact Info  Data From API Method.	
	 *  @pamars
	 *  Email Id
	 */
	
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
				 echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''><CustomerContact>";
										   foreach ($rss->getElementsByTagName('CustomerContact') as $node)
										   {									  
											  echo "<first_name>".$node->getElementsByTagName('first_name')->item(0)->nodeValue."</first_name><last_name>".$node->getElementsByTagName('last_name')->item(0)->nodeValue."</last_name><phone1>".$node->getElementsByTagName('phone1')->item(0)->nodeValue."</phone1><cust_code>".$node->getElementsByTagName('cust_code')->item(0)->nodeValue."</cust_code><Record_Type>".$node->getElementsByTagName('Record_Type')->item(0)->nodeValue."</Record_Type><address1>".$node->getElementsByTagName('address1')->item(0)->nodeValue."</address1><address2>".$node->getElementsByTagName('address2')->item(0)->nodeValue."</address2><address3>".$node->getElementsByTagName('address3')->item(0)->nodeValue."</address3><city>".$node->getElementsByTagName('city')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('state')->item(0)->nodeValue."</state><zip>".$node->getElementsByTagName('zip')->item(0)->nodeValue."</zip><country>".$node->getElementsByTagName('country')->item(0)->nodeValue."</country><job_code>".$node->getElementsByTagName('job_code')->item(0)->nodeValue."</job_code><internet_addr>".$node->getElementsByTagName('internet_addr')->item(0)->nodeValue."</internet_addr><bus_name>".$node->getElementsByTagName('bus_name')->item(0)->nodeValue."</bus_name>";
										   }
											  echo "</CustomerContact></DocumentElement></diffgr:diffgram></DataTable>";
											  
				}
										   
		
		
	}
	
	
	/**
	 *  Orderview Header Data  Data From API Method.	
	 *  @API (orderview_header_data)
	 *  @pamars
	 *  Order Id
	 */
	
	public function orderview_header_data($order_id)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$email1 = $this->session->userdata('email');
					$cust_code= $this->session->userdata('cust_code'); 
					//Getting Locations 
					$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					$rss = new DOMDocument(); 
					$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderInvoiceHeader/".$cust_code."/".$ship_to_code."/".$order_id."/ /".$email1."/UserType/PermLevel/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
					
					echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''><InvoiceHeader>";
											   foreach ($rss->getElementsByTagName('InvoiceHeader') as $node)
											   {	
													 
												   if (strpos($node->getElementsByTagName('carr_code')->item(0)->nodeValue,'Error Number') !== false) {
															 
													   }else{
												  echo "<carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><rel_numb>".$node->getElementsByTagName('rel_numb')->item(0)->nodeValue."</rel_numb><order_numb>".$node->getElementsByTagName('order_numb')->item(0)->nodeValue."</order_numb><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><post_date>".$node->getElementsByTagName('post_date')->item(0)->nodeValue."</post_date><ship_date>".$node->getElementsByTagName('ship_date')->item(0)->nodeValue."</ship_date><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billadd1>".$node->getElementsByTagName('billadd1')->item(0)->nodeValue."</billadd1><billadd2>".$node->getElementsByTagName('billadd2')->item(0)->nodeValue."</billadd2><billadd3>".$node->getElementsByTagName('billadd3')->item(0)->nodeValue."</billadd3><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><billzip>".$node->getElementsByTagName('billzip')->item(0)->nodeValue."</billzip><billcountry>".$node->getElementsByTagName('billcountry')->item(0)->nodeValue."</billcountry><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipadd1>".$node->getElementsByTagName('shipadd1')->item(0)->nodeValue."</shipadd1><shipadd2>".$node->getElementsByTagName('shipadd2')->item(0)->nodeValue."</shipadd2><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><shipzip>".$node->getElementsByTagName('shipzip')->item(0)->nodeValue."</shipzip><shipcountry>".$node->getElementsByTagName('shipcountry')->item(0)->nodeValue."</shipcountry><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><total_tax>".$node->getElementsByTagName('total_tax')->item(0)->nodeValue."</total_tax><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><shipping_charge>".$node->getElementsByTagName('shipping_charge')->item(0)->nodeValue."</shipping_charge><handling_charge>".$node->getElementsByTagName('handling_charge')->item(0)->nodeValue."</handling_charge><ship_charge>".$node->getElementsByTagName('ship_charge')->item(0)->nodeValue."</ship_charge><order_stat>".$node->getElementsByTagName('order_stat')->item(0)->nodeValue."</order_stat><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error><pay_type>".$node->getElementsByTagName('pay_type')->item(0)->nodeValue."</pay_type><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no>";
											   }
												
											   }
												  echo "</InvoiceHeader></DocumentElement></diffgr:diffgram></DataTable>";
											   
			
					}
	}
	
	/**
	 *  Invoice Header Data  Data From API Method.	
	 *  @API (E21GetOrderInvoiceHeader)
	 *  @pamars
	 *  Order Id
	 */
	
	public function invoiceview_header_data($invoiceid)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					$email1 = $this->session->userdata('email');
					$cust_code= $this->session->userdata('cust_code'); 
					$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					$rss = new DOMDocument(); 
					$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderInvoiceHeader/".$cust_code."/".$ship_to_code."/%20/".$invoiceid."/".$email1."/UserType/PermLevel/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
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
	/**
	 *  Admin Dashboard View Method.	
	 */
	public function admin_dashboard()
	{
	
		   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{		
					  if($this->session->userdata('role')==1)
						{
							$this->load->model('Mysmartportal_model');

						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
							 $this->load->view('admin_header',$data);
							 $this->load->view('admin_index');
						}else
						{
						
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							 $this->load->view('header',$data); 
							 $this->load->view('index');
						
						}
					   $this->load->view('footer'); 
				 }

	}
	/**
	 *  All Orders Data from API.
     *  API(E21GetOrders)
     *  @params
     *  Email Id
     *  Count (Limit 25)	 
	 */
	
	public function all_orders($email=null,$count=25)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					 $rss = new DOMDocument(); 
					 $cust_code= $this->session->userdata('cust_code'); 
					 $email1=$this->session->userdata('email');
					//Getting Locations 
					
					$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					
					if($email == 1)
					{

						$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOpenOrders/'.$cust_code.'/'.$ship_to_code.'/'.$email1.'/UserType/PermLevel/'.$count.'/1/ / / /5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_number/asc'),
						                                                  
										  );
					
					}else{
		$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOrders/'.$cust_code.'/'.$ship_to_code.'/'.$email1.'/UserType/PermLevel/'.$count.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_date/asc'),
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
																	echo "<Order diffgr:id='Order1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><order_number>".$node->getElementsByTagName('order_number')->item(0)->nodeValue."</order_number><order_date>".$node->getElementsByTagName('order_date')->item(0)->nodeValue."</order_date><po_number>".$node->getElementsByTagName('po_number')->item(0)->nodeValue."</po_number><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_number>".$node->getElementsByTagName('invoice_number')->item(0)->nodeValue."</invoice_number><invoice_amount>".$node->getElementsByTagName('invoice_amount')->item(0)->nodeValue."</invoice_amount><ship_city>".$node->getElementsByTagName('ship_city')->item(0)->nodeValue."</ship_city><ship_state>".$node->getElementsByTagName('ship_state')->item(0)->nodeValue."</ship_state><order_status>".$node->getElementsByTagName('order_status')->item(0)->nodeValue."</order_status><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no></Order>";
																	}									     
													  }
											   }
												  echo "</DocumentElement></diffgr:diffgram></DataTable>";
											   
								  }
								  
					}

	}
	
	/**
	 *  All Orders Data TO CSV.
     *  API(E21GetOrders)
     *  @params
     *  Email Id	 
	 */
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
	
	/**
	 *  All Orders Search.
     *  API(E21GetOrderList_DateSearch)
     *  @params
     *  From Date	
     *  To Date
     *  Invoice Number 
     *  Page Limit Count(25)	 
	 */
	public function orders_search_by_dates($from,$to,$order_id,$invoicenumber,$page)
	{
	
	      if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
		  {
		   redirect(base_url()."index.php/welcome/index");
		
		  }else{
			$rss = new DOMDocument(); 
			 $cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			
			//getting Locations 
			$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
					if($ship_to_code == ""){
							$ship_to_code = $locationsdata->ship_to_code;
					}else{
							$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
					}
                                        }
			
			
				if($page == 1)
					{
					$urlArray = array(array('name' => 'api', 'url' =>'http://216.234.105.194:8088/Alpha.svc/E21GetOpenOrders/'.$cust_code.'/'.$email1.'/UserType/PermLevel/25/1/'.$order_id.'/'.$from.'/'.$to.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_number/asc'),
										  );
					
					}else{
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetOrderList_DateSearch/'.$cust_code.'/'.$ship_to_code.'/'.$email1.'/'.$from.'/'.$to.'/'.$order_id.'/'.$invoicenumber.'/UserType/PermLevel/25/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/order_date/asc'),
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
	
	/**
	 *  Add User UI Page Loading.	 
	 */
	public function adduser()
	{
		
		if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else if($this->session->userdata('role') != 1)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				
				}else{
				$this->load->model('Mysmartportal_model');

						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
				$this->load->view('admin_header',$data);
				$this->load->view('adduser');
				$this->load->view('admin_footer'); 
				
				}
				
	}
	/**
	 *  Save User Data.	 
	 */
	public function saveuser()
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else if($this->session->userdata('role') != 1)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				
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
										 
										 $admin_id=2;
										 $to_user_id = $save;
										 $notification_subject = "Lowry Smart Portal - Admin";
										 $notification_boby = "Welcome to LowrySmart Portal.  We are very excited to have you as our premier member in our fully customized and secure web portal.";
										 $notification_param = array("from_user_id"=>$admin_id,
										                             "to_user_id"=>$to_user_id,
																	 "msg_subject"=>$notification_subject,
																	 "msg_body"=>$notification_boby,
																	 "read_status"=>0,
																	 "created_date"=>date("y-m-d h:s"),
																	 "updated_date"=>date("y-m-d h:s")
																	 );
										 
									
										 
										 $notifications = $this->Mysmartportal_model->savenotifications($notification_param);
										 
										 
										 
								redirect(base_url()."index.php/welcome/allusers/inserted");
				}
			
	}
	
	
	/**
	 *  All User Page Loading.	 
	 */
	public function allusers($msg=null,$count=null)
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				}else if($this->session->userdata('role') != 1)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				
				}else{
			
					$data['msg']=$msg;
					$data['count']=$count;
					$this->load->model('Mysmartportal_model');
					$data['allusers'] = $this->Mysmartportal_model->getallusers();

						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
					$this->load->view('admin_header',$data);
					$this->load->view('allusers',$data);
					$this->load->view('footer_users'); 
					
					}
			
	}
	/**
	 *  Edit User Page Loading with All data.
     *  @params
     *  User Id	 
	 */

	public function edituser($id=null)
	{
	
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else if($this->session->userdata('role') != 1)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				
				}else{
					$this->load->model('Mysmartportal_model');
					$data['edituser'] = $this->Mysmartportal_model->getedituser($id);
					
					$usermenu=$this->Mysmartportal_model->getmenu($id);								
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
					
					
					$userallmenu=$this->Mysmartportal_model->getallusermenu();	
					$data['allmenu'] = $userallmenu;
					$data['assinedid'] = @$usermenu[0]->menu_id;
					$data['uid'] =$id;
					
					$userlocations = $this->Mysmartportal_model->getalluserlocations($id);
					$data['userlocations'] = $userlocations;

						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
					$this->load->view('admin_header',$data);
					$this->load->view('edituser',$data);
					$this->load->view('admin_footer'); 
					
					}
	}	
	/**
	 *  Deleting User By Id.
	 *  @params
	 *  User ID
	 *  Action (Delete)
 
	 */
		public function deleteuser($id,$action)
		{
				if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else if($this->session->userdata('role') != 1)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				
				}else{
					$this->load->model("Mysmartportal_model");
					$this->Mysmartportal_model->deleteuser($id,$action);
				 redirect(base_url()."index.php/welcome/allusers/updated");	
				}
				
				
		}
		
	/**
	 *  Save Edit User Data.	 
	 */
	public function saveedituser()
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else if($this->session->userdata('role') != 1)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				
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
									 $paramsid1 = "1,".$ids;
									 $paramsid = array('menu_id'=>$paramsid1);
									 $saveid = $this->Mysmartportal_model->saveeditusermenu($paramsid,$uid);

									 
					redirect(base_url()."index.php/welcome/allusers/updated");	
					
					}
	}
	/**
	 *  User Profile Page Loading.
	 
	 */
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
							
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
					$this->load->view('header',$data);
					$this->load->view('userprofile');
					$this->load->view('footer'); 
					}
		
	}
	/**
	 *  User EDIT Profile Page Loading.
	 
	 */
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
							
                            $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							$this->load->view('header',$data);
							$this->load->view('edituserprofile');
							$this->load->view('footer'); 
					}
		
	}
	
    /**
	 *  User Feedback Page Loading.
	 
	 */
    public function feedback()
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
							
                            $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							$this->load->view('header',$data);
							$this->load->view('feedbackpage');
							$this->load->view('footer'); 
					}
		
	}



/**
	 *  User Feedback Page Loading.
	 
	 */
    public function mobility()
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
							
                            $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							$this->load->view('header',$data);
							$this->load->view('mobility');
							$this->load->view('footer'); 
					}
		
	}
	
	
	public function savefeedback()
	{
	
			$email = $this->input->post("username_req");
			$first_name_req = $this->input->post("first_name_req");
			$company = $this->input->post("bus_name_req");
			$phone1_req = $this->input->post("phone1_req");
			$datauser = $this->input->post("datauser");
			$feedbackdata = "<table><tr><td>Email: </td><td>".$email."</td></tr><tr><td>Name: </td><td>".$first_name_req."</td></tr><tr><td>Company: </td><td>".$company."</td></tr><tr><td>Phone Number: </td><td>".$phone1_req."</td></tr><tr><td>Message: </td><td>".$datauser."</td></tr></table>";
			

                     $message=$feedbackdata;									
 
					 $to = "dhamodhar.enaganti@livait.net,bhaskar@livait.com";
					 $subject = "Feedback from User";

                     $headers  = 'MIME-Version: 1.0' . "\r\n";
                     $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
					 $retval = mail ($to,$subject,$message,$headers);						 
			 redirect(base_url()."index.php/welcome/technical");
	
	
	
	}
	/**
	 *  Bulk User Upload Page Loading.
	 
	 */
	public function bulkuserupload()
	{
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else if($this->session->userdata('role') != 1)
				{
				   redirect(base_url()."index.php/welcome/logout");
				
				
				}else{
					$this->load->model('Mysmartportal_model');

						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
					$this->load->view('admin_header',$data);
					$this->load->view('bulkuserupload');
					$this->load->view('footer'); 
					}
			
			
			
	}
	/**
	 *  Technical Support Page Loading with All cards Data and All tickets. 
	 *  @API(E21DashBoardData , CheckServiceTicket_Email)
	 *  @Params
	 *  User Massage
	 */
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
							
							//Locations Getting 
							
								$this->load->model('Mysmartportal_model');
								$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);							
								$ship_to_code = "";
								foreach($locations as $locationsdata)
								{
										if($ship_to_code == ""){
												$ship_to_code = $locationsdata->ship_to_code;
										}else{
												$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
										}
							     }
					        $rss = new DOMDocument(); 
			                @$rss->load("http://216.234.105.194:8088/Alpha.svc/E21DashBoardData/".$cust_code."/".$ship_to_code."/".$email1."/UserType/PermLevel/1-1-2010/1-1-2016/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
			                            $pendingorders = "";	
										 $opencases = "";	
										 $openorders = "";	
										 $shippedorders = ""; 
										 $pastdueinvoices = "";
										 $assetsendoflife ="";
										 
										 
      				        foreach ($rss->getElementsByTagName('E21DashBoardData') as $node)
							{	
                                        if (strpos($node->getElementsByTagName('PendingOrders')->item(0)->nodeValue,'Error Number') !== false)
										{
                                           
                                        }else
										{									   
									     $pendingorders = $node->getElementsByTagName('PendingOrders')->item(0)->nodeValue;	
										 $opencases = $node->getElementsByTagName('OpenCases')->item(0)->nodeValue;	
										 $openorders = $node->getElementsByTagName('OpenOrders')->item(0)->nodeValue;	
										 $shippedorders = $node->getElementsByTagName('ShippedOrders')->item(0)->nodeValue;	
										 $pastdueinvoices = $node->getElementsByTagName('PastDueInvoices')->item(0)->nodeValue;	
										 $assetsendoflife = $node->getElementsByTagName('AssetsEndofLife')->item(0)->nodeValue;	
									    }
										 $data['pendingorders'] = $pendingorders;
										 $data['opencases'] = $opencases;
										 $data['openorders'] = $openorders;
										 $data['shippedorders'] = $shippedorders;
										 $data['pastdueinvoices'] = $pastdueinvoices;
										 $data['assetsendoflife'] = $assetsendoflife;
							}
 
						    $ticket_info = "";
						    $rss = new DOMDocument(); 
							$cust_code= $this->session->userdata('cust_code'); 
							$email1=$this->session->userdata('email');
							//echo  'http://216.234.105.194:8088/Alpha.svc/CheckServiceTicket_Email/'.$email1.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213';
							$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/CheckServiceTicket_Email/'.$email1.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'));							  
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
						    $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							$this->load->view('header',$data);
							$this->load->view('technical',$data);
							$this->load->view('footer'); 
					}
			
			
	
	}
	/**
	 *  Accessdenied Page Loading. 
	 */
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
							
                            $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
					$this->load->view('header',$data);
					$this->load->view('access');
					$this->load->view('footer'); 
					}
			
			
			
	}
	/**
	 *  Ticket Status Page Loading. 
	 */
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
							
                             $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
					$this->load->view('header',$data);
					$this->load->view('ticket_status');
					$this->load->view('footer'); 
					}
			
			
			
	}
	/**
	 *  Ticket Status Data From API.
     *  @API(E21_ServiceDetails)	 
	 */
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
	/**
	 *  Save Bulk Users Data From Excel.	 
	 */
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
				 try 
				 {
				   $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
				 } catch(Exception $e)
				 {
				   die("Error loading file :" . $e->getMessage());
				 }
				$sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				$error_duplicate="";
				for($j=2; $j <= sizeof($sheetData); $j++) 
		          {
						 $email=$sheetData[$j]['C'];					
						 $this->load->model('Mysmartportal_model');
						 $check = $this->Mysmartportal_model->checkuser($email,$email);											
						  if(($check>0) or ($sheetData[$j]['F']==1) )
						  {
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
													  $password=$sheetData[$x]['D'];
													  $company_name = $sheetData[$x]['E'];     
													  $cus_code=$sheetData[$x]['F'];
													  $role=$sheetData[$x]['G'];
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
																'user_name'=>$email,
																'password'=>$password,
																'cus_code'=>$cus_code,
																'company_name'=>$company_name,
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
																				 }
													  }

							}
				redirect(base_url()."index.php/welcome/allusers/inserted/".$x);
   
	}
	        
	 /**
	 *  Open Invoices Page Loading. 
	 */       
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('invoices');
						 $this->load->view('invoice_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/dashboard"); 
					 }
				 }
				
	}
	 /**
	 *  Past Invoices Page Loading. 
	 */       
	public function past_due_invoices()
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('past_invoices');
						 $this->load->view('past_invoices_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/dashboard"); 
					 }
				 }
				
	}
	/**
	 *  All Invoices Data Fetching from API. 
	 *  @API(E21GetInvoiceList)
	 *  @Parama
	 *  Page Limit (25)
	 */  
	public function all_invoices($count=25)
	{
			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			//Getting Locations 
			$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
			  
					}

			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetInvoiceList/'.$cust_code.'/'.$ship_to_code.'/'.$email1.'/UserType/PermLevel/'.$count.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213/invoice_numb/desc'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('Invoice') as $node)
									   {	
									   								  
									               echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><billname>".$node->getElementsByTagName('billname')->item(0)->nodeValue."</billname><billcity>".$node->getElementsByTagName('billcity')->item(0)->nodeValue."</billcity><billst>".$node->getElementsByTagName('billst')->item(0)->nodeValue."</billst><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shipcity>".$node->getElementsByTagName('shipcity')->item(0)->nodeValue."</shipcity><shipst>".$node->getElementsByTagName('shipst')->item(0)->nodeValue."</shipst><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><entry_type>".$node->getElementsByTagName('entry_type')->item(0)->nodeValue."</entry_type><amount>".$node->getElementsByTagName('totalamount')->item(0)->nodeValue."</amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><tracker_no>".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue."</tracker_no><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></Invoice>";
			                           }						   
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  }

	}
	/**
	 *  All Past Due Invoices Data Fetching from API. 
	 *  @API(E21GetInvoiceList)
	 *  @Parama
	 *  Page Limit (25)
	 */  
	public function all_past_invoices($count=25)
	{
			$rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			$email1=$this->session->userdata('email');
			//getting Locations 
			$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
			//echo "http://216.234.105.194:8088/Alpha.svc/E21PastDueInvoices/".$cust_code."/".$ship_to_code."/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213";
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21PastDueInvoices/'.$cust_code.'/'.$ship_to_code.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
			
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('E21PastDueInvoices') as $node)
									   {	
									   								  
									               echo "<Invoice diffgr:id='Invoice1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><invoice_numb>".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue."</invoice_numb><billto_code>".$node->getElementsByTagName('billto_code')->item(0)->nodeValue."</billto_code><busname>".$node->getElementsByTagName('bus_name')->item(0)->nodeValue."</busname><billtoaddress>".$node->getElementsByTagName('BillToAddress')->item(0)->nodeValue."</billtoaddress><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><shipname>".$node->getElementsByTagName('shipname')->item(0)->nodeValue."</shipname><shiptoaddress>".$node->getElementsByTagName('ShipToAddress')->item(0)->nodeValue."</shiptoaddress><inv_date>".$node->getElementsByTagName('inv_date')->item(0)->nodeValue."</inv_date><open_amount>".$node->getElementsByTagName('open_amount')->item(0)->nodeValue."</open_amount><due_date>".$node->getElementsByTagName('due_date')->item(0)->nodeValue."</due_date><cust_po>".$node->getElementsByTagName('cust_po')->item(0)->nodeValue."</cust_po><order_numb>".$node->getElementsByTagName('order_numb')->item(0)->nodeValue."</order_numb><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></Invoice>";
			}						   
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									   
						  }

	}
	/**
	 *  All Invoices Data to CSV. 
	 *  @API(E21GetInvoiceList)
	 *  @Parama
	 *  Email
	 */ 
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
									 foreach ($rss->getElementsByTagName('Invoice') as $node)
									   {	
									   							  
									               if($csv_data=="")
												   {
												    $csv_data = $node->getElementsByTagName('invoice_numb')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('inv_date')->item(0)->nodeValue).",".$node->getElementsByTagName('totalamount')->item(0)->nodeValue.",".str_replace(",","",$node->getElementsByTagName('due_date')->item(0)->nodeValue).",".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue.",".$node->getElementsByTagName('cust_po')->item(0)->nodeValue;
												   }else{
												   $csv_data = $csv_data."_".$node->getElementsByTagName('invoice_numb')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('inv_date')->item(0)->nodeValue).",".$node->getElementsByTagName('totalamount')->item(0)->nodeValue.",".str_replace(",","",$node->getElementsByTagName('due_date')->item(0)->nodeValue).",".$node->getElementsByTagName('tracker_no')->item(0)->nodeValue.",".$node->getElementsByTagName('cust_po')->item(0)->nodeValue;
                                                    }												 
										}						 

							  $odersdata = explode("_",$csv_data);
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
	/**
	 *  All Invoices Search. 
	 *  @API(E21GetInvoiceList_Search)
	 *  @Parama
	 *  From Date
	 *  To Date
	 *  Invoice Number
	 */ 
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
	/**
	 * Single Invoice View Page Loading with Invoice Data. 
	 * API()
	 * @params
	 * Order Id
	 */ 
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
							
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('invoice_view');
						 $this->load->view('invoice_view_footer');
					 }
  }
  
  	/**
	 *  PDF Genaration and Email for Order View & Invoice. 
	 */ 
  public function pdf($order_id = null,$email = null,$type=null)
  {
    $this->load->helper('pdf_helper');
    $data['tittle'] = "PDF";
	$data['usemail'] = str_replace('ZZZ', '@', $email);
	$data['type'] = $type;
	            $cust_code= $this->session->userdata('cust_code'); 
				$email1= $this->session->userdata('email'); 
				//getting Locations 
				$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
					if($ship_to_code == ""){
							$ship_to_code = $locationsdata->ship_to_code;
					}else{
							$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
					}
                                        }
				
				$rss = new DOMDocument(); 
			    @$rss->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderInvoiceHeader/".$cust_code."/".$ship_to_code."/".$order_id."/ /".$email1."/UserType/PermLevel/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
					
					
			    	
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
										   //Getting Locations 
										   $this->load->model('Mysmartportal_model');
											$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
										
											$ship_to_code = "";
											foreach($locations as $locationsdata)
											{
													if($ship_to_code == ""){
															$ship_to_code = $locationsdata->ship_to_code;
													}else{
															$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
													}
                                            }
										   
										   
										    $rss1 = new DOMDocument(); 
										   	@$rss1->load("http://216.234.105.194:8088/Alpha.svc/E21GetOrderDetails/".$cust_code."/".$ship_to_code."/".$order_id."/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
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
                                            $i++;
									        $params	= $params1;									  
										  }
									        $data['params'] =  $params;
                                            $this->load->view('pdfreport', $data);
											exit;
											if($type==2)
											{
												
											}else{
											redirect(base_url()."index.php/welcome/orders");
											}											
  }
  
    /**
	 *  Service Contracts Page Loading. 
	 */ 
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('service_contracts');
						 $this->load->view('service_contracts_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }	  
  }
 /**
 *  All Service Contracts Data Fetching from API.
 *  @API(E21ActiveServiceContracts)
 *  @params
 *  User Status 
 *  Page Limit (25)
 */ 
  public function all_servicecontracts($userstatus = null,$count=25,$location=null)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
						$rss = new DOMDocument(); 
						$cust_code= $this->session->userdata('cust_code'); 
						$email1=$this->session->userdata('email');
						//Getting Locations
						$this->load->model('Mysmartportal_model');
					    $locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					
					if($location==""){
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					}else if($location == "All")
					{
						foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					}else{
					$ship_to_code = $location;
					
					}
						
						
						$ServiceContractList_node = "ServiceContractList";
						if($userstatus=="Active")
						{
						$ServiceContractList_node = "ActiveServiceContracts";
                     
						$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21ActiveServiceContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'));
						
						}else if($userstatus=="Expired")
						{
						$ServiceContractList_node = "AssetsUnderContract";
							$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetExpiredContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  );
						
						}else if($userstatus=="Cancelled")
						{
						$ServiceContractList_node = "ServiceContractList";
							$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractDueToRenew/'.$cust_code.'/'.$ship_to_code.'/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  );
						
						}else
						{
						
						$ServiceContractList_node = "GetAllActiveContract";
							$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetAllExpiredContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  );
						
						}
					
											  
									  foreach ($urlArray as $url) 
									  {
												   $rss->load($url['url']);
													  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
												   foreach ($rss->getElementsByTagName($ServiceContractList_node) as $node)
												   {
															if($userstatus=="Active")
															{
															
														
															echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('Contract')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('ServiceDescription')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('ServiceLevelHeaderlevel')->item(0)->nodeValue."</service_level><location>".$node->getElementsByTagName('Address')->item(0)->nodeValue.", ".$node->getElementsByTagName('City')->item(0)->nodeValue.", ".$node->getElementsByTagName('ST')->item(0)->nodeValue.", ".$node->getElementsByTagName('zip')->item(0)->nodeValue."</location><st>".$node->getElementsByTagName('ST')->item(0)->nodeValue."</st><contract_status>Active</contract_status><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
														   
															
															}else if($userstatus=="Expired")
															{
															echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('Contract')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('ServiceDescription')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('ServiceLevelHeaderlevel')->item(0)->nodeValue."</service_level><location>".$node->getElementsByTagName('Address')->item(0)->nodeValue.",".$node->getElementsByTagName('ST')->item(0)->nodeValue.",".$node->getElementsByTagName('zip')->item(0)->nodeValue."</location><st>".$node->getElementsByTagName('ST')->item(0)->nodeValue."</st><contract_status>Expired</contract_status><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
														   
															
															}else if($userstatus=="Cancelled")
															{

															echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('cconth_id')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('fr_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('to_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('descr')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level_id')->item(0)->nodeValue."</service_level><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
														   
															}else{
															echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><contract_number>".$node->getElementsByTagName('cconth_id')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('fr_date')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('to_date')->item(0)->nodeValue."</end_date><description>".$node->getElementsByTagName('descr')->item(0)->nodeValue."</description><service_level>".$node->getElementsByTagName('service_level_id')->item(0)->nodeValue."</service_level><error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</error></contracts>";
														   
															}									   
													 }                          					    
													  echo "</DocumentElement></diffgr:diffgram></DataTable>";
													}	
									  

				}  
  }
  
 /**
 *  All Service Contracts search Fetching from API.
 *  @API(ServiceContractList)
 *  @params
 *  User Status
 *  From Date
 *  To Date
 *  Contract Number (Optional) 
 *  Page Limit (25)
 */ 
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
 /**
 *  All Service Contracts To Map View Fetching from API.
 *  @API(ServiceContractList)
 *  @params
 *  Service Number
 */ 
   public function all_servicecontracts_to_map_view($servicenumber = "")
  {
				  if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
					{
					   redirect(base_url()."index.php/welcome/index");
					
					}else{  
					
							$rss = new DOMDocument(); 
							$cust_code= $this->session->userdata('cust_code'); 
							$email1=$this->session->userdata('email');
								$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					if($servicenumber!="")
					{
					$ship_to_code = $servicenumber;
					
					}
							//echo 'http://216.234.105.194:8088/Alpha.svc/E21ActiveServiceContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213';
							$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21ActiveServiceContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'));
								 foreach ($urlArray as $url) 
										  {
												echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
													  
													   $rss->load($url['url']);
													  foreach ($rss->getElementsByTagName('ActiveServiceContracts') as $node)
													   {	
														echo "<contracts diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><description>".$node->getElementsByTagName('ServiceDescription')->item(0)->nodeValue."</description><location>".$node->getElementsByTagName('Address')->item(0)->nodeValue.",".$node->getElementsByTagName('City')->item(0)->nodeValue.",".$node->getElementsByTagName('ST')->item(0)->nodeValue.",".$node->getElementsByTagName('zip')->item(0)->nodeValue."</location><contract_number>".$node->getElementsByTagName('Contract')->item(0)->nodeValue."</contract_number><start_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</start_date><end_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</end_date><service_level>".$node->getElementsByTagName('ServiceLevelHeaderlevel')->item(0)->nodeValue."</service_level><contract_status>Active</contract_status></contracts>";	 
													   }						 
												echo "</DocumentElement></diffgr:diffgram></DataTable>";
							   
										  }
										  
				   }  
	
  
  }
   /**
 *  All Service Contracts to CSV Fetching from API.
 *  @API(ServiceContractList)
 */ 
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
									   foreach ($rss->getElementsByTagName('ServiceContractList') as $node)
									   {	
									   							  
									               if($csv_data=="")
												   {
												    $csv_data = $node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('start_date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('end_date')->item(0)->nodeValue).",".$node->getElementsByTagName('description')->item(0)->nodeValue.",".$node->getElementsByTagName('service_level')->item(0)->nodeValue.",".$node->getElementsByTagName('location')->item(0)->nodeValue.",".$node->getElementsByTagName('contract_status')->item(0)->nodeValue;
												   }else{
												   $csv_data = $csv_data."_".$node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('start_date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('end_date')->item(0)->nodeValue).",".$node->getElementsByTagName('description')->item(0)->nodeValue.",".$node->getElementsByTagName('service_level')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('location')->item(0)->nodeValue).",".$node->getElementsByTagName('contract_status')->item(0)->nodeValue;
                                                    }												 
		                                	}						 

							                   $odersdata = explode("_",$csv_data);
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
  
 /**
 *  Reset Password and Send Link to user Email.
 *  @params
 *  User Email
 */ 
  public function resetpassword_link($email1)
  {
	  $ran_val = rand(9999999,99999999999);
	  
	  
	  $email = str_replace("zzz","@",$email1);
	  $this->load->model('mysmartportal_model');
	  $params= array('veryfy_code'=>$ran_val,
	                  'updated_date'=>date("y-m-d h:s"));
	  $update = $this->mysmartportal_model->updatevyryfycode($params,$email);  
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
 /**
 *  User Reset Password Page Loading.
 *  @API(ServiceContractList)
 *  @params
 *  Code
 */ 
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
         $data["linkstatus"] = round($diff_in_hrs);
	   
	   $this->load->view("password_header"); 
	   $this->load->view("resetpassword",$data); 
	   $this->load->view("footer"); 
	  
  }
 /**
 *  Save User Reset Password .
 */ 
  public function saveresetpassword()
  {
	  $params = array('password'=>$this->input->post('password'));
	  $code = $this->input->post('veryfy');  
	  $this->load->model('Mysmartportal_model');
	  $sve = $this->Mysmartportal_model->savepassword($params,$code);
	  redirect(base_url()."index.php/welcome/index");
  }
  
   /**
 *   ForgetPassword Page Loading.
 */ 
   public function forgetpassword($error=null)
  {
       $data["error"] = $error;
	   $this->load->view("password_header"); 
	   $this->load->view("forgetpassword",$data); 
	   $this->load->view("footer"); 
	  
  }
 /**
 *  ForgetPassword Link genaration And sending to User Email.
 */ 
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
 /**
 *  Sales Rep And CSR data fetching from API.
 *  @API(SalesPersonDetails, CSRDetails)
 */ 
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
  
 /**
 *  Open Ticket data fetching from API.
 *  @API(QueryTicketInfo)
 *  @Params
 *  Ticket Number
 */ 
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
											   {	
												echo "<queryticketinfo diffgr:id='queryticketinfo' msdata:rowOrder='0' diffgr:hasChanges='inserted'><opened>".$node->getElementsByTagName('Opened')->item(0)->nodeValue."</opened><lastaction>".$node->getElementsByTagName('LastAction')->item(0)->nodeValue."</lastaction><enteredby>".$node->getElementsByTagName('Enteredby')->item(0)->nodeValue."</enteredby><ticketnumber>".$node->getElementsByTagName('TicketNumber')->item(0)->nodeValue."</ticketnumber><problemdescription>".$node->getElementsByTagName('ProblemDescription')->item(0)->nodeValue."</problemdescription><currentstatus>".$node->getElementsByTagName('CurrentStatus')->item(0)->nodeValue."</currentstatus><customername>".$node->getElementsByTagName('CustomerName')->item(0)->nodeValue."</customername><calledinby>".$node->getElementsByTagName('CalledInBy')->item(0)->nodeValue."</calledinby><email>".$node->getElementsByTagName('Email')->item(0)->nodeValue."</email><serviceagent>".$node->getElementsByTagName('ServiceAgent')->item(0)->nodeValue."</serviceagent><partnumber>".$node->getElementsByTagName('PartNumber')->item(0)->nodeValue."</partnumber><partdescription>".$node->getElementsByTagName('PartDescription')->item(0)->nodeValue."</partdescription><serialnumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</serialnumber><city>".$node->getElementsByTagName('City')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('State')->item(0)->nodeValue."</state><lastactivity>".$node->getElementsByTagName('LastActivity')->item(0)->nodeValue."</lastactivity><do>".$node->getElementsByTagName('DO')->item(0)->nodeValue."</do><do>".$node->getElementsByTagName('DO')->item(0)->nodeValue."</do></queryticketinfo>";
				                               }                              
				                   }						    
												  echo "</DocumentElement></diffgr:diffgram>";
											   
								  

			                  } 
		  
		  
		  
  
  }
  
  
 /**
 *  All assets Page loading
 */  
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
					 
                     $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							
							$cust_code= $this->session->userdata('cust_code'); 
							$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					$state = "";
					$city = "";
					
					
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
									$state = $locationsdata->state;
									$city = $locationsdata->city;
									
							}else{
									$ship_to_code = $ship_to_code.",".$locationsdata->ship_to_code;
									$state = $state.",".$locationsdata->state;
									$city = $city.",".$locationsdata->city;
							}
                    }
					
					$data['locations'] = explode(",",$ship_to_code);
					$data['state'] = explode(",",$state);
					$data['city'] = explode(",",$city);
					 
						 $this->load->view('header',$data);
						 $this->load->view('assetinventory',$data);
						 $this->load->view('assetinventory_footer',$data);
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  
  }
 /**
 *  Assets Under Contract Page Loading.
 *  @Params
 *  Contract Number
 */ 
    public function assets_under_contracts($Contract_Number=null)
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('assets_under_contracts');
						 $this->load->view('assets_under_contracts_footer',$data);
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  
  }
  
  /**
 *   No Contract Page Loading.
 *  @Params
 *  Contract Number
 */ 
    public function assets_no_contracts($Contract_Number=null)
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('assets_no_contratc');
						 $this->load->view('assets_no_contratc_footer',$data);
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  
  }
    /**
 *   No Contract Page Loading.
 *  @Params
 *  Contract Number
 */ 
    public function assets_under_warranty($Contract_Number=null)
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('assets_under_warranty');
						 $this->load->view('assets_under_warranty_footer',$data);
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  
  }
  
 /**
 *  Assets End Of Life Page Loading.
 *  @Params
 *  Contract Number
 */ 
  
   public function assetsendoflife($Contract_Number=null)
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('assets_end_of_life');
						 $this->load->view('assets_end_of_life_footer',$data);
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  
  }
 /**
 *  All Assets to CSV from API
 *  @API(AssetsPage) 
 */ 
  
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
									   foreach ($rss->getElementsByTagName('AssetsPage') as $node)
									   {	
									   							  
									               if($csv_data=="")
												   {
												    $csv_data = $node->getElementsByTagName('SerialNumber')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Part_Number')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('Part_Description')->item(0)->nodeValue).",".$node->getElementsByTagName('Type')->item(0)->nodeValue.",".$node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Start_Date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('End_date')->item(0)->nodeValue).",".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue.",".$node->getElementsByTagName('Options')->item(0)->nodeValue;
												   }else{
												   $csv_data = $csv_data."_".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Part_Number')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('Part_Description')->item(0)->nodeValue).",".$node->getElementsByTagName('Type')->item(0)->nodeValue.",".$node->getElementsByTagName('contract_number')->item(0)->nodeValue.",".str_replace(","," ",$node->getElementsByTagName('Start_Date')->item(0)->nodeValue).",".str_replace(","," ",$node->getElementsByTagName('End_date')->item(0)->nodeValue).",".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue.",".$node->getElementsByTagName('Options')->item(0)->nodeValue;
                                                    }												 
	                                	}						 
							  $odersdata = explode("_",$csv_data);
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
  
 /**
 *  All Assets data fetching from API.
 *  @API(AssetsPage) 
 *  $params
 *  Contract Number
 *  Page Limit(25)
 */ 
   
  public function all_assets($Contract_Number=null,$count1=25)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
				
				$location = @$this->input->post("location");
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
	         //Locations getting 
			 $this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					if($location!="")
					{
					if($location == "All")
					{
					
					
					}else
					{
					$ship_to_code = $location;
					
					}
					
					
					}
			// echo 'http://216.234.105.194:8088/Alpha.svc/AssetsPage/'.$cust_code.'/'.$ship_to_code.'/ /'.$Contract_Number.'/'.$count1.'/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213';
			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/AssetsPage/'.$cust_code.'/'.$ship_to_code.'/ /'.$Contract_Number.'/'.$count1.'/1/End_date/desc/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
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
										
										$assetiteminformation = "<document>".$node->getElementsByTagName('AssetItemDetails')->item(0)->nodeValue."</document>";
										
										$assetiteminformationfinal = simplexml_load_string($assetiteminformation);
										//print_r($assetiteminformationfinal);
											echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Part_Number')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('Part_Description')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('Type')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('contract_number')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('Start_Date')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('End_date')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('Contract_Status')->item(0)->nodeValue."</Contract_Status><Options>".$node->getElementsByTagName('Options')->item(0)->nodeValue."</Options><assetaddress>".$node->getElementsByTagName('AssetAddress')->item(0)->nodeValue."</assetaddress><assetitemdetails>".$assetiteminformationfinal."</assetitemdetails><totalrec>".$node->getElementsByTagName('TotRecD')->item(0)->nodeValue."</totalrec><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
		                               
										
										}	
								   
									 }                              					    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
										  
					      }
									   
						  

	}  
  }
  
 /**
 *  All Assets Under Contract data fetching from API.
 *  @API(E21GetAssetsUnderContract) 
 *  $params
 *  Contract Number
 *  Page Limit(25)
 */ 
    public function all_assets_under_contracts_api($Contract_Number=null,$count1=1)
	  {
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{  
			if($Contract_Number==null)
				{
				$Contract_Number = " ";
				
				}else if($Contract_Number=="%20")
				{
				
				$Contract_Number = " ";
				
				}else
				{
				$Contract_Number = " ";
				}
					$user_status = "";
					$rss = new DOMDocument(); 
					$cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
					if($ship_to_code == ""){
							$ship_to_code = $locationsdata->ship_to_code;
					}else{
							$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
					}
			
					
					}
					//echo "http://216.234.105.194:8088/Alpha.svc/E21GetAssetsUnderContract/".$cust_code."/".$count1."/".$ship_to_code."/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213";
					$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetAssetsUnderContract/'.$cust_code.'/'.$ship_to_code.'/'.$count1.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
										  );
										  
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
												  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
											   foreach ($rss->getElementsByTagName('AssetsUnderContract') as $node)
											   {
													echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('Serial')->item(0)->nodeValue."</SerialNumber><servicedescription>".$node->getElementsByTagName('ProductDesc')->item(0)->nodeValue."</servicedescription><Part_Number></Part_Number><Part_Description>".$node->getElementsByTagName('ProductDesc')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('ProdType')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('Contract')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('ContractFrom')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('ContractStatus')->item(0)->nodeValue."</Contract_Status><Options></Options><assetaddress></assetaddress><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
											   }                      					    
												  echo "</DocumentElement></diffgr:diffgram></DataTable>";

			                      }  
	              }
				  
	  }	


 public function all_assets_no_contracts_api($Contract_Number=null,$count1=1)
	  {
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{  
			if($Contract_Number==null)
				{
				$Contract_Number = " ";
				
				}else if($Contract_Number=="%20")
				{
				
				$Contract_Number = " ";
				
				}else
				{
				$Contract_Number = " ";
				}
					$user_status = "";
					$rss = new DOMDocument(); 
					$cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					
					$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21AssetsWithNoContract/'.$cust_code.'/'.$ship_to_code.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
										  );
										  
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
												  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
											   foreach ($rss->getElementsByTagName('AssetsWithNoContract') as $node)
											   {
													echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('Serial')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Product')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('ProductDesc')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('ProdType')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('Contract')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('ContractFrom')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('ContractTo')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('ContractStatus')->item(0)->nodeValue."</Contract_Status><Options></Options><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
											   }                      					    
												  echo "</DocumentElement></diffgr:diffgram></DataTable>";

			                      }  
	              }
				  
	  }		
	  
	  
	  
	  public function all_assets_under_warranty_api($Contract_Number=null,$count1=1)
	  {
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{  
			if($Contract_Number==null)
				{
				$Contract_Number = " ";
				
				}else if($Contract_Number=="%20")
				{
				
				$Contract_Number = " ";
				
				}else
				{
				$Contract_Number = " ";
				}
					$user_status = "";
					$rss = new DOMDocument(); 
					$cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					//getting locations 
					$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					
					$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21AssetsUnderWarranty/'.$cust_code.'/'.$ship_to_code.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
										  );
										  
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
												  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
											   foreach ($rss->getElementsByTagName('AssetsUnderWarranty') as $node)
											   {
													echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('Serial')->item(0)->nodeValue."</SerialNumber><servicedescription>".$node->getElementsByTagName('servicedescription')->item(0)->nodeValue."</servicedescription><Part_Number>".$node->getElementsByTagName('Product')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('ProductDesc')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('ProdType')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('Contract')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('ContractFrom')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('ContractTo')->item(0)->nodeValue."</End_date><Contract_Status>".$node->getElementsByTagName('ContractStatus')->item(0)->nodeValue."</Contract_Status><Options></Options><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
											   }                      					    
												  echo "</DocumentElement></diffgr:diffgram></DataTable>";

			                      }  
	              }
				  
	  }		
	  

 /**
 *  All Assets End Of Life data fetching from API.
 *  @API(E21GetAssetsEndOfLife) 
 *  $params
 *  Contract Number
 *  Page Limit(25)
 */ 
 public function all_assets_end_of_life($Contract_Number=null,$count1=25)
	  {
			if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
			{
			   redirect(base_url()."index.php/welcome/index");
			
			}else{  
			if($Contract_Number==null)
				{
				$Contract_Number = " ";
				
				}else if($Contract_Number=="%20")
				{
				
				$Contract_Number = " ";
				
				}else
				{
				$Contract_Number = " ";
				}
					$user_status = "";
					$rss = new DOMDocument(); 
					$cust_code= $this->session->userdata('cust_code'); 
					$email1=$this->session->userdata('email');
					$this->load->model('Mysmartportal_model');
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
					$ship_to_code = "";
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
							}else{
									$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
							}
                    }
					//echo "http://216.234.105.194:8088/Alpha.svc/E21GetAssetsEndOfLife/".$cust_code."/".$ship_to_code."/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213";
				    $urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetAssetsEndOfLife/'.$cust_code.'/'.$ship_to_code.'/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
										  );
										  
								  foreach ($urlArray as $url) 
								  {
											   $rss->load($url['url']);
												  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
											   foreach ($rss->getElementsByTagName('AssetsEndOfLife') as $node)
											   {
													echo "<assetspage diffgr:id='AssetsPage1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><SerialNumber>".$node->getElementsByTagName('Serial')->item(0)->nodeValue."</SerialNumber><Part_Number>".$node->getElementsByTagName('Product')->item(0)->nodeValue."</Part_Number><Part_Description>".$node->getElementsByTagName('ProductDesc')->item(0)->nodeValue."</Part_Description><Type>".$node->getElementsByTagName('ServiceDescription')->item(0)->nodeValue."</Type><contract_number>".$node->getElementsByTagName('Contract')->item(0)->nodeValue."</contract_number><Start_Date>".$node->getElementsByTagName('ContrFrom')->item(0)->nodeValue."</Start_Date><End_date>".$node->getElementsByTagName('ContrTo')->item(0)->nodeValue."</End_date><EndofLifeDate>".$node->getElementsByTagName('EndofLifeDate')->item(0)->nodeValue."</EndofLifeDate> <Contract_Status>".$node->getElementsByTagName('ContractStatus')->item(0)->nodeValue."</Contract_Status><Options></Options><assetaddress>".$node->getElementsByTagName('Address')->item(0)->nodeValue."</assetaddress><Error>".$node->getElementsByTagName('Error')->item(0)->nodeValue."</Error></assetspage>";
											   }                      					    
												  echo "</DocumentElement></diffgr:diffgram></DataTable>";

			                      }  
	              }
				  
	  }		 	  
 /**
 *  All Assets By Search  data fetching from API.
 *  @API(E21GetAssetsEndOfLife) 
 *  $params
 *  Serial Number
 */ 
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

 /**
 *  Contracts Count data fetching from API.
 *  @API(CustomerContractsCount) 
 */ 
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
 /**
 *  All Open Tickets By Email data fetching from API.
 *  @API(CheckServiceTicket_Email) 
 *  @Params
 *  User Status
 */ 
  public function all_opentickets_by_email($userstatus = null)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
	        $rss = new DOMDocument(); 
			$cust_code= $this->session->userdata('cust_code'); 
			
				$this->load->model('Mysmartportal_model');
			    $locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);							
								$ship_to_code = "";
								foreach($locations as $locationsdata)
								{
										if($ship_to_code == ""){
												$ship_to_code = $locationsdata->ship_to_code;
										}else{
												$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
										}
							     }
			
			$email1=$this->session->userdata('email');

			$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/CheckServiceTicket_Email/'.$email1.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
								  );
								  
						  foreach ($urlArray as $url) 
						  {
			                           $rss->load($url['url']);
									      echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
									   foreach ($rss->getElementsByTagName('CheckServiceTicket') as $node)
									   {
                                       
										echo "<checkserviceticket diffgr:id='contract1' msdata:rowOrder='0' diffgr:hasChanges='inserted'><opened>".$node->getElementsByTagName('Opened')->item(0)->nodeValue."</opened><lastaction>".$node->getElementsByTagName('LastAction')->item(0)->nodeValue."</lastaction><enteredby>".$node->getElementsByTagName('Enteredby')->item(0)->nodeValue."</enteredby><ticketnumber>".$node->getElementsByTagName('TicketNumber')->item(0)->nodeValue."</ticketnumber><problemdescription>".$node->getElementsByTagName('ProblemDescription')->item(0)->nodeValue."</problemdescription><currentstatus>".$node->getElementsByTagName('CurrentStatus')->item(0)->nodeValue."</currentstatus><customername>".$node->getElementsByTagName('CustomerName')->item(0)->nodeValue."</customername><calledinby>".$node->getElementsByTagName('CalledInBy')->item(0)->nodeValue."</calledinby><email>".$node->getElementsByTagName('Email')->item(0)->nodeValue."</email><serviceagent>".$node->getElementsByTagName('ServiceAgent')->item(0)->nodeValue."</serviceagent><do>".$node->getElementsByTagName('DO')->item(0)->nodeValue."</do><serialnumber>".$node->getElementsByTagName('SerialNumber')->item(0)->nodeValue."</serialnumber> <partnumber>".$node->getElementsByTagName('PartNumber')->item(0)->nodeValue."</partnumber><city>".$node->getElementsByTagName('City')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('State')->item(0)->nodeValue."</state><lastactivity>".$node->getElementsByTagName('LastActivity')->item(0)->nodeValue."</lastactivity></checkserviceticket>";
		                               
																			   
										 }                          					    
									      echo "</DocumentElement></diffgr:diffgram></DataTable>";
									    }	
						  

	}  
  }
  /**
 *  Exporting All users to CSV.

 */  
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
  
 /**
 *  Contracts to Renew Count data fetching from API.
 *  @API(ContractsToRenewCount) 
 */  
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
 /**
 *  All Contracts to Renew data fetching from API.
 *  @API(ContractsToRenewCount) 
 *  @params
 *  Page Limit(25)
 */ 
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
 /**
 *  Query Device Information  data fetching from API.
 *  @API(QueryDeviceInfo)
 *  @params
 *  Serial
 */ 
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
  
 /**
 *  Renew Service Contracts Page Loading.
 */  
  
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('renew_contracts');
						 $this->load->view('renew_contracts_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
  }
 /**
 *  User Profile Edit Request Data Emailing to Admin.
 */  
  
  public function user_profile_edit_req()
  {
   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
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
										 
										  		 $admin_id=2;
										 $to_user_id = $this->session->userdata('userid');
										 $notification_subject = "Lowry Smart Portal - Admin";
										 $notification_boby = "Your profile update request is received. We received a profile update request from your account. We will process the request shortly. If this was a mistake or you didn't authorize for profile update, please contact Lowry.";
										 $notification_param = array("from_user_id"=>$admin_id,
										                             "to_user_id"=>$to_user_id,
																	 "msg_subject"=>$notification_subject,
																	 "msg_body"=>$notification_boby,
																	 "read_status"=>0,
																	 "created_date"=>date("y-m-d h:s"),
																	 "updated_date"=>date("y-m-d h:s")
																	 );
										 
									
										 
										 $notifications = $this->Mysmartportal_model->savenotifications($notification_param);
										 
										 
										 
  redirect(base_url()."index.php/welcome/user_profile"); 
  
  }
  
  
  }
 /**
 *  User Profile Edit Request Data Emailing to Admin.
 */ 
  public function save_new_service_req()
  {
   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
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
                                    $city=@$this->input->post('city');									
                                    $state=@$this->input->post('state11');									
                                    $zip=@$this->input->post('zip');		
					                $verify=@$this->input->post('customRadio');				
                                    $printer=@$this->input->post('printer1');
									$type = "";
									if($printer == "Printer")
									{
									$type = @$this->input->post('printer_type');
									}else if($printer == "Scanner")
									{
									$type = @$this->input->post('scaner_type');
									}
                                    									
                                    									
                                    $message=@$this->input->post('message');									
                                  									
									
  $to = "bhaskar@livait.com,nikd@lowrysolutions.com,rami@lowrysolutions.com,dhamodhar.enaganti@livait.net,uzwal.chaganti@livait.com,tomha@lowrysolutions.com";
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
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">Address Line1: '.$address_1.'<br>Address Line2: '.$address_2.'<br>City: '.$city.'<br>State: '.$state.'<br>Zip: '.$zip.'</font></td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Verify</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$verify.'</font></td></tr>
<tr><td colspan="2" style="font-size:14px;font-weight:bold;background-color:#eee;border-bottom:1px solid #dfdfdf;padding:7px 7px">Incident Information</td></tr>
<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Incident Type</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$printer.'</font></td></tr>

<tr bgcolor="#EAF2FA"><td colspan="2"><font style="font-family:sans-serif;font-size:12px"><strong>Specify Incident Type</strong></font></td></tr>
<tr bgcolor="#FFFFFF"><td width="20">&nbsp;</td><td><font style="font-family:sans-serif;font-size:12px">'.$type.'</font></td></tr>                        
                      
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
										 
										 		 $admin_id=2;
										 $to_user_id = $this->session->userdata('userid');
										 $notification_subject = "Your Lowry service request has been received!- Admin";
										 $notification_boby = "Thank you for submitting a new service request for device #".$serial_no.". Your request has been received. A service coordinator will be contacting you shortly";
										 $notification_param = array("from_user_id"=>$admin_id,
										                             "to_user_id"=>$to_user_id,
																	 "msg_subject"=>$notification_subject,
																	 "msg_body"=>$notification_boby,
																	 "read_status"=>0,
																	 "created_date"=>date("y-m-d h:s"),
																	 "updated_date"=>date("y-m-d h:s")
																	 );
										 
									
										 $this->load->model('Mysmartportal_model');
										 $notifications = $this->Mysmartportal_model->savenotifications($notification_param);
										 
										 
										 
  redirect(base_url()."index.php/welcome/technical_support/sucess");  
  
  }
  
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
					
					
					$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					$data['user_notifications'] = $user_notification;
					 $this->load->view('header',$data);
                     $this->load->view('messages',$data);  
					 
					 
					 }
  }
  
   public function admin_messages()
	  {
	   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
					{
					   redirect(base_url()."index.php/welcome/index");
					
					}else{
	  
						$this->load->model('Mysmartportal_model');

						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
						$this->load->view('admin_header',$data);
						 
						 $this->load->view('admin_messages',$data);  
						 
						 
						 }
	  }
  
  
  public function view_admin_message($id=null)
  {
   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
				
				 $this->load->model('Mysmartportal_model');
                   if($id!=""){
					$this->Mysmartportal_model->updatestatusmsg($id);
					
					}
                   
					$user_notification = $this->Mysmartportal_model->get_single_notification_view($id);
					$data['user_notifications'] = $user_notification;
					
			        $replys = $this->Mysmartportal_model->get_All_replys_view($id);
					$data['replys'] = $replys;
					
					
					 $this->load->view('admin_header',$data);
                     $this->load->view('admin_messageview',$data);  
					 
					 
					 }
  }
 
public function viewmessage($id=null)
  {
   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
  
                    $this->load->model('Mysmartportal_model');
					$usermenu=$this->Mysmartportal_model->getmenu($this->session->userdata('userid'));
					if($id!=""){
					$this->Mysmartportal_model->updatestatusmsg($id);
					
					}
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
					$user_notification = $this->Mysmartportal_model->get_single_notification_view($id);
					$data['user_notifications'] = $user_notification;
					
					
					  $replys = $this->Mysmartportal_model->get_All_replys_view($id);
					$data['replys'] = $replys;
					$data['menu']=$usermenu1;
					$data['ids']=$usermenu[0]->menu_id;
					
					
/*$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;*/
					 $this->load->view('header',$data);
                     $this->load->view('messageview',$data);  
					 
					 
					 }
  }

public function assetsmap($cnumber=null)
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
					if($cnumber!=null)
					{
					$data["contractnumber"] = $cnumber;
					
					}else
					{
						$data["contractnumber"] = "%20";
					
					}
					
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
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
							
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
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
					
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
					 $this->load->view('header',$data);
                     $this->load->view('servicerequest',$data);  
					 
					 
					 }
  }
  
  public function phpemail()
  {
$this->load->view('test_view');
   exit;
  
  }
  
public function active_service_contracts()
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
					
					
					
					$cust_code= $this->session->userdata('cust_code'); 
					$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
					$ship_to_code = "";
					$state = "";
					$city = "";
					
					
					foreach($locations as $locationsdata)
					{
							if($ship_to_code == ""){
									$ship_to_code = $locationsdata->ship_to_code;
									$state = $locationsdata->state;
									$city = $locationsdata->city;
									
							}else{
									$ship_to_code = $ship_to_code.",".$locationsdata->ship_to_code;
									$state = $state.",".$locationsdata->state;
									$city = $city.",".$locationsdata->city;
							}
                    }
					
					$data['locations'] = explode(",",$ship_to_code);
					$data['state'] = explode(",",$state);
					$data['city'] = explode(",",$city);
					
                     if($orderpageaccess=="ok")
					 {
					 
                         $user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						 $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('active_contracts');
						 $this->load->view('active_contracts_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
	  
	  
	  
	  
	  
  }
  
  
 public function expired_service_contracts()
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
					 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('expired_contracts');
						 $this->load->view('expired_contracts_footer');
				     }else
					 {
						 redirect(base_url()."index.php/welcome/technical_support"); 
					 }
				 }
	  
	  
	  
	  
	  
	  
  }
  
  public function bulkmessage()
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
					

						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
					
					
					 $this->load->view('admin_header',$data);
                     $this->load->view('bulkmsg');  
					 
					 
					 }
  }
  
  public function composemessage($msg = null,$order_id=null,$ponumber=null,$orderstatus=null,$reply = null)
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
					 $data['order_id']=$order_id;
					 $data['msg']=$msg;
					 
					 $data['ponumber']=$ponumber;
					 
					 $data['orderstatus']=$orderstatus;
					 
					 
					 if($reply == 2)
					 {
					  $notification = $this->Mysmartportal_model->get_notification_id($msg);
					 
					 }else
					 {
					 $notification = array();
					 
					 }
					 
					 $data["notificationdata"]=$notification;
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
					 $this->load->view('header',$data);
                     $this->load->view('messagecompose',$data);  
					 
					 
					 }
  }
  
  public function admin_composemessage($msg = null,$id=null,$notification_id=null)
  {
   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{
					 $this->load->model('Mysmartportal_model');
					 
					 
							if($id!=null)
							{			
								 $users = $this->Mysmartportal_model->get_user_by_id($id);	
								 $notification = $this->Mysmartportal_model->get_notification_id($notification_id);
                                 $company_names = "";	
                                 $data["replay"] =1;								 
							}else
							{	
                                 $notification = "";
							     $company_names = $this->Mysmartportal_model->get_all_company_names();
								 $users = $this->Mysmartportal_model->get_all_portaal_users();		
                                 $data["replay"] =0;									 
							}
					 $data['allusers'] = $users;
					 $data['company_names'] = $company_names;
					 $data['msg']=$msg;
					 $data['notification'] = $notification;


						$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));
					
						$data['user_notifications'] = $user_notification;
					 
					 $this->load->view('admin_header',$data);
                     $this->load->view('admin_messagecompose',$data);  
					 }
  }
  
  
  
  public function save_user_compose_msg()
  {
  
               if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else
				{
				 		 $admin_id=2;
										 $from_user_id = $this->session->userdata('userid');
										 $notification_subject = $this->input->post("subject");
										 $notification_boby = $this->input->post("comments");
									 $myFile = "";
										  $rvalue = rand(99,9999999);
										  $img_name_front = $_FILES["attachmentdata"]["name"];	

									  
										  $exfilename = explode(".",$img_name_front);
										   if($img_name_front == "")
										   {
										    $myFile = "";
										   
										   }else
										   {
										    $myFile = @$exfilename[0].$rvalue.'.'.@$exfilename[1];
										   
										   }

										   move_uploaded_file($_FILES["attachmentdata"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/assets/attachments/" . $myFile);
											
										 
										 
										  $typestatus = $this->input->post("typestatus");
										  
										  
										  if($typestatus == 1)
										  {
										   $notification_param = array("from_user_id"=>$from_user_id,
										                             "to_user_id"=>$admin_id,
																	 "msg_subject"=>$notification_subject,
																	 "msg_body"=>$notification_boby,
																	 "read_status"=>0,
																	 "attachment"=>$myFile,
																	 "created_date"=>date("y-m-d h:s"),
																	 "updated_date"=>date("y-m-d h:s")
																	 );
																	 $this->load->model('Mysmartportal_model');
					                     $notifications = $this->Mysmartportal_model->savenotifications($notification_param);
										  
										  
										  }else
										  {
										 
					
					
					
										    $qid_user = $this->input->post("qid_user");
											  $this->load->model('Mysmartportal_model');
											$this->Mysmartportal_model->updatestatusmsgtounread($qid_user);
											
										     $notification_param = array(
																			 "notification_id"=>$qid_user,
																			 "message"=>$notification_boby,
																			 "tittle"=>$notification_subject,																			 
																			 "status"=>0,
																		     "attachment"=>$myFile,
																			 "from_id"=>$from_user_id,
																			 "to_id"=>$admin_id,
																			 "created_date"=>date("y-m-d h:s"),
																			 "updated_date"=>date("y-m-d h:s")
																			 );
																			
																			 $notifications = $this->Mysmartportal_model->savereplay($notification_param);
																			 
										  
										  }
										 
																	 $redirectdata = $this->input->post("askquestion");
																	 if($redirectdata == 1)
																	 {
																	  redirect(base_url()."index.php/welcome/open_orders");
																	 }else{
																	  redirect(base_url()."index.php/welcome/usermessages");
																	 }
																	
				
				
				
				}
  
  
  }
   public function save_admin_compose_msg()
  {

	
	
               if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else
				{
				 		 
						
						

						                 $from_user_id = $this->session->userdata('userid');
										 $notification_subject = $this->input->post("subject");
										
										 
										 
										$replay_status = $this->input->post("reply_status");
											if($replay_status == 1)
											{
												 $touserid=$this->input->post("allusers2");
											}else
											{										
												  $touserid=$this->input->post("allusers1");																			
											}
											
										  $notification_boby = $this->input->post("usermsgdata");
										  
										  $userids = explode(",",$touserid);	

										  
										  $rvalue = rand(99,9999999);
										  $img_name_front=$_FILES["attachment"]["name"];										  
										  $exfilename = explode(".",$img_name_front);
										   if($img_name_front =="")
										   {
										    $myFile = "";
										   
										   }else
										   {
										    $myFile = @$exfilename[0].$rvalue.'.'.@$exfilename[1];
										   
										   }
											
										   move_uploaded_file($_FILES["attachment"]["tmp_name"], $_SERVER['DOCUMENT_ROOT']."/assets/attachments/" . $myFile);
											 
											 
											 
						 $this->load->model('Mysmartportal_model');
                       if($replay_status == 1)
					   {
					   $qid = $this->input->post("qid");
					   
					   for($i=0;$i<sizeOf($userids);$i++)
								 {
					                             $notification_param = array(
																			 "notification_id"=>$qid,
																			 "message"=>$notification_boby,
																			 "tittle"=>$notification_subject,																			 
																			 "status"=>0,
																			 "from_id"=>$from_user_id,
																			 "to_id"=>$userids[$i],
																			 "created_date"=>date("y-m-d h:s"),
																			 "updated_date"=>date("y-m-d h:s")
																			 );
																			 $notifications = $this->Mysmartportal_model->savereplay($notification_param);
																			 
								  }
					    
					   
					   
					   }else{
								for($i=0;$i<sizeOf($userids);$i++)
								 {
												
											
												 $notification_param = array("from_user_id"=>$from_user_id,
																			 "to_user_id"=>$userids[$i],
																			 "msg_subject"=>$notification_subject,
																			 "msg_body"=>$notification_boby,
																			 "attachment"=>$myFile,
																			 "read_status"=>0,
																			 "created_date"=>date("y-m-d h:s"),
																			 "updated_date"=>date("y-m-d h:s")
																			 );
																			
												 $notifications = $this->Mysmartportal_model->savenotifications($notification_param);
							
								 }
							} 
						 
						 
						 
						 
						 
										 
																	 
																	 redirect(base_url()."index.php/welcome/admin_messages/suc");
				
				
				
				}
  
  
  }

	public function labels_supplies()
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
						 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							 $this->load->view('header',$data);
							 $this->load->view('labels_supplies');
							 $this->load->view('labels_supplies_footer');
				         }else
						 {
						     redirect(base_url()."index.php/welcome/technical_support");
						 
						 }
				 }
				
	}
	
	public function service_contracts_analytics()
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
						 
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							 $this->load->view('header',$data);
							 $this->load->view('service_contracts_analytics');
							 $this->load->view('service_contracts_analytics_footer');
				         }else
						 {
						     redirect(base_url()."index.php/welcome/technical_support");
						 
						 }
				 }
				
	}
  
  public function active_contracts_map($servicenumber = null)
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
							
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
							 $this->load->view('header',$data);
							 $this->load->view('active_contracts_map_view',$data);  
							 
							 
					 }
  }
  
  
  public function user_locations($serial=null)
  {
	if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   redirect(base_url()."index.php/welcome/index");
				
				}else{  
				$this->load->model('Mysmartportal_model');
						$rss = new DOMDocument(); 
						$cust_code= $this->session->userdata('cust_code'); 
						$email1=$this->session->userdata('email');
						$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/GetShipToLocations/'.$serial.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  );
										$status = "0";	  
									  foreach ($urlArray as $url) 
									  {
												   $rss->load($url['url']);
													  echo"<diffgr:diffgram xmlns:diffgr='urn:schemas-microsoft-com:xml-diffgram-v1' xmlns:msdata='urn:schemas-microsoft-com:xml-msdata'><DocumentElement xmlns=''>";
												   foreach ($rss->getElementsByTagName('ShipToLocations') as $node)
												   {	
												   $shipcode = $node->getElementsByTagName('shipto_code')->item(0)->nodeValue;
												   
												   $ship_code_status=$this->Mysmartportal_model->location_check($serial,$shipcode);
												   if($ship_code_status >0){
												   $status = 1;
												   }else{
												   $status = 0;
												   
												   }
												   
													echo "<shiptolocations diffgr:id='checkserviceticket' msdata:rowOrder='0' diffgr:hasChanges='inserted'><shipto_code>".$node->getElementsByTagName('shipto_code')->item(0)->nodeValue."</shipto_code><bus_name>".$node->getElementsByTagName('bus_name')->item(0)->nodeValue."</bus_name><address1>".$node->getElementsByTagName('address1')->item(0)->nodeValue."</address1><address2>".$node->getElementsByTagName('address2')->item(0)->nodeValue."</address2><city>".$node->getElementsByTagName('city')->item(0)->nodeValue."</city><state>".$node->getElementsByTagName('state')->item(0)->nodeValue."</state><zip>".$node->getElementsByTagName('zip')->item(0)->nodeValue."</zip><country>".$node->getElementsByTagName('country')->item(0)->nodeValue."</country><first_name>".$node->getElementsByTagName('first_name')->item(0)->nodeValue."</first_name><last_name>".$node->getElementsByTagName('last_name')->item(0)->nodeValue."</last_name><carr_code>".$node->getElementsByTagName('carr_code')->item(0)->nodeValue."</carr_code><cust_code>".$cust_code."</cust_code><status>".$status."</staus></shiptolocations>";
													}                           					    
													  echo "</DocumentElement></diffgr:diffgram></DataTable>";
									  }	

	                 }  
  }
  
  public function savelocations()
  {
		  
		  @$locations = $_POST['add'];
		  $uid=$_POST['user_id_location'];
		  $cust_code = $_POST['location_cust_code'];
		  $this->load->model('Mysmartportal_model');
			  for($i=0;$i<sizeOf($locations);$i++)
			  {
			    $userlocationsdata = explode("###",$locations[$i]);
				
				$params = array("user_id" => $uid,
				                 "ship_to_code" =>$userlocationsdata[0],
				                 "custum_code" =>$cust_code,
				                 "ship_to_busname" =>$userlocationsdata[1],
				                 "address_1" =>$userlocationsdata[2],
				                 "address_2" =>$userlocationsdata[3],
				                 "city" =>$userlocationsdata[4],
				                 "state" =>$userlocationsdata[5],
				                 "zip" =>$userlocationsdata[6],
				                 "carr_code" =>$userlocationsdata[7],
								 
								 );
								 
								 $data = $this->Mysmartportal_model->saveuserlocations($params);
				

			  
			  }
			  
			  redirect(base_url()."index.php/welcome/edituser/".$uid);
		  
  }
  
  
  
  public function deletelocations($id)
  {
      $this->load->model('Mysmartportal_model');
	  $data = $this->Mysmartportal_model->delete_locations($id);
	  return 1;
  }
  
    public function users_by_companyname($comp_name1)
	  {
		  $comp_name = $this->input->post("id");
		  $data_comp = explode(",",$comp_name);
		  $allcompany = "";
		  for($i=0;$i<sizeOf($data_comp);$i++)
		  {
				  if($allcompany == "")
				  {
				  $allcompany = "'".$data_comp[$i]."'";
				  }else
				  {
				  $allcompany = $allcompany.",'".$data_comp[$i]."'";
				  
				  }
		  
		  
		  }
		   $this->load->model('Mysmartportal_model');
		  $data = $this->Mysmartportal_model->get_uers_by_comp_name($allcompany);
		
		  foreach($data as $data_user)
		  {
			 echo "<option value='".$data_user->id."'>".$data_user->first_name."</option>";
			  
			  
		  }
			
		  
		  
	  }
	  
	  
	  
     public function getlocations_in_portal($cuscode=null)
	 {
	  $comp_name = $this->input->post("id");
		  $data_comp = explode(",",$comp_name);
		  $allcompany = "";
		  for($i=0;$i<sizeOf($data_comp);$i++)
		  {
				  if($allcompany == "")
				  {
				  $allcompany = "'".$data_comp[$i]."'";
				  }else
				  {
				  $allcompany = $allcompany.",'".$data_comp[$i]."'";
				  
				  }		  	  
		  }
			 $this->load->model('Mysmartportal_model');
			 $data = $this->Mysmartportal_model->getlocations_in_portal($allcompany);
			  foreach($data as $data_user)
			  {
					 echo "<option value='".$data_user->ship_to_code."'>".$data_user->ship_to_busname.",".$data_user->city."</option>";
					  
					  
			  }
	 
	 
	 
	 }
	 
	 public function getusers_by_location()
	 {
	 	  $comp_name = $this->input->post("id");
		  $data_comp = explode(",",$comp_name);
		  $allcompany = "";
		  for($i=0;$i<sizeOf($data_comp);$i++)
		  {
				  if($allcompany == "")
				  {
				  $allcompany = "'".$data_comp[$i]."'";
				  }else
				  {
				  $allcompany = $allcompany.",'".$data_comp[$i]."'";
				  
				  }		  	  
		  }
			 $this->load->model('Mysmartportal_model');
			 $data = $this->Mysmartportal_model->getusers_by_locations($allcompany);
			  foreach($data as $data_user)
			  {
					 echo "<option value='".$data_user->user_id."'>".$data_user->first_name." ".$data_user->last_name."(".$data_user->ship_to_code.")</option>";
					  	  
			  }
	 }
	 
	 public function updateallnotificationsread()
	 {
	 
			$uid = $this->session->userdata('userid');	
			 $params = array('read_status'=>"1");		
			 $this->load->model('Mysmartportal_model');	
			 $data = $this->Mysmartportal_model->updateallnotifications($params,$uid);
	 }
	 
	 /*
	  public function modulemangement($msg = null,$order_id=null,$ponumber=null,$orderstatus=null)
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
						 $data['order_id']=$order_id;
						 $data['msg']=$msg;
						 
						 $data['ponumber']=$ponumber;
						 
						 $data['orderstatus']=$orderstatus;
						 
						 
						 
	$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
								$data['user_notifications'] = $user_notification;
						 $this->load->view('header',$data);
						 $this->load->view('modulemanagement',$data);  
						 
						 
						 }
	  }*/
  
public function help()
  {
   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   $this->load->model('Mysmartportal_model');
				   $this->load->view("password_header");
				   $this->load->view('lowryhelp');
				   $this->load->view("footer"); 
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
					
					
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
					 $this->load->view('header',$data);
                     $this->load->view('lowryhelp');  
					 
					 
					 }
   			 
  }

public function browse_documentation()
  {
    
   if($this->session->userdata('is_logged_in') == '' && $this->session->userdata('is_logged_in') == 0)
				{
				   $this->load->model('Mysmartportal_model');
				   $this->load->view("password_header");
                   $this->load->view('lowryhelpdocs');
				   $this->load->view("footer");
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
					
					
$user_notification = $this->Mysmartportal_model->get_all_user_notifications($this->session->userdata('userid'));				
						    $data['user_notifications'] = $user_notification;
					 $this->load->view('header',$data);
                     $this->load->view('lowryhelpdocs');  
					 
					 
					 }
   			 
  }
  
  
  public function varstreetLoginAthenticationTest()
  {
  $uid = $this->session->userdata('userid');
  $this->load->model('Mysmartportal_model');
  $data  = $this->Mysmartportal_model->getpassword($uid);
  $password = @$data[0]->password;
  

  $xmldata ='<?xml version = "1.0" encoding = "UTF-8"?>

<!DOCTYPE cXML SYSTEM "http://xml.cxml.org/schemas/cXML/1.1.007/cXML.dtd">

<cXML version="1.1.007" xml:lang="en-US"

      payloadID="20141222023520.1562078566"

      timestamp="2014-12-22T02:35:20-06:00">

  <Header>

    <From>

      <Credential domain="NetworkID">

        <Identity>6370</Identity>

      </Credential>

    </From>

    <To>

      <Credential domain="NetworkID">

        <Identity>6370</Identity>

      </Credential>

    </To>

    <Sender>

      <Credential domain="NetworkID">

        <Identity>'.$this->session->userdata('email').'</Identity>

        <SharedSecret>'.$password.'</SharedSecret>

      </Credential>

      <UserAgent>SmartPortal</UserAgent>

    </Sender>

  </Header>

  <Request>

    <PunchOutSetupRequest operation="create">

      <BrowserFormPost>

        <URL>https://www.varstreet.com/vslab/system.asp</URL> =>URL were response is posted on login

      </BrowserFormPost>      

      <SupplierSetup>

           <URL>https://b2b.lowrysolutions.com/punchout/VScXmlSSORequest.aspx?token=sso&resellerid=6370</URL>

=>Store URL

      </SupplierSetup>

    </PunchOutSetupRequest>

  </Request>

</cXML>';
  
      $url = 'https://b2b.lowrysolutions.com/punchout/VScXmlSSORequest.aspx?token=sso&resellerid=6370';
	  $ch = curl_init();
	  curl_setopt( $ch, CURLOPT_URL, $url );
	  curl_setopt( $ch, CURLOPT_POST, true );
	  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
	  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	  curl_setopt( $ch, CURLOPT_POSTFIELDS, $xmldata );
	  $result = curl_exec($ch);
	  curl_close($ch);

	$xml = simplexml_load_string($result);
	$pageurl =  @$xml->Response[0]->PunchOutSetupResponse[0]->StartPage[0]->URL[0];
	if($pageurl=="")
	{
	print_r($result);
exit;
	
	}else{
	header("Location:".$pageurl);
	exit;
	}

  }
  
  public function dashboarddata_test()
  {
	                             $email1= $this->session->userdata('email'); 
	  					        $cust_code= $this->session->userdata('cust_code'); 
							
							//Locations Getting 
							
								$this->load->model('Mysmartportal_model');
								$locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);							
								$ship_to_code = "";
								foreach($locations as $locationsdata)
								{
										if($ship_to_code == ""){
												$ship_to_code = $locationsdata->ship_to_code;
										}else{
												$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
										}
							     }
								 
					        $rss = new DOMDocument(); 
							
			                @$rss->load("http://216.234.105.194:8088/Alpha.svc/E21DashBoardData/".$cust_code."/".$ship_to_code."/".$email1."/UserType/PermLevel/1-1-2010/1-1-2016/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213");
			                            $pendingorders = 0;	
										 $opencases = 0;	
										 $openorders = 0;	
										 $shippedorders = 0; 
										 $pastdueinvoices = 0;
										 $assetsendoflife = 0;
										 
									
      				        foreach ($rss->getElementsByTagName('E21DashBoardData') as $node)
							{	
                                        if (strpos($node->getElementsByTagName('PendingOrders')->item(0)->nodeValue,'Error Number') !== false)
										{
                                           
                                        }else
										{									   
									     $pendingorders = (int)$node->getElementsByTagName('PendingOrders')->item(0)->nodeValue;	
										 $opencases = (int)$node->getElementsByTagName('OpenCases')->item(0)->nodeValue;	
										 $openorders = (int)$node->getElementsByTagName('OpenOrders')->item(0)->nodeValue;	
									
										 $shippedorders = (int)$node->getElementsByTagName('ShippedOrders')->item(0)->nodeValue;	
										 $pastdueinvoices = (int)$node->getElementsByTagName('PastDueInvoices')->item(0)->nodeValue;	
										 $assetsendoflife = (int)$node->getElementsByTagName('AssetsEndofLife')->item(0)->nodeValue;	
									    }
										
							}
							
							
							$test = array(array("label"=>"Pending Orders","y"=>$pendingorders),array("label"=>"Open Cases","y"=>$opencases),array("label"=>"Open Orders","y"=>$openorders),array("label"=>"Shipped Orders","y"=>$shippedorders),array("label"=>"Past Due Invoices","y"=>$pastdueinvoices),array("label"=>"Assets End of Life","y"=>$assetsendoflife));
							echo json_encode($test);
	  
	  
	  
  }
  
  public function servicetickets_graphdata()
  {
  
  $rss = new DOMDocument(); 
						$cust_code= $this->session->userdata('cust_code'); 
						$email1=$this->session->userdata('email');
						//Getting Locations
						$this->load->model('Mysmartportal_model');
					    $locations = $this->Mysmartportal_model->getalllocationsbycuscode($cust_code);
				
							$ship_to_code = "";
							$location = "";
							if($location==""){
							foreach($locations as $locationsdata)
							{
									if($ship_to_code == ""){
											$ship_to_code = $locationsdata->ship_to_code;
									}else{
											$ship_to_code = $ship_to_code."|".$locationsdata->ship_to_code;
									}
							}}else
							{
							$ship_to_code = $location;
							
							}
						
						
						$ServiceContractList_node = "ServiceContractList";

							$urlArray = array(array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21GetAllExpiredContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/ServiceContractDueToRenew/'.$cust_code.'/'.$ship_to_code.'/50/1/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213'),
											  array('name' => 'api', 'url' => 'http://216.234.105.194:8088/Alpha.svc/E21ActiveServiceContracts/'.$cust_code.'/'.$ship_to_code.'/5434548B-9C59-451E-9673-1D462C11953B/E2795374-87A2-45DE-AD46-194D042B6213')
											  );
					
											$k=0;  
											$active = 0;
											$expired = 0;
											$Upcomming = 0;
											
									  foreach ($urlArray as $url) 
									  {
									  if($k==0)
									  {
									  $ServiceContractList_node = "AssetsUnderContract";
									  
									  }else if($k==1)
									  {
									  $ServiceContractList_node = "ServiceContractList";
									  
									  }else if($k==2)
									  {
									  $ServiceContractList_node = "ActiveServiceContracts";
									  
									  }
									  
												   $rss->load($url['url']);
												   foreach ($rss->getElementsByTagName($ServiceContractList_node) as $node)
												   {
															if($k==0)
															{
						                                      $Upcomming++;
															
															}else if($k==1)
															{
											                 $expired++;
															
															}else if($k==2)
															{
																$active++;
													
															}									   
													 }   

                                         $k++; 													 
													 
									   }	
									  
									  $activecontracts = array("y"=>"30","X"=>"new Date(2006,0)");
									  $ac = json_encode($activecontracts);
									  
									  $servicedata =  array("type"=>"stackedColumn","showInLegend"=>"true","name"=>"Active Service Contracts","color"=>"#695A42","dataPoints"=>$ac);
									  echo json_encode($servicedata);

  
  
  
  
  }

}