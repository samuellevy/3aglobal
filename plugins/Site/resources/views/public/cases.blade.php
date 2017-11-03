@extends('layouts.public')

@section('title', 'Snapshots')
@section('name', 'Snapshots')
@section('description', 'A 3AWW é a agência de clientes que cruzaram barreiras e buscam novos desafios a todo momento. Estamos sempre inovando e comunicando mais.')
@section('image', url('assets/images/seo/clients.jpg'))

@section('main')
    <section class="banner-snapshots">
        <h2>snapshots</h2>
    </section>

    <div class="main-content content-white">
        <section class="snap-content">
            <div class="container">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="presentation-snap">
                        <p>
                            Quando se pensa sem barreiras, o resultado final se torna algo muito maior. Conheça alguns dos nossos cases que levam marcas além das fronteiras:
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="snapshots">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="action-aid">
                            <img src="{{ url('assets/images/home/02.jpg') }}" class="img-responsive case-action-img" alt="">
                            <div class="box-axul box-azul-action">
                                <img src="{{ url('assets/images/home/action-aid.png') }}" class="img-responsive" alt="">
                                <p>Responsabilidade social<br> e criatividade.</p>
                                <a href="https://www.youtube.com/watch?v=ccJjWtZcuow" class="button-youtube">Conheça</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="case-aacd">
                            <img src="{{ url('assets/images/home/01.jpg') }}" class="img-responsive case-aacd-img" alt="">
                            <div class="box-axul box-azul-aacd">
                                <img src="{{ url('assets/images/home/aacd.png') }}" class="img-responsive" alt="">
                                <p>Comunicação<br> que movimenta.</p>
                                <a href="assets/images/home/lightbox-aacd.jpg" class="button-case">Conheça</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="case-mundial">
                            <img src="{{ url('assets/images/home/case_mundial.jpg') }}" class="img-responsive case-mundial-img" alt="">
                            <div class="box-axul box-azul-mundial">
                                <img src="{{ url('assets/images/home/mundial.png') }}" class="img-responsive" alt="">
                                <p>Tradição, credibilidade<br> e ofertas imbatíveis.</p>
                                <a href="https://www.youtube.com/watch?v=0qLfHeO2sYA" class="button-youtube">Conheça</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="case-bandnews">
                            <img src="{{ url('assets/images/home/case_bandnews.jpg') }}" class="img-responsive case-bandnews-img" alt="">
                            <div class="box-axul box-azul-bandnews">
                                <img src="{{ url('assets/images/home/bandnews.png') }}" class="img-responsive" alt="">
                                <p>O público em foco na<br> comunicação do novo dial.</p>
                                <a href="assets/images/home/lightbox-bandnews.jpg" class="button-case">Conheça</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="case-lg">
                            <img src="{{ url('assets/images/home/case_lg.jpg') }}" class="img-responsive case-lg-img" alt="">
                            <div class="box-axul box-azul-lg">
                                <img src="{{ url('assets/images/home/lg.png') }}" class="img-responsive" alt="">
                                <p>Criatividade<br> beyond borders</p>
                                <a href="https://www.youtube.com/watch?v=uyVd_jRajfs" class="button-youtube">Conheça</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <a href="{{ url('clientes') }}" class="button-historias">Veja todos nossos clientes</a>
                </div>
            </div>
        </section>
    </div>


@stop
