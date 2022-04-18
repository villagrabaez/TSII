<?php

use App\Http\Controllers\UserController;
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

Route::resource('/usuarios', UserController::class)->names('usuarios');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
