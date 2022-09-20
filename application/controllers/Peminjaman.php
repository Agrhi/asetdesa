<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_pinjam');
		$this->load->model('M_aset');
		cek_login();
	}

	public function index()
	{
		$data = [
			'title' => 'Data Peminjaman Aset Desa',
			'pinjam' => $this->M_pinjam->get_all_data(),
			'aset' => $this->M_aset->get_all_data()
		];
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
		$this->load->view('content/admin/peminjaman/index', $data);
		$this->load->view('layout/footer');
	}

	public function add()
	{
		$data = array(
			'nama'	=> $this->input->post('nama'),
			'nik'	=> $this->input->post('nik'),
			'alamat'	=> $this->input->post('alamat'),
			'dusun'	=> $this->input->post('dusun'),
			'tglpinjam'	=> $this->input->post('tglpinjam'),
			'tglkembali'	=> $this->input->post('tglkembali'),
			'idaset'	=> $this->input->post('idaset'),
			'proses'	=> $this->input->post('proses'),
		);
		$this->M_pinjam->add($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan !!!');
		redirect('peminjaman');
	}

	public function edit($idpeminjaman = NULL)
	{
		$data = array(
			'idpeminjaman'	=> $idpeminjaman,
			'nama'	=> $this->input->post('nama'),
			'nik'	=> $this->input->post('nik'),
			'alamat'	=> $this->input->post('alamat'),
			'dusun'	=> $this->input->post('dusun'),
			'tglpinjam'	=> $this->input->post('tglpinjam'),
			'tglkembali'	=> $this->input->post('tglkembali'),
			'idaset'	=> $this->input->post('idaset'),
			'proses'	=> $this->input->post('proses'),
		);
		// print_r($data);
		// die;
		$this->M_pinjam->edit($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit !!!');
		redirect('peminjaman');
	}

	public function delete($idpeminjaman = NULL)
	{
		$data = array('idpeminjaman' => $idpeminjaman);
		$this->M_pinjam->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus !!!');
		redirect('peminjaman');
	}
}
