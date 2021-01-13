<?php namespace App\Controllers;

use App\Models\Modelolistado;

class ListadoController extends BaseController
{
	public function index()
	{
		return view('CeluUsados');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('CeluUsados',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}
