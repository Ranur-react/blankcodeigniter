<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();


		$this->load->model('Firsth/MPegawai');
	}
	public function index()
	{
		$data = [
			'title' => 'Soal 2',
			'links' => '<li class="active">Loop </li>',
			'header' => 'CRUD PEGAWAI',
			'conntent' => 'Pegawai/index.php',
			'data' => $this->MPegawai->get_all(),
		];
		$this->layouts->display('Firsth/content', $data);
	}
}
