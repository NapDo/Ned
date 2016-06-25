 <?php 
 defined('BASEPATH') OR exit('No direct script access allowed'); 
 class Notification_mod extends CI_Model {  
 
 function getAllNotifications() 
   {
$id = $this->session->userdata('user_id');
    if($id != null)
  
  $this->db->select('*');
  $this->db->from('notification');
$this->db->where('to_user', $id);
  $this->db->join('users_static u', 'u.id = notification.from_user');
$this->db->order_by('timestamp');
    $q = $this->db->get();
    if($q->num_rows() > 0)
      return $q;
  else
      return false;
  
  }
 
    function Add($data)
  {

    $this->db->insert('notification',$data);
    return $this->db->insert_id();
  }
 function Seen() {    
  $id_session = $this->session->userdata('user_id');
  $data=array(

'seen'=>1

);
     $this->db->where('to_user', $id_session);
     $this->db->update('notification',$data);
   }  
 function newCount() {  

$id = $this->session->userdata('user_id');
$this->db->where('to_user',$id);
$this->db->from('notification');
 $this->db->count_all();

  
  

   }  
   static function deleteNotification($id) {  
     if (!isset($_SESSION['id'])) exit;  
     $sql = "DELETE FROM notification WHERE id = {$id} AND to_user = {$_SESSION['id']}";  
     mysql_query($sql);  
   }  
 }  
 ?>  