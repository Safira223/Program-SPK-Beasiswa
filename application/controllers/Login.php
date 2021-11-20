<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('general_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        if ($this->input->post())
        {
            if($this->User_model->doLogin()) {
                if ($this->session->userdata('user_logged')->role == 0) {
                    redirect(site_url('admin/home'));    
                }elseif($this->session->userdata('user_logged')->role == 1){
                    redirect(site_url('pendaftar/home'));
                }
                
            } else {
                $this->general_model->generatePesan("Email atau password salah!!","failed");
            }
        }

        if ($this->session->userdata('user_logged') != null) redirect(site_url('admin/dashboard'));

        $this->load->view('login.php');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

    public function forgotpassword()
    {
        $validation = $this->form_validation;
        $validation->set_rules(
            [['field' => 'email',
            'label' => 'Email',
            'rules' => 'required'],]

        );
        $data = array();
        if($validation->run())
            {
                $post = $this->input->post();
                $data['res'] = $this->User_model->findByEmail($post['email']);
                if (!$data['res']) {
                    $this->general_model->generatePesan("Gagal! Email tidak ditemukan!","error");
                }else{
                    $this->session->set_userdata(['email' => $data['res']->email]);
                    redirect(site_url('login/pertanyaan'));
                }
            }
		$this->load->view('reset.php',$data);
    }

    public function pertanyaan()
    {
        if ($this->session->userdata('email') !== null) {
            $validation = $this->form_validation;
            $validation->set_rules(
                [['field' => 'email',
                'label' => 'Email',
                'rules' => 'required'],]

            );
            $data = array();
            $email = $this->session->userdata('email');
            $data['res'] = $this->User_model->findByEmail($email);
            if($validation->run())
                {
                    $post = $this->input->post();
                    // echo print_r($post);
                    $data['pass'] = $this->User_model->getAnswer($post['email'],$post['jawaban']);
                    if (!$data['pass']) {
                        $this->general_model->generatePesan("Gagal! Jawaban anda salah!","error");
                    }else{
                        $this->session->set_userdata(['jawaban' => $data['pass']->jawaban]);
                        redirect(site_url('login/resetpassword'));
                    }
                }
            $this->load->view('reset1.php',$data);
        }else{
            redirect(site_url('login/forgotpassword'));
        }
    }

    public function resetpassword()
    {
        if ($this->session->userdata('jawaban')) {
            $email = $this->session->userdata('email');
            $validation = $this->form_validation;
            $validation->set_rules(
                [['field' => 'email',
                'label' => 'Email',
                'rules' => 'required'],]

            );
            $data['res'] = $this->User_model->findByEmail($email);
            if($validation->run())
                {
                    $post = $this->input->post();
                    $a = $this->User_model->resetpwd($post['password'],$post['email']);
                    if ($a) {
                        $this->general_model->generatePesan("Berhasil! Silahkan login","success");
                        redirect(site_url('login'));
                    }
                }
            $this->load->view('reset2.php',$data);
        }else{
            redirect(site_url('login/forgotpassword'));
        }
    }
}