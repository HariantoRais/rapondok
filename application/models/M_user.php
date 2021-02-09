<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model {
	public function tampil_data ()
	{
		return $this->db->get('tb_user');
	}

	public function detail_data($id = NULL)
	{
		$query = $this->db->get_where('tb_user')->result_array();
		return $query;
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	
}