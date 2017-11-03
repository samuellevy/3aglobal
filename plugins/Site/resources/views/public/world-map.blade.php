<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>3AWorldwide</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ url('assets/images/favicon-16x16.png') }}" sizes="16x16">
        <link rel="icon" href="{{ url('assets/images/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" href="{{ url('assets/images/favicon-48x48.png') }}" sizes="48x48">
        <link rel="icon" href="{{ url('assets/images/favicon-192x192.png') }}" sizes="192x192">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/world-map.css') }}">
    </head>
    <body>
        <section class="mapa main-content content-white">
            <div class="container">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <ul class="lista-paises">
                        <li data-country="brasil">
                            <span>Brasil</span>
                        </li>
                        <li data-country="eua">
                            <span>Estados Unidos</span>
                        </li>
                        <li data-country="mexico">
                            <span>México</span>
                        </li>
                        <li data-country="espanha">
                            <span>Espanha</span>
                        </li>
                        <li data-country="alemanha">
                            <span>Alemanha</span>
                        </li>
                        <li data-country="argentina">
                            <span>Argentina</span>
                        </li>
                        <li data-country="chile">
                            <span>Chile</span>
                        </li>
                        <li data-country="chipre">
                            <span>Chipre</span>
                        </li>
                        <li data-country="colombia">
                            <span>Colômbia</span>
                        </li>
                        <li data-country="emirados">
                            <span>Emirados Árabes</span>
                        </li>
                        <li data-country="grecia">
                            <span>Grécia</span>
                        </li>
                        <li data-country="india">
                            <span>Índia</span>
                        </li>
                        <li data-country="italia">
                            <span>Itália</span>
                        </li>
                        <li data-country="marrocos">
                            <span>Marrocos</span>
                        </li>
                        <li data-country="mocambique">
                            <span>Moçambique</span>
                        </li>
                        <li data-country="panama">
                            <span>Panamá</span>
                        </li>
                        <li data-country="polonia">
                            <span>Polônia</span>
                        </li>
                        <li data-country="portugal">
                            <span>Portugal</span>
                        </li>
                        <li data-country="reino-unido">
                            <span>Reino Unido</span>
                        </li>
                        <li data-country="romenia">
                            <span>Romênia</span>
                        </li>
                        <li data-country="russia">
                            <span>Rússia</span>
                        </li>
                        <li data-country="suecia">
                            <span>Suécia</span>
                        </li>
                        <li data-country="suica">
                            <span>Suíça</span>
                        </li>
                    </ul>
                </div>
            </div>

            @include('public.map-partial')
        </section>

        <!-- Deferred JavaScript -->
        <script src="{{ url('assets/js/world-map.js') }}"></script>
    </body>
</html>
