<?php

class Crips_model extends CI_model 
{
    private $_table = "crips";

    public $crips_id;
    public $kriteria_id;
    public $nama_crips;
    public $keterangan;
    public $bobot;

    public function rules()
    {
        return [
            ['field' => 'kriteria_id',
            'label' => 'Kriteria',
            'rules' => 'required'],

            ['field' => 'nama_crips',
            'label' => 'Nama Crips',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'Keterangan',
            'rules' => 'required'],

            ['field' => 'bobot',
            'label' => 'Bobot',
            'rules' => 'required'],
        ];
    }

    public function getAll($kriteria_id)
    {
        return $this->db->get_where($this->_table,["kriteria_id" => $kriteria_id])->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["crips_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kriteria_id = $post['kriteria_id'];
        $this->nama_crips = $post['nama_crips'];
        $this->keterangan = $post['keterangan'];
        $this->bobot = $post['bobot'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->crips_id = $post['id'];
        $this->kriteria_id = $post['kriteria_id'];
        $this->nama_crips = $post['nama_crips'];
        $this->keterangan = $post['keterangan'];
        $this->bobot = $post['bobot'];
        return $this->db->update($this->_table, $this, array('crips_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array('crips_id' => $id));
    }
}