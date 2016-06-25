<?php
class Discover extends CI_Controller {


			public function __construct()
    {
        parent::__construct();
		$this->load->model('User_mod');
		$this->load->model('Follow_mod');	
        $this->load->model('Profile_mod');  
         $this->load->model('Ideas_mod');  
         $this->load->model('Notification_mod');    
		$this->load->helper(array('form', 'url'));
        $this->load->helper('url');
		 
		

		
		
		
	}
/* Damn class */	public function index() {
 $R['fullname'] = $this->User_mod->Get_userById($this->session->userdata('user_id'));
	   $R['notification'] = $this->Notification_mod->getAllNotifications();
	   $R['random_users'] = $this->User_mod->get_random_user();
	    $this->load->view('body/user/header_user',$R);
	 

		  $this->load->view('body/user/left_user', $R);	
		   $this->load->view('nodes/discover',$R);
	      $this->load->view('body/user/left_user',$R);

	}

}