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

Route::get('/', 'AdminPagesController@dasboard')->name('admin.dashboard'); // Homepage dell'admin (Dashboard)

Route::resource('comics', 'ComicController');

// Route::get('/comics', 'ComicController@index')->name('comics.index');
// Route::post('/comics', 'ComicController@store')->name('comics.store');
// Route::get('/comics/create', 'ComicController@create')->name('comics.create');
// Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show');
// Route::put('/comics/{comic}', 'ComicController@update')->name('comics.update');
// Route::get('/comics/{comic}/edit', 'ComicController@edit')->name('comics.edit');
// Route::delete('/comics/{comic}', 'ComicController@destroy')->name('comics.destroy');
