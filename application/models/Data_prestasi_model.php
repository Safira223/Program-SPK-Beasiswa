<?php

class Data_prestasi_model extends CI_model 
{
    private $_table = "data_prestasi";

    public $user_id, $jenis, $nama_lomba, $tingkat_kejuaraan, $peringkat, $tempat, $tahun, $sertifikat;

    public function rules()
    {
        return [
            ['field' => 'jenis', 'label' => 'Jenis', 'rules' => 'required'],

            ['field' => 'nama_lomba', 'label' => 'Nama Lomba', 'rules' => 'required'],

            ['field' => 'tingkat_kejuaraan', 'label' => 'Tingkat Kejuaraan', 'rules' => 'required'],

            ['field' => 'peringkat', 'label' => 'Peringkat', 'rules' => 'required'],

            ['field' => 'tempat', 'label' => 'Tempat', 'rules' => 'required'],

            ['field' => 'tahun', 'label' => 'Tahun', 'rules' => 'required'],

        ];
    }

    public function getByUserId($id)
    {
        return $this->db->get_where($this->_table, ['user_id' => $id])->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["prestasi_id" => $id])->row();
    }

    public function save($user_id)
    {
        $post = $this->input->post();
        $this->user_id = $user_id;
        $this->jenis = $post['jenis'];
        $this->nama_lomba = $post['nama_lomba'];
        $this->tingkat_kejuaraan = $post['tingkat_kejuaraan'];
        $this->peringkat = $post['peringkat'];
        $this->tempat = $post['tempat'];
        $this->tahun = $post['tahun'];
        

        if(!empty($_FILES["sertifikat"]["name"])) {
            $this->sertifikat = $this->upload_file('sertifikat prestasi','sertifikat');
        }

        return $this->db->insert($this->_table, $this);
    }

    public function update($id)
    {
        $post = $this->input->post();
        if ($this->getById($id)) {
        $data_prestasi = $this->getById($id);
        $this->user_id = $data_prestasi->user_id;
        $this->jenis = $post['jenis'];
        $this->nama_lomba = $post['nama_lomba'];
        $this->tingkat_kejuaraan = $post['tingkat_kejuaraan'];
        $this->peringkat = $post['peringkat'];
        $this->tempat = $post['tempat'];
        $this->tahun = $post['tahun'];

        if(!empty($_FILES["sertifikat"]["name"])) {
            $path = './assets/sertifikat prestasi/'.$data_prestasi->sertifikat;
            unlink($path);
            $this->sertifikat = $this->upload_file('sertifikat prestasi','sertifikat');
        }else {
            $this->sertifikat = $data_prestasi->sertifikat;
        }
        
        return $this->db->update($this->_table, $this, array('prestasi_id' => $id));
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

    public function delete($id)
    {
        $data = $this->db->query("SELECT * FROM data_prestasi WHERE prestasi_id = ".$id." ")->row();

        $path = './assets/sertifikat prestasi/'.$data->sertifikat;
        if (unlink($path)) {
            return $this->db->delete($this->_table,array('prestasi_id' => $id));
        }
    }
}