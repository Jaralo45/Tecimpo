<?php namespace App\Controllers;

use App\Models\Modelolistado;

class UsadosController extends BaseController
{
	public function index()
	{
		return view('Usados');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('Usados',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}