<?php namespace App\Controllers;

use App\Models\Modelolistado;

class NuevosController extends BaseController
{
	public function index()
	{
		return view('Nuevos');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('Nuevos',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}