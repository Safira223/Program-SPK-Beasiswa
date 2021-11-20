<?php

class Jurusan_model extends CI_model 
{
    private $_table = "jurusan";

    public $id;
    public $fakultas_id;
    public $jurusan;

    public function rules()
    {
        return [
            ['field' => 'fakultas_id',
            'label' => 'Nama fakultas',
            'rules' => 'required'],

            ['field' => 'jurusan',
            'label' => 'Nama jurusan',
            'rules' => 'required'],
        ];
    }

    public function getAll($fakultas_id)
    {
        return $this->db->get_where($this->_table,["fakultas_id" => $fakultas_id])->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->fakultas_id = $post['fakultas_id'];
        $this->jurusan = $post['jurusan'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->fakultas_id = $post['fakultas_id'];
        $this->jurusan = $post['jurusan'];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array('id' => $id));
    }

    public function getByFakultas($fakultas_id)
    {
        return $this->db->get_where($this->_table, ["fakultas_id" => $fakultas_id])->result();
    }
}