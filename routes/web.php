<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\GDriveController;


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



Auth::routes();
Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* CLIENTES */
Route::get('clientes/cadastro', [ClientesController::class, 'index'])->name('cadastro.index');
Route::post('clientes/cadastro/store', [ClientesController::class, 'store'])->name('cadastro.store');

/*INTEGRAÇÃO GOOGLE DRIVE */
Route::get('drive/listagem', [GDriveController::class, 'index'])->name('drive.index');
Route::post('drive/listagem/store', [GDriveController::class, 'store'])->name('drive.store');
