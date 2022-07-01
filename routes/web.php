<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FileController;

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

Route::get('/', [FileController::class, 'index']);

Route::get('/historico', [FileController::class, 'historico']);

Route::get('/administrador/AmAtOrY/sandrocastro', [FileController::class, 'administrador']);
Route::get('/administrador/AmAtOrY/sandrocastro/novo', [FileController::class, 'novo']);
Route::get('/administrador/AmAtOrY/sandrocastro/pagamentos', [FileController::class, 'pagamentos']);
Route::post('/administrador/AmAtOrY/sandrocastro/novo/salvar', [FileController::class, 'salvar']);
