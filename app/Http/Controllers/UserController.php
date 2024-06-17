<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    //
    public function index()
    {
        //logica
        //consultar la BD
        // Si usamos de laravel 10 en adelante es recomendable trabajar con tipado de datos
        return '<h1>Hola mundo desde el index de UserController</h1>';
    }

    public function user(int $user_id): view
    {
        //mas o menos equivalente a un console log
        // dd($user_id);

        // var_dump($userId);
        // die();

        // return '<h1>Hola user desde el user de UserController</h1>';
        return view('welcome');
    }
}
