<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- js e css -->
        <script src="/js/script.js"></script>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <nav class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/imagens/logo.png" alt="Vasconcelos Eventos">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a href="/eventos/criar" class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/contato" class="nav-link">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                </nav>
            </nav>
        </header>
        @if(session('msg_criado'))
            <p class="msg">{{session('msg_criado')}}</p>
        @endif
        @yield('conteudo')
    </body>
    <footer>
        <p>Vasconcelos Eventos</p>
    </footer>
</html>
