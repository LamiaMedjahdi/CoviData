<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Covidata</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/acceuil') }}">
                    CoviData
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                      @if(Auth::check())
                            <li class="nav-item">
                                @if (Auth::user()->roles=0)
                                    <a class="nav-link" href="{{ url('/index2/') }}">{{ Auth::user()->nom}}</a>
                                @else
                                <a class="nav-link" href="{{ url('/index/') }}">{{ Auth::user()->nom}}</a>
                                @endif
                            
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/logout">Déconnexion</a>
                            </li>
                        @else
                          <li class="nav-item">
                            <a class="nav-link" href="/register">Inscription</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="/login">Connexion</a>
                            </li>
                            @endif  
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
