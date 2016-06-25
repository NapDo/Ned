<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_mod extends CI_Model {
	public function Get_user($username)
	{
		$this->db->where('username',$username);
		$q = $this->db->get('users_static');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}

	public function Get_userById($id)
	{

		$this->db->where('id',$id);
		$q = $this->db->get('users_static');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}	
	public function verify_sessionByUsername($id,$username)
	{
		$this->db->where('id',$id);
		$this->db->where('username',$username);
		$q = $this->db->get('users_static');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}
	public function get_random_user()
{
    $this->db->order_by('id', 'RANDOM');
    
    $query = $this->db->get('users_static');
   if($query->num_rows() > 0)
			return $query;
		else
			return false;

}

	
	
	
	


	
	
}