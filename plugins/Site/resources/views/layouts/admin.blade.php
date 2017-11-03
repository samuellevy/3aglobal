<!DOCTYPE html>

<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="robots" content="noindex">

        <!-- Description -->
        <title>@yield('title') &lsaquo; Área de Administração</title>

        <!-- Favicon -->
        <link rel="icon" href="{{ url('assets/images/favicon-16x16.png') }}" sizes="16x16">
        <link rel="icon" href="{{ url('assets/images/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" href="{{ url('assets/images/favicon-48x48.png') }}" sizes="48x48">
        <link rel="icon" href="{{ url('assets/images/favicon-192x192.png') }}" sizes="192x192">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ url('assets/css/admin.css') }}">
    </head>
    <body data-api-base="{{ url('admin') . '/' }}">
        <div class="wrapper">
            <header class="container-fluid">
                <div class="clearfix">
                    <div class="pull-left">
                        <a href="{{ url('/') }}">
                            <img src="{{ url('assets/images/logo-3aw.jpg') }}" alt="3AWorldwide Brasil" width="308" height="35" class="logo">
                        </a>
                    </div>
                    <div class="pull-right clearfix">
                        <div class="pull-left user">
                            Olá, <a href="{{ url('admin/usuarios/' . Auth::user()->id . '/editar') }}">{{ !empty(Auth::user()->name) ? Auth::user()->name : Auth::user()->username }}</a>!
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('admin/sair') }}" class="logout">Sair</a>
                        </div>
                    </div>
                </div>
            </header>

            <aside>
                <nav>
                    <ul>
                        @can('is-admin', Auth::user())
                        <li @if (Request::is('admin/midia', 'admin/midia/*')) class="active" @endif><a href="{{ url('admin/midia') }}">Mídia</a></li>
                        <li @if (Request::is('admin/posts', 'admin/posts/*')) class="active" @endif><a href="{{ url('admin/posts') }}">Posts</a></li>
                        @endcan
                        @can('is-rh', Auth::user())
                        <li @if (Request::is('admin/contatos', 'admin/contatos/*')) class="active" @endif><a href="{{ url('admin/contatos') }}">Contatos</a></li>
                        @endcan
                        @can('is-admin', Auth::user())
                        <li @if (Request::is('admin/usuarios', 'admin/usuarios/*')) class="active" @endif><a href="{{ url('admin/usuarios') }}">Usuários</a></li>
                        @endcan
                    </ul>
                </nav>
            </aside>

            <main>
                @yield('main')
            </main>
        </div>

        <footer>Desenvolvido pela <img src="{{ url('assets/images/logo-3aworldwide.png') }}" alt="3AWorldwide" class="logo"></footer>

        <!-- Deferred JavaScript -->
        <script src="{{ url('assets/js/admin.js') }}"></script>
    </body>
</html>
