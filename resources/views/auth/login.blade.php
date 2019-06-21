<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sistema de administración DIPCA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
    <hr>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">
                            Acceso a la aplicación
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
    </body>
</html>




