<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index() {
		$this->load->view('dashboard/login');
    }

    public function login_verify() {
		$email=$this->input->post('email');
		$password= md5($this->input->post('password')); //p4s5w0rDkUL3M4H

		$query = $this->db->get_where('admin', array('email' => $email, 'password' => $password))->row_array();
		if ($query) {
			$this->session->set_userdata('logged_in_admin', array_merge($query, ['is_admin' => true]));
        } 
        redirect('dashboard');
    }

    public function logout() {
		$this->session->sess_destroy();
		redirect('dashboard');
	}
}