<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects_mod extends CI_Model {
		public function insertProject($data)
	{
		$this->db->insert('projects_dynamic',$data);
		return $this->db->insert_id();	
	}

	public function getProjectsByID($id)
	{
		$this->db->where('id_user',$id);
		$q = $this->db->get('projects_dynamic');
		if($q->num_rows() > 0)
			return $q;
		else
			return false;
	}
}