@extends('layout.master')

@section('title')
    Segurança e Regulamento
@endsection

@section('moreCss')
    <link rel="stylesheet" href="{{ asset('css/regulationsSafety.css') }}">
@endsection

@section('content')
    <img src="{{ asset('img/regulationsSafety/banner.jpg') }}" class="banner" alt="banner">
    <div class="banner_text">
        <h1>Segurança e Regulamento </h1>
        <div class="text">
            <p>Consulta as regras de participação,
                as condições de segurança e
                as informações importantes antes de participares num dos nossos eventos.</p>
        </div>
    </div>

    <div class="d-flex align-items-center gap-2 mt-4 ms-lg-5">
        <img src="{{ asset('img/regulationsSafety/regulamento.png') }}" class="icons" alt="icons">
        <h2 class="fw-bold mb-0">Regulamento dos Eventos</h2>
    </div>

    <div class="descricao">
        <div class="paragrafo1 mt-3">
            <p>Garante uma participação informada, segura e responsável.</p>
        </div>
        <p>Consulta todas as diretrizes oficiais que regem os nossos eventos.</p>

        <div class="subtitulo mt-3">
            <p>Regras de inscrição e participação</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Idades e Requisitos:</strong>A participação está aberta a todas as idades, sendo obrigatória uma
                autorização parental por escrito para menores de 18 anos.
            </li>
            <li class="mb-2">
                <strong>Dorsal e Identificação:</strong>O dorsal de participante é pessoal, intransmissível e tem de estar
                sempre visível na parte frontal da camisola ao longo de todo o percurso.
            </li>
        </ul>

        <div class="subtitulo mt-3">
            <p>Desistências e cancelamentos</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Cedência de Vaga:</strong>É permitida a transferência de inscrição para outro participante até 72
                horas antes do evento, mediante aviso prévio por email à organização.
            </li>
            <li class="mb-2">
                <strong>Condições Adversas:</strong>Em caso de força maior ou alerta meteorológico emitido pela Proteção
                Civil que impeça a realização segura da prova, o evento será reagendado para nova data.
            </li>
        </ul>

        <div class="subtitulo mt-3">
            <p>Comportamentos permitidos e proibidos</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Respeito</strong>Exige-se conduta cordial para com os restantes atletas, voluntários, elementos da
                organização e autoridades no terreno.
            </li>
            <li class="mb-2">
                <strong>Cuidado com a Natureza:</strong>Política de desperdício zero. É estritamente proibido deitar lixo no
                chão; todos os resíduos devem ser transportados até aos pontos de abastecimento ou depositados nos
                contentores da meta.
        </ul>

        <div class="subtitulo mt-3">
            <p>Regras específicas de cada modalidade</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Caminhadas de Montanha / Natureza:</strong>Obrigatório calçado desportivo adequado com aderência
                (trail) e reserva mínima de água individual (mínimo de 0,5L).
            </li>
            <li class="mb-2">
                <strong>Percursos Marcados:</strong>O trajeto encontra-se balizado por fitas e placas sinaléticas oficiais
                da MoveTe. Qualquer desvio deliberado do trilho assinalado acarreta desclassificação imediata.
        </ul>
    </div>

    <div class="d-flex align-items-center gap-2 mt-4 ms-lg-5">
        <img src="{{ asset('img/regulationsSafety/seguranca.png') }}" class="icons" alt="icons">
        <h2 class="fw-bold mb-0">Segurança dos Participantes</h2>
    </div>

    <div class="descricao">
        <div class="paragrafo1 mt-3">
            <p>A tua integridade física vem sempre em primeiro lugar.</p>
        </div>
        <p>Seguimos protocolos rigorosos no terreno para que possas desfrutar de cada desafio com total tranquilidade.</p>

        <div class="subtitulo mt-3">
            <p>Apoio e Presença no Terreno</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Equipa no Percurso:</strong>Contamos com elementos da organização e voluntários distribuídos por
                pontos estratégicos, prontos a ajudar e a orientar em qualquer momento.
            </li>
            <li class="mb-2">
                <strong>Batedores e Fim de Prova:</strong>Elementos abrem o caminho a verificar o estado do piso e uma
                equipa fecha o evento, garantindo que ninguém fica para trás ou sozinho no trajeto
            </li>
        </ul>

        <div class="subtitulo mt-3">
            <p>Marcação e Controlo de Percursos</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Sinalização Visível:</strong>Todos os percursos têm marcações claras com fitas refletoras, placas
                direcionais e setas no chão nas mudanças de direção.
            </li>
            <li class="mb-2">
                <strong>Checkpoints:</strong>Existem postos de controlo obrigatórios ao longo do percurso para registar a
                passagem de todos os participantes e assegurar que ninguém se perde.
        </ul>

        <div class="subtitulo mt-3">
            <p>Avaliação Meteorológica e Condições Naturais</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Monitorização em Tempo Real:</strong>Acompanhamos as previsões do tempo antes e durante o evento
                (temperatura, vento, chuva ou risco de trovoada).
            </li>
            <li class="mb-2">
                <strong>Adaptação do Trajeto:</strong>Se houver troços perigosos devido a lama, piso escorregadio ou quedas
                de pedras, o percurso pode ser encurtado ou desviado para garantir a segurança de todos.
        </ul>

        <div class="subtitulo mt-3">
            <p>Como Agir em Caso de Acidente ou Emergência</p>
        </div>
        <ul>
            <li class="mb-2">
                <strong>Número de Emergência:</strong>Grava o contacto direto da organização no telemóvel antes de arrancar
                (disponível na linha de partida).
            </li>
            <li class="mb-2">
                <strong>Sinalizar a Posição:</strong>Em caso de queda ou lesão tua ou de outro atleta, não saias do trilho
                marcado. Mantém a calma, liga para a organização e aguarda no local até à chegada da equipa de apoio.
        </ul>
    </div>
@endsection
