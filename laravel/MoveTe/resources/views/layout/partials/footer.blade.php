<footer>
    <footer class="footer-adocao border-top">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-lg-3 mb-4 mb-lg-0 text-center text-lg-start">
                    <a class="footer-brand" href="{{ route('index') }}">
                        <img src="{{ asset('img/Chandler.png') }}" alt="Logo MoveTe"
                            style="max-width: 200px; max-height: 50px;" />
                    </a>
                    <p class="mt-2" style="font-size: 0.8rem">A nossa missão é transformar hábitos e combater o sedentarismo com foco no bem-estar, saúde e comunidade.</p>
                </div>

                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-2 mb-3">
                            <h5>Para Iniciantes</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="{{ route('regulationsSafety') }}" class="nav-link text-light p-0">Regras</a></li>
                                <li class="nav-item mb-2"><a href="{{ route('healthAdvice') }}" class="nav-link text-light p-0">Conselhos de Saúde</a></li>
                                <li class="nav-item mb-2"><a href="{{ route('walkerCode') }}" class="nav-link text-light  p-0">Código de Caminhante</a></li>
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
                                <li class="nav-item mb-2"><a href="{{ route('aboutUs') }}" class="nav-link text-light p-0">Sobre nós</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-lg-3 mb-3">
                            <h5>Links Rápidos</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="{{ route('contacts') }}" class="nav-link text-light p-0">Contactos</a></li>
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
