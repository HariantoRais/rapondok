<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	
	public function index () {
		redirect('wakel/data');
	}


public function datauser()
{
		$data['title'] = 'Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['role'] = $this->m_role->getRole();
		$data['pengguna'] = $this->db->get('tb_user')->result_array();
		$data['url'] = '';


		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('admin/datauser', $data);
		$this->load->view('templates/footer');
}

public function edit_datauser($id)
	{
		$data['title'] = 'Edit Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();
		$data['url'] = '';

		$where = array ('id' => $id);
		$data['pengguna'] = $this->m_user->edit_data($where, 'tb_user')->result();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('admin/datauser_edit', $data);
		$this->load->view('templates/footer');
	}

	public function update_datauser()
	{
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$role_id = $this->input->post('role_id');
		$is_active = $this->input->post('is_active');

		$data = array (
			'nama' => $nama,
			'email' => $email,
			'role_id' =>$role_id,
			'is_active' => $is_active,

		);
		$where = array('id' => $id);

		$this->m_user->update_data($where, $data, 'tb_user');
		$this->session->set_flashdata('success', 'Data berhasil diubah');
		redirect('admin/datauser');

	}

	public function hapus_datauser($id)
	{
		$where = array ('id' => $id);
		$this->m_user->hapus_data($where, 'tb_user');
		
			$this->session->set_flashdata('warning', 'Anda telah menghapus data');
			redirect('admin/datauser');	

	}


	public function register(){
		$data['title'] = 'Data User';
		$data['user'] = $this->db->get_where('tb_user', ['email' => $this->session->userdata('email')])->row_array();

		$data['datauser'] = $this->m_role->getRole();
		$data['role'] = $this->db->get('tb_user_role')->result_array();

		$this->form_validation->set_rules('nama', "Nama", 'required|trim', [
			'required' => 'Nama tidak boleh kosong'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tb_user.email]', [
			'required' => 'Email tidak boleh kosong',
			'valid_email' => 'email anda tidak valid',
			'is_unique' => 'email telah terdaftar'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]',[
			'required' => 'Password tidak boleh kosong',
			'matches'=> 'Password tidak sama',
			'min_length' => 'Password minimal 3 karakter' 
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		if($this->form_validation->run()==false){
		$data['title'] = 'Data User';
		$this->load->view('templates/header',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view('admin/datauser_tambah');
		$this->load->view('templates/footer');	
		}else {
		$data = [
			'nama'	=> htmlspecialchars($this->input->post('nama', true)),
			'email'	=> htmlspecialchars($this->input->post('email', true)),
			'password'	=> password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
			'role_id' => htmlspecialchars($this->input->post('role_id', true)),
			'is_active' => 1,
			'date_created' => time()
		];

		$this->db->insert('tb_user',$data);
		$this->session->set_flashdata('success', 'Tambah data berhasil');
		redirect('admin/datauser');
		}

	}


}