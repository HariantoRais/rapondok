<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index(){

		if($this->session->userdata('email'))
		{
			redirect('wakel/data');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email',[
			'required' => 'Email tidak boleh kosong!',
			'valid_email' => 'Email tidak valid!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required',[
			'required' => 'Password tidak boleh kosong!'
		]);

		if($this->form_validation->run() == false){
		$data['title'] = 'Halaman Login';
		$this->load->view('login/header', $data);
		$this->load->view('login/login');
		$this->load->view('login/footer');
		} else {
			// validasi sukses
			$this->_login();
		}
		
	}


	private function _login(){
		$email = $this->input->post('email', true);
		$password = $this->input->post('password', true);

		$user = $this->db->get_where('tb_user', ['email' => $email])->row_array();

		// cek user terdaftar
		if($user){
			// jika usernya aktif
			if($user['is_active'] == 1){
				// cek password
				if(password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if($user['role_id'] == 1){
					redirect('admin');	
					}else {
					redirect('wakel/data');
					}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password anda salah!</div>');
						redirect('login');	
				}

			} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email anda belum diaktivasi!</div>');
		redirect('login');		
			}

		} else {
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
		redirect('login');
		}
	
	}

	public function register(){

		if($this->session->userdata('email')){
			redirect('login');
		}

		$this->form_validation->set_rules('nama', "Nama", 'required|trim', [
			'required' => 'Nama tidak boleh kosong'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
			'required' => 'Email tidak boleh kosong',
			'valid_email' => 'email anda tidak valid',
			'is_unique' => 'email telah terdaftar'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]',[
			'required' => 'Password tidak boleh kosong',
			'matches'=> 'Password tidak sama',
			'min_length' => 'Password minimal 8 karakter' 
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run()==false){
		$data['title'] = 'Registrasi';
		$this->load->view('templates/login_header',$data);
		$this->load->view('login/register');
		$this->load->view('templates/login_footer');	
		}else {
		$data = [
			'nama'	=> htmlspecialchars($this->input->post('nama', true)),
			'email'	=> htmlspecialchars($this->input->post('email', true)),
			'password'	=> password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			'role_id' => 0,
			'is_active' => 2,
			'date_created' => time()
		];

		$this->db->insert('tb_user',$data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat akun anda telah terdaftar, Silahkan hubungi admin untuk aktivasi!</div>');
		redirect('login');
		}

	}

	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Anda telah logout!</div>');
		redirect('login');
	}

	public function blocked()
	{
		$this->load->view('login/blocked');
	}

}
