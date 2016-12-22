<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testeController extends Controller
{

    public function index($id){

        return "passa o número já!!!" . $id;

    }

    public function show($id){

        return "Isto é o método show";
    }

    public function create(){
        return "Sou o create";
    }

    public function show_my_view(){



        return view('teste');
    }

    public function show_post($id, $name){

        //bom para um único parâmetro
//        return view('teste')->with('id', $id);
        return view('teste', compact('id', 'name'));
    }

    public function contact(){

        $people = ['Edwin', 'Jose', 'Joana', 'Maria'];

        return view('teste', compact('people'));

    }

}


