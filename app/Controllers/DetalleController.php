<?php namespace App\Controllers;

use App\Models\Modelolistado;

class DetalleController extends BaseController
{
	public function index()
	{
		return view('DetalleProducto');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('DetalleProducto',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

}