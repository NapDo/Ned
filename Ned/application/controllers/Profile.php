<?php
class Profile extends CI_Controller {


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

	public function index ($username) {


		
 $query = $this->User_mod->Get_user($username);  

         $data['title']  = $username;
         $data['username'] = $username; 
         $data['fullname_profile'] = $this->User_mod->Get_user($username);
         $data['follower'] = $this->session->userdata('user_id');
        $R['notification'] = $this->Notification_mod->getAllNotifications();

    
   

    
           $data['Idees'] = $this->Ideas_mod->getIdeesByUsername($username);  
         $R['fullname'] = $this->User_mod->Get_userById($this->session->userdata('user_id'));
           $data['verify_session'] = $this->User_mod-> verify_sessionByUsername($this->session->userdata('user_id'),$username);

        
if($this->session->userdata('user_lg')){
	if($query){

	 
 if ($query->num_rows() > 0)
{
   $row = $query->row(); 
   $id=$row->id;

}     
	
		
   $data['check_follow'] = $this->Follow_mod->follow_exist($id);
	$this->load->view('nodes/profile/profile_header', $data);	
	   $this->load->view('body/user/header_user',$R);
	   $this->load->view('body/user/left_user', $R);	
	   $this->load->view('nodes/profile/profile_main', $data);

	  
	   
	    $this->load->view('body/user/right_user');


      }

else {
        $this->load->view('nodes/profile/profile_header', $data);   
       $this->load->view('body/user/header_user',$R);
       $this->load->view('body/user/left_user', $R);    
        $this->load->view('nodes/error/user_error');

      
       
        $this->load->view('body/user/right_user');



             
             

  

}
}
else {
	redirect ('home');
}

	
	}


	public  function add_follower() 
{   



 $this->load->helper(array('form', 'url'));     
 $this->load->library('form_validation');		 

 	$follower= $this->session->userdata('user_id');
 	$user= $this->input->post('id');

	
	if($this->input->post('id')) 
		{
			 
              $data['follower_id']= $follower;
	          $data['user_id']= $user;
	          $data['following'] = 1;
              $data['follow_time'] = time();
			 $this->Follow_mod->add_follow($data);  
             
            $data1['from_user']= $this->session->userdata('user_id');
            $data1['to_user']=$this->input->post('id');
            $this->Notification_mod->Add($data1);
			}
	
			return  '<div class="alert alert-danger" role="alert">'.validation_errors().'</div>';
	
	  

		}
	   public function do_upload()
        {
            $this->load->library('form_validation');
          

 $config=array (    
            'upload_path' => './public/user/uploads/avatars',
           'allowed_types' =>'gif|jpg|png',
            'file_name'   => 'img_'.$this->input->post('userfile'),
           'encrypt_name'=> true
    );
          
    

            

 
 $this->load->library('upload', $config);



                if ( ! $this->upload->do_upload())
                {
                        $error = array('error' => $this->upload->display_errors());

                       echo 'error';
                }
                else
                {

 
           
                        $data = $this->upload->data();
                      
            $this->load->library('image_lib');
            $config_resize['image_library'] = 'gd2';    
            $config_resize['create_thumb'] = TRUE;
            $config_resize['maintain_ratio'] = FALSE;
            $config_resize['master_dim'] = 'height';
            $config_resize['quality'] = "100%";
            $config_resize['source_image'] ='./public/user/uploads/avatars/'.$data["file_name"];
 
            $config_resize['height'] = 55;
            $config_resize['width'] = 55;
             $thumbnail = $data['raw_name'].'_thumb'.$data['file_ext'];
            $this->image_lib->initialize($config_resize);
            $this->image_lib->resize();
              $file_id= $this->Profile_mod->edit($data['file_name'], $thumbnail);
              $thumbnail = $data['raw_name'].'_thumb'.$data['file_ext'];


echo json_encode($data);
                 }
                     
                      
         
    

                     
                }
            
             
        


		
	}