<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crips extends CI_Controller {

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

    public function show($id = null)
    {
        if(!isset($id)) show_404();
        $crips = $this->crips_model;
        $validation = $this->form_validation;
        $validation->set_rules($crips->rules());

        if($validation->run())
        {
            $crips->save();
            $this->general_model->generatePesan("Crips berhasil ditambahkan","success");
        }
        $data['crips'] = $this->crips_model->getAll($id);
        $data['id'] = $id;
        $data['content'] = 'index';
		$data['folder']	= './admin/crips';
		$this->load->view('./layouts/app',$data);
    }

    // public function add()
    // {
    //     $crips = $this->crips_model;
    //     $validation = $this->form_validation;
    //     $validation->set_rules($crips->rules());

    //     if($validation->run())
    //     {
    //         $crips->save();
    //         $this->general_model->generatePesan("Crips berhasil ditambahkan","success");
    //     }
    //     $data['content'] = 'create';
	// 	$data['folder']	= './admin/crips';
	// 	$this->load->view('./layouts/app',$data);
    // }

    public function edit($id = null)
    {
        $crips = $this->crips_model;
        $validation = $this->form_validation;
        $validation->set_rules($crips->rules());

        if($validation->run())
        {
            $crips->update();
            $this->general_model->generatePesan("Crips berhasil diupdate","success");

        }   
        
        $data['crips'] = $crips->getById($id);
        if(!$data['crips']) show_404();
        $data['content'] = 'edit';
		$data['folder']	= './admin/crips';
		$this->load->view('./layouts/app',$data);
    }

    public function delete($id = null)
    {
        if(!isset($id)) show_404();
        $crips = $this->crips_model->getById($id);
        $kriteria_id = $crips->kriteria_id;
        if ($this->crips_model->delete($id)) {
            redirect(site_url('admin/crips/show/'.$kriteria_id));
        }
    }
}
