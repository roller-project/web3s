<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require BASEPATH.'core/Controller.php';
class BaseController extends CI_Controller {
	
	public $layout = "";
	function __construct()
	{
		parent::__construct();
		//$this->load->library(['session','email','user_agent']);
		$this->load->helper(['url','language','string','text']);
		$this->loadConfig();
	}


	private function loadConfig(){
		$this->config->set_item("site_name","Roller Application");
	}


	public function flash($key, $content=""){
		$this->session->set_flashdata($key, $content);
	}

	public function get_flash(){
		$html = "";
		if($this->session->flashdata("error")){
			$html = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>'.lang("error").'!</strong> '.$this->session->flashdata("error").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}

		if($this->session->flashdata("success")){
			$html = '<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>'.lang("success").'!</strong> '.$this->session->flashdata("success").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}


		if($this->session->flashdata("warning")){
			$html = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
			  <strong>'.lang("warning").'!</strong> '.$this->session->flashdata("warning").'.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
		}


		return $html;
	}

	/*
	Set Layout Loadding
	*/
	public function setLayout($layout=""){
		$this->layout = $layout;
		return $this;
	}

	/*
	Get Layout 
	*/
	public function getLayout(){
		$file = VIEWPATH.$this->layout.".php";
		if(file_exists($file)){
			return true;
		}
		return false;
	}

	/*
	Return View
	*/
	public function view($layout, $data=[]){
		
		//$captcha = ($this->config->item("recaptcha_key") ? $this->recaptcha() : "");
		//$data = array_merge($data,["is_login" => $this->isLogin(),"captcha" => $captcha]);
		if($this->getLayout()){

			$data = $this->load->view($layout, $data, true);
			
			return $this->load->view($this->layout,["content" => $data, "flash" => $this->get_flash()]);
		}else{
			return $this->load->view($layout, $data);
		}
	}


	public function error(){
		$this->view('404');
	}


	/*
	Login Member
	*/

	public function is_login(){
		$login = $this->session->userdata("login");
		if($login && isset($login["is_login"]) && intval($login["is_login"]) > 0){
			return true;
		}else{
			return false;
		}
	}


	public function checklogin(){
		if(!$this->is_login()){
			$this->go(false,"login.html");
		}
	}


	public function go($type="", $url=""){
		if($type == "admin"){
			redirect(admin_url($url));
		}else{
			redirect(store_url($url));
		}
		exit();
	}
}



class Frontend extends BaseController {
	function __construct()
	{
		parent::__construct();
		$this->setLayout("apps-layout");
	}
}


class Application extends BaseController {
	function __construct()
	{
		parent::__construct();
		$this->setLayout("apps-layout");
		$this->checklogin();
	}
}

class Backend extends BaseController {

}


class Api extends CI_Controller {

}




function store_url($path=""){
	return base_url($path);
}
function resource_url($path=""){
	return store_url("resource/".$path);
}

function admin_url($path=""){
	return store_url("admin/".$path);
}

function template_url($path=""){
	$ex = explode('/', VIEWPATH);
	
	$template = array_pop($ex);
	if(!$template){
		$template = array_pop($ex);
	}
	
	return store_url("template/{$template}/".$path);

}


function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = '0x9d29d00b7522b6f990c1520757caf55b405e30e5eb877bb35ac86d9976782ba8';
    $secret_iv = '0x1dcc4de8dec75d7aab85b567b6ccd41ad312451b948a7413f0a142fd40d49347';
    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}


function login_url(){

}

function register_url(){

}

function logout_url(){

}

function profile_url(){

}

include_once __DIR__."/function/form.php";

?>