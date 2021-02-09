<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {


// EDIT
	public function input($id){
		$data['title'] = 'Input Nilai';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$where = array ('id' => $id);
		$data['siswa'] = $this->m_siswa->edit_data($where, 'tb_siswa')->result();
		$siswa = $this->m_siswa->edit_data($where, 'tb_siswa')->result();

		foreach ($siswa as $sis) {
			$data['url'] = $sis->id_kelas;
		}
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('siswa/input_nilai', $data);
		$this->load->view('templates/footer');
	}

	public function input_nilai ($url) {
		$data['title'] = "Input Nilai";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		
		$data['url'] = $url;
		$data['siswa']= $this->m_siswa->get_perkelas($url);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/mapel', $data);
		$this->load->view('templates/footer');
	}	

	public function update_nilai(){
		
		$url = $this->input->post('url');
		$id = $this->input->post('id');

		$result = array();

		if ($url == 'viia' or $url == 'viiia' or $url == 'ixa') {
			foreach($id AS $key => $val){
			 $result[] = array(
			  "id" => $id[$key],
			  "aqidah"  => $_POST['aqidah'][$key],
			  "tadrib_lughowi"  => $_POST['tadrib_lughowi'][$key],
			  "tahfidz"  => $_POST['tahfidz'][$key],
			  "khot"  => $_POST['khot'][$key],
			  "jum_nilai"  => $_POST['aqidah'][$key] + $_POST['tadrib_lughowi'][$key] + $_POST['tahfidz'][$key] + $_POST['khot'][$key],
			  "rata"  => ($_POST['aqidah'][$key] + $_POST['tadrib_lughowi'][$key] + $_POST['tahfidz'][$key] + $_POST['khot'][$key])/4

			 );
			}	
		}

		if ($url == 'viib' or $url == 'viic' or $url == 'viiib' or $url == 'viiic') {
			foreach($id AS $key => $val){
			 $result[] = array(
			  "id" => $id[$key],
			  "aqidah"  => $_POST['aqidah'][$key],
			  "tadrib_lughowi"  => $_POST['tadrib_lughowi'][$key],
			  "fiqih"  => $_POST['fiqih'][$key],
			  "tajwid"  => $_POST['tajwid'][$key],
			  "doa_dzikir"  => $_POST['doa_dzikir'][$key],
			  "khot"  => $_POST['khot'][$key],

			  "jum_nilai"  => $_POST['aqidah'][$key] + $_POST['tadrib_lughowi'][$key] + $_POST['fiqih'][$key] + $_POST['tajwid'][$key] + $_POST['doa_dzikir'][$key] + $_POST['khot'][$key],

			  "rata"  => ($_POST['aqidah'][$key] + $_POST['tadrib_lughowi'][$key] + $_POST['fiqih'][$key] + $_POST['tajwid'][$key] + $_POST['doa_dzikir'][$key] + $_POST['khot'][$key])/6

			 );
			}	
		}

		if ($url == 'ixb' or $url == 'ixc') {
			foreach($id AS $key => $val){
			 $result[] = array(
			  "id" => $id[$key],
			  "aqidah"  => $_POST['aqidah'][$key],
			  "tadrib_lughowi"  => $_POST['tadrib_lughowi'][$key],
			  "fiqih"  => $_POST['fiqih'][$key],
			  "nahwu"  => $_POST['nahwu'][$key],
			  "shorof"  => $_POST['shorof'][$key],
			  "khot"  => $_POST['khot'][$key],

			  "jum_nilai"  => $_POST['aqidah'][$key] + $_POST['tadrib_lughowi'][$key] + $_POST['fiqih'][$key] + $_POST['nahwu'][$key] + $_POST['shorof'][$key] + $_POST['khot'][$key],
			  "rata"  => ($_POST['aqidah'][$key] + $_POST['tadrib_lughowi'][$key] + $_POST['fiqih'][$key] + $_POST['nahwu'][$key] + $_POST['shorof'][$key] + $_POST['khot'][$key])/6

			 );
			}	
		}

		
		
		$this->db->update_batch('tb_siswa', $result, 'id');

		redirect('wakel/data/'.$url);
	}


	// input kehadiran
	public function input_kehadiran ($url) {
		$data['title'] = "Input Nilai";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		
		$data['url'] = $url;
		$data['siswa']= $this->m_siswa->get_perkelas($url);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/kehadiran', $data);
		$this->load->view('templates/footer');
	}	

	public function update_kehadiran(){
		
		$url = $this->input->post('url');
		$id = $this->input->post('id');

		$result = array();
			foreach($id AS $key => $val){
			 $result[] = array(
			  "id" => $id[$key],
			  "sakit"  => $_POST['sakit'][$key],
			  "izin"  => $_POST['izin'][$key],
			  "alfa"  => $_POST['alfa'][$key]
			 );
			}	
		
		$this->db->update_batch('tb_siswa', $result, 'id');
		redirect('wakel/data/'.$url);
	}

	// INPUT KEPRIBADIAN
	public function input_kepribadian ($url) {
		$data['title'] = "Input Nilai";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		
		$data['url'] = $url;
		$data['siswa']= $this->m_siswa->get_perkelas($url);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/kepribadian', $data);
		$this->load->view('templates/footer');
	}	

	public function update_kepribadian(){
		
		$url = $this->input->post('url');
		$id = $this->input->post('id');

		$result = array();
			foreach($id AS $key => $val){
			 $result[] = array(
			  "id" => $id[$key],
			  "akhlak"  => $_POST['akhlak'][$key],
			  "kerajinan"  => $_POST['kerajinan'][$key],
			  "kerapian"  => $_POST['kerapian'][$key],
			 );
			}	
		
		$this->db->update_batch('tb_siswa', $result, 'id');
		redirect('wakel/data/'.$url);
	}

	// poin
	public function input_poin ($url) {
		$data['title'] = "Input Nilai";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		
		$data['url'] = $url;
		$data['siswa']= $this->m_siswa->get_perkelas($url);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/poin', $data);
		$this->load->view('templates/footer');
	}	

	public function update_poin(){
		
		$url = $this->input->post('url');
		$id = $this->input->post('id');

		$result = array();
			foreach($id AS $key => $val){
			 $result[] = array(
			  "id" => $id[$key],
			  "poin"  => $_POST['poin'][$key]
			 );
			}	
		
		$this->db->update_batch('tb_siswa', $result, 'id');
		redirect('wakel/data/'.$url);
	}
	
	// catatan wali kelas
	// poin
	public function input_catatan ($url) {
		$data['title'] = "Input Nilai";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		
		$data['url'] = $url;
		$data['siswa']= $this->m_siswa->get_perkelas($url);
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/catatan', $data);
		$this->load->view('templates/footer');
	}	

	public function update_catatan(){
		
		$url = $this->input->post('url');
		$id = $this->input->post('id');

		$result = array();
			foreach($id AS $key => $val){
			 $result[] = array(
			  "id" => $id[$key],
			  "catatan"  => $_POST['catatan'][$key]
			 );
			}	
		
		$this->db->update_batch('tb_siswa', $result, 'id');
		redirect('wakel/data/'.$url);
	}

// UPDATE
	public function simpan()
	{

		if($this->form_validation->run()==false){
		$id = $this->input->post('id');
		$url = $this->input->post('url');
		$aqidah = $this->input->post('aqidah');
		$tadrib_lughowi = $this->input->post('tadrib_lughowi');
		$fiqih = $this->input->post('fiqih');
		$tahfidz = $this->input->post('tahfidz');

		$nahwu = $this->input->post('nahwu');
		$shorof = $this->input->post('shorof');

		$doa_dzikir = $this->input->post('doa_dzikir');
		$tajwid = $this->input->post('tajwid');
		$khot = $this->input->post('khot');
		$catatan = $this->input->post('catatan');
		$jum_nilai = $aqidah + $tadrib_lughowi + $fiqih + $tahfidz + $doa_dzikir + $tajwid + $khot + $nahwu + $shorof;

			if ($url == 'viia' or $url == 'viiia' or $url == 'ixa') { $pembagi = 4;}
			else{ $pembagi = 6; }
		


		$data = array (
		
			'aqidah' => $aqidah,
			'tadrib_lughowi' => $tadrib_lughowi,
			'fiqih' => $fiqih,
			'tahfidz' => $tahfidz,
			'nahwu' => $nahwu,
			'shorof' => $shorof,
			'doa_dzikir' => $doa_dzikir,
			'tajwid' => $tajwid,
			'khot' => $khot,
			'jum_nilai' => $jum_nilai,
			'rata' => $jum_nilai/$pembagi,
			'catatan' => $catatan
			

		);
		
		$where = array('id' => $id);

		$this->m_siswa->update_data($where, $data, 'tb_siswa');
		$this->session->set_flashdata('success', 'Input Data Berhasil');
		redirect('wakel/data/'.$url);
			
		}
	}


 // kartu
	public function rapor($id){
		$data['title'] = 'Cetak Rapor';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['siswa']= $this->m_siswa->tampil_data()->result();

		$data['walikelas'] = 'Rispan';

		$detail = $this->m_siswa->detail_data($id);
		$data['siswa'] = $detail;

		
		$this->load->view('siswa/rapor', $data);

	}


}


