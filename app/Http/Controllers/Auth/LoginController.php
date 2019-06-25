<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['only' => 'mostrarLogin']);
    }



    public function mostrarLogin(){
        return view('auth.login');
    }



    public function login(){
        $credentials = $this->validate(request(), [
           'email' => 'required | string',
            'password' => 'required | string'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('menu');
        }

        return back()
            ->withErrors(['email' => 'Error en el correo'])
            ->withInput(request([$this->username()]));
    }

    public function salir(){
        Auth::logout();
        return redirect('/');
    }

}
