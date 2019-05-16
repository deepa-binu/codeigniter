<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('login');
	}
        public function signup()
	{
             $data = array("sign"=>1);
		$this->load->view('login',$data);
	}
}
