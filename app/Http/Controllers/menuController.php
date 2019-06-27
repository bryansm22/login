<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class menuController extends Controller
{


    public function index(){
        //$usuarios = User::pluck('name', 'email');
        //return view('entradas', compact('usuarios'));
        return view('menu');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function generarEntrada(){
        if (Auth::check()) {
            return view('entradas');
        }else{

            return redirect('/');
        }


    }

}
