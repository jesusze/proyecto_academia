<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamacControllers extends Controller
{
    public function index(){
        return view("Inicio");
    }
    public function juzgado(){
        return view("Juzgados");
    }
    public function superior(){
        return view("SalaSuperior");
    }
    public function suprema(){
        return view("SalaSuprema");
    }
}
