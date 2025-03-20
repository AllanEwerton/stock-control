@extends('login.main-user')
@section('title', 'Dashboard')
@section('contentUser')
<section class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($categorias as $categoria)
    <a href="#" class="block transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <div class="bg-gradient-to-r from-blue-200 to-blue-400 p-6 rounded-lg shadow-lg text-cyan-950">
            <h3 class="text-lg font-semibold">{{ $categoria->nome }}</h3>
            <p class="text-2xl font-bold">{{ $categoria->estoque }}</p>
        </div>
    </a>
    @endforeach
</section>
@endsection
