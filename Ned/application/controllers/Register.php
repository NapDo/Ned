<?php
/* Made with love <3
By Mohammed TABIT,
FUCK THIS 
AGAIN!
*/
defined('BASEPATH') OR exit('No direct script access allowed');


class Register extends CI_Controller {
		public function __construct()
    {
		
        parent::__construct();
		  $this->load->helper(array('form', 'url'));
		$this->load->model('Home_mod');
		 $this->load->model('Register_mod');
		
		 
		

	}

	private function getLogin()
	{
		if($this->input->post('login_register'))
		{
			$this->form_validation->set_rules('username_register','username','trim|required|htmlspecialchars|xss_clean');
			$this->form_validation->set_rules('password_register','password','trim|required|md5|xss_clean');
			
			if($this->form_validation->run())
			{

				$username = $this->input->post('username_register');
				$password = $this->input->post('password_register');

				if($log = $this->Home_mod->issetUser($username,$password))
				{
					$array_log = $log->row();
					$newdata = array(
									   'user_id' => $array_log->id,
					                   'user_un' => $array_log->username,
					                   'user_img' => $array_log->img,
					                   'user_lg' => TRUE
										);

	                $this->session->set_userdata($newdata);
					redirect(base_url());
				}
				else
				return '<div class="alert alert-danger" role="alert">Username or password you entered is incorrect.Please try again ! </div>';
			}
			else
			return '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
		}	

		return '';
	}
	public function index(){
	
	
        if(!$this->session->userdata('user_lg')){
 
	$E['reponse_log'] = $this->getLogin();
	$E['reponse_log2'] = $this->register_do();
	
	
		
		$this->load->view('nodes/register',$E);
		redirect('home');
 }
		else 
			redirect('home');
		
		

		
	

	}
		public function validate_url($url) 
	{
		$data = trim($url);
		$data = stripslashes($url);
		$data = htmlspecialchars($url);
		return $url;

		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
			$this->form_validation->set_message('validate_url', 'The {field} is not url');
			return FALSE;
		} else {
			return TRUE;
		}
	
	} 
function isEmailExist($email) {
    $this->db->select('id');
    $this->db->where('email', $email);
    $query = $this->db->get('users_static');

    if ($query->num_rows() > 0) {
        return true;
    } else {
        return false;
		
    }
}

	
	



function register_do()
	{


		$this->load->helper(array('form', 'url'));
      
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username_r', 'Username','required|htmlspecialchars|is_unique[users_static.username]|xss_clean');
		$this->form_validation->set_rules('email_r', 'Email','required|htmlspecialchars|is_unique[users_static.email]');
	

    
		if ($this->form_validation->run())
		{
			
			   $this->Register_mod->add_user();
			   return '<font color="white"><div class="alert alert-success" role="alert">You have been registered, welcome to <b>napdo</b> !</div></font>';
	
		}
	
		
		else
		{
			return '<div class="alert alert-danger" role="alert">Something wrong !'.validation_errors().'</div>';
		}
	
	}
 }
