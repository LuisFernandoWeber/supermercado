<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\FornecedoresController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutosController::class, 'listar']);
Route::get('/produtos/novo', [ProdutosController::class, 'novo'])->name('prod.novo');
Route::post('/produtos/novo/{id?}',[ProdutosController::class, 'salvar'])->name('prod.salvar');
Route::get('/produtos/edit/{id}', [ProdutosController::class, 'edit'])->name('prod.edit');


Route::get('/fornecedores', [FornecedoresController::class, 'listar']);
Route::get('/fornecedores/novo', [FornecedoresController::class, 'novo'])->name('forn.novo');
Route::post('/fornecedores/novo/{id?}', [FornecedoresController::class, 'salvar'])->name('forn.salvar');
Route::get('/fornecedores/edit/{id}', [FornecedoresController::class, 'edit'])->name('forn.edit');

