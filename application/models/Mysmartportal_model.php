<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mysmartportal_model extends CI_Model {

	public function checkLoginDetails($username,$password)
	{
	//echo "select * from mysmar_portal_users where user_name='".$username."' and password='".$password."'";
	   $query = $this->db->query("select * from mysmar_portal_users where (user_name='".$username."' and password='".$password."') or (email_id ='".$username."' and password='".$password."') AND status=1");
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
}