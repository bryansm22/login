<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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