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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/inputDetail', 'InputDetailController@index')->name('inputDetail');

Route::delete('inputDetail/delete/{id}', 'InputDetailController@delete');

Route::get('inputDetail/inputDetailEdit','InputDetailController@edit');

Route::get('home/userEdit','HomeController@edit');

Route::delete('home/delete/{id}', 'HomeController@delete');

Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
