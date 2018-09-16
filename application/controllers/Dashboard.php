<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend {

	
	public function index()
	{
		$this->setLayout("home-layout");
		$this->view('dashboard');
	}

	public function home(){
		$this->view('home');
	}


	public function login(){
		$this->view("login");
	}

	public function register(){
		$this->view("register");
	}
}
