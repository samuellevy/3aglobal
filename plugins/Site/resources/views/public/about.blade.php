@extends('layouts.public')

@section('title', 'Sobre')
@section('name', 'Sobre')
@section('description', 'Somos 35º agência do país em criatividade de resultados. Estamos prontos para levar a sua marca além das fronteiras. Presente no Brasil e em mais de 28 países.')
@section('image', url('assets/images/seo/about.jpg'))

@section('main')
    <section class="banner-about">
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="content-3a">
                        <span class="line-text-about">brands <span class="blue-font">beyond</span> borders</span>
                        <span class="line-text-above">
                            Ser reconhecida internacionalmente como uma das melhores agências para <br>
                            o desenvolvimento de soluções criativas de resultado global. Isso é a 3A Worldwide.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="presentation main-content content-white">
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <p>
                    Ir além das fronteiras não é sobre limites geográficos, mas sobre ultrapassar nosso pensamento. Quando quebramos as barreiras do óbvio, desconstruimos antigos conceitos e utilizamos a força da criatividade e da estratégia para recriá-los em um mundo que pede novas ideias. 
                </p>
                <p>
                    Somos globais e celebramos as diferenças, damos valor a empatia e, acima de tudo, aprendemos a unificar e a disseminar uma boa ideia mesmo quando não estamos no mesmo estado, ou país. Sabemos e acreditamos na importância de criar globalmente e aplicar localmente.
                </p>
                <p>
                    É justamente por conhecer as fronteiras, que agora nós podemos atravessá-las. Somos a 3A Worldwide. 
                </p>
            </div>
        </div>
    </section>

    <div class="parallax-animate">
        <img src="assets/images/sobre/fronteiras.png" alt="" class="img-responsive">
    </div>

    <div class="container">
        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
            <ul class="lista-fronteiras">
                <li>Publicidade</li>
                <li>Assessoria de imprensa</li>
                <li>Digital</li>
                <li>BTL Endomkt</li>
                <li>Tec Lab</li>
                <li>Consultoria</li>
                <li>Eventos Promoção</li>
            </ul>
        </div>
    </div>
    

    <!--<section class="fronteiras f-about">
        <div class="container">
            <ul class="lista-servicos">
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <h2>Publicidade</h2>
                    <img src="assets/images/sobre/icon-pub.png" class="img-responsive" alt="">
                </li>
                <li class="wow fadeInUp list-right" data-wow-duration="1s" data-wow-delay="1s">
                    <h2>Assessoria<br> de Imprensa</h2>
                    <img src="assets/images/sobre/icon-asses.png" class="img-responsive" alt="">
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                    <h2>Digital</h2>
                    <img src="assets/images/sobre/icon-dig.png" class="img-responsive" alt="">
                </li>
                <li class="wow fadeInUp list-right" data-wow-duration="1s" data-wow-delay="2s">
                    <h2>Btl<br> Endomkt</h2>
                    <img src="assets/images/sobre/icon-end.png" class="img-responsive" alt="">
                </li>
            </ul>
            <ul class="lista-servicos">
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2.5s">
                    <h2>Tec Lab</h2>
                    <img src="assets/images/sobre/icon-lab.png" class="img-responsive" alt="">
                </li>
                <li class="wow fadeInUp list-right" data-wow-duration="1s" data-wow-delay="3s">
                    <h2>Consultoria</h2>
                    <img src="assets/images/sobre/icon-consult.png" class="img-responsive" alt="">
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="3.1s">
                    <h2>Eventos<br> Promoção</h2>
                    <img src="assets/images/sobre/icon-eventos.png" class="img-responsive" alt="">
                </li>
            </ul>
        </div>
    </section>-->
@stop
