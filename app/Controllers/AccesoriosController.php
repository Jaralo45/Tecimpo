<?php namespace App\Controllers;

use App\Models\Modelolistado;

class AccesoriosController extends BaseController
{
	public function index()
	{
		return view('Accesorios');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('Accesorios',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}