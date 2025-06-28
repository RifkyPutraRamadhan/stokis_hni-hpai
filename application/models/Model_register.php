<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_register extends CI_Model 
{

	public function getAllRegister()
    {
    return $query = $this->db->get('user')->result_array();
    }

	public function register()
	{
		$data = [ 
			"foto" => $this->input->post('foto', true),
			"email" => $this->input->post('email', true),
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"id_role" => $this->input->post('id_role', true)
		 ];

		$this->db->insert('user', $data);
	}
}
?>