<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('content/login/index');
    }

    public function prosses()
    {
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');

        $cekuser = $this->M_login->cekuser($username);
        if ($cekuser) {

            $ceklogin = $this->M_login->ceklogin($username, $password);

            if ($ceklogin) {
                foreach ($ceklogin as $row)

                    if ($row->active == 1) {

                        $this->session->set_userdata('name', $row->nama);
                        $this->session->set_userdata('username', $row->username);
                        $this->session->set_userdata('role', $row->role);
                        redirect('dashboard');
                    } else {
                        $this->session->set_flashdata('pesan', 'Maaf User Anda Belum Aktif');
                        redirect('login');
                    }
            } else {
                $this->session->set_flashdata('pesan', 'Maaf Username dan Password Anda Salah');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Maaf User Anda Belum Terdaftar');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('pesan', 'Anda Berhasil Logout !!!');
        redirect('login');
    }

    public function blocked()
    {
        $this->load->view('content/login/blocked');
    }
}
