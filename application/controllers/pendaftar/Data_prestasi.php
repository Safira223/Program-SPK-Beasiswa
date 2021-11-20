<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_prestasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->model('data_prestasi_model');
		$this->load->model('general_model');
		$this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        if($this->session->userdata('user_logged')->role != 1) redirect(site_url('login'));
        $id = $this->session->userdata('user_logged')->user_id;
		$data_prestasi = $this->data_prestasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($data_prestasi->rules());

        if($validation->run())
        {
            $data_prestasi->save($id);
            $this->general_model->generatePesan("Data prestasi berhasil disimpan","success");
        }
        $data['data_prestasi'] = $this->data_prestasi_model->getByUserId($id);
		$data['content'] = 'data_prestasi';
		$data['folder']	= './pendaftar/prestasi';
		$this->load->view('./layouts/app',$data);

	}

	public function update($id)
    {
        $user_id = $this->session->userdata('user_logged')->user_id;
		$data_prestasi = $this->data_prestasi_model;
        $validation = $this->form_validation;
        $validation->set_rules($data_prestasi->rules());

        if($validation->run())
        {
            $data_prestasi->update($id);
            $this->general_model->generatePesan("Data prestasi berhasil diupdate","success");

        }   
		$data['id'] = $id;
        $data['data_prestasi'] = $this->data_prestasi_model->getById($id);
        $data['content'] = 'edit_prestasi';
		$data['folder']	= './pendaftar/prestasi';
		$this->load->view('./layouts/app',$data);
    }

	public function delete($id)
	{
		$this->data_prestasi_model->delete($id);
		return redirect('pendaftar/data_prestasi');
	}
}
