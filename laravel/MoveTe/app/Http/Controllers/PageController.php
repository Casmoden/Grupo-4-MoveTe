<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("index");
    }

    public function conselhos(){
        return view("conselhos");
    }

    public function contactos(){
        return view("contactos");
    }

    public function guiaPraticante(){
        return view("guiaPraticante");
    }

    public function quemSomos(){
        return view("quemSomos");
    }

    public function segurancaRegulamento(){
        return view("segurancaRegulamento");
    }
}
