<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view("index");
    }

    public function aboutUs(){
        return view("aboutUs");
    }

    public function contacts(){
        return view("contacts");
    }

    public function healthAdvice(){
        return view("healthAdvice");
    }

    public function regulationsSafety(){
        return view("regulationsSafety");
    }

    public function walkerCode(){
        return view("walkerCode");
    }
}
