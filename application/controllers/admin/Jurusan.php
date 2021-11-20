<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('general_model');
        $this->load->model('fakultas_model');
        $this->load->model('user_model');
        $this->load->model('jurusan_model');
        $this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function show($id = null)
    {
        if(!isset($id)) show_404();
        $jurusan = $this->jurusan_model;
        $validation = $this->form_validation;
        $validation->set_rules($jurusan->rules());

        if($validation->run())
        {
            $jurusan->save();
            $this->general_model->generatePesan("Data program studi berhasil ditambahkan","success");
        }
        $data['jurusan'] = $this->jurusan_model->getAll($id);
        $data['id'] = $id;
        $data['content'] = 'index';
		$data['folder']	= './admin/jurusan';
		$this->load->view('./layouts/app',$data);
    }

    public function add()
    {
        $jurusan = $this->jurusan_model;
        $validation = $this->form_validation;
        $validation->set_rules($jurusan->rules());

        if($validation->run())
        {
            $jurusan->save();
            $this->general_model->generatePesan("Jurusan berhasil ditambahkan","success");
        }
        $data['fakultas'] = $this->fakultas_model->getAll();
        $data['content'] = 'create';
		$data['folder']	= './admin/jurusan';
		$this->load->view('./layouts/app',$data);
    }

    public function edit($id = null)
    {
        $jurusan = $this->jurusan_model;
        $validation = $this->form_validation;
        $validation->set_rules($jurusan->rules());

        if($validation->run())
        {
            $jurusan->update();
            $this->general_model->generatePesan("Jurusan berhasil diupdate","success");

        }   
        $data['fakultas'] = $this->fakultas_model->getAll();
        $data['jurusan'] = $jurusan->getById($id);
        if(!$data['jurusan']) show_404();
        $data['content'] = 'edit';
		$data['folder']	= './admin/jurusan';
		$this->load->view('./layouts/app',$data);
    }

    public function delete($id = null)
    {
        if(!isset($id)) show_404();
        $jurusan = $this->jurusan_model->getById($id);
        $fakultas_id = $jurusan->fakultas_id;
        if ($this->jurusan_model->delete($id)) {
            redirect(site_url('admin/jurusan/show/'.$fakultas_id));
        }
    }
}
