@extends('layouts.public')

@section('title', 'Way of work')
@section('name', 'Way of work')
@section('description', 'Somos parceiros de nossos clientes na busca do sucesso e, para isso, adotamos suas verdades como se fossem nossas, adaptamos a estratégia para o mercado global.')
@section('image', url('assets/images/seo/clients.jpg'))

@section('main')
    <section class="banner banner-work">
        <h2><span class="number">3</span>a way of work</h2>
    </section>

    <section class="main-content content-white">
        <div class="container">
            <p class="work-text">
                Uma agência que leva marcas além das fronteiras pensa sem barreiras. E assim nos tornamos uma das maiores agências do país em criatividade de resultado: vamos além 
                da barreira de formatos, disciplinas, do básico.
                Somos parceiros de nossos clientes na busca do sucesso e, para isso, adotamos suas verdades como se fossem nossas, adaptamos a estratégia para o mercado global. 
            </p>
            <img src="assets/images/DoubleDiamond.jpg" alt="" class="img-responsive double-diamond">
            <a href="{{ url('snapshots') }}" class="button-trabalhos">Conheça nossos trabalhos</a>
        </div>
    </section>
@stop
