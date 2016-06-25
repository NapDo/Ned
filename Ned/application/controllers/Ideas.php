<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ideas extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
	         $this->load->model('Home_mod');
		$this->load->model('Ideas_mod');
		$this->load->model('Projects_mod');
		date_default_timezone_set('UTC');
    }
	
	private function getInsertIdee()
	{
		if($this->input->post('ides_submit_na'))
		{
			$this->form_validation->set_rules('ides_na','ides','trim|required|htmlspecialchars|xss_clean');

			if($this->form_validation->run())
			{

				$data2['id_user'] = $this->session->userdata('user_id');
				$data2['text'] = $this->input->post('ides_na',true);
				$data2['date'] = time();
				$data2['active'] = 0;

				$this->Home_mod->insertIdee($data2);

				return '<div class="alert alert-success" role="alert">done!!</div>';
			}
			else
			return '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
		}	

		return '';
		
	}

	private function validate_url($url) 
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

	private function getInsert()
	{
		if($this->input->post('submit_na'))
		{
			$this->form_validation->set_rules('username_na','username','trim|required|htmlspecialchars|is_unique[the_users.username]|xss_clean');
			$this->form_validation->set_rules('email_na','email','trim|required|valid_email|is_unique[the_users.email]|xss_clean');
			$this->form_validation->set_rules('password_na','password','trim|required|min_length[8]|md5|xss_clean');
			$this->form_validation->set_rules('password2_na','password Confirmation','trim|required|md5|matches[password_na]');
			if($this->input->post('etap') == 1)
				$this->form_validation->set_rules('ides_na','ides','trim|required|htmlspecialchars|xss_clean');
			else
			{
				$this->form_validation->set_rules('nom_na','nom','trim|required|max_length[50]|htmlspecialchars|xss_clean');
				$this->form_validation->set_rules('prenom_na','prenom','trim|required|max_length[50]|htmlspecialchars|xss_clean');
				$this->form_validation->set_rules('url_na','url','trim|required|max_length[50]|callback_validate_url|xss_clean');
				$this->form_validation->set_rules('title_na','title','trim|required|max_length[20]|htmlspecialchars|xss_clean');
				$this->form_validation->set_rules('description_na','description','trim|required|htmlspecialchars|xss_clean');
			}

			if($this->form_validation->run())
			{
				//insertIdee($data)

				if($this->input->post('etap') == 1)
				{
					$data['username'] = $this->input->post('username_na');
					$data['password'] = $this->input->post('password_na');
					$data['email'] = $this->input->post('email_na');
					$data['type'] = 2;

					$id = $this->Home_mod->insertUser($data);

					$data2['id_user'] = $id;
					$data2['text'] = $this->input->post('ides_na',true);
					$data2['date'] = time();
					$data2['active'] = 0;

					$this->Home_mod->insertIdee($data2);					
				}
				else if($this->input->post('etap') == 2)
				{
					$data['username'] = $this->input->post('username_na');
					$data['password'] = $this->input->post('password_na');
					$data['email'] = $this->input->post('email_na');
					$data['type'] = 2;

					$id = $this->Home_mod->insertUser($data);

					$data2['id_user'] = $id;
					$data2['nom'] = $this->input->post('nom_na');
					$data2['prenom'] = $this->input->post('prenom_na');
					$data2['url'] = $this->input->post('url_na');
					$data2['title'] = $this->input->post('title_na');
					$data2['description'] = $this->input->post('description_na');
					$data2['date'] = time();
					$data2['active'] = 0;

					$this->Home_mod->insertProject($data2);				
				}


				return '<div class="alert alert-success" role="alert">done!!</div>';
			}
			else
			return '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
		}	

		return '';
	}
		public function best_ideas()
	{
		$R['reponse'] = $this->getInsert();
		$E['reponse_log'] = $this->getLogin();
		//$R['reponse3'] = $this->getInsertIdee();

		if($this->session->userdata('user_lg'))
		{
			//$R['Idees'] = $this->Home_mod->getIdeesByID($this->session->userdata('user_id'));
			//$R['Projects'] = $this->Home_mod->getProjectsByID($this->session->userdata('user_id'));
		}

	   	$H['Header_0'] = $E;
		$H['Menuleft_0'] = null;
	

		$this->load->view('nodes/best_ideas',$H);
	
	}


	public function index()
	{
		//$R['reponse'] = $this->getInsert();
		//$E['reponse_log'] = $this->getLogin();
		//$R['reponse3'] = $this->getInsertIdee();

		if($this->session->userdata('user_lg'))
		{
			$R['Idees'] = $this->Ideas_mod->getIdeesByID(null);
			$R['Projects'] = $this->Projects_mod->getProjectsByID($this->session->userdata('user_id'));
		}
	   
	   	$R['Menuleft_0'] = null;
		$this->load->view('nodes/ideas',$R);
	
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect(base_url(), 'refresh');
	}
	private function getLogin()
	{
		if($this->input->post('login_na'))
		{
			$this->form_validation->set_rules('username_na','username','trim|required|htmlspecialchars|xss_clean');
			$this->form_validation->set_rules('password_na','password','trim|required|min_length[8]|md5|xss_clean');
			
			if($this->form_validation->run())
			{

				$username = $this->input->post('username_na');
				$password = $this->input->post('password_na');

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
				return '<div class="alert alert-success" role="alert">done!!</div>';
			}
			else
			return '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
		}	

		return '';
	}
	  function search()
    {
        $keyword = $this->input->post('keywords');
        if (!empty($keyword))
        {
            $this->session->set_userdata(array('search-friend' => $keyword));
        }
        $keyword = $this->session->userdata('search-friend');
        $total_search = 0;
        $from = 1;

        if ($this->uri->segment(3) != "")
        {
            $from = (int)$this->uri->segment(3);
        }
        $this->load->model('friend_model');
        $search_result = $this->friend_model->search_friends($keyword, $from - 1, 10);
        $total_search = $this->friend_model->get_search_friend_count($keyword);
        $friend_exist = "";
        if ($search_result->num_rows() > 0)
        {
            foreach($search_result->result() as $row)
            {
                $friend_exist[$row->friend_id] = $this->friend_model->friend_exist(
                    $this->session->userdata('user_id'),
                    $row->friend_id);
            }
        }

        $data['friend_exist'] = $friend_exist;

        $data['search_result'] = $search_result;
        $config['base_url'] = "/friends/search/";
        $config['total_rows'] = $total_search;
        $config['per_page'] = '10';
        $config['num_links'] = '10';
        $config['uri_segment'] = 3;

        $this->pagination->initialize($config);
        $this->load->view('site_view/friend_results', $data);
    }
}
