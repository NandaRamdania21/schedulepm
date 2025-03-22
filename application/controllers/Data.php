<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('template', ['content' => 'dashboard']);
    }

    public function d_machine()
{
    $this->load->view('template', ['content' => 'data/d_machine']);
}

public function d_pallet()
{
    $this->load->view('template', ['content' => 'data/d_pallet']);
}

public function d_selective()
{
    $this->load->view('template', ['content' => 'data/d_selective']);
}
public function d_trolley()
{
    $this->load->view('template', ['content' => 'data/d_trolley']); 
}

public function d_fume()
{
    $this->load->view('template', ['content' => 'data/d_fume']);
}   

public function d_jig()
{
    $this->load->view('template', ['content' => 'data/d_jig']);
}
}