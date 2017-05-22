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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accounts/index','AccountInfoController@index')->name('index');
Route::get('/accounts/add','AccountInfoController@create')->name('add');
Route::post('/accounts/add','AccountInfoController@store')->name('add');
// Route::resource('accounts', 'AccountInfoController') ;
