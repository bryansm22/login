<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AdminController extends Controller
{
    use AuthenticatesUsers;

    protected $loginView = 'admin.login';
    protected $guard = 'admin';


    public function authenticated(){
        return redirect('admin\menuAdmin');
    }

    public  function mostrarMenuAdmin(){
        return 'Aqui irá el menu de admin';
    }
}
