@extends('layout.master')

@section('title')
    Perguntas Frequentes
@endsection

@section('moreCss')
    <link rel="stylesheet" href="{{ asset('css/faq.css') }}">
@endsection

@section('content')
    <section class="faq-page">
        <h1>Perguntas Frequentes</h1>
        <p class="faq-intro">Conhece a MoveTe e descobre como participar nas atividades ao ar livre.</p>

        <h2>O que é a MoveTe?</h2>
        <p>A MoveTe é uma associação sem fins lucrativos que combate o sedentarismo e promove o bem-estar da comunidade.</p>

        <h2>Que atividades organiza a MoveTe?</h2>
        <p>Organiza atividades desportivas ao ar livre, como caminhadas, corridas e treinos, para aproximar as pessoas através do desporto.</p>

        <h2>Quem pode participar?</h2>
        <p>As atividades são abertas ao público. A MoveTe dirige-se especialmente a iniciantes e a pessoas que querem deixar uma vida sedentária.</p>

        <h2>Tenho de ter experiência para participar?</h2>
        <p>Não é necessário ser atleta. A MoveTe promove a participação de iniciantes; consulta a informação de cada atividade para conhecer os detalhes.</p>

        <h2>Como são financiadas as atividades?</h2>
        <p>A MoveTe vende produtos através de um catálogo, e as vendas ajudam a suportar a organização dos eventos.</p>

        <h2>Que produtos posso encontrar no catálogo?</h2>
        <p>O catálogo inclui vestuário desportivo, acessórios de treino, produtos de nutrição e merchandising solidário.</p>
    </section>
@endsection
