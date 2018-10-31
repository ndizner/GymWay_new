<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seeder_model extends CI_Model {

	function insert($options = array()) {
		$this->db->insert('payments_data', $options);
	}
	function truncate()
	{
		$this->db->truncate('payments_data');
	}
	function get()
	{
		$query = $this->db->get();
		return $query->result();
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */
