<?php namespace App\Controllers;

use App\Models\Modelopedido;
use App\Models\Modelolistado;

class DetalleController extends BaseController
{
	public function index()
	{
		return view('DetalleProducto');
	}

	public function buscar($id){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->where('id',$id)->findAll();

		$datosParaVista=array("productos"=>$datosConsultados);

		return view('DetalleProducto',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

	public function registrar(){

		$nombre=$this->request->getPost("nombre");
		$direccion=$this->request->getPost("direccion");
		$correo=$this->request->getPost("correo");
		$telefono=$this->request->getPost("telefono");
		$cantidad=$this->request->getPost("cantidad");
		$referencia=$this->request->getPost("referencia");
		$ciudad=$this->request->getPost("ciudad");
		$producto=$this->request->getPost("producto");
		$valor=$this->request->getPost("valor");

		$datosEnvio=array(
			"nombre"=>$nombre,
			"direccion"=>$direccion,
			"correo"=>$correo,
			"telefono"=>$telefono,
			"cantidad"=>$cantidad,
			"referencia"=>$referencia,
			"ciudad"=>$ciudad,
			"valor"=>$valor,
			"producto"=>$producto
		);

		$modeloPedido= new Modelopedido();

		try{
			$modeloPedido->insert($datosEnvio);
			
			$mensaje="El pedido se ha realizado exitosamente, muy pronto recibiras un correo de confirmación!! ";
			return redirect()->to(base_url("public/detalle/producto"))->with('mensaje',$mensaje);


		}catch(\Exception $error){
			echo($error->getMessage());
		}
	}
}