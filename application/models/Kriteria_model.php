<?php

class Kriteria_model extends CI_model 
{
    private $_table = "kriteria";

    public $kriteria_id;
    public $nama_kriteria;
    public $attribut;
    public $bobot;

    public function rules()
    {
        return [
            ['field' => 'nama_kriteria',
            'label' => 'Nama Kriteria',
            'rules' => 'required'],

            ['field' => 'attribut',
            'label' => 'Attribut',
            'rules' => 'required'],

            ['field' => 'bobot',
            'label' => 'Bobot',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["kriteria_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->nama_kriteria = $post['nama_kriteria'];
        $this->attribut = $post['attribut'];
        $this->bobot = $post['bobot'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->kriteria_id = $post['id'];
        $this->nama_kriteria = $post['nama_kriteria'];
        $this->attribut = $post['attribut'];
        $this->bobot = $post['bobot'];
        return $this->db->update($this->_table, $this, array('kriteria_id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array('kriteria_id' => $id));
    }
}