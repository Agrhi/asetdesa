<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_aset extends CI_Model
{

	public function get_all_data()
	{
		$this->db->from('aset');
		$this->db->order_by('idaset', 'asc');
		return $this->db->get()->result();
	}

	public function insert($data)
	{
		$this->db->insert('aset', $data);
	}

	public function update($data)
	{
		$this->db->where('idaset', $data['idaset']);
		$this->db->update('aset', $data);
	}

	public function delete($data)
	{
		$this->db->where('idaset', $data['idaset']);
		$this->db->delete('aset', $data);
	}
}
