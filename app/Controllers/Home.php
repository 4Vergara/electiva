<?php

namespace App\Controllers;

//? Cargar el modelo de usuarios
use App\Controllers\BaseController;
use App\Models\Usuarios_model;

class Home extends BaseController
{
    public function index(){
        //? Traer los usuarios
        $usuarios_model = new Usuarios_model();
        $usuarios = $usuarios_model->obtenerUsuarios();
        // var_dump($usuarios);

        return view('vista_prueba');
    }
}
