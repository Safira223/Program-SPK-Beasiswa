<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_diri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->model('data_diri_model');
		$this->load->model('general_model');
		$this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        if($this->session->userdata('user_logged')->role != 1) redirect(site_url('login'));
        $id = $this->session->userdata('user_logged')->user_id;
		$data_diri = $this->data_diri_model;
        $validation = $this->form_validation;
        $validation->set_rules($data_diri->rules());

        if($validation->run())
        {
            $data_diri->saveOrUpdate($id);
            $this->general_model->generatePesan("Data diri berhasil disimpan","success");
        }
        $data['data_diri'] = $this->data_diri_model->getByUserId($id);
		$data['content'] = 'data_diri';
		$data['folder']	= './pendaftar';
		$this->load->view('./layouts/app',$data);

	}
}
