<?php namespace App\Controllers;

use App\Models\Modelolistado;


class RegistroNuevoController extends BaseController
{
	public function index()
	{
		return view('NuevoRegistro');
	}

	public function registrar(){

		$nombre=$this->request->getPost("nombre");
		$descripcion=$this->request->getPost("descripcion");
		$detalle=$this->request->getPost("detalle");
		$valor=$this->request->getPost("valor");
		$cantidad=$this->request->getPost("cantidad");
		$estado=$this->request->getPost("estado");
		$categoria=$this->request->getPost("categoria");
		$foto=$this->request->getPost("foto");
		$foto2=$this->request->getPost("foto2");
		$foto3=$this->request->getPost("foto3");
		$foto4=$this->request->getPost("foto4");
		$foto5=$this->request->getPost("foto5");
		$marca=$this->request->getPost("marca");
		$linea=$this->request->getPost("linea");
		$pantalla=$this->request->getPost("pantalla");
		$camaraf=$this->request->getPost("camaraf");
		$camarap=$this->request->getPost("camarap");
		$procesador=$this->request->getPost("procesador");
		$ram=$this->request->getPost("ram");
		$almacenamiento=$this->request->getPost("almacenamiento");
		$sistema=$this->request->getPost("sistema");
		$resolucion=$this->request->getPost("resolucion");
		$graficos=$this->request->getPost("graficos");
		$disco=$this->request->getPost("disco");
		$bateria=$this->request->getPost("bateria");
		$modelo=$this->request->getPost("modelo");
		$material=$this->request->getPost("material");
		$color=$this->request->getPost("color");

		$datosEnvio=array(
			"nombre"=>$nombre,
			"descripcion"=>$descripcion,
			"detalle"=>$detalle,
			"valor"=>$valor,
			"cantidad"=>$cantidad,
			"estado"=>$estado,
			"categoria"=>$categoria,
			"foto"=>$foto,
			"foto2"=>$foto2,
			"foto3"=>$foto3,
			"foto4"=>$foto4,
			"foto5"=>$foto5,
			"marca"=>$marca,
			"linea"=>$linea,
			"pantalla"=>$pantalla,
			"camaraf"=>$camaraf,
			"camarap"=>$camarap,
			"procesador"=>$procesador,
			"ram"=>$ram,
			"almacenamiento"=>$almacenamiento,
			"sistema"=>$sistema,
			"resolucion"=>$resolucion,
			"graficos"=>$graficos,
			"disco"=>$disco,
			"bateria"=>$bateria,
			"modelo"=>$modelo,
			"material"=>$material,
			"color"=>$color
		);

		$modeloListado= new Modelolistado();

		try{
			$modeloListado->insert($datosEnvio);
			
			$mensaje="Producto registrado con exito!! ";
			return redirect()->to(base_url("public/registro/productos"))->with('mensaje',$mensaje);


		}catch(\Exception $error){
			echo($error->getMessage());
		}
	}

}
