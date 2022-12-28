<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;
use App\Http\Controllers\CompraController;

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

Route::get('/', [CompraController::class, 'index']);

Route::get('/historico', [CompraController::class, 'historico']);

Route::get('/administrador/AmAtOrY/sandrocastro', [CompraController::class, 'administrador']);
Route::get('/administrador/AmAtOrY/sandrocastro/novo', [CompraController::class, 'novo']);
Route::get('/administrador/AmAtOrY/sandrocastro/pagamentos', [CompraController::class, 'pagamentos']);
Route::post('/administrador/AmAtOrY/sandrocastro/novo/salvar', [CompraController::class, 'salvar']);
