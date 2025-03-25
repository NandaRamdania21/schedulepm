<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('M_auth');
    }

    public function index()
{
    
    $this->form_validation->set_rules('email','Email','required|trim|valid_email');
    $this->form_validation->set_rules('password','Password','required|trim');

    if ($this->form_validation->run('login') == false) {
        $this->load->view('login');
    } else {
        //code
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->M_auth->get_user_data($email);
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
                    // echo "halaman Mahasiswa ";
                    // $this->load->view('dashboard');
                    redirect('auth/dashboard');

                    
                }
                
                $this->session->set_userdata($data);
                // echo 'berhasil login';
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                redirect('auth');
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
        $this->load->model('M_schedule');

        $data['count_advance']   = $this->M_schedule->count_by_status('advance');
        $data['count_ontime']    = $this->M_schedule->count_by_status('on time');
        $data['count_delay']     = $this->M_schedule->count_by_status('delay');
        $data['count_scheduled'] = $this->M_schedule->count_by_status('scheduled'); // optional
    
        // kirim semua data ke dashboard view
        $this->load->view('template', [
            'content' => 'dashboard',
            'count_advance' => $data['count_advance'],
            'count_ontime' => $data['count_ontime'],
            'count_delay' => $data['count_delay'],
            'count_scheduled' => $data['count_scheduled'],
        ]);
    }    
    
}