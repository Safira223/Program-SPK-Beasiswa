<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('fakultas_model');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
		$bulan = $this->db->query("SELECT tahun FROM users GROUP BY tahun ")->result();
		foreach($bulan as $val) {
			$bulan_data[] = $val->tahun;
		}
		$sum = $this->db->query("SELECT tahun, COUNT(*) as nil from users WHERE role = 1 GROUP BY tahun ORDER BY tahun")->result();
		foreach ($sum as $key => $value) {
			$sum_data[$value->tahun] = $value->nil;
		}
		$da = $this->db->query("SELECT c.fakultas as fak, a.tahun, count(a.user_id) as jumlah FROM users a join data_pendidikan b ON a.user_id = b.user_id JOIN fakultas c ON b.fakultas = c.id GROUP BY b.fakultas, a.tahun ORDER BY a.tahun")->result();
		
        $fakultas = $this->fakultas_model->getAll();
		foreach ($bulan_data as $key1 => $value1) {
			foreach ($fakultas as $key => $value) {
				$da = $this->db->query("SELECT c.fakultas as fak, a.tahun, count(a.user_id) as jumlah FROM users a join data_pendidikan b ON a.user_id = b.user_id JOIN fakultas c ON b.fakultas = c.id WHERE a.tahun = {$value1} AND b.fakultas = {$value->id} GROUP BY b.fakultas, a.tahun ORDER BY a.tahun")->row();

				if ($da) {
					$nilai = number_format(($da->jumlah / $sum_data[$value1]) * 100,2);
					$dat[$da->fak][] = $nilai;
				}else{
					$dat[$value->fakultas][] = 0;
				}
			}

		}
		foreach ($dat as $key => $value) {
			$res[] = [
				'label' => $key,
				'borderWidth' => 1,
				'data'=> $value
			];
		}
		// echo json_encode($res);die;
		$data['data'] = $res;
		$data['month'] = json_encode($bulan_data);
		$data['content'] = 'home';
		$data['folder']	= './admin';
		$this->load->view('./layouts/app',$data);

	}

	public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('front'));
    }
}
