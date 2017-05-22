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
Route::get('/accounts/index','AccountInfoController@index')->name('accounts.index');
Route::get('/accounts/add','AccountInfoController@create')->name('accounts.create');
Route::post('/accounts/add','AccountInfoController@store')->name('account.store');
Route::get('/department/index','DepartmentController@index')->name('department.index');
Route::get('/department/add','DepartmentController@create')->name('department.create');
Route::post('/department/add','DepartmentController@store')->name('department.store');
Route::get('/designation/index','DesignationController@index')->name('designation.index');
Route::get('/designation/add','DesignationController@create')->name('designation.create');
Route::post('/designation/add','DesignationController@store')->name('designation.store');
// Route::resource('accounts', 'AccountInfoController') ;
