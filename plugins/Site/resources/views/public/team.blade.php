@extends('layouts.public')

@section('title', 'Quem faz')
@section('name', 'Quem faz')
@section('description', 'Uma agência é, antes de mais nada, feita de pessoas. Para alcançar os melhores resultados, temos uma equipe qualificada e focada em implementar nossos valores no dia a dia. Conheça essas pessoas que levam marcas além das fronteiras.')
@section('image', url('assets/images/seo/units.jpg'))

@section('main')
    <section class="banner-team">
        <h2>quem faz</h2>
    </section>

    <section class="main-content content-white">
        <div class="container no-padding">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <p class="texto-introducao">
                    Uma agência é, antes de mais nada, feita de pessoas. Para alcançar os melhores resultados, temos uma equipe qualificada e focada em implementar nossos valores no dia a dia. Conheça essas pessoas que levam marcas além das fronteiras.
                </p>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 no-padding">
                <div class="team-member">
                    <img src="assets/images/team/antonio.jpg" alt="">
                    <div class="mask-hover">
                        <div class="content-member">
                            <span class="nome-cargo">
                                <strong>Antônio Frota</strong>
                                Presidente for South America
                            </span>
                            <span class="line-linkedin"></span>
                            <a href="https://www.linkedin.com/in/ant%C3%B4nio-luiz-frota-621902a0/" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 no-padding">
                <div class="team-member">
                    <img src="assets/images/team/marcius.jpg" alt="">
                    <div class="mask-hover">
                        <div class="content-member">
                            <span class="nome-cargo">
                                <strong>Marcius Lee</strong>
                                CEO Brasil
                            </span>
                            <span class="line-linkedin"></span>
                            <a href="https://www.linkedin.com/in/marcius-lee-61764321/" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 no-padding">
                <div class="team-member">
                    <img src="assets/images/team/roberto.jpg" alt="">
                    <div class="mask-hover">
                        <div class="content-member">
                            <span class="nome-cargo">
                                <strong>Roberto Amarante</strong>
                                President of Global Board Directors
                            </span>
                            <span class="line-linkedin"></span>
                            <a href="https://www.linkedin.com/in/roberto-de-amarante-2b5909a0/" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 no-padding">
                <div class="team-member">
                    <img src="assets/images/team/audrey.jpg" alt="">
                    <div class="mask-hover">
                        <div class="content-member">
                            <span class="nome-cargo">
                                <strong>Audrey Aarão</strong>
                                VP
                            </span>
                            <span class="line-linkedin"></span>
                            <a href="https://www.linkedin.com/in/audrey-aar%C3%A3o-133a50a0/" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12 no-padding">
                <div class="team-member">
                    <img src="assets/images/team/henrique.jpg" alt="">
                    <div class="mask-hover">
                        <div class="content-member">
                            <span class="nome-cargo">
                                <strong>Henrique Carvalho</strong>
                                VP de Criação
                            </span>
                            <span class="line-linkedin"></span>
                            <a href="https://www.linkedin.com/in/henrique-carvalho-90b5ab22/" class="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 no-padding">
                <a href="{{ url('snapshots') }}" class="button-team">Conheça nossos trabalhos</a>
            </div>
        </div>
    </section>
@stop
