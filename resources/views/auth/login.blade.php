@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-5 col-md-offset-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1 class="panel-title">
                        Acceso a la aplicacion
                    </h1>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('email') ? 'has error' : '' }}">
                            <label for="email">
                                Correo
                            </label>
                            <input class="form-control"
                                   type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   placeholder="Ingrese su correo">
                            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}

                        </div>

                        <div class="form-group {{ $errors->has('password')? 'has error' : '' }}">
                            <label for="password">Contraseña</label>
                            <input class="form-control"
                                   type="password"
                                   name="password"
                                   placeholder="Ingrese su contraseña">
                            {!! $errors->first('password', '<span class="help-block">:message</span>') !!}

                        </div>
                        <button class="btn btn-primary btn-block" >Acceder</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection