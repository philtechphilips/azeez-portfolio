<?php

use Illuminate\Http\Request;
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

Route::get('/m-and-g', function () {
    return view('m-and-g');
});

Route::get('/work', function () {
    return view('work');
});

Route::get('/shark-ninja', function () {
    return view('shark-ninja');
});

Route::get('/play', function () {
    return view('play');
});


Route::get('/access-code', function () {
    return view('access-code');
})->name('access-code-form');

Route::post('/access-code', function (Request $request) {
    $request->validate([
        'access_code' => 'required',
    ]);

    if ($request->input('access_code') === config('app.access_code')) {
        session(['access_code' => $request->input('access_code')]);
        return redirect()->intended('/')->with('success', 'Access code accepted! Kindly access restricted page');
    }

    return redirect()->back()->withErrors(['access_code' => 'Invalid access code.']);
})->name('access-code.submit');

Route::middleware(['access.code'])->group(function () {
    Route::get('/hsbc', function () {
        return view('hsbc');
    });

    Route::get('/post-office', function () {
        return view('post-office');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
