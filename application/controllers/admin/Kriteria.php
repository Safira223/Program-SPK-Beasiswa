<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kriteria_model');
        $this->load->model('general_model');
        $this->load->model('user_model');
        $this->load->model('crips_model');
        $this->load->library('form_validation');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        $data['kriteria'] = $this->kriteria_model->getAll();
		$data['content'] = 'index';
		$data['folder']	= './admin/kriteria';
		$this->load->view('./layouts/app',$data);

	}

    public function add()
    {
        $kriteria = $this->kriteria_model;
        $validation = $this->form_validation;
        $validation->set_rules($kriteria->rules());

        if($validation->run())
        {
            $kriteria->save();
            $this->general_model->generatePesan("Kriteria berhasil ditambahkan","success");
        }

        $data['content'] = 'create';
		$data['folder']	= './admin/kriteria';
		$this->load->view('./layouts/app',$data);
    }

    public function edit($id = null)
    {
        $kriteria = $this->kriteria_model;
        $validation = $this->form_validation;
        $validation->set_rules($kriteria->rules());

        if($validation->run())
        {
            $kriteria->update();
            $this->general_model->generatePesan("Kriteria berhasil diupdate","success");

        }   
        
        $data['kriteria'] = $kriteria->getById($id);
        if(!$data['kriteria']) show_404();
        $data['content'] = 'edit';
		$data['folder']	= './admin/kriteria';
		$this->load->view('./layouts/app',$data);
    }

    public function delete($id = null)
    {
        if(!isset($id)) show_404();

        if ($this->kriteria_model->delete($id)) {
            redirect(site_url('admin/kriteria'));
        }
    }
}
