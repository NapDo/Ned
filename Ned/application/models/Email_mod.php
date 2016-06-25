<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class Email_mod extends CI_Model {
    public function __construct()
    {
        parent::__construct();

    $this->load->library('email');
  
 
    }






 function sendVerificatinEmail($email){
  $verification_code = md5(rand(0, 1000));

  $config = Array(
     'protocol' => 'smtp',
     'smtp_host' => 'smtp.yourdomain.com.',
     'smtp_port' => 465,
     'smtp_user' => 'admin@yourdomain.com', // change it to yours
     'smtp_pass' => '########', // change it to yours
     'mailtype' => 'html',
     'charset' => 'iso-8859-1',
     'wordwrap' => TRUE
  );
  
  
  $this->load->library('email', $config);
  $this->email->set_newline("\r\n");
  $this->email->from('support@napdo.co', "Napdo Team");
  $this->email->to($email);  
  $this->email->subject("Email Verification - Napdo website");
  $this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://www.napdo.co/verify/".$verification_code."\n"."\n\nThanks\nAdmin Team");
  $this->email->send();
  
 }
}