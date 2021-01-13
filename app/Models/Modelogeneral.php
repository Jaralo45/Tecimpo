<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloGeneral extends Model{

    protected $table='general';
    protected $primaryKey='id';

    protected $allowedFields = array('nombre','descripcion','valor','cantidad','foto','fecharegistro');

}