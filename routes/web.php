<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ClientesController;


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

Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');

Route::get('clientes/cadastro', [ClientesController::class, 'index'])->name('cadastro.index');
Route::post('clientes/cadastro/store', [ClientesController::class, 'store'])->name('cadastro.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
