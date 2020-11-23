<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{--  <link rel="stylesheet" href="{{ mix('css/app.css') }}">  --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body >
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light top-0">
                <a class="navbar-brand" href="/dashboard">Admin Panel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/empleados">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/empresas">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}" tabindex="-1" aria-disabled="true" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Cerrar Sesión</a>
                    </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                    {{ csrf_field() }}
                    </form>
                </div>
            </nav>
        </div>
        <div class="container-fluid" id="principal">
            @yield('content')
        </div>
    </body>
</html>
