<?php

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


use App\Http\Controllers\PagesController;
Route::get('/', [PagesController::class, 'index']);
Route::get('/reserve', [PagesController::class, 'reserve']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/single', [PagesController::class, 'single']);

use App\Http\Controllers\ChambreController;
Route::resource('chambre', ChambreController::class);
Route::get('/home', [ChambreController::class, 'index']);


Auth::routes();


use App\Http\Controllers\ReservationController;
Route::resource('/reservation', ReservationController::class);

