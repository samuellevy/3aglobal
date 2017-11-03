
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">

  <title>3AWorldwide Brasil</title>

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="3AWorldwide Brasil">
  <meta property="og:description" content="A troca de inteligência faz a 3A WORLDWIDE ir além das fronteiras. Nossa equipe trabalha por resultados concretos e beleza. Assim funciona uma agência global.">
  <meta property="og:url" content="http://www.3aworldwide.com.br">
  <meta property="og:image" content="assets/images/seo/home.jpg">

  <!-- Schema -->
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "WebPage",
    "name": "3AWorldwide Brasil",
    "description": "A troca de inteligência faz a 3A WORLDWIDE ir além das fronteiras. Nossa equipe trabalha por resultados concretos e beleza. Assim funciona uma agência global.",
    "url": "http://www.3aworldwide.com.br",
    "image": "assets/images/seo/home.jpg"
  }
  </script>

  <!-- Viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Theme color -->
  <meta name="theme-color" content="#3864BA">

  <!-- Favicon -->
  <?= $this->Html->meta('icon', 'Site.images/favicon-16x16.png', ['sizes'=>'16x16']); ?>
  <?= $this->Html->meta('icon', 'Site.images/favicon-32x32.png', ['sizes'=>'32x32']); ?>
  <?= $this->Html->meta('icon', 'Site.images/favicon-48x48.png', ['sizes'=>'48x48']); ?>
  <?= $this->Html->meta('icon', 'Site.images/favicon-192x192.png', ['sizes'=>'192x192']); ?>

  <!-- CSS -->
  <?= $this->Html->css('Site.public.css'); ?>

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TF5CJB');</script>
<!-- End Google Tag Manager -->
</head>
<body data-api-base="">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TF5CJB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div class="logo-top">
      <a href="http://www.3aworldwide.com.br">
        <?= $this->Html->image('Site.../images/logo-3a-topo.png', ['class'=>'img-responsive', 'alt'=>'Logo da 3AWorldwide']);?>
      </a>
    </div>
    <div class="logo-top-mobile">
      <a href="http://www.3aworldwide.com.br">
        <?= $this->Html->image('Site.../images/logo-3a-topo-mobile.png', ['class'=>'img-responsive', 'alt'=>'Logo da 3AWorldwide']);?>
      </a>
    </div>
    <div class="menu">
      <ul class="idioma">
        <li class="idioma-ativo">
          <a href="">PT</a>
        </li>
        <li>
          <a href="">EN</a>
        </li>
        <li>
          <a href="">ES</a>
        </li>
      </ul>
      <a href="#" class="menu-button" data-effect="st-effect-7" title="Abrir menu">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </a>
      <a href="#" class="close-menu" title="Fechar menu"></a>
    </div>

    <div class="st-container">
      <?= $this->Element('navigation');?>
      <div class="l-wrapper">
        <section class="banner-presentation scroll">
          <div class="image-banner">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="content">
                    <div class="content-3a">
                      <div class="full-content">
                        <span class="line-text">brands <span class="blue-font">beyond</span> borders</span>
                        <span class="line-text-above">
                          Criamos estratégias de comunicação para o seu negócio, aplicando ferramentas globais <br>e utilizando inteligências locais para potencializar os resultados.
                        </span>
                      </div>

                    </div>
                  </div>
                  <div class='icon-scroll'></div>
                  <div class='icon-hand animated fadeInDown infinite'></div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="banners scroll">
          <!--<div class="item banner-1">
          <div class="container">
          <div class="content">
          <div class="row">
          <div class="content">
          <div class="content-3a">
          <div class="full-content">
          <span class="line-text"><span class="number">3</span>A WORLDWIDE</span>
          <span class="line-text">BRANDS BEYOND BORDERS</span>
        </div>

      </div>
    </div>
    <div class='icon-scroll'></div>
    <div class='icon-hand animated fadeInDown infinite'></div>
  </div>
</div>
</div>
</div>-->
<div class="item banner-2">
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="content">
          <div class="content-3a">
            <div class="full-content">
              <?= $this->Html->image('Site.../images/home/kantar-ibope.png', ['class'=>'img-responsive logo']);?>
              <span class="line-text"><span class="number">40</span>ª maior agência</span>
              <span class="line-text">do Brasil</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="item banner-3">
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="content">
          <div class="content-3a">
            <div class="full-content">
              <?= $this->Html->image('Site.../images/home/inc-300.png', ['class'=>'img-responsive logo']);?>
              <span class="line-text"><span class="number">175</span>ª empresa que</span>
              <span class="line-text">mais cresceu no mundo</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="item banner-1">
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="content">
          <div class="content-3a">
            <div class="full-content">
              <?= $this->Html->image('Site.../images/home/merca2.png', ['class'=>'img-responsive logo']);?>
              <span class="line-text">TOP <span class="number">5</span> melhores</span>
              <span class="line-text">agências de mídia</span>
              <span class="line-text">no méxico</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="adapt main-content content-white">
  <div class="container">
    <div class="estrategias">
      <h2 class="adopt-letreiro">
        <span>Adopt, Adapt, Apply_</span>
      </h2>
      <p>
        <span>Adotar a cultura do cliente, adaptar às suas necessidades de comunicação</span>
        <span>e aplicar entregando resultados que ultrapassem barreiras. Isso é ser 3A Worldwide.</span>
        <span>É nisso que acreditamos: construir marcas além das fronteiras.</span>
      </p>
      <a href="sobre" class="button-longe">Ir mais longe</a>
    </div>
  </div>
</section>

<section class="banner-snap">
  <h2>SNAPSHOTS</h2>
</section>

<section class="snapshots">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <div class="action-aid">

          <?= $this->Html->image('Site.../images/home/02.jpg', ['class'=>'img-responsive case-action-img']);?>
          <div class="box-axul box-azul-action">
            <?= $this->Html->image('Site.../images/home/action-aid.png', ['class'=>'img-responsive']);?>
            <p>Responsabilidade social<br> e criatividade.</p>
            <a href="https://www.youtube.com/watch?v=ccJjWtZcuow" class="button-youtube">Conheça</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <div class="case-aacd">
          <?= $this->Html->image('Site.../images/home/01.jpg', ['class'=>'img-responsive case-aacd-img']);?>
          <div class="box-axul box-azul-aacd">
            <?= $this->Html->image('Site.../images/home/aacd.png', ['class'=>'img-responsive']);?>
            <p>Comunicação<br> que movimenta.</p>
            <a href="assets/images/home/lightbox-aacd.jpg" class="button-case">Conheça</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <div class="case-mundial">
          <?= $this->Html->image('Site.../images/home/case_mundial.jpg', ['class'=>'img-responsive case-mundial-img']);?>
          <div class="box-axul box-azul-mundial">
            <?= $this->Html->image('Site.../images/home/mundial.png', ['class'=>'img-responsive']);?>
            <p>Tradição, credibilidade<br> e ofertas imbatíveis.</p>
            <a href="https://www.youtube.com/watch?v=0qLfHeO2sYA" class="button-youtube">Conheça</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
        <div class="case-bandnews">
          <?= $this->Html->image('Site.../images/home/case_bandnews.jpg', ['class'=>'img-responsive case-bandnews-img']);?>
          <div class="box-axul box-azul-bandnews">
            <?= $this->Html->image('Site.../images/home/bandnews.png', ['class'=>'img-responsive']);?>
            <p>O público em foco na<br> comunicação do novo dial.</p>
            <a href="assets/images/home/lightbox-bandnews.jpg" class="button-case">Conheça</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <a href="snapshots" class="button-historias">Conheça as histórias</a>
    </div>
  </div>
</section>
<section class="climatempo dark-content" id="clima">
  <div class="items-cidade">
    <div class="cidade rio-de-janeiro">
      <div class="container">
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
          <div class="uf">
            <span class="text-form">RJ</span>
            <svg viewBox="25 0 100 70" class="sigla-svg">
              <g>
                <defs>
                  <clipPath id="letter-r-mask">
                    <path d="M64.5,59.7l-9.1-17.5c-0.7,0.1-1.4,0.1-2.1,0.1c-1.8,0-2.9-0.1-4.6-0.1v17.6H36.1V6.5
                    c4.5-0.5,9.5-0.9,15.8-0.9c16.7,0,23.3,8,23.3,17.8c0,6.4-3.4,12.1-9.2,15.5l12.6,20.7H64.5z M53.4,16.8c-1.9,0-3.1,0.1-4.8,0.4
                    v14.8c1.6,0.1,2.5,0.2,4,0.2c5.9,0,9.7-2.9,9.7-8.3C62.3,19.4,58.7,16.8,53.4,16.8z"/>
                  </clipPath>
                </defs>
                <line class="letter letter--r" clip-path="url(#letter-r-mask)" x1="41.5" y1="59.7" x2="41.5" y2="4.3"/>
                <path class="letter letter--r" clip-path="url(#letter-r-mask)" fill="none" d="M42,9.8C79.5,6,77.6,41.9,41.8,38.4"/>
                <line class="letter letter--r" clip-path="url(#letter-r-mask)" x1="57.5" y1="37.4" x2="75.3" y2="67.3"/>
              </g>
              <g>
                <defs>
                  <clipPath id="letter-j-mask">
                    <path d="M116.4,41.2c0,11.8-5,19.4-19.2,19.4c-5.7,0-10-1.2-14.6-3.8l1.6-4.4l2.2-6c2.9,1.8,6.9,2.9,10.4,2.9
                    c5.1,0,7.2-3.1,7.2-9.1V6h12.4V41.2z"/>
                  </clipPath>
                </defs>
                <path class="letter letter--j" clip-path="url(#letter-j-mask)" fill="none" d="M110.3,4.3c0,0,0,19.5,0,39.2s-27.8,9-27.8,9"/>
              </g>
            </svg>
          </div>
          <div class="info">
            <div class="info-container">
              <span class="endereco">Rua São Bento, 9, 13º, 14º e Cob - Centro</span>
              <span class="tel-email">
                <span class="tel-left">
                  <span class="tel"><span class="ddd">+55 21</span> 2271.1700</span>
                </span>
                <span class="email-right">
                  <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
                </span>
              </span>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
          <canvas width="315" height="315" class="newClock" data-timezone="America/Sao_Paulo"></canvas>
          <div data-local="rj" class="weather js-weather"></div>
          <!--<a href="unidades" class="link-mundo">
          <span class="link-container">
          <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
        </span>
      </a>-->
    </div>
    <a href="unidades" class="link-mundo-mobile">
      <span class="link-container">
        <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
      </span>
    </a>
  </div>
</div>
<div class="cidade sao-paulo">
  <div class="container">
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <span class="uf">
        <span class="text-form">SP</span>
        <svg viewBox="25 0 100 70" class="sigla-svg">
          <g>
            <defs>
              <clipPath id="letter-p-mask">
                <path d="M97.4,43.3c-1.7,0-2.9-0.1-4.5-0.1v15.6H80.8V6.9C86.1,6.3,91,6.1,95.3,6.1c15.1,0,23.3,8.1,23.3,18.7
                C118.6,35.5,111.3,43.3,97.4,43.3z M97.4,17.4c-1.6,0-2.6,0.1-4.5,0.3v14.9c1.7,0.1,2.5,0.1,3.6,0.1c6.4,0,9.6-2.8,9.6-7.9
                C106.2,20.7,103.4,17.4,97.4,17.4z"/>
              </clipPath>
            </defs>

            <path class="letter letter--p" clip-path="url(#letter-p-mask)" fill="none" d="M87.5,10.2c37.5-3.8,35.6,32.1-0.2,28.6"/>
            <line class="letter letter--p" clip-path="url(#letter-p-mask)" x1="86.5" y1="62.3" x2="86.5" y2="5"/>c
          </g>
          <g>
            <defs>
              <clipPath id="letter-s-mask">
                <path d="M53.6,59.7c-5.9,0-13.1-2.4-17.6-5.4l3.4-11c4.2,3.1,9.7,5.1,14.6,5.1c4.3,0,5.9-2,5.9-4.6
                c0-2.7-1.4-4.6-9.4-7.8c-9.2-3.7-12.4-9.1-12.4-15.4c0-7.6,6.2-15.1,18.4-15.1c5.7,0,11.6,2,14.6,4.1l-3.1,10.9
                c-3-2.1-7.9-4.3-11.6-4.3c-4.4,0-6.2,2.1-6.2,4.2c0,3.4,2.6,4.6,9.2,7.4c9.8,4.1,12.7,8.9,12.7,15.6
                C72.3,51.7,66.2,59.7,53.6,59.7z"/>
              </clipPath>
            </defs>
            <path class="letter letter--s" fill="none" clip-path="url(#letter-s-mask)" d="M72.3,16.1c0,0-27.9-13.3-28.5,1.5S69.4,31,66.9,45.9s-32.3,3.6-32.3,3.6"/>
          </g>
        </svg>
      </span>
      <div class="info">
        <div class="info-container">
          <span class="endereco">Rua dos Pinheiros, 1060, 5º andar, Pinheiros</span>
          <span class="tel-email">
            <span class="tel-left">
              <span class="tel"><span class="ddd">+55 11</span> 2160.8220</span>
            </span>
            <span class="email-right">
              <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <!-- <div data-timezone="America/Sao_Paulo" class="clock js-clock"></div> -->
      <canvas width="315" height="315" class="newClock" data-timezone="America/Sao_Paulo"></canvas>
      <div data-local="sp" class="weather js-weather"></div>
      <!--<a href="unidades" class="link-mundo">
      <span class="link-container">
      <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
    </span>
  </a>-->
</div>
<a href="unidades" class="link-mundo-mobile">
  <span class="link-container">
    <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
  </span>
</a>
</div>
</div>
<div class="cidade belo-horizonte">
  <div class="container">
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <span class="uf">
        <span class="text-form">BH</span>
        <svg viewBox="25 0 110 70" class="sigla-svg bh-svg">
          <g>
            <defs>
              <clipPath id="letter-b-mask">
                <path d="M52.5,59.7c-4.6,0-10.6-0.4-15.8-1.1V6.8c3.8-0.6,10.5-1.2,14.8-1.2c15.4,0,23.2,6.9,23.2,14.2
                c0,5.6-3.1,9.3-9.1,11.8c7.2,2.2,10.6,6.4,10.6,12.4C76.2,52.4,68.4,59.7,52.5,59.7z M54.1,16.3c-2.2,0-3.8,0.2-5.6,0.5v11.1
                c1.4,0.1,2.3,0.2,4.6,0.2c5.9,0,8.9-2.2,8.9-6C62,18.9,59.3,16.3,54.1,16.3z M53.2,36.4c-1.9,0-3.4,0.1-4.6,0.2V49
                c1.7,0.1,2.7,0.2,5.1,0.2c6.2,0,9.2-2.4,9.2-6.4C62.9,38.8,59.7,36.4,53.2,36.4z"/>
              </clipPath>
            </defs>
            <path class="letter letter--b" clip-path="url(#letter-b-mask)" fill="none" d="M42.6,60c0-2.8,0.1-42.4,0-45.1C82.6,9,65,29.8,50.4,32.5c13-5.3,43,21.7-8,23.5"/>
          </g>
          <g>
            <defs>
              <clipPath id="letter-h-mask">
                <path d="M118.1,59.2V37.9H97.7v21.3H85.4v-53h12.3v20.8h20.4V6.1h12.3v53H118.1z"/>
              </clipPath>
            </defs>
            <line class="letter letter--h" x1="91.8" y1="5.6" x2="91.8" y2="58.1"/>
            <line class="letter letter--h" x1="91" y1="32.7" x2="125.6" y2="32.7"/>
            <line class="letter letter--h" x1="124.4" y1="5.5" x2="124.4" y2="58"/>
          </g>
        </svg>
      </span>
      <div class="info">
        <div class="info-container">
          <span class="endereco">Av. Olegario Maciel, 1755, Loja 1 - Lourdes</span>
          <span class="tel-email">
            <span class="tel-left">
              <span class="tel"><span class="ddd">+55 31</span> 2516.1818﻿</span>
            </span>
            <span class="email-right">
              <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <canvas width="315" height="315" class="newClock" data-timezone="America/Sao_Paulo"></canvas>
      <div data-local="bh" class="weather js-weather"></div>
      <!--<a href="unidades" class="link-mundo">
      <span class="link-container">
      <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
    </span>
  </a>-->
</div>
<a href="unidades" class="link-mundo-mobile">
  <span class="link-container">
    <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
  </span>
</a>
</div>
</div>
<div class="cidade goiania">
  <div class="container">
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <span class="uf">
        <span class="text-form">GO</span>
        <svg viewBox="25 0 120 70" class="sigla-svg goiania-svg">
          <g>
            <defs>
              <clipPath id="letter-g-mask">
                <path d="M83.3,29.3v24.8c-5.7,3.3-11.8,5.2-19.7,5.2c-15.2,0-27.3-10.9-27.3-26.8c0-15.9,12.2-26.9,27.9-26.9
                c6.8,0,12.3,1.8,17.4,4.5l-5,9.7C73,18,69,17,65,17c-10.3,0-15.9,6.4-15.9,15.6c0,9.9,6.7,16.1,15.2,16.1c3.8,0,5.7-0.4,7.7-1.4
                v-7.7H61.6V29.3H83.3z"/>
              </clipPath>
            </defs>
            <path class="letter letter--g" clip-path="url(#letter-g-mask)" fill="none" d="M82.8,17.1C73.5,9,40.1,5.9,42,34.1s35.8,17.1,35.8,17.1l-0.4-17.1H59.8"/>
          </g>
          <g>
            <defs>
              <clipPath id="letter-o-mask">
                <path d="M117.6,59.4c-16.1,0-26.4-11.5-26.4-26.8c0-15.3,10.8-26.9,26.9-26.9c16,0,26.4,11.5,26.4,26.9
                C144.5,47.8,133.6,59.4,117.6,59.4z M117.8,16.5c-8.2,0-13.7,6.7-13.7,16.1c0,9.3,5.5,16.1,13.7,16.1c8.2,0,13.7-6.8,13.7-16.1
                C131.6,23.2,126,16.5,117.8,16.5z"/>
              </clipPath>
            </defs>

            <path class="letter letter--o" clip-path="url(#letter-o-mask)" fill="none" d="M117.8,10.9c0,0-21.1-1.9-21.1,20.9c0,11.4,4.1,23.5,21.1,23.5S140,36.3,140,32.5
            c-1.3-21.7-22.8-21.7-22.8-21.7"/>
          </g>
        </svg>
      </span>
      <div class="info">
        <div class="info-container">
          <span class="endereco">Av. Dep. Jamel Cecílio, 2496, Sala 86A - Jardim Goiás</span>
          <span class="tel-email">
            <span class="tel-left">
              <span class="tel"><span class="ddd">+55 62</span> 3624.9340</span>
            </span>
            <span class="email-right">
              <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <canvas width="315" height="315" class="newClock" data-timezone="America/Sao_Paulo"></canvas>
      <div data-local="go" class="weather js-weather"></div>
      <!--<a href="unidades" class="link-mundo">
      <span class="link-container">
      <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
    </span>
  </a>-->
</div>
<a href="unidades" class="link-mundo-mobile">
  <span class="link-container">
    <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
  </span>
</a>
</div>
</div>
<div class="cidade miami">
  <div class="container">
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <span class="uf">
        <span class="text-form">MIA</span>
        <svg viewBox="25 0 150 70" class="sigla-svg miami-svg">
          <g>
            <defs>
              <clipPath id="letter-m-mask">
                <path d="M80,59.5l-0.7-26.2L64.6,52h-1.3L48.4,33.3l-0.5,26.2H36l2.5-53.6l1.7-0.1l24.1,30.5L87.8,5.7l1.7,0.1
                L92,59.5H80z"/>
              </clipPath>
            </defs>
            <polyline class="letter letter--m" clip-path="url(#letter-m-mask)" fill="none" points="40.8,61.8 43.5,17.5 64,45.2 85.5,17.5 86.7,63.3   "/>
          </g>
          <g>
            <defs>
              <clipPath id="letter-i-mask">
                <path d="M103.3,59.5V6.2h12.4v53.3H103.3z"/>
              </clipPath>
            </defs>
            <line class="letter letter--i" clip-path="url(#letter-i-mask)" fill="none" x1="108.2" y1="3.5" x2="109.5" y2="62.5"/>
          </g>
          <g>
            <defs>
              <clipPath id="letter-a-mask">
                <path d="M160.1,59.5l-4-9.7h-18.4l-4,9.7h-12.6l25.1-53.7h1.7l25.1,53.7H160.1z M146.9,27.6l-5.3,12.8h10.5
                L146.9,27.6z"/>
              </clipPath>
            </defs>
            <polyline class="letter letter--a" clip-path="url(#letter-a-mask)" fill="none" points="126.5,62.3 147,14.8 169,62.3  "/>
            <line class="letter letter--a" clip-path="url(#letter-a-mask)" fill="none" x1="135.7" y1="45" x2="159" y2="45"/>
          </g>
        </svg>
      </span>
      <div class="info">
        <div class="info-container">
          <span class="endereco">2937 SW 27th Avenue, Suite 207 - Florida/USA</span>
          <span class="tel-email">
            <span class="tel-left">
              <span class="tel"><span class="ddd">+1 786</span> 329.7153</span>
            </span>
            <span class="email-right">
              <a href="mailto:3a@3aworldwide.com.br" class="email">e-mail <i class="fa fa-share" aria-hidden="true"></i></a>
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
      <canvas width="315" height="315" class="newClock" data-timezone="America/New_York"></canvas>
      <div data-local="mia" class="weather js-weather"></div>
      <!--<a href="unidades" class="link-mundo">
      <span class="link-container">
      <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
    </span>
  </a>-->
</div>
<a href="unidades" class="link-mundo-mobile">
  <span class="link-container">
    <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
  </span>
</a>
</div>
</div>
</div>

<div class="menu-cidades">
  <div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
      <ul class="lista-cidades">
        <li>
          <span>Rio de Janeiro</span>
        </li>
        <li>
          <span>São Paulo</span>
        </li>
        <li>
          <span>Belo Horizonte</span>
        </li>
        <li>
          <span>Goiânia</span>
        </li>
        <li>
          <span>Miami</span>
        </li>
      </ul>
    </div>
  </div>
</div>
</section>

<section class="button-world">
  <div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
      <a href="unidades" class="link-mundo">
        <span class="link-container">
          <span class="texto-mundo"><span class="number">3</span>A Worldwide pelo mundo</span> <span class="plus"></span>
        </span>
      </a>
    </div>
  </div>
</section>

<section class="blog-site">
  <h2 class="title-weekly"><span class="number">3</span>a weekly</h2>
  <div class="container">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 line-items line-items-home">
      <a href="blog/campanhas/3a-worldwide-divulga-novo-dial-da-bandnews-rio" class="item-blog">
        <span class="categoria-blog campanhas">Campanhas</span>
        <div class="imagem-destaque">
          <?= $this->Html->image('Site.../content/231x169/Sij4GE5i7wYZck0T.jpg');?>
        </div>
        <div class="description">
          <h2>3A Worldwide divulga novo dial da BandNews Rio</h2>
          <p>A 3A Worldwide foi convidada pelo Grupo Bandeirantes para assinar a campanha, da&hellip;</p>
        </div>
        <span class="autor-data">10/07/2017 por 3AWW</span>
      </a>
      <a href="blog/campanhas/radio-alpha-chega-ao-rio-de-janeiro-com-campanha-da-3a-worldwide" class="item-blog">
        <span class="categoria-blog campanhas">Campanhas</span>
        <div class="imagem-destaque">
          <?= $this->Html->image('Site.../content/231x169/qZQENCc2imoRBLuZ.jpg');?>
        </div>
        <div class="description">
          <h2>R&aacute;dio Alpha chega ao Rio de Janeiro com campanha da 3A Worldwide</h2>
          <p>A&nbsp;3A Worldwide&nbsp;foi escolhida para divulgar a chegada da&nbsp;r&aacute;dio Alpha&nbsp;ao Rio&hellip;</p>
        </div>
        <span class="autor-data">10/07/2017 por 3AWW</span>
      </a>
      <a href="blog/insights/uma-campanha-local-para-cada-midia" class="item-blog">
        <span class="categoria-blog insights">Insights</span>
        <div class="imagem-destaque">
          <?= $this->Html->image('Site.../content/231x169/DduUrOSpprNTTUP5.jpg');?>
        </div>
        <div class="description">
          <h2>Uma campanha &ldquo;local&rdquo; para cada m&iacute;dia</h2>
          <p>Seguindo o conceito &ldquo;Brand Beyond Borders&rdquo;, a 3A Worldwide est&aacute; veiculando&hellip;</p>
        </div>
        <span class="autor-data">10/07/2017 por 3AWW</span>
      </a>
      <a href="blog/noticias/aacd-entra-para-a-carteira-de-clientes-da-3a-worldwide" class="item-blog">
        <span class="categoria-blog noticias">Not&iacute;cias</span>
        <div class="imagem-destaque">
          <?= $this->Html->image('Site.../content/231x169/Nr0kRHmQMGqGLCNn.jpg');?>
        </div>
        <div class="description">
          <h2>AACD entra para a carteira de clientes da 3A Worldwide</h2>
          <p>A 3A Worldwide passa a fazer parte do pool de ag&ecirc;ncias parceiras da&nbsp;AACD -Asso&hellip;</p>
        </div>
        <span class="autor-data">10/07/2017 por 3AWW</span>
      </a>
    </div>
    <div class="footer-home">
      <span class="brands-home">brands beyond borders</span>
      <ul class="social">
        <li>
          <a href="https://www.facebook.com/3AWWbr/" target="_blank" rel="noopener" aria-label="Facebook">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/user/GrupoUnlike" target="_blank" rel="noopener" aria-label="YouTube">
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/3aww-brasil" target="_blank" rel="noopener" aria-label="LinkedIn">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="https://twitter.com/3awwbr" target="_blank" rel="noopener" aria-label="Twitter">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
      <span class="copyright-home">COPYRIGHT © <span class="number">2017</span> - <span class="number">3</span>A WORLDWIDE</span>
    </div>
  </div>
</section>


</div> <?//final content?>
</div>

<!-- Deferred JavaScript -->
<?= $this->Html->script('Site.public.js'); ?>

</body>
</html>
