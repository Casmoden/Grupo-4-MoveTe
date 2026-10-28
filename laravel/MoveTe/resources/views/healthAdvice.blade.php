@extends('layout.master')

@section('title')
    Conselhos de Saúde
@endsection

@section('moreCss')
    <link rel="stylesheet" href="{{ asset('css/conselhos.css') }}">
@endsection

@section('content')
    <section>
        <div class="banner">
            <h1>O teu primeiro passo: Saúde e Bem-Estar ao teu ritmo</h1>
            <h4>"A maior distância de qualquer caminhada é a distância entre o sofá e a porta de casa."</h4>
        </div>
    </section>

    <section>
        <div>
            <h2 class="text-center">O que realmente precisas antes de começar?</h2>
            <p class="text-center">Para começar a correr ou dar os primeiros passos, só precisas do essencial:</p>
            <div class="row column-gap-5 row-gap-3 justify-content-center">
                <div class="col-12 col-md-auto p-0">
                    <div class="card card-bg rounded-4 mx-auto" style="width: 20rem; height:500px;">
                        <img src="{{ asset('img/conselhos/sapato.png') }}" class="card-img-top" alt="sapato">
                        <div class="card-body">
                            <h4 class="text-center color-sec">Sapatilhas Confortáveis: </h4>
                            <p class="card-text text-light text-center">Não precisam de ser os melhores ténis. Procura um
                                par confortável.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto p-0">
                    <div class="card card-bg rounded-4 mx-auto" style="width: 20rem; height:500px;">
                        <img src="{{ asset('img/conselhos/camisola.png') }}" class="card-img-top" alt="sapato">
                        <div class="card-body">
                            <h4 class="text-center color-sec">Roupas leves e transpiráveis:</h4>
                            <p class="card-text text-light text-center">Opta por tecidos sintéticos (como poliéster) que
                                secam rápido. Evita o algodão pesado que acumula suor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-auto p-0">
                    <div class="card card-bg rounded-4 mx-auto" style="width: 20rem; height:500px;">
                        <img src="{{ asset('img/conselhos/garrafa.png') }}" class="card-img-top" alt="sapato">
                        <div class="card-body">
                            <h4 class="text-center color-sec">Garrafa de água:</h4>
                            <p class="card-text text-light text-center">Leva sempre contigo uma garrafa de água para
                                pequenos goles regulares</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <h2>A regra de Ouro</h2>
        <p>Devagar se vai longe: Devagar se vai longe: O erro mais comum no início é fazer demasiado depressa. A chave para
            evitar lesões reside em respeitar o teu ritmo através dos seguintes pontos:</p>
        <ul>
            <li>A Regra da Conversa: Enquanto caminhamos ou correres, devemos ser capazes de manter uma conversa sem ficar
                sem ar. Se estás a ter dificuldades em respirar, reduz a velocidade.</li>
            <li>Alternar Caminhada e Corrida (Método Caco): Exemplo para a 1ª Semana: 2 minutos a caminhar + 30 segundos de
                trote leve. Repete 6 a 8 vezes.</li>
            <li>Escuta o Teu Corpo: Sentir cansaço é normal; sentir dor aguda nos joelhos, tornozelos ou peito é um sinal
                para parar imediatamente.</li>
        </ul>
    </section>
    <section>
        <h2>Hábitos de Saúde que Fazem a Diferença</h2>
    </section>
    <section>
        <h2>Mitos Frequentes sobre Exercício</h2>
        <div class="d-flex flex-column">
            <p class="d-inline-flex gap-1">
                <a class="btn btn-prim text-light bar" data-bs-toggle="collapse" href="#collapsetime" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    ❌ "Não tenho tempo para treinar."
                </a>
            </p>
            <div class="collapse" id="collapsetime">
                <div class="card card-body text-center mb-3">
                    Facto: 20 minutos de caminhada rápida 3 vezes por semana já trazem benefícios gigantescos para a tua
                    saúde
                    física e mental.
                </div>
            </div>

            <p class="d-inline-flex gap-1">
                <a class="btn btn-prim text-light bar" data-bs-toggle="collapse" href="#collapsepain" role="button"
                    aria-expanded="false" aria-controls="collapseExample">
                    ❌ "Tenho de sentir dores no dia seguinte para saber que funcionou."
                </a>
            </p>
            <div class="collapse" id="collapsepain">
                <div class="card card-body text-center mb-3">
                    Facto: No pain, no gain é um mito perigoso para iniciantes. O objetivo inicial é criar o hábito sem
                    ficar de cama no dia seguinte.
                </div>
            </div>
        </div>
    </section>
@endsection
