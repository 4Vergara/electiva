<?php

namespace App\Models;

use CodeIgniter\Model;

class Roles_model extends Model
{

    protected $table = 'roles';
    protected $id = 'id';

    /**
     * ? Funcion para registrar un usuario en la base de datos
     * @param array $datos
     * @return void
     */
    public function traer_roles()
    {
        $query = $this->db->table($this->table)->get();
        return $query->getResultObject();
    }
}