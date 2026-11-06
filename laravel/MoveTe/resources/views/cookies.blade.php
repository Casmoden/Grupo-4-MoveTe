@extends('layout.master')

@section('title')
    Cookies - Giroto
@endsection

@section('content')
    <section class="container my-5">
        <figure class="mx-auto  text-center">
            <h1 class="display-4 fw-bold">Politicas de Cookies</h1>
            <p class="lead">O nosso site utiliza cookies para melhorar a experiência de navegação e garantindo o correto
                funcionamento da plataforma.</p>
        </figure>

        <div class="container-md width=80%">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            O que são Cookies
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Os cookies são pequenos ficheiros de texto armazenados no teu dispositivo (computador, tablet
                                ou telemóvel) quando visitas um website.
                                <br>São amplamente utilizados para fazer os sites funcionarem de forma mais eficiente, bem
                                como para fornecer informações aos proprietários do site.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            As cookies utilizadas
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>O nosso site utiliza as seguintes categorias de cookies:</p>
                            <ul>
                                <li class="list-group-item">Cookies Estritamente Necessários: São essenciais para que o site
                                    funcione corretamente (ex: permitir a navegação entre páginas, lembrar as tuas
                                    preferências de privacidade ou aceder a áreas seguras).
                                    Sem estes cookies, o site não consegue operar na íntegra.</li>
                                <li class="list-group-item">Cookies de Funcionalidade: Permitem que o site se comporte de
                                    forma mais eficiente e personalize a tua experiência (ex: lembrar as tuas preferências,
                                    guardar os teus dados de login).</li>
                                <li class="list-group-item">Cookies de Análise: São utilizados para analisar o comportamento
                                    dos utilizadores e melhorar a experiência no site.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Como gerir as Cookies
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Podes controlar e/f apagar os cookies sempre que quiseres.
                                A maioria dos navegadores de internet (como Google Chrome, Mozilla Firefox, Safari ou
                                Microsoft Edge) permite-te recusar ou eliminar cookies através das respetivas definições de
                                privacidade.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Atualizações das Cookies
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Podemos atualizar esta Política de Cookies periodicamente para refletir alterações
                                operacionais, legais ou regulamentares.
                                Recomendamos que consultes esta página regularmente para te manteres informado.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Contacto
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>Se tiveres alguma dúvida sobre esta Política de Cookies, podes entrar em contacto connosco
                                através da nossa página de contacto.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
