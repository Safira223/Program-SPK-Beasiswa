<?php

class User_model extends CI_model 
{
    private $_table = "users";
    public $user_id;
    public $email;
    public $nama_user;
    public $password;
    public $jenis_beasiswa;
    public $tahun;
    public $pertanyaan;
    public $jawaban;

    public function doLogin()
    {
        $post = $this->input->post();
        $this->db->select("*");
        $this->db->where('email', $post['email']);
        $user = $this->db->get($this->_table)->row();

        if($user)
        {
            $isPasswordTrue = password_verify($post['password'],$user->password);
            if ($isPasswordTrue)
            {
                
                $this->session->set_userdata(['user_logged' => $user]);
                return true;
            }
        }

        return false;
    }

    public function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }


    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required|is_unique[users.email]'],

            ['field' => 'password',
            'label' => 'Password',
            'rules' => 'required'],
        ];
    }

    public function save()
    {
        $post = $this->input->post();
        $this->email = $post['email'];
        $this->nama_user = $post['nama'];
        $this->password = password_hash(123123,PASSWORD_BCRYPT);
        return $this->db->insert($this->_table,$this);
    }

    public function getId()
    {
        $this->db->select("*");
        $this->db->order_by("user_id","asc");
        $this->db->from($this->_table);
        return $this->db->get()->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->user_id = $post['id'];
        $user = $this->db->get_where($this->_table, ['user_id' => $post['id']])->row();
        $this->email = $post['email'];
        $this->nama_user = $post['nama'];

        $this->password = ($post['password'] == '') ? $user->password : password_hash($post['password'],PASSWORD_BCRYPT);

        return $this->db->update($this->_table, $this, array('user_id' => $post['id']));

    }

    public function delete($id)
    {
        return $this->db->delete($this->_table,array('user_id' => $id));
    }

    public function daftar()
    {
        $post = $this->input->post();
        $this->email = $post['email'];
        $this->password = password_hash($post['password'],PASSWORD_BCRYPT);
        $this->jenis_beasiswa = $post['jenis_beasiswa'];
        $this->tahun = date('Y');
        $this->pertanyaan = $post['pertanyaan'];
        $this->jawaban = $post['jawaban'];
        return $this->db->insert('users',$this);
    }

    public function getByRole($beasiswa)
    {
        $this->db->select("*");
        $this->db->order_by("user_id","asc");
        $this->db->from($this->_table);
        $this->db->where('nama_user !=',null);
        $this->db->where('role',1);
        $this->db->where('jenis_beasiswa',$beasiswa);
        $this->db->where('status',null);
        return $this->db->get()->result();
    }
    public function getByRole_($beasiswa)
    {
        $this->db->select("*");
        $this->db->order_by("user_id","asc");
        $this->db->from($this->_table);
        $this->db->where('nama_user !=',null);
        $this->db->where('role',1);
        $this->db->where('jenis_beasiswa',$beasiswa);
        return $this->db->get()->result();
    }

    public function findByEmail($email)
    {
        return $this->db->get_where($this->_table, ["email" => $email])->row();
    }

    public function getAnswer($email,$jwb){
        return $this->db->get_where($this->_table, ["email" => $email, 'jawaban' => $jwb])->row();
    }

    public function resetpwd($pwd,$email)
    {
        return $this->db->update($this->_table, ['password' => password_hash($pwd,PASSWORD_BCRYPT)], array('email' => $email));
    }

    public function deleteAll($id)
    {
        $this->db->delete($this->_table,array('user_id' => $id));
        $this->db->delete('data_diri',array('user_id' => $id));
        $this->db->delete('data_ortu',array('user_id' => $id));
        $this->db->delete('data_pendidikan',array('user_id' => $id));
        $this->db->delete('data_seminar',array('user_id' => $id));
        $this->db->delete('data_prestasi',array('user_id' => $id));

        return true;
    }
}