<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_pendidikan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->model('data_pendidikan_model');
		$this->load->model('fakultas_model');
		$this->load->model('jurusan_model');
		$this->load->model('general_model');
		$this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        if($this->session->userdata('user_logged')->role != 1) redirect(site_url('login'));
		$id              = $this->session->userdata('user_logged')->user_id;
		$data_pendidikan = $this->data_pendidikan_model;
		$validation      = $this->form_validation;
        $validation->set_rules($data_pendidikan->rules());

        if($validation->run())
        {
            $data_pendidikan->saveOrUpdate($id);
            $this->general_model->generatePesan("Data pendidikan berhasil disimpan","success");
        }

		$data['jurusan']         = $this->jurusan_model->getAll($id);
		$data['fakultas']        = $this->fakultas_model->getAll();
		$data['data_pendidikan'] = $this->data_pendidikan_model->getByUserId($id);
		$data['content']         = 'data_pendidikan';
		$data['folder']          = './pendaftar';
		$this->load->view('./layouts/app',$data);

	}

	public function getJurusan()
	{
		$get = $this->input->get();
		$jurusan = $this->jurusan_model->getByFakultas($get['fakultas_id']);
		$res = [
			'status' => 'success',
			'data' => $jurusan
		];
		header('Content-Type: application/json');
        echo json_encode($res);
	}
}
