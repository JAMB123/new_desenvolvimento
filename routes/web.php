<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\animalController::class, 'index'])->name('index');

Route::get('/sobre', function () {
    return view('sistema.sobre');
});

//Rotas Cadastro de Animal
Route::get('/cadastros/lista', [App\Http\Controllers\ControladorAnimal::class, 'index'])->name('listaCadastro');
Route::get('/cadastros/editar/{id}', [App\Http\Controllers\ControladorAnimal::class, 'edit'])->name('editaCadastro');
Route::get('/cadastros/deletar/{id}', [App\Http\Controllers\ControladorAnimal::class, 'destroy'])->name('deletaCadastro');
Route::post('/cadastros/{id}', [App\Http\Controllers\ControladorAnimal::class, 'update'])->name('gravaEditaCadastro');
Route::get('/cadastros/cadastrar', [App\Http\Controllers\ControladorAnimal::class, 'create'])->name('novoCadastro');
Route::post('/cadastros', [App\Http\Controllers\ControladorAnimal::class, 'store'])->name('gravaNovoCadastro');

//Rotas Favoritos
Route::get('/favoritos/{id}', [App\Http\Controllers\homeController::class, 'favoritos'])->name('favoritos');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
