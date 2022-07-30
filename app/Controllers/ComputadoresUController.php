<?php namespace App\Controllers;

use App\Models\Modelolistado;

class ComputadoresUController extends BaseController
{

	public function index()
	{
		return view('ComputadoresUsados');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('ComputadoresUsados',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}