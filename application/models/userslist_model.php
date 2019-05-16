<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class userslist_model extends CI_Model {


  public function __construct() {
      parent::__construct();
     $this->load->database();
   }
 public function display_data(){
   $data =array("data"=> $this->db->get("userlists")->result());
   return $data;
 }
  public function save_info(){
 
    $data = array(
        'user_name'  => $this->input->post('user_name'), 
        'user_dept'  => $this->input->post('user_dept'), 
        'user_phone' => $this->input->post('user_phone'), 
      );
    $result=$this->db->insert('userlists',$data);
    return 1;
  }
    public function edit_info(){
     $dbdata = array(
          'user_name'  => $this->input->post('user_name'), 
        'user_dept'  => $this->input->post('user_dept'), 
        'user_phone' => $this->input->post('user_phone'), 
     ); 
    $this->db->where('user_id', $this->input->post('user_id'));
    $result=$this->db->update('userlists');
    return 1;
  }

    public function delete_info(){
      $user_id=$this->input->post('user_id');
      $this->db->where('user_id', $user_id);
      $result=$this->db->delete('userlists');
      return 1;
  }

 }