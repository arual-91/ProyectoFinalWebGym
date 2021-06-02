<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TiendaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TarifasController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ActivitiesController;
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

Route::get('/instalaciones', [InstalacionesController::class,'index']);

Route::get('/actividades', [ActivitiesController::class,'index']);

Route::get('/contacto', [ContactoController::class,'index']);
Route::post('/contacto', [MailController::class, 'sendEmail']);

Route::get('/tienda', [TiendaController::class,'index']);
Route::get('/tienda/search', [TiendaController::class,'search']);
Route::get('/tienda/{id}', [TiendaController::class,'show']);

Route::post('tienda/checkout/{product}', [CheckOutController::class,'index'])->name('checkout.index')->middleware('auth');
Route::post('tienda/checkout/confirm/{product}', [CheckOutController::class,'store'])->name('checkout.store')->middleware('auth');

Route::get('/perfil', [ProfileController::class,'index'])->middleware('auth');
Route::get('/perfil/perfil', [ProfileController::class,'index'])->middleware('auth');
Route::post('/perfil/perfil/delete/{order}', [ProfileController::class,'delete_order'])->name('profile.delete_order')->middleware('auth');
Route::post('/perfil/perfil/delete_booking/{booking}', [ScheduleController::class,'delete_booking'])->name('schedule.delete_booking')->middleware('auth');

Route::get('/perfil/usuarios', [ProfileController::class,'user'])->name('profile.user')->middleware('auth');
Route::post('/perfil/usuarios/{user}', [ProfileController::class,'delete_user'])->name('profile.delete_user')->middleware('auth');

Route::get('/perfil/productos', [ProfileController::class,'product'])->middleware('auth');
Route::post('/perfil/productos/delete/{product}', [ProfileController::class,'delete_product'])->name('profile.delete_product')->middleware('auth');
Route::post('/perfil/productos/create', [ProfileController::class,'create_product'])->name('profile.create_product')->middleware('auth');

Route::get('/perfil/actividades', [ProfileController::class,'activity']);
Route::post('/perfil/actividades/delete/{activity}', [ProfileController::class,'delete_activity'])->name('profile.delete_activity')->middleware('auth');
Route::post('/perfil/actividades/create', [ProfileController::class,'create_activity'])->name('profile.create_activity')->middleware('auth');

Route::get('/perfil/ventas', [ProfileController::class,'sales'])->middleware('auth');

Route::get('/perfil/horario', [ScheduleController::class,'index'])->middleware('auth');
Route::post('/perfil/horario/reservar/{class}', [ScheduleController::class,'book_class'])->name('schedule.book_class')->middleware('auth');
Route::post('/perfil/horario/add_class', [ScheduleController::class,'add_class'])->name('schedule.add_class')->middleware('auth');
Route::get('/perfil/horario/update_schedule', [ScheduleController::class,'update_schedule'])->name('schedule.update_schedule')->middleware('auth');



Auth::routes();

