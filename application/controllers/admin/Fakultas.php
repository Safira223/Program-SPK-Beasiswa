<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fakultas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('general_model');
        $this->load->model('fakultas_model');
        $this->load->model('user_model');
        $this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        $data['fakultas'] = $this->fakultas_model->getAll();
		$data['content'] = 'index';
		$data['folder']	= './admin/fakultas';
		$this->load->view('./layouts/app',$data);

	}

    public function add()
    {
        $fakultas = $this->fakultas_model;
        $validation = $this->form_validation;
        $validation->set_rules($fakultas->rules());

        if($validation->run())
        {
            $fakultas->save();
            $this->general_model->generatePesan("Fakultas berhasil ditambahkan","success");
        }

        $data['content'] = 'create';
		$data['folder']	= './admin/fakultas';
		$this->load->view('./layouts/app',$data);
    }

    public function edit($id = null)
    {
        $fakultas = $this->fakultas_model;
        $validation = $this->form_validation;
        $validation->set_rules($fakultas->rules());

        if($validation->run())
        {
            $fakultas->update();
            $this->general_model->generatePesan("Fakultas berhasil diupdate","success");

        }   
        
        $data['fakultas'] = $fakultas->getById($id);
        if(!$data['fakultas']) show_404();
        $data['content'] = 'edit';
		$data['folder']	= './admin/fakultas';
		$this->load->view('./layouts/app',$data);
    }

    public function delete($id = null)
    {
        if(!isset($id)) show_404();

        if ($this->fakultas_model->delete($id)) {
            redirect(site_url('admin/fakultas'));
        }
    }
}
