<?php namespace App\Controllers;

use App\Models\Modelologin;

class LoginAdminController extends BaseController
{
	public function index()
	{
		return view('loginAdmin');
	}

	public function login() {

		$usuario = $this->request->getPost('correo');
		$password = $this->request->getPost('clave');

		$Usuario = new Modelologin();

		$datosUsuario = $Usuario->obtenerUsuario(['correo' => $usuario]);

		if (count($datosUsuario) > 0 && 
			password_verify($password, $datosUsuario[0]['clave'])) {

			$data = [
						"correo" => $datosUsuario[0]['correo'],
						"type" => $datosUsuario[0]['type']
					];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('public/registro/productos'));

		} else {
			return redirect()->to(base_url('public/inicio_admin'));
		}


	}

	public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('public/inicio_admin'));
	}

}