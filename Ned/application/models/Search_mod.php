<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_mod extends CI_Model {

		 function search_title($key)
	{

		if($key != null)
			 $this->db->select('*');
			$this->db->from('ideas_dynamic');
		$this->db->where('title',$key);
		$q = $this->db->get();
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}

}