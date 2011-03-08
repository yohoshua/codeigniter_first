<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function compose()
	{
		$this->load->view('contact/compose');
	}
	
	function create()
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

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */