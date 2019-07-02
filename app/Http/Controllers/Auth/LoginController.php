<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
            'password'  => 'required | string'
        ]);
        $user = request()->post('email');
        $pass = request()->post('password');

        switch ($user){
            case 'bryan@gmail.com':
                config(['database.connections.mysql.username' => 'sysadmin']);
                config(['database.connections.mysql.password' => '123']);
                DB::purge('mysql');
                DB::reconnect('mysql');
                break;
            case 1:
                echo "i es igual a 1";
                break;
            case 2:
                echo "i es igual a 2";
                break;
        }

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
