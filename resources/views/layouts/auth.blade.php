<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>-->

    <!--<link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.css') }}>
    <script src="/js/bootstrap/bootstrap.min.js"></script> -->
</head>
<body>
       <div class="container">
           <nav class="navbar" >
               <div class="container-fluid">
                   <ul class=" list-inline navbar-right">
                       <!--
                        <li class="list-inline-item">
                           <img src="images/user_icon.png" alt="usuario" width="5%" height="5%">
                       </li>
                        -->
                       <li class="list-inline-item">
                           <h4>{{ auth()->user()->name }}</h4>
                       </li>
                       <li class="list-inline-item">
                           <form method="POST" ACTION=" {{  route('salir') }} ">
                               {{csrf_field() }}
                               <button class="btn btn-danger btn-block">Cerrar Sesión</button>
                           </form>
                       </li>

                   </ul>
               </div>
           </nav>
       </div>



    <div class="container">
        <hr>
        @if (session()->has('flash'))
            <div class="alert alert-info">{{ session('flash') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>