<?php namespace App\Controllers;

use App\Models\Modelopedido;

class PedidosController extends BaseController
{
	public function index()
	{
		return view('Pedidos');
	}

	public function buscar(){

		$modeloPedido= new Modelopedido();

		try{

		$datosConsultados=$modeloPedido->findAll();

		$datosParaVista=array("pedidos"=>$datosConsultados);

		return view('Pedidos',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
    }
}