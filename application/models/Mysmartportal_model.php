<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mysmartportal_model extends CI_Model {

	public function checkLoginDetails($username,$password)
	{
	//echo "select * from mysmar_portal_users where user_name='".$username."' and password='".$password."'";
	   $query = $this->db->query("select * from mysmar_portal_users where  email_id ='".$username."' and password='".$password."' AND status=1");
       $check = $query->result();
        if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else{
				return "faild";
			}	   
	
		
	}
	public function saveuser($params,$paramsid)
	{
	    $query = $this->db->insert("mysmar_portal_users",$params);
	    $lasr_rec = $this->db->insert_id();
	    $allmenu = $paramsid;
	    $query1 = $this->db->query("insert into assigned_menu_to_user(uid,menu_id,status) values('".$lasr_rec."','".$allmenu ."',1)");
	    return $lasr_rec;

	}
	
	public function getallusers()
	{
		  $query = $this->db->query("select * from mysmar_portal_users where role!=1 order by IF( company_name =  ''
OR company_name IS NULL , 1, 0 ) , company_name ASC");
		  $result = $query->result();
		  return $result;
		
	}

	public function getedituser($uid)
	{
		  $query = $this->db->query("select * from mysmar_portal_users where id=".$uid);
		  $result = $query->result();
		  return $result;
	
	}
	
	public function saveedituser($params,$id)
	{
	    $query = $this->db->update("mysmar_portal_users",$params,array('id'=>$id));
	    return true;

	}
	
	public function getmenu($id)
	{
	//echo "select menu_id from assigned_menu_to_user where uid='".$id."'";
	   $query = $this->db->query("select menu_id from assigned_menu_to_user where uid='".$id."'");
			  $result = $query->result();
		      return $result;
	
	}
	
	public function getmenuname($id)
	{
	$query = $this->db->query("select menu_name from menu where id='".$id."'");
			  $result = $query->result();
		      return $result;
	
	
	}
	
	public function getallusermenu()
	{
	$query = $this->db->query("select * from menu");
			  $result = $query->result();
		      return $result;
	
	
	}
	
	public function saveeditusermenu($params,$id)
	{

	$query = $this->db->update("assigned_menu_to_user",$params,array('uid'=>$id));
			 
		      return true;
	
	
	
	}
	public function checkuser($email,$username)
	{
	
	$query = $this->db->query("select * from mysmar_portal_users where email_id='".$email."' or user_name='".$username."'");
	
	
	$lasr_rec = $query->num_rows();
	
	return $lasr_rec;
	
	}
	
	
		public function deleteuser($id,$action)
		{
		         if($action==0){
				 $params = array("status"=>0);
				 }else
				 {
				 $params = array("status"=>1);
				 
				 }
				 $query = $this->db->update("mysmar_portal_users",$params,array("id"=>$id));
				  //$query = $this->db->query("update from mysmar_portal_users where id='".$id."'");
				  return true;
				
				
		
		}
	
	public function getallusers_sublogin()
	{
	  $query = $this->db->query("select * from mysmar_portal_users limit 3");
	   return $query->result();
	
	
	}
	
	public function getpassowrd($email)
	{
	 $query = $this->db->query("select password from mysmar_portal_users where email_id='".$email."'");
	 return $query->result();
	
	}
    public function updatevyryfycode($params,$email)
    {
	  $query = $this->db->update("mysmar_portal_users",$params,array("email_id"=>$email));
	  return true;
	
	
    }
	
	public function savepassword($params,$code)
	{
		
		  $query = $this->db->update("mysmar_portal_users",$params,array("veryfy_code"=>$code));
	  return true;
		
		
	}
	
	public function checklink($code)
	{
	  $query = $this->db->query("select updated_date from mysmar_portal_users where veryfy_code='".$code."'");
	  return $query->result();
	
	
	
	}
	
	public function saveuserlocations($params)
	{
	   $query = $this->db->insert("User_locations",$params);
	   return 1;
	
	}
	
	public function getalluserlocations($id)
	{
	 $query = $this->db->query("select * from User_locations where user_id='".$id."'");
	  return $query->result();
	
	
	
	}
	
	public function delete_locations($id)
	{
	  $query = $this->db->query("DELETE FROM User_locations WHERE id='".$id."'");
	  return 1;
	
	
	}
	
	public function location_check($code,$ship)
	{
	$query = $this->db->query("select * from User_locations where custum_code='".$code."' and ship_to_code='".$ship."'");
	  if($query->num_rows() > 0)
			{
				return 1;
			}
			else{
				return 0;
			}	   
	
	}
	
	
	public function savenotifications($params)
	{
	
	   $query = $this->db->insert("user_notifications",$params);
	   return 1;
	
	}
	
	public function get_all_user_notifications($uid)
	{
	
	  $query = $this->db->query("select * from user_notifications where to_user_id = '".$uid."' or from_user_id = '".$uid."' order by id desc");
	  return $query->result();
	}
	
	public function get_single_notification_view($notification_id)
	{
	
	$query = $this->db->query("select a.*,b.first_name,b.id as uid from user_notifications a left join mysmar_portal_users b on(a.from_user_id = b.id) where a.id = '".$notification_id."' order by id desc");
	  return $query->result();
	
	}
	
	public function get_all_portaal_users()
	{
	$query = $this->db->query("select * from mysmar_portal_users where role != 1 order by id desc");
	  return $query->result();
	}
	
	public function get_user_by_id($id)
	{
		$query = $this->db->query("select * from mysmar_portal_users where id = '".$id."' order by id desc");
	  return $query->result();
	}
	
	public function get_all_company_names()
	{
	$query = $this->db->query("select company_name,cus_code  from mysmar_portal_users where role!=1 and company_name!=' ' group by cus_code  order by IF( company_name =  ''
OR company_name IS NULL , 1, 0 ) , company_name ASC");
	  return $query->result();
	
	}
	
	public function get_uers_by_comp_name($company_name)
	{
	
	  
		$query = $this->db->query("select * from mysmar_portal_users where company_name IN (".str_replace("%20"," ",$company_name).")");
	  return $query->result();
		
		
		
	}
	
	public function getalllocationsbycuscode($cuscode)
	{
	  $userId = $this->session->userdata("userid");
	  $query = $this->db->query("select * from User_locations where custum_code='".$cuscode."' AND user_id='".$userId."'");
	  return $query->result();
	
	
	}
	
	public function getlocations_in_portal($cuscode)
	{
	
	$query = $this->db->query("select * from User_locations where custum_code IN (".str_replace("%20"," ",$cuscode).") group by ship_to_code");
	  return $query->result();
	
	
	}
	
	public function getusers_by_locations($cuscode)
	{
	$query = $this->db->query("select a.*,b.* from User_locations b left join mysmar_portal_users a on (b.user_id = a.id) where b.ship_to_code IN (".str_replace("%20"," ",$cuscode).") group by user_id");
	  return $query->result();
	
	
	}
	
	public function updateallnotifications($params,$uid)
	{
	          $query = $this->db->update("user_notifications",$params,array('to_user_id'=>$uid));		 
		      return true;
	}
	
	public function get_notification_id($id)
	{
	
	$query = $this->db->query("select * from user_notifications where id='".$id."'");
	  return $query->result();
	
	
	}
	
	public function savereplay($params)
	{
	
	   $query = $this->db->insert("notifications_reply",$params);
	   return 1;
	
	
	}
	
	public function get_All_replys_view($id)
	{
		$query = $this->db->query("select a.*,b.* from notifications_reply a left join mysmar_portal_users b on(a.from_id = b.id) where a.notification_id = '".$id."' order by a.id desc");
	    return $query->result();
	
	}
	
	public function getpassword($uid)
	{
	$query = $this->db->query("select * from portal_credentials where uid = '".$uid."'");
	    return $query->result();
	
	}
	
	public function updatestatusmsg($id)
	{
			$query = $this->db->query("update user_notifications set read_status =1 where id='".$id."'");
			return true;
	}
	public function updatestatusmsgtounread($id)
	{
			$query = $this->db->query("update user_notifications set read_status =0 where id='".$id."'");
			return true;
	}
	
	public function updatelogintime($params,$uid)
	{
	
	$quesry = $this->db->query("select * from login_information where uid='".$uid."' AND is_login =1");
	 if($quesry->num_rows() > 0)
			{
				return 1;
			}
			else{
				$this->db->insert("login_information",$params);
			}	
	
	
	}
	
	public function updatelogouttime($uid)
	{
	$logouttime=date("y-m-d h:m:s");
	$query = $this->db->query("update login_information set is_login=0, logout_time='".$logouttime."' where uid='".$uid."'");
	
	
	
	}
	
	
}