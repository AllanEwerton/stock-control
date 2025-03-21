<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserContrller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

route::get('/login', [UserContrller::class, 'index'])->name('login');
Route::post('/login', [UserContrller::class, 'login'])->name('autenticar');

route::get('/cadastro', function(){
        return view('login.cadastro');})->name('cadastro');
route::post('/cadastro', [UserContrller::class, 'store'])->name('cadastro.store');

route::middleware('auth')->group(function(){
    route::get('/dashboard', function(){
        return view('login.dashboard');})->name('dashboard');

    route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias');
    route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
    route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
    route::get('/categorias/preview/{id}', [ProdutoController::class, 'preview'])->name('categorias.preview');

    route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos');

        route::get('/logout', [UserContrller::class, 'logout'])->name('logout');

});

