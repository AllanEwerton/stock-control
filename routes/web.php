<?php

use App\Http\Controllers\PodutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
route::get('/login', function(){
    return view('login.login');})->name('login');
    route::get('/cadastro', function(){
        return view('login.cadastro');})->name('cadastro');

Route::resource('produtos', PodutoController::class);
