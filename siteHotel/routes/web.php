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
//Route::get('/', [PagesController::class, 'index']);
Route::get('/reserve', [PagesController::class, 'reserve']);
Route::get('/contact', [PagesController::class, 'contact']);
Route::get('/single', [PagesController::class, 'single']);

use App\Http\Controllers\ChambreController;
Route::resource('layouts', ChambreController::class);
Route::resource('/home', ChambreController::class);
Route::resource('/chambre', ChambreController::class);


Auth::routes();


use App\Http\Controllers\ReservationController;
Route::resource('/reservation', ReservationController::class);

<<<<<<< HEAD
Route::resource('/chambre', ChambreController::class);
=======
/*
use App\Http\Controllers\ChambreController;
Route::resource('/chambre', ChambreController::class);
 */


use App\Http\Controllers\HomeController;
Route::resource('/home', HomeController::class);
Route::get('/', [HomeController::class, 'index']);
>>>>>>> 894fc40e5bdbd0b1fe4f4546a16bb8660bf93423
