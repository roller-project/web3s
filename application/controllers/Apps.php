<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends Application {

	/*
	Install Apps
	*/

	public function install(){
		$this->view("install");
	}
}