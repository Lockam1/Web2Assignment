<?php
use Illuminate\Support\Facades\Input;

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

Route::get('/', 'CrickectController@index', function () {
    return view('welcome');
});

Route::get('/about', 'CrickectController@show', function () {
    return view('/show');
});


Route::get('/about', function () {
    return view('about');
});


Route::post('/show', 'CrickectController@show')->name('show');

//Route::get('/', 'PagesController@home');