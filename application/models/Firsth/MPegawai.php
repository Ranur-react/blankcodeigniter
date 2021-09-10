	<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class MPegawai extends CI_Model
	{
		var $tabel = 'tb_pegawai';
		public function get_all()
		{
			$query = $this->db->from($this->tabel)->join('tb_jabatan', 'id_jabatan=jabatan_id')
			->get()->result_array();
			return $query;
		}
		
	}

	/* End of file Mbarang.php */
