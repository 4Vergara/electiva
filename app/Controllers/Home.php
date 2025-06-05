<?php

namespace App\Controllers;
use App\Controllers\BaseController;

//? Cargar el modelo de usuarios
use App\Models\Usuarios_model;

//? Cargar el modelo de roles
use App\Models\Roles_model;

class Home extends BaseController
{
    public function index(){
        //? Traer los usuarios
        $usuarios_model = new Usuarios_model();
        $usuarios = $usuarios_model->obtenerUsuarios();
        //? Traer los roles
        $roles_model = new Roles_model();
        $roles = $roles_model->traer_roles();
        // var_dump($usuarios);

        return view('vista_prueba', [
            'usuarios' => $usuarios,
            'roles' => $roles
        ]);
    }

    /**
     * ? Funcion para registrar un usuario
     * @param array $datos
     * @return void
     */
    public function registrar_usuario(){
        //? Cargar el modelo de usuarios
        $usuarios_model = new Usuarios_model();
        $id_usuario = $this->request->getPost('id_usuario');
        //? Obtener los datos del formulario
        $datos = [
            'nombre_usuario' => $this->request->getPost('nombre_usuario'),
            'email' => $this->request->getPost('email'),
            'id_rol' => $this->request->getPost('id_rol')
        ];
        //? Registrar el usuario
        $msg = '';
        if($id_usuario){
            //? Si el id_usuario existe, actualizar el usuario
            $msg = 'Usuario actualizado correctamente';
            $usuarios_model->actualizarUsuario($id_usuario, $datos);
        } else {
            $msg = 'Usuario registrado correctamente';
            $usuarios_model->registrar($datos);
        }
        //? Redireccionar a la vista principal
        return json_encode([
            'resp' => '1',
            'msg' => $msg
        ]);
    }

    /**
     * ? Funcion para eliminar un usuario
     * @param int $id_usuario
     * @return void
     */
    public function eliminar_usuario(){
        //? Cargar el modelo de usuarios
        $usuarios_model = new Usuarios_model();
        //? Obtener el id del usuario a eliminar
        $id_usuario = $this->request->getPost('id_usuario');
        //? Eliminar el usuario
        $usuarios_model->eliminarUsuario($id_usuario);
        //? Redireccionar a la vista principal
        return json_encode([
            'resp' => '1'
        ]);
    }

    /**
     * ? Funcion para traer un usuario por su id
     * @param int $id_usuario
     * @return $usuario
     */
    public function obtener_usuario_por_id($id_usuario){
        //? Cargar el modelo de usuarios
        $usuarios_model = new Usuarios_model();
        //? Obtener el usuario por su id
        $usuario = $usuarios_model->obtenerUsuarioPorId($id_usuario);
        //? Retornar el usuario
        return json_encode($usuario);
    }
}
