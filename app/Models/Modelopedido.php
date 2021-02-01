<?php namespace App\Models;

use CodeIgniter\Model;

class ModeloPedido extends Model{

    protected $table='pedidos';
    protected $primaryKey='id';

    protected $allowedFields = array('nombre','direccion','correo','cantidad','telefono','referencia','ciudad','producto','valor');

}