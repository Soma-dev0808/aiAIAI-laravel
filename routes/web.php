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

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', function () {
        return view('auth.login');
    });
    
    Route::get('/register', function() {
        return view('auth.register');
    });

    Route::get('/password/reset', function() {
        return view('auth.passwords.email');
    });
});

Route::get('/', function () {
    return view('index');
});

Route::get('/company-information', function () {
    return view('information.company_info');
});

Route::get('/contact-form', function () {
    return view('information.contact_form');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
