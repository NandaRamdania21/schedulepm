<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_schedule extends CI_Model
{
    public function get_machine_schedule()
    {
        // Ambil data dari tabel schedule_mechine
        return $this->db->get('schedule_machine')->result();
    }
    
    public function count_by_status($status)
{
    return $this->db->where('status', $status)->count_all_results('schedule_machine');
}
public function get_machine_data_only()
    {
        return $this->db->select('no, equipment, register_no, model, cust, remark')
                        ->from('schedule_machine')
                        ->get()
                        ->result_array();
    }

    public function update_status($event_id, $status)
    {
        // Log data sebelum melakukan query
        log_message('error', 'Updating status for event_id: ' . $event_id . ' to status: ' . $status);

        // Pastikan event_id valid
        if (empty($event_id) || empty($status)) {
            return false;
        }

        // Proses update status pada event di database
        $data = [
            'status' => $status, // update status
        ];

        // Update data pada tabel 'events' sesuai dengan event_id
        $this->db->where('event_id', $event_id);
        $result = $this->db->update('events', $data); // Pastikan nama tabel 'events' sesuai

        // Log hasil dari query update
        if ($result) {
            log_message('error', 'Successfully updated event_id: ' . $event_id);
        } else {
            log_message('error', 'Failed to update event_id: ' . $event_id);
        }

        return $result; // Mengembalikan true jika berhasil, false jika gagal
    }

}


