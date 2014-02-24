<?php
class Membership_model extends CI_Model{
	 public function __construct()
 {
  parent::__construct();
 }
	function validate()
	{
		//$this->db->where('username', $this->input->post('username'));
		//$this->db->where('password',md5($this->input->post('password')));
		 $this->db->select('*')->from('membership')->where(array('username'=>$this->input->post('username'),'password'=>md5($this->input->post('password'))));
		 $query=$this->db->get();

		foreach( $query->result() as $row)
		{
			return $row;
		}
		
			return false;
		
	}
	function get_list() {
   // query in database
 $this->db->order_by("score", "desc"); 
    
   return $query = $this->db->get('membership')->result(); //table name members
   
}

function prob_list() {
   // query in database
// $this->db->order_by("score", "desc"); 

    
   return $query = $this->db->get('problem')->result(); //table name members
   
}
function con_list() {
   // query in database
// $this->db->order_by("score", "desc"); 

    
   return $query = $this->db->get('contest')->result(); //table name members
   
}

function q_list($idofp) {
   // query in database
// $this->db->order_by("score", "desc"); 
$this->db->where('problemid', $idofp); 
    
   return $query = $this->db->get('problem')->result(); //table name members
   
}
function c_list($idofc) {
   // query in database
// $this->db->order_by("score", "desc"); 
$this->db->where('contestid', $idofc); 
    
   return $query = $this->db->get('problem')->result(); //table name members
   
}




/*function getrank() {
   // query in database
 $this->db->order_by("score", "desc"); 

   return $query = $this->db->get('ranking')->result(); //table name members
   
}


function getstatus() {
   // query in database
  

   return $query = $this->db->get('status')->result(); //table name members
   }
   */

public function add_user()
 {
  $data=array(
    'username'=>$this->input->post('username'),
    'email_address'=>$this->input->post('email_address'),
    'password'=>md5($this->input->post('password')),
    'firstname'=>$this->input->post('firstname'),
    'lastname'=>$this->input->post('lastname'),
    'institute'=>$this->input->post('institute'),
  );
  $this->db->insert('membership',$data);
  
 }
 public function add_status()
 {
  $data=array(
    
    'problemname'=>$this->input->post('problemname'),
    
    'language'=>'Python',
    'currentstatus'=>'pending',
    'username'=>$this->session->userdata('username')
  );
  $this->db->insert('status',$data);
  
 }




}