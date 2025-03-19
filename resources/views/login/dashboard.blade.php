@extends('login.main-user')
@section('title', 'Dashboard')
@section('contentUser')

            <!-- Conteúdo -->
            <section class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Total de Registros</h3>
                    <p class="text-2xl font-bold text-blue-600">120</p>
                </div>
                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Usuários Ativos</h3>
                    <p class="text-2xl font-bold text-green-600">45</p>
                </div>
                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h3 class="text-lg font-semibold text-gray-700">Pendências</h3>
                    <p class="text-2xl font-bold text-red-600">8</p>
                </div>
            </section>
            
@endsection

