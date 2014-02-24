<?php
class Site extends CI_Controller

{
	
	function validate_credentials()
	{
		$this->load->model('membership_model');
		$result = $this->membership_model->validate();
		if($result) // if the users credentials validated
		{
			$user_data=array(
				'username'=>$result->username,
				'rank'=>$result->rank,
				'email_address'=>$result->email_address,
				'totalsubmissions'=>$result->totalsubmissions,
				'ac'=>$result->ac,
			'id'=>$result->id,
				'wa'=>$result->wa,
				'tle'=>$result->tle,
				'firstname'=>$result->firstname,
				'lastname'=>$result->lastname,
				'score'=>$result->score,
				'institute'=>$result->institute,
				'is_logged_in'=>true

				);
			$this->session->set_userdata($user_data);
			mkdir('/var/www/ci/application/submissions/'.$this->session->userdata('username'), 0777);
			
		}
		
		redirect('/');

		
	}	

	function logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
	

}