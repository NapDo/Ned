<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_mod extends CI_Model {

public function edit($filename, $thumb)
{
	
	  $id = $this->session->userdata('user_id');
$data=array(
'img_thumb'=>$thumb,
'img'=>$filename


);
$this->db->where('id', $id);
$this->db->update('users_static',$data);
return true;
}
}

