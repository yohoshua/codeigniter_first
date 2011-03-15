<?php

class MY_Controller extends CI_Controller {

public $data;

    function __construct()
    {
        parent::__construct();
		$this->data['headtitle']='E-mail app';
		$this->data['footer']=$this->load->view('shared/_footer','',TRUE);
    }
}