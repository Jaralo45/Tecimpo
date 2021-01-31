<?php namespace App\Controllers;

use App\Models\Modelogeneral;
use App\Models\Modelolistado;


class RegistroController extends BaseController
{
	public function index()
	{
		return view('RegistroProducto');
	}

	public function buscar(){

		$modeloListado= new Modelolistado();

		try{

		$datosConsultados=$modeloListado->findAll();

		$datosParaVista=array("celusados"=>$datosConsultados);

		return view('RegistroProducto',$datosParaVista);

		}catch(\Exception $error){

		echo($error->getMessage());
		}
	}

	public function registrar(){

		$nombre=$this->request->getPost("nombre");
		$descripcion=$this->request->getPost("descripcion");
		$detalle=$this->request->getPost("detalle");
		$valor=$this->request->getPost("valor");
		$cantidad=$this->request->getPost("cantidad");
		$foto=$this->request->getPost("foto");
		$foto2=$this->request->getPost("foto2");
		$foto3=$this->request->getPost("foto3");
		$foto4=$this->request->getPost("foto4");
		$foto5=$this->request->getPost("foto5");

		$datosEnvio=array(
			"nombre"=>$nombre,
			"descripcion"=>$descripcion,
			"detalle"=>$detalle,
			"valor"=>$valor,
			"cantidad"=>$cantidad,
			"foto"=>$foto,
			"foto2"=>$foto2,
			"foto3"=>$foto3,
			"foto4"=>$foto4,
			"foto5"=>$foto5
		);

		$modeloListado= new Modelolistado();
		$modeloGeneral= new Modelogeneral();

		try{
			$modeloListado->insert($datosEnvio);
			$modeloGeneral->insert($datosEnvio);
			
			$mensaje="Producto registrado con exito!! ";
			return redirect()->to(base_url("public/registro/productos"))->with('mensaje',$mensaje);


		}catch(\Exception $error){
			echo($error->getMessage());
		}
	}

	public function eliminar($id){
		
		$modeloListado=new ModeloListado();

		try{

			$modeloListado->where('id',$id)->delete();
			
			$mensaje="Ups! Has eliminado un registro";
			return redirect()->to(base_url("public/registro/productos"))->with('mensaje',$mensaje);

			
		}catch(\Exception $error){

			echo($error->getMessage());
		}

	}
	public function editar($id){

		$categoria=$this->request->getPost("categoriaEditar");
		$nombre=$this->request->getPost("nombreEditar");
		$descripcion=$this->request->getPost("descripcionEditar");
		$detalle=$this->request->getPost("detalleEditar");
		$valor=$this->request->getPost("valorEditar");
		$cantidad=$this->request->getPost("cantidadEditar");
		$foto=$this->request->getPost("fotoEditar");
		$foto2=$this->request->getPost("foto2Editar");
		$foto3=$this->request->getPost("foto3Editar");
		$foto4=$this->request->getPost("foto4Editar");
		$foto5=$this->request->getPost("foto5Editar");

		$datosEnvio=array(
			"nombre"=>$nombre,
			"descripcion"=>$descripcion,
			"detalle"=>$detalle,
			"valor"=>$valor,
			"cantidad"=>$cantidad,
			"foto"=>$foto,
			"categoria"=>$categoria,
			"foto2"=>$foto2,
			"foto3"=>$foto3,
			"foto4"=>$foto4,
			"foto5"=>$foto5
		);

		$modeloListado= new Modelolistado();

		try{
			
			$modeloListado->update($id,$datosEnvio);
			
			$mensaje="Que bien, los datos se han actualizado con exito!";
			return redirect()->to(base_url("public/registro/productos"))->with('mensaje',$mensaje);


		}catch(\Exception $error){

			echo($error->getMessage());

		}

	}

}
