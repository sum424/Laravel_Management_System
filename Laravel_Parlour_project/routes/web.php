<?php

use App\Http\Controllers\PerfumeController;
use App\Http\Controllers\ShampooController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* for shampoo */
Route::resource('shampoo', ShampooController::class);

/* for perfume */
Route::resource('perfume', PerfumeController::class);
