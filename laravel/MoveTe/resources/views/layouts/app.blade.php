<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login-registo.css') }}">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-color">
            <div class="container-fluid">
                <a class="navbar-brand ps-3" href="{{ route('index') }}"><img src="{{ asset('img/Logo.png') }}"
                        alt="Logo MoveTe"
                        style="max-width: 120px; max-height: 50px; transform: translateX(-13px)" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a class="nav-link text-dark" href="{{ route('index') }}" aria-expanded="false">
                            Home
                        </a>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Para Iniciantes
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('regulationsSafety') }}">Regras</a></li>
                                <li><a class="dropdown-item" href="{{ route('healthAdvice') }}">Conselhos de Saúde</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('walkerCode') }}">Código de Caminhante</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Atividades
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href=""></a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li><a class="dropdown-item" href=""></a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Institucional
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link p-0">Sobre
                                        nós</a></li>
                                <li><a class="dropdown-item" href="{{ route('contacts') }}"
                                        class="nav-link p-0">Contactos</a></li>
                            </ul>
                        </li>
                    </ul>
                    @guest
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
                            <li class="nav-item me-lg-2 mb-2 mb-lg-0">
                                <a class="btn" href="{{ route('login') }}">Iniciar sessão</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href="{{ route('register') }}">Registar</a>
                            </li>
                        </ul>
                    @endguest
                    @auth
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn">Terminar sessão</button>
                                </form>
                            </li>
                        </ul>
                    @endauth
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <footer class="footer-adocao border-top">
                <div class="container">
                    <div class="row py-5">
                        <div class="col-12 col-lg-3 mb-4 mb-lg-0 text-center text-lg-start">
                            <a class="footer-brand" href="{{ route('index') }}">
                                <img src="{{ asset('img/LogotipoFooter.png') }}" alt="Logo MoveTe"
                                    style="max-width: 300px; max-height: 100px;" />
                            </a>
                            <p class="mt-2" style="font-size: 0.8rem">A nossa missão é transformar hábitos e combater
                                o sedentarismo com foco no bem-estar, saúde e comunidade.</p>
                        </div>

                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-6 col-lg-2 mb-3">
                                    <h5>Para Iniciantes</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="{{ route('regulationsSafety') }}"
                                                class="nav-link text-light p-0">Regras</a></li>
                                        <li class="nav-item mb-2"><a href="{{ route('healthAdvice') }}"
                                                class="nav-link text-light p-0">Conselhos de Saúde</a></li>
                                        <li class="nav-item mb-2"><a href="{{ route('walkerCode') }}"
                                                class="nav-link text-light  p-0">Código de Caminhante</a></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-lg-3 mb-3">
                                    <h5>Atividades</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0"></a></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-lg-3 mb-3">
                                    <h5>A nossa Instituição</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}"
                                                class="nav-link text-light p-0">Sobre nós</a></li>
                                    </ul>
                                </div>
                                <div class="col-6 col-lg-3 mb-3">
                                    <h5>Links Rápidos</h5>
                                    <ul class="nav flex-column">
                                        <li class="nav-item mb-2"><a href="{{ route('contacts') }}"
                                                class="nav-link text-light p-0">Contactos</a></li>
                                        <li class="nav-item mb-2"><a href="{{ route('cookies') }}"
                                                class="nav-link text-light p-0">Cookies</a></li>
                                        <li class="nav-item mb-2"><a href="{{ route('accessibilityPolicy') }}"
                                                class="nav-link text-light p-0">Política de Acessibilidade</a></li>
                                        <li class="nav-item mb-2"><a href="{{ route('faq') }}"
                                                class="nav-link text-light p-0">FAQ</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 border-top">
                        <p class="mb-0">© 2026 MoveTe. Todos os direitos reservados.</p>
                        <ul class="list-unstyled d-flex social-icons mb-0">
                            <li class="ms-3">
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="ms-3">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </footer>

    </div>
</body>

</html>
