<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
        $this->load->model('data_diri_model');
		$this->load->model('data_ortu_model');
		$this->load->model('data_pendidikan_model');
		$this->load->model('fakultas_model');
		$this->load->model('data_prestasi_model');
		$this->load->model('data_seminar_model');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function show()
	{
        $beasiswa = null;
		$get = $this->input->get();
        $data['beasiswa'] = [];
		if ($get) {
			$beasiswa = $get['beasiswa'];
            $tahun = $get['tahun'];
			$ket = strtolower($get['ket']);

            $data['beasiswa'] = $this->db->query("SELECT *, d.fakultas as fak FROM `users` a JOIN history b ON a.user_id = b.user_id JOIN data_pendidikan c ON a.user_id = c.user_id JOIN fakultas d ON c.fakultas = d.id WHERE tahun = ".$tahun." AND jenis_beasiswa = ".$beasiswa." AND LOWER(status) = '".$ket."' AND c.fakultas = ".$get['fakultas']."  GROUP BY a.user_id ORDER BY ranking ASC")->result();
		}
		$data['fakultas'] = $this->fakultas_model->getAll();
		$data['content'] = 'index';
		$data['folder']	= './admin/laporan';
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
		$data['folder']	= './admin/laporan';
		$this->load->view('./layouts/app',$data);
	}
}
