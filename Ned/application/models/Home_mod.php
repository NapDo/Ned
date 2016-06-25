<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_mod extends CI_Model {

	public function insertUser($data)
	{
		$this->db->insert('users_static',$data);
		
	}
	public function issetUser($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('active',1);
		$q = $this->db->get('users_static');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}
	 function verifyEmailAddress(){  
   $email = $this->input->post('email_r');

  $data=array(

'active'=>1

);

     $this->db->where('email', $email);
     $this->db->update('users_static',$data);
 }
		
	

}