<?php

namespace App\Models;

use CodeIgniter\Model;

class Usuarios_model extends Model
{

    protected $table = 'usuarios';
    protected $id = 'id';

    /**
     * ? Funcion para registrar un usuario en la base de datos
     * @param array $datos
     * @return void
     */
    public function registrar($datos)
    {
        $this->db->table($this->table)->insert($datos);
    }

    /**
     * ? Funcion para traer todos los usuarios de la base de datos
     * @return array
     */
    public function obtenerUsuarios()
    {
        $query = $this->db->table($this->table)->get();
        return $query->getResultArray();
    }
}