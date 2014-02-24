<?php

class prob extends CI_Controller {
	
		
	
public function view($prob_id)
	{
	

	$this->load->model('membership_model');
		$data['viewp'] = $this->membership_model->q_list($prob_id);
	$this->load->view('header');


		
		$this->load->view('viewp',$data);
		$this->load->view('footer');
	
}
public function viewc($prob_id)
	{
	

	$this->load->model('membership_model');
		$data['viewc'] = $this->membership_model->c_list($prob_id);
	$this->load->view('header');


		
		$this->load->view('viewc',$data);
		$this->load->view('footer');
	
}
}
?>

