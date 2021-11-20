<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_seminar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->model('data_seminar_model');
		$this->load->model('general_model');
		$this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        if($this->session->userdata('user_logged')->role != 1) redirect(site_url('login'));
        $id = $this->session->userdata('user_logged')->user_id;
		$data_seminar = $this->data_seminar_model;
        $validation = $this->form_validation;
        $validation->set_rules($data_seminar->rules());

        if($validation->run())
        {
            $data_seminar->save($id);
            $this->general_model->generatePesan("Data seminar berhasil disimpan","success");
        }
        $data['data_seminar'] = $this->data_seminar_model->getByUserId($id);
		$data['content'] = 'data_seminar';
		$data['folder']	= './pendaftar/seminar';
		$this->load->view('./layouts/app',$data);

	}

	public function update($id)
    {
        $user_id = $this->session->userdata('user_logged')->user_id;
		$data_seminar = $this->data_seminar_model;
        $validation = $this->form_validation;
        $validation->set_rules($data_seminar->rules());

        if($validation->run())
        {
            $data_seminar->update($id);
            $this->general_model->generatePesan("Data seminar berhasil diupdate","success");

        }   
		$data['id'] = $id;
        $data['data_seminar'] = $this->data_seminar_model->getById($id);
        $data['content'] = 'edit_seminar';
		$data['folder']	= './pendaftar/seminar';
		$this->load->view('./layouts/app',$data);
    }

	public function delete($id)
	{
		$this->data_seminar_model->delete($id);
		return redirect('pendaftar/data_seminar');
	}
}
