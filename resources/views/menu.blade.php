@extends('layouts.auth')

@section('content')
    <div class="col-md-5 col-md-offset-5">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title">
                    Bienvenido {{ auth()->user()->name }}
                </h1>
            </div>
            <div class="panel-footer">
                <form method="POST" ACTION=" {{  route('salir') }} ">
                    {{csrf_field() }}
                    <button class="btn btn-danger btn-xs btn-block">Cerrar Sesión</button>
                </form>
            </div>
        </div>
    </div>
@endsection
