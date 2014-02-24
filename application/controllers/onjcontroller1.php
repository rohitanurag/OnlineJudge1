<?php
class Site extends CI_Controller

{
	function members_area()
	{
		if($this->session->userdata('is_logged_in')==true){
			$data['res']=array(
				'username' => $this->session->userdata('username'),
				'id'=>$this->session->userdata('id'),
				'email_address'=>$this->session->userdata('email_address')
				);
			$this->load->view('home.php',$data);
		}
		else{
		redirect('/');	
		}

	}
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$query = $this->membership_model->validate();
		if($query) // if the users credentials validated
		{
			 $data['members'] = $this->membership_model->get_list(); //array of members
  $this->load->view('home.php', $data); // load members in view

		}
		else{
			redirect('/');

		}
	}	
}