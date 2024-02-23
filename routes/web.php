<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\controlStockController;
use App\Http\Controllers\ElectronicosController;
use App\Http\Controllers\EntretenimientoController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\registrarProductoController;
use App\Http\Controllers\RopaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm']);


Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showloginForm']);


Route::post('/login', [LoginController::class, 'login']);

Auth::routes();

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::resource('RegistrarProducto', registrarProductoController::class);
    Route::resource('controlStock', controlStockController::class);
    Route::resource('Electronicos', ElectronicosController::class);
    Route::resource('Entretenimiento', EntretenimientoController::class);
    Route::resource('Ropa', RopaController::class);

});


