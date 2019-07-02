@extends('layouts.auth')

@section('content')
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <div class="container-fluid"  style="background-color: #438eb9; color: white; margin-bottom: 60px; margin-top: 40px">
        <h2 align="center">GESTIÓN DE ENTRADA DE ARTÍCULO</h2>
    </div>
    <div class="panel-body">

        <form method="post" class="form-inline">
            <div class="row col-sm-12" style="margin-bottom: 20px">
                <div class="form-group col-sm-4">
                    <label style="margin-right: 10px">Código</label>
                    <input type="text" class="form-control " id="idEntrada" placeholder="Código Generado" disabled>
                </div>
                <div class="form-group col-sm-4">
                    <label style="margin-right: 10px">Tipo de entrada:</label>
                    {!! Form::select('tipo_entrada', $usuarios, 0, ['class' => 'form-control'])!!}

                </div>
                <div class="form-group col-sm-4">
                    <label style="margin-right: 10px">Estado:</label>
                    {!! Form::select('tipo_entrada', $usuarios, 0, ['class' => 'form-control', 'disabled' => true])!!}
                </div>
            </div>
            <div class="row col-sm-12" style="margin-bottom: 20px">
                <div class="form-group col-sm-4">
                    <label style="margin-right: 10px" for="fecha_e">Fecha de gestión:</label>
                    <input type="text" id="fecha_e"/>
                    <script>
                        $('#fecha_e').datepicker({
                            uiLibrary: 'bootstrap4',
                            format: 'dd-mm-yy'
                        });
                    </script>
                </div>
                <div class="form-group col-sm-4">
                    <label style="margin-right: 10px" for="fecha_e">Fecha de ultima modificación:</label>
                    <input type="text" id="fecha_mod"/>
                    <script>
                        $('#fecha_mod').datepicker({
                            uiLibrary: 'bootstrap4',
                            format: 'dd-mm-yy'
                        });
                    </script>
                </div>
                <div class="form-group col-sm-4">
                    <label style="margin-right: 10px" for="fecha_e">Fecha de aplicación:</label>
                    <input type="text" id="fecha_apli"/>
                    <script>
                        $('#fecha_apli').datepicker({
                            uiLibrary: 'bootstrap4',
                            format: 'dd-mm-yy'
                        });
                    </script>
                </div>
            </div>
            <div class="row col-sm-12" style="margin-bottom: 20px">
                <div class="form-group col-sm-4">
                    <label style="margin-right: 10px">Proveedor/Donante</label>
                    {!! Form::select('prov_don', $usuarios, 0, ['class' => 'form-control'])!!}
                </div>
                <div class="form-group col-sm-8">
                    <label style="margin-right: 10px">Modo Protegido</label>
                    {{ Form::radio('protegido', '1' , true) }} Si

                    {{ Form::radio('protegido', '0' , false) }} No
                </div>
            </div>


        </form>
    </div>



@endsection
