<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userslist extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->model('userslist_model');
     // $this->load->database();
   }
	public function index()
	{
		$this->load->view('users_list');
	}

 public function userdetails(){
  $data = $this->userslist_model->display_data();
       $this->load->view('users_list', $data);
 }

 public function ajaxactions(){ 
 	$action =$this->input->post('action');
 	switch($action){
		case "insert":
		    $data=$this->userslist_model->save_info();
		    return 1;
			break;
		case "update":
		$data=$this->userslist_model->edit_info();
			break;	
		case "delete":
				$data=$this->userslist_model->delete_info();
			break;			
		default:
			break;
 	}
 }
}
