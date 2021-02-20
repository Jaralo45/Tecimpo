<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloPreguntas extends Model{

    protected $table='preguntas';
    protected $primaryKey='id';

    protected $allowedFields = array('nombre','correo','pregunta','respuesta','fecha');

}