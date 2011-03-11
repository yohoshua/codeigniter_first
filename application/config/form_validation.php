<?php

$config = array(
	'contact/create' => array(
		array(
				'field'		=> 'name',
				'label'		=> 'Name',
				'rules'		=> 'required|xss_clean'
		),
		array(
				'field'		=> 'email',
				'label'		=> 'Email',
				'rules'		=> 'required|valid_email|trim'
		),
		array(
				'field'		=> 'content',
				'label'		=> 'Content',
				'rules'		=> 'required|max_length[255]|callback_bad_words_check'
		)
	)
);