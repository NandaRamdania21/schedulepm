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
public function get_schedule_json()
{
    $this->load->model('M_schedule');
    $data = $this->M_schedule->get_machine_schedule();

    $events = [];
    foreach ($data as $row) {
        $events[] = [
            'title' => $row->equipment . ' (' . $row->status . ')',
            'start' => $row->date,
            'description' => $row->remark
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($events);
}

public function update_status()
{
    // Ambil data dari POST request
    $event_id = $this->input->post('event_id');
    $status = $this->input->post('status');

    // Cek apakah event_id dan status ada
    if ($event_id && $status) {
        $this->load->model('Event_model');

        // Log data yang diterima untuk debugging
        log_message('error', 'Received event_id: ' . $event_id . ' with status: ' . $status);

        // Panggil model untuk update status
        $result = $this->Event_model->update_status($event_id, $status);

        // Cek apakah update berhasil
        if ($result) {
            log_message('error', 'Successfully updated event_id: ' . $event_id . ' with status: ' . $status);  // Log jika berhasil
            echo json_encode(['success' => true]);
        } else {
            log_message('error', 'Failed to update status for event_id: ' . $event_id);  // Log jika gagal
            echo json_encode(['success' => false, 'message' => 'Failed to update status!']);
        }
    } else {
        log_message('error', 'Invalid input: event_id or status is missing');  // Log jika data invalid
        echo json_encode(['success' => false, 'message' => 'Invalid input data']);
    }
}

}
