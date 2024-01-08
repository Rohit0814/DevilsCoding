<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return view('Home');
    }

    public function about(){
        return view('About');
    }

    public function project(){
        return view('Project');
    }

    public function contact(){
        return view('Contact');
    }

    public function service(){
        return view('Service');
    }

    public function blog(){
        return view('Blog');
    }

    public function login(){
        return view('Login');
    }
}
