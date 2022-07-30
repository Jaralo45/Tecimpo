<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloListado extends Model{

    protected $table='productos';
    protected $primaryKey='id';

    protected $allowedFields = array('nombre','descripcion','detalle','valor','cantidad','foto','categoria','fecharegistro','foto2','foto3','foto4','foto5','estado','marca','linea','pantalla','camaraf','camarap','procesador','ram','almacenamiento','sistema','resolucion','graficos','bateria','modelo','material','color');

}