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


}
