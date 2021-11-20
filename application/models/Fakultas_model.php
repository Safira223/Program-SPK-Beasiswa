<?php

class Fakultas_model extends CI_model 
{
    private $_table = "fakultas";

    public $id;
    public $fakultas;

    public function rules()
    {
        return [
            ['field' => 'fakultas',
            'label' => 'Nama Fakultas',
            'rules' => 'required'],
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->fakultas = $post['fakultas'];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post['id'];
        $this->fakultas = $post['fakultas'];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array('id' => $id));
    }
}