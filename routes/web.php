<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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

Route::get('/', [App\Http\Controllers\Principal::class, 'principal'])->name('pagina-inicial');
Route::get('/masculino', [App\Http\Controllers\Principal::class, 'masculino'])->name('pagina-masculino');
Route::get('/feminino', [App\Http\Controllers\Principal::class, 'feminino'])->name('pagina-feminino');
Route::get('/time', [App\Http\Controllers\Principal::class, 'time'])->name('pagina-time');
Route::get('/kids', [App\Http\Controllers\Principal::class, 'kids'])->name('pagina-kids');
Route::get('/sobre', [App\Http\Controllers\Principal::class, 'sobre'])->name('pagina-sobre');
Route::get('/contato', [App\Http\Controllers\Principal::class, 'contato'])->name('pagina-contato');
Route::get('/acessorios', [App\Http\Controllers\Principal::class, 'acessorios'])->name('pagina-acessorios');

Route::get('/login', [App\Http\Controllers\Principal::class, 'login'])->name('pagina-login');
Route::get('/gerenciar-produto', [App\Http\Controllers\Principal::class, 'gerenciarProduto'])->name('pagina-gerenciar-produto');

Route::post('/add-produto', [App\Http\Controllers\Principal::class, 'addProduto'])->name('add-produto');




