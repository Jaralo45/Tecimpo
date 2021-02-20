<?php namespace App\Controllers;

use App\Models\Modelopedido;

class PreguntasController extends BaseController
{
	public function index()
	{
		return view('Preguntas');
	}

	public function buscar(){

		$modeloPedido= new Modelopedido();

		try{

		$datosConsultados=$modeloPedido->findAll();

		$datosParaVista=array("Preguntas"=>$datosConsultados);

		return view('Preguntas',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
    }
}