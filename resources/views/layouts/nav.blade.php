<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand" href="/">Empresa</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="/"><i class="bi bi-house"></i>Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="/persona"><i class="bi bi-people-fill"></i>Personas</a></li>
            <li class="nav-item"><a class="nav-link" href="/contacto"><i class="bi bi-person-circle"></i>Contacto</a></li>
            @guest
            <li><a href="{{route('login')}}" class="login nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a></li>
            <li><a href="{{route('register')}}" class="login nav-link">Registrar</a></li>
            @else
                <li>
                    <a href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="nav-link"><i class="bi bi-box-arrow-left"></i>Cerrar Sesión</a>
                </li>
            @endguest
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</nav>
