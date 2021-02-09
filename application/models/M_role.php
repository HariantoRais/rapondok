<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class M_role extends CI_Model 
{

	
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

	public function getRole(){
	$query = "SELECT `tb_user`.*, `tb_user_role`.`role`
			 	FROM `tb_user` JOIN `tb_user_role` 
			 	ON `tb_user`.`role_id` = `tb_user_role`.`id`
	";
	return $this->db->query($query)->result_array();
}

	public function getRolelevel(){
	$query = "SELECT `tb_user`.*, `tb_user_role`.`role`
			 	FROM `tb_user` JOIN `tb_user_role` 
			 	ON `tb_user`.`role_id` = `tb_user_role`.`id`
	";
	return $this->db->query($query)->row_array();
}

public function get_setting ()
	{
		return $this->db->get('tb_setting')->result();
	}
}