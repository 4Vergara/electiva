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
        $query = $this->db->table($this->table)->join('roles', 'usuarios.id_rol = roles.id_rol')
                          ->select('usuarios.id_usuario, usuarios.nombre_usuario, usuarios.email, roles.nombre_rol as rol_usuario')
                          ->orderBy('usuarios.id_usuario', 'ASC')
                          ->get();
        return $query->getResultObject();
    }

    /**
     * ? Funcion para eliminar un usuario de la base de datos
     * @param int $id_usuario
     * @return void
     */
    public function eliminarUsuario($id_usuario){
        $this->db->table($this->table)->where('id_usuario', $id_usuario)->delete();
    }

    /**
     * ? Funcion para traer un usuario por su id
     * @param int $id_usuario
     * @return object
     */
    public function obtenerUsuarioPorId($id_usuario){
        $query = $this->db->table($this->table)->where('id_usuario', $id_usuario)->get();
        return $query->getRow();
    }

    /**
     * ? Funcion para actualizar un usuario
     * @param int $id_usuario
     * @param array $datos
     * @return void
     */
    public function actualizarUsuario($id_usuario, $datos){
        $this->db->table($this->table)->where('id_usuario', $id_usuario)->update($datos);
    }
}