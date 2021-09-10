<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Loop extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Soal 1',
			'links' => '<li class="active">Loop </li>',
			'header' =>' OUTPUT',
			'conntent' => 'Loop/index.php',
		];
		$this->layouts->display('Firsth/content', $data);
	}
}
