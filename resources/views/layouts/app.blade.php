<!DOCTYPE html>
<html>
<head>
    <title>Empresa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet"/>

</head>
<body>
    @include('layouts.nav')
    @include('partials.sesion-estado')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
