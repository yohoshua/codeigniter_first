<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{	
		$this->load->helper('url');
		$this->layout->view('main/index',$this->data);
	}

}

/* End of file main.php */
/* Location: ./application/controllers/main.php */