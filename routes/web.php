<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::resource('produtos', ProdutoController::class);
Route::resource('categorias', CategoriaController::class);