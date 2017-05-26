<?php
use App\AccountInfo;
use Illuminate\Http\Request;
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
Route::get('/accounts','AccountInfoController@index')->name('accounts.index');
Route::get('/accounts/add','AccountInfoController@create')->name('accounts.create');
Route::post('/accounts/add','AccountInfoController@store')->name('account.store');
Route::get('/accounts/{user}/edit','AccountInfoController@edit')->name('accounts.edit');
Route::get('/accounts/{accounts}',array('as' => 'accounts.update', 'uses' => 'AccountInfoController@update'));
Route::delete('/accounts/{user}','AccountInfoController@destroy')->name('accounts.destroy');

Route::get('/department/index','DepartmentController@index')->name('department.index');
Route::get('/department/add','DepartmentController@create')->name('department.create');
Route::post('/department/add','DepartmentController@store')->name('department.store');

Route::get('/designation/index','DesignationController@index')->name('designation.index');
Route::get('/designation/add','DesignationController@create')->name('designation.create');
Route::post('/designation/add','DesignationController@store')->name('designation.store');

Route::get('/emdesignation/index','EmDesignationController@index')->name('emdesignation.index');
Route::get('/emdesignation/add', array('as'=>'user','uses'=>'EmDesignationController@create'));
Route::get('/emdesignation/autocomplete',array('as' => 'autocomplete','uses'=>'EmDesignationController@autocomplete'));
// Route::get('/emdesignation/add','EmDesignationController@create')->name('emdesignation.create');
Route::post('/emdesignation/add','EmDesignationController@store')->name('emdesignation.store');

Route::get('/bankaccount/index','BankaccountController@index')->name('bankaccount.index');
Route::get('/bankaccount/add', array('as'=>'bankaccount.create','uses'=>'BankaccountController@create'));
Route::post('/bankaccount/add','BankaccountController@store')->name('bankaccount.store');
////////////////////////////////////////////////////


// Route::resource('accounts', 'AccountInfoController') ;
