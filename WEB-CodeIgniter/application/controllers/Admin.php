<?php

class Admin extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('m_admin');
    $this->load->helper('url');
        if($this->session->userdata('status') != "login"){
      redirect(base_url("login"));
    }
  }

  function index(){
    $data['users'] = $this->m_admin->tampil_data()->result();
    $this->load->view('v_admin',$data);
  }

  function edit($id){
    $where = array('id' => $id);
    $data['users'] = $this->m_admin->edit_data($where,'users')->result();
    $this->load->view('v_edit',$data);
  }

  function update(){
    $id = $this->input->post('id');
    $nama = $this->input->post('name');
    $email = $this->input->post('email');
	$telepon = $this->input->post('telepon');
    $message = $this->input->post('message');

    $data = array(
			'name' => $nama,
			'email' => $email,
			'telepon' => $telepon,
            'message' => $message

			);

    $where = array('id' => $id);

    $this->m_admin->update_data($where,$data,'users');
    redirect('admin/');
  }

  function hapus($id){
  $where = array('id' => $id);
  $this->m_admin->hapus_data($where,'users');
  redirect('admin/index');
  }

  function tambah_aksi(){
		$Nama = $this->input->post('name');
		$Email = $this->input->post('email');
		$Telepon = $this->input->post('telepon');
        $Message = $this->input->post('message');

    $data = array(
    		'name' => $Nama,
			'email' => $Email,
			'telepon' => $Telepon,
            'message' => $Message


			);
		$this->m_admin->input_data($data,'users');
		redirect('welcome');
	}
}
