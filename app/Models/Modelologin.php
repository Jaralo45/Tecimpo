<?php namespace App\Models;
	use CodeIgniter\Model;

	class Modelologin extends Model {
		public function obtenerUsuario($data) {
			$Usuario = $this->db->table('usuarios');
			$Usuario->where($data);
			return $Usuario->get()->getResultArray();
		}
	}