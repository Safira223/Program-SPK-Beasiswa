<?php

class Data_pendidikan_model extends CI_model 
{
    private $_table = "data_pendidikan";

    public $user_id, $pendidikan_terakhir, $nama_instansi, $program_studi, $tahun_lulus, $nilai, $pendidikan_tuju, $kampus_pilihan, $fakultas, $prodi_1, $prodi_2, $rapot, $ijazah, $skhun;

    public function rules()
    {
        return [
            ['field' => 'pendidikan_terakhir', 'label' => 'Pendidikan Terakhir', 'rules' => 'required'],

            ['field' => 'nama_instansi', 'label' => 'Nama instansi', 'rules' => 'required'],

            ['field' => 'program_studi', 'label' => 'Porgram Studi', 'rules' => 'required'],

            ['field' => 'tahun_lulus', 'label' => 'Tahun Lulus', 'rules' => 'required'],
            
            ['field' => 'nilai', 'label' => 'UN / IPK', 'rules' => 'required'],

            ['field' => 'pendidikan_tuju', 'label' => 'Pendidikan yang dituju', 'rules' => 'required'],

            ['field' => 'kampus_pilihan', 'label' => 'Kampus Pilihan', 'rules' => 'required'],

            ['field' => 'fakultas', 'label' => 'Fakultas', 'rules' => 'required'],

            ['field' => 'prodi_1', 'label' => 'Program Studi 1', 'rules' => 'required'],

            ['field' => 'prodi_2', 'label' => 'Program Studi 2', 'rules' => 'required'],

        ];
    }

    public function getByUserId($id)
    {
        $this->db->select('*, fakultas.id as idd, fakultas.fakultas as nm_fakultas, a.jurusan as ajurusan, b.jurusan as bjurusan');
        $this->db->from('data_pendidikan');
        $this->db->join('fakultas', 'fakultas.id = data_pendidikan.fakultas');
        $this->db->join('jurusan as a', 'a.id = data_pendidikan.prodi_1');
        $this->db->join('jurusan as b', 'b.id = data_pendidikan.prodi_2');
        $this->db->where('data_pendidikan.user_id',$id);
        return $this->db->get()->row();
    }

    public function saveOrUpdate($user_id)
    {
        $post = $this->input->post();

        if ($this->getByUserId($user_id)) {
            $data_pendidikan = $this->getByUserId($user_id);

            $this->user_id = $data_pendidikan->user_id;
            $this->pendidikan_terakhir = $post['pendidikan_terakhir'];
            $this->nama_instansi = $post['nama_instansi'];
            $this->program_studi = $post['program_studi'];
            $this->tahun_lulus = $post['tahun_lulus'];
            $this->nilai = $post['nilai'];
            $this->pendidikan_tuju = $post['pendidikan_tuju'];
            $this->kampus_pilihan = $post['kampus_pilihan'];
            $this->fakultas = $post['fakultas'];
            $this->prodi_1 = $post['prodi_1'];
            $this->prodi_2 = $post['prodi_2'];

            if (!empty($_FILES['rapot']['name'])) {
                $path = './assets/rapot/'.$data_pendidikan->rapot;
                unlink($path);
                $this->rapot = $this->upload_file('rapot','rapot');;
            }else {
                $this->rapot = $data_pendidikan->rapot;
            }

            if (!empty($_FILES['ijazah']['name'])) {
                $path1 = './assets/ijazah/'.$data_pendidikan->ijazah;
                unlink($path1);
                $this->ijazah = $this->upload_file('ijazah','ijazah');;
            }else {
                $this->ijazah = $data_pendidikan->ijazah;
            }

            if (!empty($_FILES['skhun']['name'])) {
                $path1 = './assets/skhun/'.$data_pendidikan->skhun;
                unlink($path1);
                $this->skhun = $this->upload_file('skhun','skhun');;
            }else {
                $this->skhun = $data_pendidikan->skhun;
            }

            return $this->db->update($this->_table, $this, array('user_id' => $user_id));
        }else {
            $this->user_id = $user_id;
            $this->pendidikan_terakhir = $post['pendidikan_terakhir'];
            $this->nama_instansi = $post['nama_instansi'];
            $this->program_studi = $post['program_studi'];
            $this->tahun_lulus = $post['tahun_lulus'];
            $this->nilai = $post['nilai'];
            $this->pendidikan_tuju = $post['pendidikan_tuju'];
            $this->kampus_pilihan = $post['kampus_pilihan'];
            $this->fakultas = $post['fakultas'];
            $this->prodi_1 = $post['prodi_1'];
            $this->prodi_2 = $post['prodi_2'];

            if (!empty($_FILES['rapot']['name'])) {
                $this->rapot = $this->upload_file('rapot','rapot');;
            }

            if (!empty($_FILES['ijazah']['name'])) {
                $this->ijazah = $this->upload_file('ijazah','ijazah');;
            }

            if (!empty($_FILES['skhun']['name'])) {
                $this->skhun = $this->upload_file('skhun','skhun');;
            }

            return $this->db->insert($this->_table, $this);
        }
    }

    public function upload_file($folder,$name){ 
        $config['upload_path'] = './assets/'.$folder.''; //siapkan path untuk upload file
        $config['allowed_types']    = 'png|jpg|jpeg|pdf'; //siapkan format file
        $config['file_name']        = 'image' . time(); //rename file yang diupload

        // $this->load->library('upload', $config);
        $this->load->library('upload');
        $this->upload->initialize($config);

        if ($this->upload->do_upload($name)) {
            //fetch data upload
            $file   = $this->upload->data();
            $filename = $file['file_name'];
            return $filename;
        }else {
            $error = $this->upload->display_errors(); //tampilkan pesan error jika file gagal diupload
            $this->general_model->generatePesan($error,"error");
            return "Error";
        }
    }

}