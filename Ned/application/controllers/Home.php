<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

		$this->load->model('Home_mod');
		$this->load->model('Ideas_mod');
	    $this->load->model('User_mod');
$this->load->model('Email_mod');
	    $this->load->model('Notification_mod');
	     $this->load->model('Register_mod');
	 
	
	
		date_default_timezone_set('UTC');
    }










	public function verify($verification_code=NULL){  


  $noRecords = $this->Home_mod->verifyEmailAddress();  
  if ($noRecords > 0){
   
   echo 'good job';
  }else{
   $error = array( 'error' => "Sorry Unable to Verify Your Email!"); 
  }

 }


 function sendVerificationEmail($email){  

  $this->Email_mod->sendVerificatinEmail($email);

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
					                   'user_name' => $array_log->fullname,
					                   'user_lg' => TRUE
										);

	                $this->session->set_userdata($newdata);
					redirect(base_url());
				}
				

			}else
			return '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
		}	
		return'';
			
}
public function algo_same($id) {/*Mohammed Tabit algo,*/
		

	 
		 $this->db->where('id_idea',$id);
		  

		$q= $this->db->get('ideas_dynamic');

		$query= $this->db->get('ideas_dynamic');

foreach ($q->result() as $row) {
	
$input= $row->title;
if ($query->num_rows() > 0)
{

	$rows =$query->row();
$words[]  = $rows->text;
}

$shortest = -1;

foreach ($words as $array) {

    $lev = levenshtein($input, $array);


    if ($lev == 0) {

        $closest = $array;
        $shortest = 0;

  
        break;
    }

    if ($lev <= $shortest ||$shortest < 0) {

        $closest  = $array;
        $shortest = $lev;
    }

}
    if ($shortest == 0) {
    echo "Correspondance exacte trouvée : " .$closest;
} else {
    echo "Vous voulez dire :" .$closest;
}
}

}
 


function register_do()
	{


		$this->load->helper(array('form', 'url'));
      
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username_r', 'Username','required|htmlspecialchars|is_unique[users_static.username]|xss_clean');
		$this->form_validation->set_rules('email_r', 'Email','required|htmlspecialchars|is_unique[users_static.email]');
	

    $email = $this->input->post('email_r');
		if ($this->form_validation->run())
		{
			
			   $this->Register_mod->add_user();
			  
			   return '<font color="white"><div class="alert alert-success" role="alert">Your invitation has been sended, thank you for your support !, we will send you an invitation soon :) ! </b> !</div></font>';
	
		}
	
		
		else
		{
			return '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
		}
	
	}



	public function index()
	{
		
		$R['reponse_log'] = $this->getLogin();
		$R['reponse_log2'] = $this->register_do();
		$H['Header_0'] = $R;
		$H['Center_0'] = $R;
		$H['Menuleft_0'] = null;

         
		if($this->session->userdata('user_lg'))
		{
	 $R['Idees'] = $this->Ideas_mod->getIdeesByID();	
	 $R['reponse'] = $this->InsertIdea();
     $R['fullname'] = $this->User_mod->Get_userById($this->session->userdata('user_id'));
     $R['notification'] = $this->Notification_mod->getAllNotifications();
     $R['countallNoti'] = $this->Notification_mod->newCount();
      $R['follow_ideas'] = $this->Ideas_mod->getIdeasFollow();
         $R['hashtags'] = $this->Ideas_mod->getHashtagID();
    
   
	  
	    $this->load->view('body/user/header_user',$R);
	 

		  $this->load->view('body/user/left_user', $R);	
		      $this->load->view('body/user/right_user');
		  $this->load->view('nodes/user', $R);
	  

			  }
			  else {
			  		$this->load->view('fullsite',$H);
			  }
		
		
}

public function update_notification() {
$this->Notification_mod->Seen();


}

		public function InsertIdea()
	{
				$this->load->helper(array('form', 'url'));
					$this->load->library('form_validation');

		if($this->input->post('txt') && $this->input->post('title')) 
		{
			


				$message =strip_tags($this->input->post('txt',true));
				 $hashtag =$this->gethashtags($message);


				$data['id_user'] = $this->session->userdata('user_id');
				$data['text'] = $this->convertHashtag($this->input->post('txt',true));
				$data['title'] = $this->input->post('title',true); 
				$data['date'] = time();
				$data['active'] = 0;
				$data['hashtag']= $hashtag;
				$this->Ideas_mod->insertIdea($data);
				$fullname_profile =  $this->User_mod->Get_userById($this->session->userdata('user_id'));
				if ($fullname_profile != false)
  foreach ($fullname_profile->result() as $key => $Q):

echo '<li class="media">
		              
               
                           <div class="pull-left">
                                <img data-toggle="tooltip" data-placement="right" title="" src="/public/user/uploads/avatars/'.$Q->img_thumb.'" alt="people" class="img-circle"  data-original-title="Mohammed Tabit" aria-describedby="tooltip664011">
                                <div class="date">08/06/2015 16:00</div>
                            </div>
				

				
                            <div class="media-body ">
							
                                <div class="panel panel-default post">
								<div id="post75"> 
                                    <div class="panel-body">

                                        <div class="boxed">
										<div id="75" class="title-idea">
                                            <a href="#" class="h4 margin-none">'.$this->input->post("title").'</a>
											</div>
                                            <div class="rating text-left">
                                                <span class="star"></span>
                                                <span class="star filled"></span>
                                                <span class="star filled"></span>
                                                <span class="star filled"></span>
                                                <span class="star filled"></span>
                                            </div>
                                            <div class="media">
                                               
                                                <div id="75" class="media-body">
                                                    <p>'.$this->input->post("txt").'</p>
														<a class="delete-me" href="#">Delete</a>
                                                </div>
                                            </div>
                                            <ul class="icon-list">
                                                <li><i class="fa fa-star fa-fw"></i> 4.8</li>
                                                <li><i class="fa fa-clock-o fa-fw"></i> 20 min</li>
                        <li><i class="fa fa-graduation-cap fa-fw"></i> Beginner</li>
                                            </ul>
                                        </div>
										</div>
                                    </div>
                                
                            <ul class="comments">
                            <li class="comment-form">
                                <div class="input-group">
                                    <input type="text" class="form-control">
                                    <span class="input-group-addon">
                   <a href=""><i class="fa fa-photo"></i></a>
                </span>
                                </div>
                            </li>
                        </ul>
							</div>
						
                            </div>
							</li>

';
echo'        <script type="text/javascript">
  $.growl({ title: "update", message: "You ideas has been shared !" });


</script>
';

			
			endforeach;
	
	}

			
}



	

		
	



		public function about()
	{
		
	  if ($this->session->userdata('user_lg')) {
	   $data['name'] = $this->User_mod->Get_userById($this->session->userdata('user_id'));
	  
   $this->load->view('body/user/header_user', $data);
	  
			  $this->load->view('body/user/left_user');	
		    $this->load->view('nodes/about_user');
				$this->load->view('body/user/right_user');
				
	  }
			 else {
				  redirect ('Register');
			  } 
	
	 

	}


function convertHashtag($message)
{
    $parsedMessage = preg_replace(array('/(?i)\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))/', '/(^|[^a-z0-9_])@([a-z0-9_]+)/i', '/(^|[^a-z0-9_])#([a-z0-9_]+)/i'), array('<a href="$1" target="_blank">$1</a>', '$1<a href="">@$2</a>', '$1<a href="index.php/Hashtag/$2">#$2</a>'), $message);
    return $parsedMessage;
}

function gethashtags($text)
{
  //Match the hashtags
  preg_match_all('/(^|[^a-z0-9_])#([a-z0-9_]+)/i', $text, $matchedHashtags);
  $hashtag = '';
  
  if(!empty($matchedHashtags[0])) {
	  foreach($matchedHashtags[0] as $match) {
		  $hashtag .= preg_replace("/[^a-z0-9]+/i", "", $match).',';
	  }
  }
    
return rtrim($hashtag, ',');
}





	 function validate_url($url) 
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


}

