@extends('layout.master')

@section('title')
    Conselhos de Saúde
@endsection

@section('moreCss')
    <link rel="stylesheet" href="{{ asset('css/healthAdvice.css') }}">
@endsection

@section('content')
    <section>
        <div class="banner-cover">
            <img src="{{asset('img/conselhos/banner.png')}}" class="banner" alt="banner">
            <div class="text-light banner-text position-relative">
                <h1>O teu primeiro passo: Saúde e Bem-Estar ao teu ritmo</h1>
                <h4>"A maior distância de qualquer caminhada é a distância entre o sofá e a porta de casa."</h4>
            </div>
        </div>
    </section>

    <section>
        <div class="container cartas mb-3">
            <h2 class="text-center">O que realmente precisas antes de começar?</h2>
            <p class="text-center">Para começar a correr ou dar os primeiros passos, só precisas do essencial:</p>
            <div class="row column-gap-5 row-gap-3 justify-content-center">
                <div class="col-12 col-md-auto p-0">
                    <div class="card card-bg rounded-4 mx-auto align-items-center" style="width: 15rem; height:380px;">
                        <img src="{{ asset('img/conselhos/sapato.png') }}" class="card-img-top mb-4" style="width:80%; height: 150px;" alt="sapato">
                        <div class="card-body">
                            <h4 class="text-center color-sec">Sapatilhas Confortáveis: </h4>
                            <p class="card-text text-light text-center">Não precisam de ser os melhores ténis. Procura um
                                par confortável.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto p-0">
                    <div class="card card-bg rounded-4 mx-auto align-items-center" style="width: 15rem; height:380px;">
                        <img src="{{ asset('img/conselhos/camisola.png') }}" class="card-img-top" style="width:80%; height: 180px;" alt="sapato">
                        <div class="card-body">
                            <h4 class="text-center color-sec">Roupas leves e transpiráveis:</h4>
                            <p class="card-text text-light text-center">Opta por tecidos sintéticos (como poliéster) que
                                secam rápido. Evita o algodão pesado que acumula suor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto p-0">
                    <div class="card card-bg rounded-4 mx-auto align-items-center" style="width: 15rem; height:380px;">
                        <img src="{{ asset('img/conselhos/garrafa.png') }}" class="card-img-top" style="width:80%; height: 180px;" alt="sapato">
                        <div class="card-body">
                            <h4 class="text-center color-sec">Garrafa de água:</h4>
                            <p class="card-text text-light text-center">Leva sempre contigo uma garrafa de água para
                                pequenos goles regulares.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="card-bg text-light px-5 py-3 d-flex flex-row gap-5">
            <div>
                <h2 class="color-sec">A regra de Ouro</h2>
                <p>Devagar se vai longe: Devagar se vai longe: O erro mais comum no início é fazer demasiado depressa. A
                    chave
                    para
                    evitar lesões reside em respeitar o teu ritmo através dos seguintes pontos:</p>
                <ul>
                    <li><strong> Regra da Conversa:</strong> Enquanto caminhamos ou correres, devemos ser capazes de manter
                        uma
                        conversa sem ficar
                        sem ar. Se estás a ter dificuldades em respirar, reduz a velocidade.</li>
                    <li><strong>Alternar Caminhada e Corrida (Método Caco):</strong> Exemplo para a 1ª Semana: 2 minutos a
                        caminhar + 30 segundos de
                        trote leve. Repete 6 a 8 vezes.</li>
                    <li><strong>Escuta o Teu Corpo:</strong> Sentir cansaço é normal; sentir dor aguda nos joelhos,
                        tornozelos
                        ou peito é um sinal
                        para parar imediatamente.</li>
                </ul>
            </div>
            <div>
                <img src="{{ asset('img/conselhos/relogio.png') }}" alt="relógio" class="clock" style="width: 15rem; height:15rem;">
            </div>
        </div>
    </section>

    <section>
        <h2 class="text-center">Hábitos de Saúde que Fazem a Diferença</h2>
        <div class="d-flex justify-content-center px-3 py-3">
            <table class="custom-table justify-content-center">
                <thead>
                    <tr>
                        <th>Pilar</th>
                        <th>A Boas Prática</th>
                        <th>Porquê?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Aquecimento</strong></td>
                        <td>3 a 5 min de caminhada lenta e rotação de articulações antes de arrancar.</td>
                        <td>Prepara o coração e lubrifica as articulações para evitar lesões.</td>
                    </tr>
                    <tr>
                        <td><strong>Hidratação</strong></td>
                        <td>Beber pequenos goles de água ao longo do dia, não só durante o treino.</td>
                        <td>Evita cãibras, tonturas e fadiga precoce.</td>
                    </tr>
                    <tr>
                        <td><strong>Descanso</strong></td>
                        <td>Dar pelo menos 1 dia de pausa entre os treinos.</td>
                        <td>O corpo melhora e ganha resistência durante o descanso, não durante o esforço.</td>
                    </tr>
                    <tr>
                        <td><strong>Alimentação</strong></td>
                        <td>Fazer uma refeição leve 1h a 1h30 antes (ex: 1 peça de fruta ou tostada).</td>
                        <td>Dá-te a energia necessária sem causar peso ou indisposição no estômago.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section>
        <h2 class="text-center">Mitos Frequentes sobre Exercício</h2>
        <div class="d-flex flex-column">
            <p class="d-inline-flex gap-1">
                <a class="btn btn-prim text-light bar rounded-0" data-bs-toggle="collapse" href="#collapsetime"
                    role="button" aria-expanded="false" aria-controls="collapseExample">
                    ❌ "Não tenho tempo para treinar."
                </a>
            </p>
            <div class="collapse" id="collapsetime">
                <div class="card card-body text-center mb-3 rounded-0">
                    Facto: 20 minutos de caminhada rápida 3 vezes por semana já trazem benefícios gigantescos para a tua
                    saúde
                    física e mental.
                </div>
            </div>

            <p class="d-inline-flex gap-1">
                <a class="btn btn-prim text-light bar rounded-0" data-bs-toggle="collapse" href="#collapsepain"
                    role="button" aria-expanded="false" aria-controls="collapseExample">
                    ❌ "Tenho de sentir dores no dia seguinte para saber que funcionou."
                </a>
            </p>
            <div class="collapse" id="collapsepain">
                <div class="card card-body text-center mb-3 rounded-0">
                    Facto: No pain, no gain é um mito perigoso para iniciantes. O objetivo inicial é criar o hábito sem
                    ficar de cama no dia seguinte.
                </div>
            </div>
        </div>
    </section>

@endsection
