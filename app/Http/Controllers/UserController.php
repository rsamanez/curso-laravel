<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return  'Usuarios';
    }

    public function show($id){
        return 'Datos del usuario: '.$id;
    }

    public function edit($id){
        return 'Editar datos usuario: '.$id;
    }
}
