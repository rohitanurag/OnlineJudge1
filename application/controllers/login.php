<?php

class Login extends CI_Controller {
	 public function __construct()
 {
  parent::__construct();
  $this->load->model('membership_model');
 
 }
	public function index()
	{ 
		$this->home();
		
			

	}
	
	public function home()
	{	$this->load->model('membership_model');
		$data['main_content'] = $this->membership_model->get_list();
		
	
		$this->load->view('header');

		$this->load->view('login_form',$data);
		$this->load->view('footer');
		

	}
	public function about()

{
	$this->load->model('membership_model');
		$data['about'] = $this->membership_model->get_list();
	$this->load->view('header');


		
		$this->load->view('about',$data);
		$this->load->view('footer');
		}
		
		
public function p()
	{
	


$this->load->model('membership_model');
		$data['problem'] = $this->membership_model->prob_list();
		
		
	$this->load->view('header');


		
		$this->load->view('problem',$data);
		$this->load->view('footer');
		


}
	
	public function rank()
	{	
		$this->load->model('membership_model');
		$data['rank'] = $this->membership_model->get_list();
	$this->load->view('header');


		
		$this->load->view('rank',$data);
		$this->load->view('footer');

	}
	public function contest()
	{	$this->load->model('membership_model');
		$data['problem'] = $this->membership_model->con_list();
		
		$this->load->view('header');
		$this->load->view('contest',$data);
		$this->load->view('footer');
		

	}
	public function problem()
	{	if(($this->session->userdata('user_name')!=""))
  {
   $this->welcome();
  }
  else{
  
   $this->load->view('header');
   $this->load->view("registration_view.php");
   $this->load->view('footer');
  }
	}
	  public function status()
	{
		$this->load->library('pagination');
		$this->load->library('table');
		$config['base_url']='http://rohitanurag.netai.net/ci/index.php/login/status';
		$config['total_rows']=$this->db->get('status')->num_rows();
		$config['per_page'] = 10; // no of news per page view
$config['full_tag_open'] = '<div class="pagination pagination-small pagination-centered"><ul>';
$config['full_tag_close'] = '</ul></div>';
$config['prev_link'] = '&lt; Prev';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';
$config['next_link'] = 'Next &gt;';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';
$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';
$config['first_link'] = FALSE;
$config['last_link'] = FALSE;
$this->pagination->initialize($config);
		$this->pagination->initialize($config);
		$this->db->select('problemname,runtime,language,currentstatus,username');
		$data['record']=$this->db->get('status',$config['per_page'],$this->uri->segment(3));
		$this->load->view('header');
		$this->load->view('status',$data);
		$this->load->view('footer');
		

	}
	 public function welcome()
 {
  
  $this->load->view('header');
  $this->load->view('welcome_view.php');
  $this->load->view('footer');
 }
  public function account()
 {
  
  $this->load->view('header');
  $this->load->view('account.php');
  $this->load->view('footer');
 }
 public function thank()
 {
  
  $this->load->view('header');
  $this->load->view('thank_view.php');
  $this->load->view('footer');
 }
	public function registration()
 {
  $this->load->library('form_validation');
  // field name, error message, validation rules
  $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]|xss_clean');
  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

  if($this->form_validation->run() == FALSE)
  {
   $this->index();
  }
  else
  {
   $this->membership_model->add_user();
   $this->thank();
  }
 }
	  
	  
	  
}
?>

