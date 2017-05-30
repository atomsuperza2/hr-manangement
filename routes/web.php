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

Route::get('/department','DepartmentController@index')->name('department.index');
Route::get('/department/add','DepartmentController@create')->name('department.create');
Route::post('/department/add','DepartmentController@store')->name('department.store');
Route::get('/department/{department}/edit','DepartmentController@edit')->name('department.edit');
Route::get('/department/{department}',array('as' => 'department.update', 'uses' => 'DepartmentController@update'));
Route::delete('/department/{department}','DepartmentController@destroy')->name('department.destroy');

Route::get('/designation','DesignationController@index')->name('designation.index');
Route::get('/designation/add','DesignationController@create')->name('designation.create');
Route::post('/designation/add','DesignationController@store')->name('designation.store');
Route::get('/designation/{designation}/edit','DesignationController@edit')->name('designation.edit');
Route::get('/designation/{designation}',array('as' => 'designation.update', 'uses' => 'DesignationController@update'));
Route::delete('/designation/{designation}','DesignationController@destroy')->name('designation.destroy');

Route::get('/emdesignation','EmDesignationController@index')->name('emdesignation.index');
Route::get('/emdesignation/add', array('as'=>'user','uses'=>'EmDesignationController@create'));
Route::get('/emdesignation/autocomplete',array('as' => 'autocomplete','uses'=>'EmDesignationController@autocomplete'));
// Route::get('/emdesignation/add','EmDesignationController@create')->name('emdesignation.create');
Route::post('/emdesignation/add','EmDesignationController@store')->name('emdesignation.store');
Route::get('/emdesignation/{emdesignation}/edit','EmDesignationController@edit')->name('emdesignation.edit');
Route::get('/emdesignation/{emdesignation}',array('as' => 'emdesignation.update', 'uses' => 'EmDesignationController@update'));
Route::delete('/emdesignation/{emdesignation}','EmDesignationController@destroy')->name('emdesignation.destroy');

Route::get('/bankaccount','BankaccountController@index')->name('bankaccount.index');
Route::get('/bankaccount/add', array('as'=>'bankaccount.create','uses'=>'BankaccountController@create'));
Route::post('/bankaccount/add','BankaccountController@store')->name('bankaccount.store');
Route::get('/bankaccount/{bankaccount}/edit','BankaccountController@edit')->name('bankaccount.edit');
Route::get('/bankaccount/{bankaccount}',array('as' => 'bankaccount.update', 'uses' => 'BankaccountController@update'));
Route::delete('/bankaccount/{bankaccount}','BankaccountController@destroy')->name('bankaccount.destroy');

Route::get('/events', 'EventController@index')->name('events.index');
Route::get('/events/add', 'EventController@create')->name('events.create');
Route::post('/events/add', 'EventController@store')->name('events.store');
Route::get('/events/{event}/edit', 'EventController@edit')->name('events.edit');
Route::get('/events/{events}', array('as' => 'events.update', 'uses' => 'EventController@update'));
Route::delete('/events/{event}', 'EventController@destroy')->name('events.destroy');

Route::get('/holidays', 'HolidaysController@index')->name('holidays.index');
Route::get('/holidays/add', 'HolidaysController@create')->name('holidays.create');
Route::post('/holidays/add', 'HolidaysController@store')->name('holidays.store');
Route::get('/holidays/{holiday}/edit', 'HolidaysController@edit')->name('holidays.edit');
Route::get('/holidays/{holidays}', array('as' => 'holidays.update', 'uses' => 'HolidaysController@update'));
Route::delete('/holidays/{holiday}', 'HolidaysController@destroy')->name('holidays.destroy');
////////////////////////////////////////////////////


// Route::resource('accounts', 'AccountInfoController') ;
