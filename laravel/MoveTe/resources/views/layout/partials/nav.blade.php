        <nav class="navbar navbar-expand-lg navbar-color">
            <div class="container-fluid">
                <a class="navbar-brand ps-3" href="{{ route('index') }}"><img src="{{ asset('img/Logo.png') }}"
                        alt="Logo MoveTe" style="max-width: 120px; max-height: 50px; transform: translateX(-13px)" /></a>
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
