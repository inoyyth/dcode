<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Main_model');
        $this->load->library('Auth_log');
	}
	
	public function index()
	{
        $data['participant'] = $this->Main_model->getParticipant();
        $data['view'] = 'dashboard/main';
		$this->load->view('dashboard', $data);
    }

    public function claim()
	{
        $data['claim'] = $this->Main_model->getClaimUser();
        $data['view'] = 'dashboard/claim';
		$this->load->view('dashboard', $data);
    }

}