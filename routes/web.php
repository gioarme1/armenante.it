<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/todolist', function () {
    return view('todolist');
});
Route::get('/generapsw', function () {
    return view('generapsw');
});
Route::get('/calcolatrice', function () {
    return view('calcolatrice');
});

use App\Http\Controllers\ImageController;

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', [ImageController::class, 'upload'])->name('upload');

use App\Http\Controllers\WeatherController;

Route::get('/weather', [WeatherController::class, 'index']);
Route::post('/weather', [WeatherController::class, 'getWeather']);
