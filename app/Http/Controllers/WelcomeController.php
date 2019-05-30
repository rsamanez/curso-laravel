<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __invoke($name,$nickname=null)
    {
        if ($nickname) {
            return "Hola {$name}, tu apodo es {$nickname}";
        } else {
            return "Bienvenido {$name}";
        }
    }
}
