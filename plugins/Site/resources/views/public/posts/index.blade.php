@extends('layouts.public')

@section('title', 'Blog')
@section('name', 'Blog')
@section('description', 'Somos 35º agência do país em criatividade de resultados. Estamos prontos para levar a sua marca além das fronteiras. Presente no Brasil e em mais de 28 países.')
@section('image', url('images/banners-internos/blog-interna.jpg'))

@section('main')
    <script id="blog-results" type="text/x-handlebars-template">
        @{{#each results}}
        <a href="{{ url('blog') }}/@{{category.slug}}/@{{slug}}" class="item-blog">
            <span class="categoria-blog @{{category.slug}}">@{{category.name}}</span>
            <div class="imagem-destaque">
                <img src="{{ url('content') }}/@{{image.file_path}}231x169/@{{image.file_name}}" alt="@{{image.alternative_text}}">
            </div>
            <div class="description">
                <h2>@{{title}}</h2>
                <p>@{{description}}</p>
            </div>
            <span class="autor-data">@{{published_in.dd_mm_yyyy}} por 3AWW</span>
        </a>
        @{{/each}}
    </script>

    <script id="blog-search-results" type="text/x-handlebars-template">
        @{{#each results}}
        <a href="{{ url('blog') }}/@{{category.slug}}/@{{slug}}" class="link-noticia">
            <span class="categoria-blog @{{category.slug}}">@{{category.name}}</span>
            <span class="titulo-blog">@{{title}}</span>
        </a>
        @{{/each}}
    </script>

    <div class="container">
        <div class="search mfp-hide" id="search">
            <div class="search-container">
                <form action="{{ url('blog/busca') }}" method="GET" class="js-ajax-search">
                    <div class="field-search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        <input type="text" name="q" class="js-ajax-search-field" placeholder="O que está procurando?" autocomplete="off">
                        <a href="#" class="clean-search">X</a>
                    </div>
                </form>
                <p class="mensagem-resultado">Sem resultados</p>
            </div>
            <div class="resultado-pesquisa"></div>
        </div>
    </div>

    <section class="banner-blog">
        <h2>{{ count($category) > 0 ? $category->name : 'Blog' }}</h2>
        <div class="container">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <ul class="blog-tags">
                    <li>
                        <a href="{{ url('blog/noticias') }}">NOTÍCIAS</a>
                    </li>
                    <li>
                        <a href="{{ url('blog/campanhas') }}">CAMPANHAS</a>
                    </li>
                    <li>
                        <a href="{{ url('blog/midia') }}">MÍDIA</a>
                    </li>
                    <li>
                        <a href="{{ url('blog/teclab') }}">TECLAB</a>
                    </li>
                    <li>
                        <a href="{{ url('blog/insights') }}">INSIGHTS</a>
                    </li>
                    <li>
                        <a href="#search" class="button-search"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="lista-blog main-content content-white">
        <div class="blog-line-1">
            <div class="container">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 line-items">
                    @foreach ($posts as $post)
                    <a href="{{ url('blog/' . $post->category->slug . '/' . $post->slug) }}" class="item-blog">
                        <span class="categoria-blog {{ $post->category->slug }}">{{ $post->category->name }}</span>
                        <div class="imagem-destaque">
                            <img src="{{ $post->image->url('231x169') }}" alt="{{ $post->image->alternative_text }}">
                        </div>
                        <div class="description">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->description }}</p>
                        </div>
                        <span class="autor-data">{{ $post->published_in->format('d/m/Y') }} por 3AWW</span>
                    </a>
                    @endforeach
                </div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 line-items-load"></div>
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <a href="#" class="load-more js-load-more" data-template="#blog-results" data-page="2" data-results-per-page="4" data-container=".line-items-load" @if ($page === 0) style="display: none" disabled @endif>Carregar Mais</a>
                </div>
            </div>
        </div>
    </section>
@stop
