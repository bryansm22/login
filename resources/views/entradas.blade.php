@extends('layouts.auth')

@section('content')
    <div class="container-fluid"  style="background-color: #438eb9; color: white; margin-bottom: 60px; margin-top: 40px">
        <h2 align="center">GESTIÓN DE ENTRADA DE ARTÍCULO</h2>
    </div>
    <div class="panel-body">

        <form method="post" class="form-inline">
            <div class="form-group">
                <label>Código</label>
                <input type="text" class="form-control" id="idEntrada" placeholder="Código Generado" disabled>
            </div>
        </form>
    </div>



@endsection
