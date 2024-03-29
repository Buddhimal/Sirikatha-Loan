<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct() {
        parent::__construct();
        $this->load->model('user/mlogin');
        // $this->load->library('msdb');
    }
	
	public function index()
	{
        // $this->mlogin->testSp();

		$this->load->view('header');
		$image_list['image']=$this->mlogin->select_randam_image();
		$this->load->view('login',$image_list);
		$this->load->view('footer');
	}
	 public function login(){
	   

		 
		$username=$this->input->get_post('username');
		$password=$this->input->get_post('password');
        //echo $username;
        if ($this->mlogin->login($username, $password)) {
			//echo $return;
            echo '{ "retval": true,"url" : "' . base_url() . '' . '" }';
        } else {
			//echo $return;
            echo '{ "retval": false,"url" : "' . base_url() . 'login" }';
        }
    }
	
	  public function logout() {
        $this->session->unset_userdata('user_group_id');
		$this->session->unset_userdata('user_id');
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');
          $this->session->sess_destroy();
          redirect(base_url() . 'login');
    }
	
	public function change_password() {
        $current_pass = md5($this->input->post('current_pass'));
        $new_pass = md5($this->input->post('new_pass'));


        if ($this->mlogin->password_match($current_pass)) {

            $this->mlogin->password_update($new_pass);
            $this->session->unset_userdata('user_group_id');
            $this->session->unset_userdata('login');
            $this->session->unset_userdata('user_group');
            $this->session->unset_userdata('sys_user_group_id');
            $this->session->unset_userdata('username');
            $this->session->sess_destroy();
            echo 'Password has been Changed..';
           
        } else {
        
            echo 'Sorry...!Current Password is Wrong';
        }
    }
	
	
	
}
