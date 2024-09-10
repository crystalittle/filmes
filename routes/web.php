<?php

use App\Http\Controllers\FilmesController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

//filmes

Route::get('/', function () {
return view('iniciar');
}) -> name('index');

Route::get('/filmes', 
[FilmesController::class, 'index'])
->name('filmes');

Route::get('/filmes/cadastrar',
[FilmesController::class, 'cadastrar'])
->name('filmes.cadastrar');

Route::post('/filmes/cadastrar',
[FilmesController::class, 'gravar'])
->name('filmes.gravar');

Route::get('/filmes/apagar/{filme}',
[FilmesController::class, 'apagar'])->name('filmes.apagar');

Route::delete('/filmes/apagar/{filme}',
[FilmesController::class, 'deletar']);

Route::get('/filmes/editar/{filme}', [FilmesController::class, 'editar'])->name('filmes.editar');

Route::put('/filmes/editar/{filme}', [FilmesController::class, 'editarGravar']);

//usuarios
    
Route::prefix('usuarios')->middleware('auth')->group(function(){
    Route::get('/', [UsuariosController::class, 'index'])
    ->name('usuarios');

Route::get('/cadastrar', 
[UsuariosController::class, 'cadastrar'])
->name('usuarios.cadastrar');

Route::post('/gravar', 
[UsuariosController::class, 'gravar'])
->name('usuarios.gravar');

Route::get('/editar/{usuario}', [UsuariosController::class, 'editar'])
->name('usuarios.editar');

Route::put('/editar/{usuario}', [UsuariosController::class, 'editarGravar'])
->name('usuarios.editarGravar');

Route::get('/apagar/{usuario}',
[UsuariosController::class, 'apagar'])->name('usuarios.apagar');

Route::delete('/apagar/{usuarios}',
[UsuariosController::class, 'remove'])
->name('usuarios.apagar');
});

Route::get('login', [UsuariosController::class, 'login'])->name('login');

Route::post('login', [UsuariosController::class, 'login'])->name('login');

Route::get('logout', [UsuariosController::class, 'logout'])->name('logout');