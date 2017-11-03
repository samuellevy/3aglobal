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
        <link rel="stylesheet" href="{{ url('assets/css/auth.css') }}">

        <!-- Prefetch resources -->
        <link rel="prefetch" href="{{ url('assets/css/admin.css') }}">
        <link rel="prefetch" href="{{ url('assets/js/admin.js') }}">
    </head>
    <body data-api-base="{{ url('/') . '/' }}">
        <main>
            <header class="container-fluid text-center">
                <img src="{{ url('assets/images/logo-3aw.jpg') }}" alt="3AWorldwide Brasil" width="308" height="35" class="logo">
            </header>

            @yield('main')
        </main>

        <!-- Deferred JavaScript -->
        <script src="{{ url('assets/js/auth.js') }}"></script>
    </body>
</html>
