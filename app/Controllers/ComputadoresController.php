<?php namespace App\Controllers;

use App\Models\Modelolistado;

class ComputadoresController extends BaseController
{
	public function index()
	{
		return view('ComputadoresNuevos');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('ComputadoresNuevos',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}