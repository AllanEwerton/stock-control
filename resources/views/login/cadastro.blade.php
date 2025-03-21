<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Cadastro</title>
</head>
<body>
<div class="flex justify-center items-center min-h-screen bg-gradient-to-b from-indigo-950 via-cyan-800 to-emerald-950">
    <div class="bg-gray-200 p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-black mb-6">Cadastro</h2>

        {{-- Mensagens de erro --}}
        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{ route('cadastro.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="text" class="block text-black">Nome completo</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    class="w-full p-3 mt-2 border border-gray-600 rounded-lg text-black"
                    placeholder="Digite seu nome completo"
                    value="{{ old('email') }}"
                >
            </div>

            <div class="mb-4">
                <label for="email" class="block text-black">E-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="w-full p-3 mt-2 border border-gray-600 rounded-lg text-black"
                    placeholder="Digite seu e-mail"
                    value="{{ old('email') }}"
                >
            </div>

            <div class="mb-6">
                <label for="password" class="block text-black">Senha</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="w-full p-3 mt-2 border border-gray-600 rounded-lg text-black"
                    placeholder="Digite sua senha com no mínimo 6 caracteres"
                >
            </div>

             <div class="mb-4">
                <label for="password" class="block text-black">Confirme a senha</label>
                <input
                    type="password"
                    id="confirmed_password"
                    name="confirmed_password"
                    class="w-full p-3 mt-2 border border-gray-600 rounded-lg text-black"
                    placeholder="Digite sua senha novamente"
                >
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700">
                Entrar
            </button>

            <div class="mt-4 text-center">
                <p class="text-black">já tem uma conta? <a href="/register" class="text-blue-600">Entrar</a></p>
            </div>
        </form>
    </div>
</div>

</body>
</html>
