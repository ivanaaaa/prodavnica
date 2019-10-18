<?php

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
Route::get('/', 'PocetnaController@index');
Route::get('/produkt/{id}', 'PocetnaController@show');
Route::get('/kategorija/{id}', 'PocetnaController@showByKat');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
if (!env('ALLOW_REGISTRATION', false)) {
    Route::any('/register', function() {
        abort(403);
    });
}
Route::resource('produkti', 'ProduktiController');
Route::resource('kategorii', 'KategorijaController');