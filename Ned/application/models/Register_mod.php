<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Register_mod extends CI_Model {
public function __construct()
{
parent::__construct();
}
public function add_user()
{
	
$data=array(
'username'=>$this->input->post('username_r'),
'email'=>$this->input->post('email_r'),
'active'=>0,
'registred'=>time()

);
$this->db->insert('users_static',$data);
return true;
}

	
}