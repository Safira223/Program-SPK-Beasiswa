<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_ortu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->model('data_ortu_model');
		$this->load->model('general_model');
		$this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        if($this->session->userdata('user_logged')->role != 1) redirect(site_url('login'));
        $id = $this->session->userdata('user_logged')->user_id;
		$data_ortu = $this->data_ortu_model;
        $validation = $this->form_validation;
        $validation->set_rules($data_ortu->rules());

        if($validation->run())
        {
            $data_ortu->saveOrUpdate($id);
            $this->general_model->generatePesan("Data orang tua berhasil disimpan","success");
        }
        $data['data_ortu'] = $this->data_ortu_model->getByUserId($id);
		$data['content'] = 'data_ortu';
		$data['folder']	= './pendaftar';
		$this->load->view('./layouts/app',$data);

	}
}
