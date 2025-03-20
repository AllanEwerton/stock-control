@extends('login.main-user')
@section('title', 'Criar Categoria')
@section('contentUser')
<section class="p-6">
    <h1 class="text-2xl font-semibold text-white">Criar Categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-4">
            <label for="nome" class="block text-cyan-950 font-semibold">Nome</label>
            <input type="text" name="nome" id="nome" class="w-full px-4 py-2 rounded-lg shadow-sm border border-cyan-950 focus:border-cyan-950 focus:outline-none" required>
        </div>
        <div class="mb-4">
            <label for="estoque" class="block text-cyan-950 font-semibold">Estoque</label>
            <input type="number" name="estoque" id="estoque" class="w-full px-4 py-2 rounded-lg shadow-sm border border-cyan-950 focus:border-cyan-950 focus:outline-none" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600 transition">Criar Categoria</button>
    </form>
</section>
@endsection
