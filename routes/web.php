<?php

use App\Http\Controllers\PodutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('produtos', PodutoController::class);
