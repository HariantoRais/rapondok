<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cek_rapor extends CI_Controller {


// PERSIAPAN CETAK
	public function index(){
		
	$nis=$this->uri->segment('3');
	if($this->m_siswa->get_by_id($nis)==null)
	{
		echo 'data tidak ditemukan'; die;
	}
	$data = array(
		'nis'=> $nis,
		'nama' => $this->m_siswa->get_by_id($nis)->nama
	);

	$datakartu = array(
		// 'kartu_data' => $this->baca_kartu('$nis'),
		
		'nis' 		  		=> $nis,
		'id' 				=> $this->m_siswa->get_by_id($nis)->id,
		'id_kelas' 			=> $this->m_siswa->get_by_id($nis)->id_kelas,
		'nama' 				=> $this->m_siswa->get_by_id($nis)->nama,
		'nisn' 				=> $this->m_siswa->get_by_id($nis)->nisn,
		'aqidah' 			=> $this->m_siswa->get_by_id($nis)->aqidah,
		'tadrib_lughowi' 	=> $this->m_siswa->get_by_id($nis)->tadrib_lughowi,
		'tahfidz' 			=> $this->m_siswa->get_by_id($nis)->tahfidz,
		'fiqih' 			=> $this->m_siswa->get_by_id($nis)->fiqih,
		'tajwid' 			=> $this->m_siswa->get_by_id($nis)->tajwid,
		'doa_dzikir' 		=> $this->m_siswa->get_by_id($nis)->doa_dzikir,
		'nahwu' 			=> $this->m_siswa->get_by_id($nis)->nahwu,
		'shorof' 			=> $this->m_siswa->get_by_id($nis)->shorof,
		'khot' 				=> $this->m_siswa->get_by_id($nis)->khot,
		'sakit' 			=> $this->m_siswa->get_by_id($nis)->sakit,
		'izin' 				=> $this->m_siswa->get_by_id($nis)->izin,
		'alfa' 				=> $this->m_siswa->get_by_id($nis)->alfa,
		'kerajinan' 		=> $this->m_siswa->get_by_id($nis)->kerajinan,
		'kerapian' 		=> $this->m_siswa->get_by_id($nis)->kerapian,
		'akhlak' 			=> $this->m_siswa->get_by_id($nis)->akhlak,
		'poin' 				=> $this->m_siswa->get_by_id($nis)->poin,
		'jum_nilai' 		=> $this->m_siswa->get_by_id($nis)->jum_nilai,
		'rata' 		=> $this->m_siswa->get_by_id($nis)->rata,
		'catatan' 			=> $this->m_siswa->get_by_id($nis)->catatan

	);
		
	$this->load->view('rapor',$datakartu);
	
}



}
