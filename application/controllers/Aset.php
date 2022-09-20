<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aset extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_aset');
		cek_login();
	}

	public function index()
	{
		$data = [
			'title' 		=> 'Data Aset Desa',
			'aset' => $this->M_aset->get_all_data()
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
		$this->load->view('content/admin/aset/index', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{

		$data = array(
			'namaaset'	=> $this->input->post('namaaset'),
			'stok'	=> $this->input->post('stok'),
		);
		$this->M_aset->insert($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
		redirect('aset');
	}

	public function edit($idaset = NULL)
	{
		$data = array(
			'idaset'	=> $idaset,
			'namaaset' => $this->input->post('namaaset'),
			'stok' => $this->input->post('stok'),
		);
		$this->M_aset->update($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit !!!');
		redirect('aset');
	}

	public function delete($idaset = NULL)
	{
		$data = array('idaset' => $idaset);
		$this->M_aset->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('aset');
	}
}
