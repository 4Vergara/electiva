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
}
