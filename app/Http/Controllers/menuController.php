<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    public function index(){
        return view('menu');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

}
