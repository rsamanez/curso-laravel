<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = [
            'Joel',
            'Juan',
            'Carlos',
            'Tammy',
            'Bill',
            'Tess',
            'Rommel'
        ];

        $title = 'Listado de Usuarios';

        return view('users.index',compact('title','users'));
    }

    public function show($id){
        return view('users.show',compact('id'));
    }

    public function edit($id){
        return 'Editar datos usuario: '.$id;
    }
}
