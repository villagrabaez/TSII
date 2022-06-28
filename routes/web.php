<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PdvController;
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

Route::get('/', function () {
    return "Proyecto TSII";
});

// Route::get('/usuarios', [UserController::class, 'index']);

// Route::get('/usuarios/crear', function () {
//     return "Crear nuevo usuario";
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/usuarios', UserController::class)->names('usuarios');

Route::resource('/categorias', CategoryController::class)->names('categorias');

Route::resource('/productos', ProductController::class)->names('productos');

Route::resource('/clientes', CustomerController::class)->names('clientes');

Route::get('/ventas', [PdvController::class, 'index'])->name('ventas');