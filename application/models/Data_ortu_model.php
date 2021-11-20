<?php

class Data_ortu_model extends CI_model 
{
    private $_table = "data_ortu";

    public $user_id, $nama_lengkap_ayah, $pekerjaan_ayah, $no_tlp_ayah, $ktp_ayah, $nama_lengkap_ibu, $pekerjaan_ibu, $no_tlp_ibu, $ktp_ibu, $nama_lengkap_wali, $pekerjaan_wali, $no_tlp_wali;

    public function rules()
    {
        return [
            ['field' => 'nama_lengkap_ayah', 'label' => 'Nama Lengkap', 'rules' => 'required'],
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
            $data_ortu = $this->getByUserId($user_id);
            $this->user_id = $data_ortu->user_id;
            $this->nama_lengkap_ayah = $post['nama_lengkap_ayah'];
            $this->pekerjaan_ayah = $post['pekerjaan_ayah'];
            $this->no_tlp_ayah = $post['no_tlp_ayah'];
            $this->nama_lengkap_ibu = $post['nama_lengkap_ibu'];
            $this->pekerjaan_ibu = $post['pekerjaan_ibu'];
            $this->no_tlp_ibu = $post['no_tlp_ibu'];

            $this->nama_lengkap_wali = $post['nama_lengkap_wali'];
            $this->pekerjaan_wali = $post['pekerjaan_wali'];
            $this->no_tlp_wali = $post['no_tlp_wali'];

            if(!empty($_FILES["ktp_ayah"]["name"])) {
                $path = './assets/ktp ayah/'.$data_ortu->ktp_ayah;
                unlink($path);
                $this->ktp_ayah = $this->upload_file('ktp ayah','ktp_ayah');
            }else {
                $this->ktp_ayah = $data_ortu->ktp_ayah;
            }

            if(!empty($_FILES["ktp_ibu"]["name"])) {
                $path = './assets/ktp ibu/'.$data_ortu->ktp_ibu;
                unlink($path);
                $this->ktp_ibu = $this->upload_file('ktp ibu','ktp_ibu');
            }else {
                $this->ktp_ibu = $data_ortu->ktp_ibu;
            }

            if(!empty($_FILES["ktp_wali"]["name"])) {
                $path = './assets/ktp wali/'.$data_ortu->ktp_wali;
                unlink($path);
                $this->ktp_wali = $this->upload_file('ktp wali','ktp_wali');
            }else {
                $this->ktp_wali = $data_ortu->ktp_wali;
            }

            return $this->db->update($this->_table, $this, array('user_id' => $user_id));
        }else {
            $this->user_id = $user_id;
            $this->nama_lengkap_ayah = $post['nama_lengkap_ayah'];
            $this->pekerjaan_ayah = $post['pekerjaan_ayah'];
            $this->no_tlp_ayah = $post['no_tlp_ayah'];
            $this->nama_lengkap_ibu = $post['nama_lengkap_ibu'];
            $this->pekerjaan_ibu = $post['pekerjaan_ibu'];
            $this->no_tlp_ibu = $post['no_tlp_ibu'];

            $this->nama_lengkap_wali = $post['nama_lengkap_wali'];
            $this->pekerjaan_wali = $post['pekerjaan_wali'];
            $this->no_tlp_wali = $post['no_tlp_wali'];

            if(!empty($_FILES["ktp_ayah"]["name"])) {
                $this->ktp_ayah = $this->upload_file('ktp ayah','ktp_ayah');
            }else {
                $this->ktp_ayah = null;
            }

            if(!empty($_FILES["ktp_ibu"]["name"])) {
                $this->ktp_ibu = $this->upload_file('ktp ibu','ktp_ibu');
            }else {
                $this->ktp_ibu = null;
            }

            if(!empty($_FILES["ktp_wali"]["name"])) {
                $this->ktp_wali = $this->upload_file('ktp wali','ktp_wali');
            }else {
                $this->ktp_wali = null;
            }

            return $this->db->insert($this->_table, $this);
        }
    }

    public function upload_file($folder,$name){ 
        $config['upload_path'] = './assets/'.$folder.''; //siapkan path untuk upload file
        $config['allowed_types']    = 'png|jpg|jpeg|pdf'; //siapkan format file
        $config['file_name']        = 'image' . time(). $name; //rename file yang diupload

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
            return null;
        }
    }

}