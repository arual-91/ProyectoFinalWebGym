<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TarifasController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\InstalacionesController;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/inicio', [HomeController::class,'index']);
Route::get('/tarifas', [TarifasController::class,'index']);
Route::get('/tienda', [TiendaController::class,'index']);
Route::get('/tienda/search', [TiendaController::class,'search']);
Route::get('/tienda/{id}', [TiendaController::class,'show']);
Route::post('/tienda/{id}', [TiendaController::class,'buy']);
Route::get('/instalaciones', [InstalacionesController::class,'index']);
Route::get('/contacto', [ContactoController::class,'index']);
Route::post('/contacto', [MailController::class, 'sendEmail']);
Route::get('/perfil', [ProfileController::class,'index']);
Route::get('/perfil/perfil', [ProfileController::class,'index']);
Route::get('/perfil/usuarios', [ProfileController::class,'user']);
Route::get('/perfil/productos', [ProfileController::class,'product']);
Route::get('/perfil/ventas', [ProfileController::class,'sales']);


Auth::routes();

