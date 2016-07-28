<?php
/* Made with love <3
By Mohammed TABIT,
FUCK THIS 
AGAIN!
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

		$this->load->model('Home_mod');
		$this->load->model('Ideas_mod');
	    $this->load->model('User_mod');
	    $this->load->model('Notification_mod');
	 
	
	
		date_default_timezone_set('UTC');
    }

    public function index($id){

	


	$query = $this->Ideas_mod->getIdees($id);

		if ($query){

		if($this->session->userdata('user_lg'))
		{
	 $R['Idees'] = $this->Ideas_mod->getIdees($id);	
     $R['fullname'] = $this->User_mod->Get_userById($this->session->userdata('user_id'));
     $R['notification'] = $this->Notification_mod->getAllNotifications();
  
    
   
	  
	    $this->load->view('body/user/header_user',$R);
	 

		  $this->load->view('body/user/left_user', $R);	
		  $this->load->view('nodes/post', $R);
	      $this->load->view('body/user/right_user');

			  }
			  else {
			  		$this->load->view('fullsite');
			  }



		}


    }


}
