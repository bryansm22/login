<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class menuController extends Controller
{


    public function index(){
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
