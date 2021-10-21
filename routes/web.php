<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DiseaseController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get ('/home',[HomeController::class,"index"]);
Route::get('/booking', [BookingController::class, 'index']);
Route::get ('/about', [AboutController::class,'index']);
Route::get ('/services', [ServiceController::class, 'index']);
Route::get ('/contact', [ContactController::class, 'index']);
Route::get ('/disease', [DiseaseController::class, 'index']);

// Route::get('/booking', 'App\Http\Controllers\BookingController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
