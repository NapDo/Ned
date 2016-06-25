<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ideas_mod extends CI_Model {
	


	function insertIdea($data)
	{
		$this->db->insert('ideas_dynamic',$data);
		return $this->db->insert_id();
	}
 function getIdees($id)
	{
	
		if($id != null)
			  $this->db->select('*');
				$this->db->where('id_idea',$id);
			$this->db->from('ideas_dynamic');
	
		  $this->db->join('users_static u', 'u.id = ideas_dynamic.id_user');
		$q = $this->db->get();
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}
	 function getIdeesByID()
	{
		$id= $this->session->userdata('user_id');
		if($id != null)
		$this->db->where('id_user',$id);
$this->db->order_by('date','desc');
		$q = $this->db->get('ideas_dynamic');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}
		 function getHashtagID()
	{
		$id= $this->session->userdata('user_id');
		if($id != null)
			$this->db->select_max('hashtag');
		$this->db->where('id_user',$id);
        $this->db->order_by('date','desc');
		$q = $this->db->get('ideas_dynamic');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}
		 function getIdeesByUsername($username)
	{

		if($username != null)
			 $this->db->select('*');
			$this->db->from('users_static');
		$this->db->where('username',$username);

	  $this->db->join('ideas_dynamic i', 'i.id_user = users_static.id');
$this->db->order_by('date','desc');
		$q = $this->db->get();
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}
	 function getIdeasFollow() 
   {
$id = $this->session->userdata('user_id');
    if($id != null)
  
  $this->db->select('*');
  $this->db->from('followers_dynamic');
  $this->db->where('follower_id', $id);
  $this->db->join('ideas_dynamic u', 'u.id_user = followers_dynamic.user_id');
    $this->db->where('follower_id', $id);
    $this->db->join('users_static u1', 'u1.id = followers_dynamic.user_id');
    $q = $this->db->get();
    if($q->num_rows() > 0)
      return $q;
    else
      return false;
  
  
  }
 
		 function getHashtag($txt)
	{
		if($txt != null)
		$this->db->where('hashtag',$txt);
$this->db->order_by('date','desc');
		$q = $this->db->get('ideas_dynamic');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}


	
}