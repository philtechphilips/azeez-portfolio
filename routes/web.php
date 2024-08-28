<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/post-office', function () {
    return view('post-office');
});

Route::get('/hsbc', function () {
    return view('hsbc');
});

Route::get('/m-and-g', function () {
    return view('m-and-g');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/play', function () {
    return view('play');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
