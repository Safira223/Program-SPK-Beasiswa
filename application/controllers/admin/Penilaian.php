<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('general_model');
		if($this->user_model->isNotLogin()) redirect(site_url('login'));
	}

	public function index()
	{
        $beasiswa = null;
		$get = $this->input->get();
		if ($get) {
			$beasiswa = $get['beasiswa'];
		}
		$result = array('code' => 400);
        $data['user'] = $this->user_model->getByRole($beasiswa);
		// echo json_encode($data['user']);die;
		$data['kriteria'] = $this->db->query("SELECT * FROM kriteria ORDER BY kriteria_id ASC")->result();
		if (count($data['user']) >= 3) {
			$result = $this->topsis($data['user'],$data['kriteria']);
		}

		// echo json_encode();die;
		$result['content'] = 'index';
		$result['folder']	= './admin/penilaian';
		$this->load->view('./layouts/app',$result);

	}

	private function topsis($user,$kriteria)
	{
		// header('Content-Type: application/json');
		$data['user'] = $user;
		$data['kriteria'] = $kriteria;
		foreach ($data['user'] as $key => $value) {
			$keyss = "".$value->user_id."_".$value->nama_user;
			$data[$keyss]['prestasi'] = $this->db->query("SELECT * FROM data_prestasi WHERE user_id = ".$value->user_id." ")->result();
			$data[$keyss]['seminar'] = $this->db->query("SELECT * FROM data_seminar WHERE user_id = ".$value->user_id." ")->result();

			if (count($data[$keyss]['prestasi']) > 0) {
				foreach ($data[$keyss]['prestasi'] as $pres => $valpres) {
					$dateNow = date('Y');
					$thn = $dateNow - $valpres->tahun;
					//echo json_encode([$thn,  $dateNow, $valpres->tahun]); die;
					if ($thn > 4) {
						$where[$keyss][] = "> 4";
					}else {
						$where[$keyss][] = $thn == 0 ? 1 : $thn;
					}
					$tingkat_kejuaraan[$keyss][] = $valpres->tingkat_kejuaraan;
					$peringkat[$keyss][] = $valpres->peringkat;
				}
			}else {
				$tingkat_kejuaraan[$keyss] = 0;
				$peringkat[$keyss] = 0;
				$where[$keyss]= 0;
			}

			// echo json_encode($peringkat[$keyss]);die;
			if (count($data[$keyss]['seminar']) > 0) {
				foreach ($data[$keyss]['seminar'] as $sem => $vsem) {
					$seminar[$keyss][] = $vsem->scala;
				}
			}else{
				$seminar[$keyss] = 0;
			}
			if ($tingkat_kejuaraan[$keyss] !== 0) {
				$a[$keyss]['bobot_prestasi'] = [];
				foreach ($tingkat_kejuaraan[$keyss] as $_crips) {
					$a[$keyss]['bobot_prestasi'][] = $this->db->query("SELECT bobot FROM crips WHERE kriteria_id = 1 AND nama_crips = '".$_crips."'")->row();
				}
			}else{
				$a[$keyss]['bobot_prestasi'] = 0;
			}
			if ($where[$keyss] !== 0) {
				$a[$keyss]['tahun_perolehan'] = [];
				foreach ($where[$keyss] as $_crips) {
					$a[$keyss]['tahun_perolehan'][] = $this->db->query("SELECT bobot FROM crips WHERE kriteria_id = 3 AND nama_crips = '".$_crips."'")->row();
				}
			}else{
				$a[$keyss]['tahun_perolehan'] = 0;
			}
			if ($peringkat[$keyss] !== 0) {
				$a[$keyss]['peringkat'] = [];
				foreach ($peringkat[$keyss] as $_crips) {
					$a[$keyss]['peringkat'][] = $this->db->query("SELECT bobot FROM crips WHERE kriteria_id = 4 AND nama_crips = '".$_crips."'")->row();
				}
			}else{
				$a[$keyss]['peringkat'] = 0;
			}
			if ($seminar[$keyss] !== 0) {
				$a[$keyss]['seminar'] = [];
				foreach ($seminar[$keyss] as $_crips) {
					$a[$keyss]['seminar'][] = $this->db->query("SELECT bobot FROM crips WHERE kriteria_id = 1 AND nama_crips = '".$_crips."'")->row();
				}
			}else {
				$a[$keyss]['seminar'] = 0;
			}
			if ($a[$keyss]['bobot_prestasi'] !== 0) {
				foreach ($a[$keyss]['bobot_prestasi'] as $kbp => $vbp) {
					$bobot_p[$keyss][] = $vbp->bobot;
				}
			}else{
				$bobot_p[$keyss] = 0;
			}
			if ($a[$keyss]['tahun_perolehan'] !== 0) {
				foreach ($a[$keyss]['tahun_perolehan'] as $ktp => $vtp) {
					$bobot_t[$keyss][] = $vtp->bobot;
				}
			}else{
				$bobot_t[$keyss] = 0;
			}
			if ($a[$keyss]['peringkat'] !== 0) {
				foreach ($a[$keyss]['peringkat'] as $kp => $vp) {
					$bobot_pe[$keyss][] = $vp->bobot;
				}
			}else{
				$bobot_pe[$keyss] = 0;
			}

			if ($a[$keyss]['seminar'] !== 0) {
				foreach ($a[$keyss]['seminar'] as $ksm => $vsm) {
					$bobot_s[$keyss][] = $vsm->bobot;
				}
			}else{
				$bobot_s[$keyss] = 0;
			}
			$nilai[$keyss]['prestasi'] =  $bobot_p[$keyss] == 0 ? 0 : array_sum($bobot_p[$keyss]);
			$nilai[$keyss]['tahun_perolehan'] = $bobot_t[$keyss] == 0 ? 0 : array_sum($bobot_t[$keyss]);
			$nilai[$keyss]['peringkat'] = $bobot_pe[$keyss] == 0 ? 0 : array_sum($bobot_pe[$keyss]);
			$nilai[$keyss]['seminar'] = $bobot_s[$keyss] == 0 ? 0 : array_sum($bobot_s[$keyss]);
		}
		
		// echo json_encode([$bobot_p, $bobot_t, $bobot_pe, $bobot_s, $where]); die;

		$column = ['prestasi','tahun_perolehan','peringkat','seminar'];

		if (!empty($nilai)) {
			// Normalisasi

			foreach ($nilai as $key => $value) {
				foreach ($column as $key_1 => $value_1) {
					$normalisasi_1[$key][$value_1] = pow($value[$value_1],2);
					// $normalisasi_1[$key][$value_1] = $value[$value_1];
				}
			}
			foreach ($column as $key_1 => $value_1) {
				foreach ($normalisasi_1 as $key => $value) {
					$normalisasi_2[$value_1][] = $value[$value_1];
				}
			}
			// echo json_encode($normalisasi_2);die;

			foreach ($column as $key => $value) {
				$normalisasi_1['jumlah_column'][$value] = array_sum($normalisasi_2[$value]);
			}

			// echo json_encode($normalisasi_1);die;
			foreach ($nilai as $key => $value) {
				foreach ($column as $key_1 => $value_1) {
					$a[] = $value_1;
					$normalisasi[$key][$value_1] = $value[$value_1] / sqrt($normalisasi_1['jumlah_column'][$value_1]);
				}
			}
			// echo json_encode($normalisasi);die;

			foreach ($data['kriteria'] as $key => $value) {
				foreach ($normalisasi as $kno => $vno) {
					$normalisasi_terbobot[$kno][$column[$key]] = $vno[$column[$key]] * $value->bobot;
				}
			}

			// echo json_encode($normalisasi_terbobot);die;

			foreach ($column as $key_1 => $value_1) {
				foreach ($normalisasi_terbobot as $key => $value) {
					$nilaialternatif[$value_1][] = $value[$value_1];
				}
			}

			foreach ($data['kriteria'] as $key => $value) {
				if ($value->attribut == 'Benefit') {
					$solusi['positif'][$column[$key]] = max($nilaialternatif[$column[$key]]);
					$solusi['negatif'][$column[$key]] = min($nilaialternatif[$column[$key]]);
				}elseif($value->attribut == 'Cost') {
					$solusi['positif'][$column[$key]] = min($nilaialternatif[$column[$key]]);
					$solusi['negatif'][$column[$key]] = max($nilaialternatif[$column[$key]]);
				}
				
			}

			foreach ($column as $key_1 => $value_1) {
				foreach ($normalisasi_terbobot as $key => $value) {
					$selisih_positif[$key][$value_1] = pow($value[$value_1] - $solusi['positif'][$value_1],2);
					$selisih_negatif[$key][$value_1] = pow($value[$value_1] - $solusi['negatif'][$value_1],2);
				}
			}

			foreach ($selisih_positif as $key => $value) {
				$sp[$key] = sqrt(array_sum($value));
			}
			foreach ($selisih_negatif as $key => $value) {
				$sn[$key] = sqrt(array_sum($value));
			}

			// echo json_encode($sp);die;

			foreach ($sp as $key => $value) {
				$ex = explode('_',$key);
				$fakultas = $this->db->query("SELECT b.fakultas FROM data_pendidikan a JOIN fakultas b ON a.fakultas = b.id WHERE a.user_id = '".$ex[0]."' ")->row();
				$p[$key] = [
					'preferensi' => $sn[$key] / ($sp[$key] + $sn[$key]),
					'positif' => $sp[$key],
					'negatif' => $sn[$key],
					'fakultas' => $fakultas->fakultas
				];
			}
			arsort($p);
			$result = [
				'user' => $data['user'],
				'kriteria' => $data['kriteria'],
				'nilai_alternatif' => $nilai,
				'normalisasi_1' => $normalisasi_1,
				'normalisasi_2' => $normalisasi_2,
				'normalisasi' => $normalisasi,
				'normalisasi_terbobot' => $normalisasi_terbobot,
				'ideal' => $solusi,
				'total' => $p,
				'code' => 200
			];
			
		}

		return $result;
	}

	public function simpan()
	{
		$post = $this->input->post();
		// echo json_encode($post);die;
		$data['user'] = $this->user_model->getByRole_($post['beasiswa']);
		$data['kriteria'] = $this->db->query("SELECT * FROM kriteria ORDER BY kriteria_id ASC")->result();
		if (count($data['user']) > 0) {
			$result = $this->topsis($data['user'],$data['kriteria']);
			$hasil = $result['total'];
			$no = 1;
			
			foreach ($hasil as $key => $value) {
				$user_id = explode("_",$key);
				$user = $this->db->query("INSERT INTO history(user_id,positif,negatif,preferensi,ranking) VALUES(".$user_id[0].",".$value['positif'].",".$value['negatif'].",".$value['preferensi'].",".$no++.")");
				
			}

			
			$this->general_model->generatePesan("Hasil berhasil disimpan","success");
			redirect(site_url('admin/penilaian?beasiswa='.$post['beasiswa']));
		}
	}

	public function changelabel()
	{
		$get = $this->input->get();
		$update_status = $this->db->query("UPDATE users SET status = '".$get['label']."' WHERE user_id = ".$get['data_id']." ");

		if ($update_status) {
			$res = [
				"success" => true,
				"message" => "Berhasil"
			];
		}else{
			$res = [
				"success" => false,
				"message" => "Gagal"
			];
		}
		header('Content-type: application/json');
		echo json_encode($res);
	}
}
