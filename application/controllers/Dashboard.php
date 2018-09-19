<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Frontend {

	
	public function index()
	{
		$this->setLayout("home-layout");
		$this->view('dashboard');

	}

	public function home(){
		$this->db->limit(8);
		$this->db->order_by("app_sort","ASC");
		$fapp = $this->db->get("application")->result();
		$this->view('home',["apps" => $fapp]);
	}


	public function login(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		if($email && $password){
			$this->unlockAccount($email, $password);
		}
		$this->view("login");
	}


	private function unlockAccount($email, $password){
		$email = strtolower(trim($email));
		$password = sha1(strtoupper(trim($password)));
		$data = $this->db->get_where("account",["account_email" => $email, "account_password" => $password])->row();
		if($data && $data->account_id > 0){
			$arv = [
				"is_login" => $data->account_id,
				"wallet"	=>	$data->account_wallet,
				"email"		=> $data->account_email
			];
			$this->session->set_userdata("login",$arv);
			$this->go(false,"profile.html");
		}else{
			$this->flash("error","Error email or password");
			$this->go(false,"login.html");
		}
	}


	public function register(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		if($email && $password){
			$this->createAccount($email, $password);
			
		}

		$this->view("register");
	}


	private function createAccount($email, $password){
		$email = strtolower(trim($email));
		$password = sha1(strtoupper(trim($password)));
		$data = $this->db->get_where("account",["account_email" => $email])->num_rows();
		if($data > 0){
			$this->flash("error","Email not exists");
			$this->go(false,"register.html");
		}else{
			$arv = [
				"account_email" => $email,
				"account_password" => $password
			];
			$this->db->insert("account",$arv);
			$this->flash("success","Register success");
			$this->go(false,"login.html");
		}
	}
}
