<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamacControllers extends Controller
{
    public function index(){
        return view("Inicio");
    }
    public function juzgado(){
        $section = 'juzgado';
        return view("Juzgados", compact('section'));
    }
    
    public function superior(){
        $section = 'sala-superior';
        return view("Juzgados", compact('section'));
    }
    
    public function suprema(){
        $section = 'sala-suprema';
        return view("Juzgados", compact('section'));
    }
}
