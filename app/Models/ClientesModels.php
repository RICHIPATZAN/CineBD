<?php
namespace App\Models;
use CodeIgniter\Model;
Class ClientesModels extends Model
{
    protected $table= 'clientes';
    protected $primaryKey = 'cliente_id';

    protected $allowedFields =['nombre','apellido','fecha_nacimiento','fecha_suscripcion','correo_electronico','telefono_movil'];

}