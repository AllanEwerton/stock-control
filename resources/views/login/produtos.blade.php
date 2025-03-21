@extends('login.main-user')
@section('title', 'Produtos')
@section('painel', 'Produtos')
@section('contentUser')
<section class="p-4 sm:p-6 space-y-4 sm:space-y-6">
    <div class="mb-4">
        <input type="text" id="search" placeholder="Pesquisar produtos..." class="w-full p-2 border border-gray-300 rounded-lg">
    </div>
    <div id="product-list" class="space-y-4 sm:space-y-6">
        @foreach ($produtos as $produto)
        <a href="#" class="block transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <div class="bg-blue-500 p-4 sm:p-6 rounded-lg shadow-md flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img src="{{ $produto->imagem }}" alt="{{ $produto->nome }}" class="h-16 w-16 rounded-full object-cover">
                </div>
                <div>
                    <h3 class="text-base sm:text-lg font-semibold">{{ $produto->nome }}</h3>
                    <p class="text-xl sm:text-2xl font-bold">R$: {{ number_format($produto->preco, 2, ',', '.') }}</p>
                    <p class="text-sm sm:text-base">{{ $produto->descricao }}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</section>

<script>
    document.getElementById('search').addEventListener('input', function () {
        const searchValue = this.value.toLowerCase();
        const products = document.querySelectorAll('#product-list a');

        products.forEach(product => {
            const productName = product.querySelector('h3').textContent.toLowerCase();
            if (productName.includes(searchValue)) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });
</script>
@endsection
