<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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
    return view('welcome');
});
//controlador de hotel
Route::get('/hoteles/index', [HotelController::class, 'index']);
Route::get('/hoteles/create', [HotelController::class, 'create']);
// Route::post('/hoteles', [HotelController::class, 'store']);
// Route::get('/hoteles/{id}', [HotelController::class, 'show']);
// Route::get('/hoteles/{id}/edit', [HotelController::class, 'edit']);
// Route::put('/hoteles/{id}', [HotelController::class, 'update']);
// Route::delete('/hoteles/{id}', [HotelController::class, 'destroy']);
// //controlador de habitacion
// Route::get('/hoteles', [HotelController::class, 'index']);
// Route::get('/hoteles/create', [HotelController::class, 'create']);
// Route::post('/hoteles', [HotelController::class, 'store']);
// Route::get('/hoteles/{id}', [HotelController::class, 'show']);
// Route::get('/hoteles/{id}/edit', [HotelController::class, 'edit']);
// Route::put('/hoteles/{id}', [HotelController::class, 'update']);
// Route::delete('/hoteles/{id}', [HotelController::class, 'destroy']);
// //controlador de Acomodacion
// Route::get('/hoteles', [HotelController::class, 'index']);
// Route::get('/hoteles/create', [HotelController::class, 'create']);
// Route::post('/hoteles', [HotelController::class, 'store']);
// Route::get('/hoteles/{id}', [HotelController::class, 'show']);
// Route::get('/hoteles/{id}/edit', [HotelController::class, 'edit']);
// Route::put('/hoteles/{id}', [HotelController::class, 'update']);
// Route::delete('/hoteles/{id}', [HotelController::class, 'destroy']);
// //controlador de tipo de Habitacion

