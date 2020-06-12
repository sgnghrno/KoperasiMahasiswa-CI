<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class login extends CI_Controller {

     public function index(){
         $this->load->view('login/view_login');
     }

    //  public function cek_log(){
    //      $username = $this->input->post('txt_user');
    //      $password = $this->input->post('txt_pass');
    //      $cek = $this->mahasiswa_model->login($username, $password, 'tm_user')->result();
    //      if ($cek != FALSE) {
    //          foreach ($cek as $row ) {
    //              $user = $row->username;
    //              $grup = $row->grup;
    //          }
    //          $this->session->set_userdata('session_user', $user);
    //          $this->session->set_userdata('session_grup', $grup);
    //          redirect('mahasiswa');
    //      }else {
    //          redirect('login');
    //      }
    //  }

     function logout(){
		$this->session->sess_destroy();
		redirect('Login');
	}
 }

?>