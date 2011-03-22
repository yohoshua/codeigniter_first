<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function compose()
	{
		$this->load->helper('form');
		$this->layout->view('contact/compose',$this->data);

	}

	function ajaxcompose()
	{
		$this->load->helper('form');
		$this->layout->view('contact/ajaxcompose',$this->data);
	}
	
	function ajaxcreate()
	{
		$this->data["response"]=array("success" => "true");
		$this->data["jsonresponse"]=json_encode($this->data["response"],TRUE);
		$this->load->view('contact/ajaxdone',$this->data);
	}
	
	function create()
	{
//		$this->load->database();
		date_default_timezone_set ('America/Chicago');


		$this->load->library('form_validation');
		
		$this->form_validation->set_error_delimiters('<li id="error">', '</li>');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('contact/compose');
		}
		else
		{
			
		$destinations=array(
			"1" => "joshjyang@gmail.com",
			"2" => "cewalker@northwestern.edu"
		);

		$this->data["destination"]=$destinations[$this->input->post('to')];

		$this->data["email"]=$this->input->post('email');
		$this->data["name"]=$this->input->post('name');
		$this->data["content"]=$this->input->post('content');
		
		$this->load->library('email');
		$this->email->from($this->data['email'], $this->data['name']);
		$this->email->to($this->data['destination'], $this->data['destination']);
		$this->email->subject('Web correspondence');
		$this->email->message($this->data['content']);
		
		$this->email->send();

		$this->layout->view('contact/create',$this->data);
		
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