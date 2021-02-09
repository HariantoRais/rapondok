<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {


	public function index () {
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = '';

		$data['viia_t'] = $this->m_siswa->viia_t();
		$data['viib_t'] = $this->m_siswa->viib_t();
		$data['viic_t'] = $this->m_siswa->viic_t();

		$data['viiia_t'] = $this->m_siswa->viiia_t();
		$data['viiib_t'] = $this->m_siswa->viiib_t();
		$data['viiic_t'] = $this->m_siswa->viiic_t();

		$data['ixa_t'] = $this->m_siswa->ixa_t();
		$data['ixb_t'] = $this->m_siswa->ixb_t();
		$data['ixc_t'] = $this->m_siswa->ixc_t();

		$data['viia_p'] = $this->m_siswa->viia_p();
		$data['viib_p'] = $this->m_siswa->viib_p();
		$data['viic_p'] = $this->m_siswa->viic_p();

		$data['viiia_p'] = $this->m_siswa->viiia_p();
		$data['viiib_p'] = $this->m_siswa->viiib_p();
		$data['viiic_p'] = $this->m_siswa->viiic_p();

		$data['ixa_p'] = $this->m_siswa->ixa_p();
		$data['ixb_p'] = $this->m_siswa->ixb_p();
		$data['ixc_p'] = $this->m_siswa->ixc_p();

		
		
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer', $data);
	}

	
	public function viia () {
		$data['title'] = "VII A";
		$data['mode'] = '1';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'viia';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'vii';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function viib () {
		$data['title'] = "VII B";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'viib';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'vii';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function viic () {
		$data['title'] = "VII C";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'viic';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'vii';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function viiia () {
		$data['title'] = "VIII A";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'viiia';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'viii';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function viiib () {
		$data['title'] = "VIII B";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'viiib';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'viii';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function viiic () {
		$data['title'] = "VIII C";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'viiic';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'viii';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function ixa () {
		$data['title'] = "IX A";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'ixa';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'ix';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function ixb () {
		$data['title'] = "IX B";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'ixb';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'ix';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	public function ixc () {
		$data['title'] = "IX C";
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$id_kelas = 'ixc';
		$data['url'] = $id_kelas;
		$data['siswa']= $this->m_siswa->get_perkelas($id_kelas);
		$data['tingkat'] = 'ix';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('siswa/data', $data);
		$this->load->view('templates/footer');
	}

	
}