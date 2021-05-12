<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'links' => '<li class="active">Dashboard</li>'
		];
		$this->layouts->display('layouts/content', $data);
	}
}
