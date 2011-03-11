<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function compose()
	{
		$this->load->helper('form');
		$this->load->view('contact/compose');

	}
	
	function create()
	{
		date_default_timezone_set ('America/Chicago');


		$this->load->library('form_validation');
		
		$this->form_validation->set_error_delimiters('<li id="error">', '</li>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contact/compose');
		}
		else
		{

		$data=array(
			"email"   =>$this->input->post('email'),
			"name"    =>$this->input->post('name'),
			"content" =>$this->input->post('content')
		);
		
		$this->load->library('email');
		$this->email->from($data['email'], $data['name']);
		$this->email->to('joshyangnuhs@gmail.com', 'Josh Yang 2');
		$this->email->subject('Web correspondence');
		$this->email->message($data['content']);
		
		$this->email->send();

		$this->load->view('contact/create',$data);
		
		}
	}
	
	function bad_words_check($str)
	{
		if (preg_match('/(crap|shit|fuck|damn)/i',$str))
		{
			$this->form_validation->set_message('bad_words_check','No cursing. My form, my rules.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
		
	}

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */