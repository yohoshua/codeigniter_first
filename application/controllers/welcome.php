<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('welcome/index');
	}
	
	function email()
	{
		$this->load->library('email');
		$this->email->from('joshjyang@gmail.com', 'Joshua Yang');
		$this->email->to('joshyangnuhs@gmail.com', 'Josh Yang 2');
		$this->email->subject('Email Test');
		$this->email->message('Testing the email class. La de da. ');
		
		$this->email->send();
		
		$data = array();
		
		$data['debug']=$this->email->print_debugger();
		
		$this->load->view('welcome/email',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */