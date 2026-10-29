<nav class="navbar navbar-expand-lg bg-nav navbar-color">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('img/Chandler.png') }}" alt="Logo MoveTe"
                style="max-width: 120px; max-height: 50px; transform: translateX(-13px)" /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <a class="nav-link text-light" href="{{ route('index') }}" aria-expanded="false">
                    Home
                </a>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Para Iniciantes
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('regulationsSafety') }}">Regras</a></li>
                        <li><a class="dropdown-item" href="{{ route('healthAdvice') }}">Conselhos de Saúde</a></li>
                        <li><a class="dropdown-item" href="{{ route('walkerCode') }}">Código de Caminhante</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button"
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
                    <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Institucional
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('aboutUs') }}" class="nav-link p-0">Sobre nós</a></li>
                        <li><a class="dropdown-item" href="{{ route('contacts') }}" class="nav-link p-0">Contactos</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
