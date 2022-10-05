<?php

use Illuminate\Support\Facades\Http;
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

/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});
*/

use App\Http\Controllers\PrincipalController;
 
Route::get('/', [PrincipalController::class, 'principal']);

use App\Http\Controllers\SobreNosController;
 
Route::get('/sobrenos', [SobreNosController::class, 'sobrenos']);

use App\Http\Controllers\ContatoController;
 
Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = 'mensagem não informada') {
    echo "Estamos aqui: $nome - $categoria - $assunto - $mensagem";
});


