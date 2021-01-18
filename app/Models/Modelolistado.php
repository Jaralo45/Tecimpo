<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloListado extends Model{

    protected $table='productos';
    protected $primaryKey='id';

    protected $allowedFields = array('nombre','descripcion','valor','cantidad','foto','categoria','fecharegistro');

}