<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('default.php');
	}

	public function save_register() {
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$password= md5($this->input->post('password'));
		$gender=$this->input->post('gender');
		$handphone=$this->input->post('handphone');
		$birth_date=date("Y-m-d", strtotime($this->input->post('birth_date')));

		$data = [
			'email' => $email,
			'password' => $password,
			'name' => $name,
			'phone' => $handphone,
			'gender' => $gender,
			'birth_date' => $birth_date,
			'created_at' => date('Y-m-d H:i:s')
		];
		$query = $this->db->get_where('users', array('email' => $email))->row();
		if ($query) {

			echo json_encode(['status' => 'error', 'message' => 'Email sudah terdaftar, silahkan lakukan login']);
			exit;
		}

		$this->db->insert('users', $data);

		echo json_encode(['status' => 'success', 'data' => []]);
		exit;
	}

	public function login() {
		$email=$this->input->post('email_login');
		$password= md5($this->input->post('password_login'));

		$query = $this->db->get_where('users', array('email' => $email, 'password' => $password))->row_array();
		if ($query) {
			$this->session->set_userdata(array_merge($query, ['referral' => $this->encode($query['id'])]));
			echo json_encode(['status' => 'success', 'data' => []]);
			exit;
		} else {
			echo json_encode(['status' => 'error', 'message' => 'Gagal login, silahkan coba lagi']);
			exit;
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function referral() {
		$code = $this->decode($this->input->get('code'));
		if ($code) {
			$data = [
				'users_id' => $code,
				'share_type' => 'socmed',
				'created_at' => date('Y-m-d H:i:s')
			];

			$this->db->insert('share_counter', $data);
		}

		redirect('https://cplcps.com/?a=2210&c=493078&s1=');
	}

	function encode($string) {
		$encrypted = $this->encryption->encrypt($string);
		if ( !empty($string) )
		{
			$encrypted = strtr($encrypted, array('/' => '~'));
		}
		return $encrypted;
	}

	function decode($string) {
		$string = strtr($string, array('~' => '/'));
		return $this->encryption->decrypt($string);
	}
}
