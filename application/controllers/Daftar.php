<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('user_model');
        $this->load->model('general_model');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $pendaftar  = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($pendaftar->rules());

        if($validation->run())
        {
            $pendaftar->daftar();
            $this->general_model->generatePesan("Sukses mendaftar","success");
        }
		$this->load->view('daftar/index.php');
	}
}
