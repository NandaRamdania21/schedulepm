<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Model_auth');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run('login') == false) {
            $this->load->view('login');

        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->Model_auth->get_user_data($email);

            if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                        'id' => $user['id']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        echo "halaman admin ";
                    } else {
                        echo "halaman Mahasiswa ";
                    }

                    $this->session->set_userdata($data);
                    echo 'berhasil login';
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');

                    redirect('dashboard');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger"
    role="alert">Email is not registered!</div>');
                redirect('auth');
            }
        }
    }
    public function dashboard()
    {
        $this->load->view('index');
    }
}