<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend {

	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
