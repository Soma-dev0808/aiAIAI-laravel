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


// LP
Route::get('/', function () {
    return view('index');
});

// Admin page
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

    Route::get('/password/reset/email', function() {
        return view('auth.passwords.reset');
    });
});

// No auth pages
Route::group(['prefix' => 'information'], function () {

    Route::get('/company-information', function () {
        return view('information.company_info');
    });

    Route::get('/contact-form', function () {
        return view('information.contact_form');
    });

    Route::get('/guide', function () {
        return view('information.guide');
    });
    
    Route::get('/faq', function() {
        return view('information.faq');
    });
    
    Route::get('/term-of-service', function() {
        return view('information.term_of_service');
    });
    
     Route::get('/privacy-policy', function() {
        return view('information.privacy_policy');
    });
    
    Route::get('/scta', function() {
        return view('information.scta');
    });

    Route::get('/shop-list', function() {
        return view('information.shop_list');
    });

    Route::get('/branch-list', function () {
        return view('information.branch_list');
    });
    
    Route::get('/news', function () {
        return view('news.index');
    });

    Route::get('/news/20201128', function () {
        return view('news.20201128');
    });

    Route::get('/search', function () {
        return view('search');
    });
});

// User page
Route::group(['prefix' => 'user'], function () {
    Route::get('/dashboard', function () {
        return view('user');
    });

    Route::get('/select-shop', function () {
        return view('shopping.select-shop');
    });

    Route::get('/category', function () {
        return view('shopping.category');
    });

    Route::get('/shopping', function () {
        return view('shopping.index');
    });

    Route::get('/cart', function () {
        return view('shopping.cart');
    });

    Route::get('/shopping/received', function () {
        return view('shopping.received');
    });

    Route::get('/account', function () {
        return view('auth.account');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
