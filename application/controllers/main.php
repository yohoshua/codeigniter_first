<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$this->load->helper('url');
		$this->load->view('main/index');
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */