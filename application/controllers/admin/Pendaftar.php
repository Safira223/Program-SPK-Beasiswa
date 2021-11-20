<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('user_model');
		$this->load->model('data_diri_model');
		$this->load->model('data_ortu_model');
		$this->load->model('data_pendidikan_model');
		$this->load->model('data_prestasi_model');
		$this->load->model('data_seminar_model');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

    public function show()
    {
		$beasiswa = null;
		$get = $this->input->get();
		if ($get) {
			$beasiswa = $get['beasiswa'];
		}
        $data['pendaftar'] = $this->user_model->getByRole($beasiswa);
		$data['content'] = 'index';
		$data['folder']	= './admin/pendaftar';
		$this->load->view('./layouts/app',$data);
    }

	public function detail($user_id)
	{
		$data['data_diri'] = $this->data_diri_model->getByUserId($user_id);
		$data['data_ortu'] = $this->data_ortu_model->getByUserId($user_id);
		$data['data_pendidikan'] =$this->data_pendidikan_model->getByUserId($user_id);
		$data['data_prestasi'] = $this->data_prestasi_model->getByUserId($user_id);
		$data['data_seminar'] = $this->data_seminar_model->getByUserId($user_id);

		$data['content'] = 'detail';
		$data['folder']	= './admin/pendaftar';
		$this->load->view('./layouts/app',$data);
	}

	public function delete($id)
	{
		$this->user_model->delete($id);
		return redirect('admin/pendaftar');
	}
	public function deleteAll($id = null)
    {
        if(!isset($id)) show_404();

        if ($this->user_model->deleteAll($id)) {
            redirect(site_url('admin/pendaftar/show'));
        }
    }
}