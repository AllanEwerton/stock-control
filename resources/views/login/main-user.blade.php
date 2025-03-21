<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Painel Admin')</title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Overlay para mobile -->
        <div id="overlay" class="fixed inset-0 bg-black/50 hidden md:hidden transition-opacity" onclick="toggleMenu()"></div>

        <!-- Sidebar -->
        <aside id="sidebar" class="w-64 bg-gray-950 shadow-lg fixed md:relative md:translate-x-0 -translate-x-full h-full transition-transform duration-300 z-50">
            <div class="p-4 text-center border-b">
                <h1 class="text-xl font-bold text-gray-200">Painel Admin</h1>
            </div>
            <nav class="p-4">
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('dashboard') }}" class="flex items-center p-3 text-gray-200 rounded-lg hover:bg-blue-100">📈 <span class="ml-3">Central</span></a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('categorias') }}" class="flex items-center p-3 text-gray-200 rounded-lg hover:bg-blue-100">🗂️ <span class="ml-3">Categoria</span></a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('produtos') }}" class="flex items-center p-3 text-gray-200 rounded-lg hover:bg-blue-100">📦 <span class="ml-3">Produtos</span></a>
                    </li>
                    <li class="mb-2">
                        <a href="#" class="flex items-center p-3 text-gray-200 rounded-lg hover:bg-blue-100">⚙️ <span class="ml-3">Configurações</span></a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" class="flex items-center p-3 text-red-600 rounded-lg hover:bg-red-100">🚪 <span class="ml-3">Sair</span></a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Área principal -->
        <main class="flex-1 flex flex-col">
            <!-- Cabeçalho -->
            <header class="flex justify-between items-center p-6 bg-gray-950 text-white shadow-md">
                <!-- Botão de menu mobile -->
                <button class="md:hidden text-white" onclick="toggleMenu()">☰</button>
                <h2 class="text-xl font-semibold">@yield('painel')</h2>
                 <a href="">
                    <div class="flex items-center">
                    <span class="mr-3">Olá, {{
                        auth()->user()->name
                    }}</span>

                    <img src="{{ asset('asset/images/log-white.png.png') }}" class="w-10 h-10 rounded-full border" alt="Avatar">
                </div></a>
            </header>

            <!-- Conteúdo -->
            <div class="flex-1 p-6 overflow-y-auto">
                @yield('contentUser')
            </div>
        </main>
    </div>

    <script>
        function toggleMenu() {
            document.getElementById('sidebar').classList.toggle('-translate-x-full');
            document.getElementById('overlay').classList.toggle('hidden');
        }
    </script>
</body>
</html>
