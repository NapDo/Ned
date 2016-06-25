<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Follow_mod extends CI_Model {
	public function Get_followerById($follower_id)
	{
		$this->db->where('follower_id',$follower_id);
		$q = $this->db->get('followers_dynamic');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}

		function add_follow ($data)
	{
		$this->db->insert('followers_dynamic',$data);
		return $this->db->insert_id();	
	}
	    function follow_exist($user_id)
    {
  
          
 $follower_id=$this->session->userdata('user_id');

    $this->db->from('followers_dynamic'); 
      $this->db->where('follower_id',$follower_id); 
         $this->db->where('user_id',$user_id); 
    $result = $this->db->get();

     	if($result->num_rows() >0)
			return true;
		else
			return FALSE;
	}

    
}