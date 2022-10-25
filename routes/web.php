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

/*
Route::get('/', function () {
    return 'Olá, seja bem-vindo ao curso!';
});
*/

use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');

use App\Http\Controllers\SobreNosController;
 
Route::get('/sobrenos', [SobrenosController::class, 'sobrenos'])->name('site.sobrenos');

use App\Http\Controllers\ContatoController;
 
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');;

Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('app')->group(function () {
    Route::get('/users', function () {
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', function(){return 'Fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
    });
});

Route::get('/rota1', function(){
    echo 'Rota 1';
})->name('site.rota1');


Route::get('/rota2', function(){
    return redirect()->route('site.rota1');
})->name('site.rota2');

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para  página inicial';
});

//Route::redirect('/rota2', '/rota1');