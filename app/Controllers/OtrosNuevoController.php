<?php namespace App\Controllers;

use App\Models\Modelolistado;

class OtrosNuevoController extends BaseController
{
	public function index()
	{
		return view('OtrosNuevos');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('OtrosNuevos',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}