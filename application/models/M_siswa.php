<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
class M_siswa extends CI_Model {
	public function tampil_data ()
	{
		return $this->db->get('tb_siswa');
	}

	
	public function viia_t(){
		$this->db->where('id_kelas', 'viia');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viib_t(){
		$this->db->where('id_kelas', 'viib');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viic_t(){
		$this->db->where('id_kelas', 'viic');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viiia_t(){
		$this->db->where('id_kelas', 'viiia');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viiib_t(){
		$this->db->where('id_kelas', 'viiib');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viiic_t(){
		$this->db->where('id_kelas', 'viiic');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function ixa_t(){
		$this->db->where('id_kelas', 'ixa');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function ixb_t(){
		$this->db->where('id_kelas', 'ixb');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function ixc_t(){
		$this->db->where('id_kelas', 'ixc');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	// TOTAL SUDAH TERISI
	public function viia_p(){
		$this->db->where('id_kelas', 'viia');
		$this->db->where('id_kelas', 'viia');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viib_p(){
		$this->db->where('id_kelas', 'viib');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viic_p(){
		$this->db->where('id_kelas', 'viic');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viiia_p(){
		$this->db->where('id_kelas', 'viiia');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viiib_p(){
		$this->db->where('id_kelas', 'viiib');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function viiic_p(){
		$this->db->where('id_kelas', 'viiic');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function ixa_p(){
		$this->db->where('id_kelas', 'ixa');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function ixb_p(){
		$this->db->where('id_kelas', 'ixb');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}

	public function ixc_p(){
		$this->db->where('id_kelas', 'ixc');
		$this->db->where('rata >','0');
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){ return $query->num_rows(); }
		else{ return 0; }
	}


	public function get_perkelas($id_kelas)
	{
		$this->db->where('id_kelas', $id_kelas );
		$this->db->order_by('nama', 'ASC' );
		$query = $this->db->get('tb_siswa');
		return $query->result();
	}

	public function get_siswa($id){
		$this->db->where('id', $id);
		return $this->db->get('tb_siswa')->row();
	}



	public $table = 'tb_siswa';
	public $id = 'nis';

	public function get_by_id($id){
		$this->db->where($this->id, $id);
		return $this->db->get($this->table)->row();
	}

	public function input_data ($data, $table) 
	{
	$this->db->insert($table, $data);	
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

	public function detail_data($id = NULL)
	{
		$query = $this->db->get_where('tb_siswa', array('id' => $id))->row();
		return $query;
	}

	public function total_perjenjang($id_jenjang){
		$this->db->like('id_jenjang', $id_jenjang);
		$this->db->from('tb_siswa');
		return $this->db->count_all_results();
	}

	

	public function total_siswa(){
		$query = $this->db->get('tb_siswa');

		if($query->num_rows()>0){
			return $query->num_rows();
		}else{
			return 0;
		}
	}


}
