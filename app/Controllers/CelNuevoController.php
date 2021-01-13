<?php namespace App\Controllers;

use App\Models\Modelolistado;

class CelNuevoController extends BaseController
{
	public function index()
	{
		return view('CeluNuevos');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('CeluNuevos',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}