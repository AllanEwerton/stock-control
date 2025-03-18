@extends('main')
@section('title', 'Home')

@section('content')
<div class="container mx-auto mt-10 px-6">
    <h1 class="text-4xl font-bold text-white mb-6">Bem-vindo à Home</h1>

    <div class="space-y-4 text-gray-300">
        <p>
            Bem-vindo à nossa página inicial! Este é o ponto de partida para explorar tudo o que temos a oferecer.
            Nosso site foi desenvolvido para ser uma plataforma dinâmica onde você pode personalizar e adicionar conteúdos relevantes de maneira simples e prática.
            Aqui, você pode explorar diversos recursos, como imagens, vídeos, formulários e muito mais, para enriquecer a experiência dos seus visitantes.
            Se você está em busca de criar algo único, nossa plataforma oferece a flexibilidade para dar vida às suas ideias.
            Aproveite para explorar cada funcionalidade e não tenha medo de experimentar – a criatividade é o limite! Estamos aqui para ajudar em cada etapa do seu desenvolvimento, garantindo que você se divirta enquanto cria algo incrível.
        </p>

    </div>

    <!-- Exemplo de Cartão -->

        <div class="mt-10 bg-gray-800 p-6 rounded-lg shadow-lg text-white">
            <h2 class="text-3xl font-semibold mb-4">📦 Gerenciamento de Estoque</h2>
            <p class="text-gray-300 mb-4">Nosso sistema permite um controle eficiente de produtos, garantindo que seu estoque esteja sempre atualizado.</p>

            <ul class="list-disc list-inside text-gray-200 space-y-2">
                <li>📊 Monitoramento de entrada e saída de produtos.</li>
                <li>🔍 Rastreamento de estoque em tempo real.</li>
                <li>📅 Alertas automáticos para reposição de produtos.</li>
                <li>📑 Relatórios detalhados de movimentação e histórico.</li>
                <li>🔄 Integração com vendas e pedidos.</li>
            </ul>
        </div>

    <!-- Gerenciamento de Estoque -->


    <!-- Cartão de Destaque -->
    <div class="mt-8 bg-blue-800 p-6 rounded-lg text-white shadow-lg">
        <h2 class="text-2xl font-semibold mb-2">🔥 Controle Total do Seu Estoque</h2>
        <p class="text-gray-200">Com nosso sistema, você evita desperdícios e melhora a eficiência do seu negócio!</p>
    </div>
</div>
@endsection
