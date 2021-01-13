<?php namespace App\Controllers;

use App\Models\Modelolistado;

class OtrosUsadoController extends BaseController
{
	public function index()
	{
		return view('OtrosUsados');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('OtrosUsados',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}