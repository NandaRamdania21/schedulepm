<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Load model or any necessary data here
    }

    public function index()
    {
        // This will load the dashboard by default
        $this->load->view('template', ['content' => 'dashboard']);
    }

    public function r_week()
    {
        // This will load the r_week view
        $this->load->view('template', ['content' => 'report/r_week']);
    }

    public function r_month()
    {
        // This will load the r_month view
        $this->load->view('template', ['content' => 'report/r_month']);
    }

    public function r_year()
    {
        // This will load the r_year view
        $this->load->view('template', ['content' => 'report/r_year']);
    }
}
