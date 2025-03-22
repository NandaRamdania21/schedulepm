<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('template', ['content' => 'dashboard']);
    }

    public function s_machine()
{
    $this->load->view('template', ['content' => 'schedule/s_machine']);
}

public function s_pallet()
{
    $this->load->view('template', ['content' => 'schedule/s_pallet']);
}

public function s_selective()
{
    $this->load->view('template', ['content' => 'schedule/s_selective']);
}
public function s_trolley()
{
    $this->load->view('template', ['content' => 'schedule/s_trolley']); 
}

public function s_fume()
{
    $this->load->view('template', ['content' => 'schedule/s_fume']);
}   

public function s_jig()
{
    $this->load->view('template', ['content' => 'schedule/s_jig']);
}
}
