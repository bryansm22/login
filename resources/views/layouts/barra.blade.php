<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>Inicio de sesión</title>
</head>
<body>
    <div class="container">
        <hr>
        @if (session()->has('flash'))
            <div class="alert alert-info">{{ session('flash') }}</div>
        @endif
        @yield('content')
    </div>
</body>
</html>