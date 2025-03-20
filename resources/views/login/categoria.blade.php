@extends('login.main-user')
@section('title', 'Dashboard')
@section('contentUser')
<section class="p-4 sm:p-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6">
    @foreach ($categorias as $categoria)
    <a href="{{ route('categorias.preview', ['id' => $categoria->id]) }}" class="block transform transition duration-300 hover:scale-105 hover:shadow-2xl">
        <div class="bg-blue-100 p-4 sm:p-6 rounded-lg shadow-lg text-cyan-950">
            <h3 class="text-base sm:text-lg font-semibold">{{ $categoria->nome }}</h3>
            <p class="text-xl sm:text-2xl font-bold">{{ $categoria->estoque }}</p>
        </div>
    </a>
    @endforeach
</section>
@endsection
