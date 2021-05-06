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

Route::get('/home', function () {
    return view('home');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/menu', function () {
    return view('menu');
});



Route::get('/info','App\Http\Controllers\InfoController@info')->name('info');
Route::get('/aboutus','App\Http\Controllers\InfoController@aboutus')->name('aboutus');
Route::get('/where','App\Http\Controllers\InfoController@where')->name('where');
Route::get('/contact','App\Http\Controllers\InfoController@contact')->name('contact');

Route::get('/reserva','App\Http\Controllers\ReservaController@reserva')->name('reserva');
Route::get('/user', function () {
    return view('user');
});