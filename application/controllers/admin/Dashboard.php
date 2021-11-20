<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		$data['content'] = 'dashboard';
		$data['folder']	= './admin';
		$this->load->view('./layouts/app',$data);

	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('front'));
    }
}
