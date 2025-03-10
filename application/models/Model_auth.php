<?php

class Model_auth extends CI_Model
{
public function get_user_data($email)
{
return $this->db->get_where('users', ['email' => $email])->row_array();
}


}