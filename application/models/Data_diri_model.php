<?php

class Data_diri_model extends CI_model 
{
    private $_table = "data_diri";

    public $user_id, $nama_lengkap, $ktp, $tempat_lahir, $tanggal_lahir, $agama, $jk, $status, $alamat, $kota_kabupaten, $provinsi, $kode_pos, $no_hp, $no_tlp_rumah, $foto, $ktp_img, $kk, $akta_lahir;

    public function rules()
    {
        return [
            ['field' => 'nama_lengkap', 'label' => 'Nama Lengkap', 'rules' => 'required'],

            ['field' => 'ktp', 'label' => 'KTP', 'rules' => 'required'],

            ['field' => 'tempat_lahir', 'label' => 'Tempat_lahir', 'rules' => 'required'],

            ['field' => 'tanggal_lahir', 'label' => 'Tanggal_lahir', 'rules' => 'required'],

            ['field' => 'agama', 'label' => 'Agama', 'rules' => 'required'],

            ['field' => 'jk', 'label' => 'Jenis Kelamin', 'rules' => 'required'],

            ['field' => 'status', 'label' => 'Status', 'rules' => 'required'],

            ['field' => 'alamat', 'label' => 'Alamat', 'rules' => 'required'],

            ['field' => 'kota_kabupaten', 'label' => 'Kota / Kabupaten', 'rules' => 'required'],

            ['field' => 'provinsi', 'label' => 'Provinsi', 'rules' => 'required'],

            ['field' => 'kode_pos', 'label' => 'Kode Pos', 'rules' => 'required'],
            ['field' => 'no_hp', 'label' => 'No Hp', 'rules' => 'required'],
        ];
    }

    public function getByUserId($id)
    {
        return $this->db->get_where($this->_table, ['user_id' => $id])->row();
    }

    public function saveOrUpdate($user_id)
    {
        $post = $this->input->post();
        // echo "<pre>".print_r($_FILES['foto']);die;
        if ($this->getByUserId($user_id)) {
            $data_diri = $this->getByUserId($user_id);
            $this->user_id = $data_diri->user_id;
            $this->nama_lengkap = $post['nama_lengkap'];
            $this->ktp = $post['ktp'];
            $this->tempat_lahir = $post['tempat_lahir'];
            $this->tanggal_lahir = $post['tanggal_lahir'];
            $this->agama = $post['agama'];
            $this->jk = $post['jk'];
            $this->status = $post['status'];
            $this->alamat = $post['alamat'];
            $this->kota_kabupaten = $post['kota_kabupaten'];
            $this->provinsi = $post['provinsi'];
            $this->kode_pos = $post['kode_pos'];
            $this->no_hp = $post['no_hp'];
            $this->no_tlp_rumah = $post['no_tlp_rumah'];


            if(!empty($_FILES["foto"]["name"])) {
                $path = './assets/foto/'.$data_diri->foto;
                unlink($path);
                $this->foto = $this->upload_file('foto','foto');
            }else {
                $this->foto = $data_diri->foto;
            }

            if(!empty($_FILES["ktp_img"]["name"])) {
                $path1 = './assets/ktp/'.$data_diri->ktp_img;
                unlink($path1);
                $this->ktp_img = $this->upload_file('ktp','ktp_img');
            }else {
                $this->ktp_img = $data_diri->ktp_img;
            }

            if(!empty($_FILES["kk"]["name"])) {
                $path2 = './assets/kk/'.$data_diri->kk;
                unlink($path2);
                $this->kk = $this->upload_file('kk','kk');
            }else {
                $this->kk = $data_diri->kk;
            }

            if(!empty($_FILES["akta_lahir"]["name"])) {
                $path3 = './assets/akta_lahir/'.$data_diri->akta_lahir;
                unlink($path3);
                $this->akta_lahir = $this->upload_file('akta_lahir','akta_lahir');
            }else {
                $this->akta_lahir = $data_diri->akta_lahir;
            }

            $this->db->update('users',array('nama_user' => $post['nama_lengkap']),array('user_id' => $user_id));

            return $this->db->update($this->_table, $this, array('user_id' => $user_id));
            
        }else {
            $this->user_id = $user_id;
            $this->nama_lengkap = $post['nama_lengkap'];
            $this->ktp = $post['ktp'];
            $this->tempat_lahir = $post['tempat_lahir'];
            $this->tanggal_lahir = $post['tanggal_lahir'];
            $this->agama = $post['agama'];
            $this->jk = $post['jk'];
            $this->status = $post['status'];
            $this->alamat = $post['alamat'];
            $this->kota_kabupaten = $post['kota_kabupaten'];
            $this->provinsi = $post['provinsi'];
            $this->kode_pos = $post['kode_pos'];
            $this->no_hp = $post['no_hp'];
            $this->no_tlp_rumah = $post['no_tlp_rumah'];

            if(!empty($_FILES["foto"]["name"])) {
                $this->foto = $this->upload_file('foto','foto');
                // echo "<pre>".print_r($this->foto);die;
            }

            if(!empty($_FILES["ktp_img"]["name"])) {
                $this->ktp_img = $this->upload_file('ktp','ktp_img');
            }

            if(!empty($_FILES["kk"]["name"])) {
                $this->kk = $this->upload_file('kk','kk');
            }

            if(!empty($_FILES["akta_lahir"]["name"])) {
                $this->akta_lahir = $this->upload_file('akta_lahir','akta_lahir');
            }

            $this->db->update('users',array('nama_user' => $post['nama_lengkap']),array('user_id' => $user_id));

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