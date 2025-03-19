<?php

use App\Http\Controllers\PodutoController;
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

route::get('/logout', [UserContrller::class, 'logout'])->name('logout');

route::get('/dashboard', function(){
        return view('login.dashboard');})->name('dashboard');

Route::resource('produtos', PodutoController::class);
