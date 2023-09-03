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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'Hello World';
});

Route::get('/contact', function () {
    return view('contact', ['name' => 'Achmad Choerul', 'no' => '08645748']);
});

// Route::view('/contact', 'contact', ['name' => 'Achmad Choerul', 'no' => '08645748']);


// redirect routes
Route::redirect('/contact', '/contact-us');

Route::get('/product', function () {
    return 'product';
});

// Route::get('/product/{id}', function ($id) {
//     return 'Ini adalah product dengan id ' . $id;
// });

Route::get('/product/{id}', function ($id) {
    return view('product.detail', ['id' => $id]);
});


// route prefixes
Route::prefix('administrator')->group(function () {
    Route::get('/about-admin', function() {
        return 'about admin';
    });

    Route::get('/profil-admin', function() {
        return 'profil admin';
    });

    Route::get('/contact-admin', function() {
        return 'contact admin';
    });

    Route::get('/about-admin2', function() {
        return 'about admin2';
    });

    Route::get('/profil-admin2', function() {
        return 'profil admin2';
    });

    Route::get('/contact-admin2', function() {
        return 'contact admin2';
    });
});


