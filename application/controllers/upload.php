<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('problem', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = 'C:/xampp/htdocs/ci/application/submissions/'.$this->session->userdata('username');
		$config['allowed_types'] = 'gif|jpg|png|c|html|py';
		$config['max_size']	= '5000';
		$config['max_width']  = '555';
		$config['max_height']  = '555';

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload())
		{
		
			$error = array('error' => $this->upload->display_errors());
              
			$this->load->view('problem', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->model('membership_model');
			$this->membership_model->add_status();
$this->load->view('header');
		$this->load->view('upload_success',$data);
		$this->load->view('footer');
		
		}
	}
}
?>