<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		cek_login();
	}

	public function index()
	{
		$data = [
			'title' 		=> 'Dashboard',
			'total_user'	=>	$this->M_admin->total_user(),
		];
		// print_r($data['total_sudah']); die;
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('layout/navbar');
		$this->load->view('content/admin/dashboard/index', $data);
		$this->load->view('layout/footer');
	}
}
