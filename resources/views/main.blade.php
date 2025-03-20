<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Importando estilos e scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <!-- Cabeçalho -->
        <header>
            <div class="container">

                <!-- Logo -->
                <div class="logo">
                    <a href="#">
                        <img src="{{ asset('asset/images/log-white.png.png') }}" alt="Logo" class="w-28 h-auto">
                    </a>
                </div>

                <!-- Navegação -->
                <nav>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('dashboard') }}">Entrar</a></li>
                        <li><a href="{{ route('cadastro') }}">Cadastre-se</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Conteúdo dinâmico -->
        <main>
            @yield('content')
        </main>

        <!-- Rodapé -->
        <footer>
            <p >&copy; 2025 Sua Empresa. Todos os direitos reservados.</p>
        </footer>
    </body>
</html>
