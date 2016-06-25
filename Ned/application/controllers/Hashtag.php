<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hashtag extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

		$this->load->model('Home_mod');
		$this->load->model('Ideas_mod');
		   $this->load->model('Notification_mod');    
	$this->load->model('User_mod');
	
	
		date_default_timezone_set('UTC');
    }


    public function index ($str)
{



		 
   
	$str = preg_replace('#[^a-z0-9_]#i', '', $str);
	
	if($str){

	$this->db->where('hashtag',$str);
$this->db->order_by('date','desc');
		$q = $this->db->get('ideas_dynamic');
	 $R['hashtag'] = $this->Ideas_mod->GetHashtag($str);
	 $R['fullname'] = $this->User_mod->Get_userById($this->session->userdata('user_id'));
	   $R['notification'] = $this->Notification_mod->getAllNotifications();
	    $this->load->view('body/user/header_user',$R);
	 

		  $this->load->view('body/user/left_user', $R);	
		   $this->load->view('nodes/hashtag');
	      $this->load->view('body/user/right_user');

  }
}

    
 
}