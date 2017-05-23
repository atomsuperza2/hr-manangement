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
Route::get('/accounts/index','AccountInfoController@index')->name('accounts.index');
Route::get('/accounts/add','AccountInfoController@create')->name('accounts.create');
Route::post('/accounts/add','AccountInfoController@store')->name('account.store');
Route::get('/department/index','DepartmentController@index')->name('department.index');
Route::get('/department/add','DepartmentController@create')->name('department.create');
Route::post('/department/add','DepartmentController@store')->name('department.store');
Route::get('/designation/index','DesignationController@index')->name('designation.index');
Route::get('/designation/add','DesignationController@create')->name('designation.create');
Route::post('/designation/add','DesignationController@store')->name('designation.store');
Route::get('/emdesignation/index','EmDesignationController@index')->name('emdesignation.index');
Route::get('/emdesignation/add','EmDesignationController@create')->name('emdesignation.create');
Route::post('/emdesignation/add','EmDesignationController@store')->name('emdesignation.store');
////////////////////////////////////////////////////
// Route::any('getdata', 'API\AccountInfoController@filter');

Route::get('/emdesignation/autocomplete', ['as' => 'search-autocomplete', 'uses' => 'EmDesignationController@autocomplete']);
/////////////////////////

// Route::POST('emdesignation/add', function(){
//   $keyword = Request::all();
//   $models = AccountInfo::where('firstname', "=", $keyword)->orderby('firstname')->take(10)->skip(0)->get();
//   $count = count($models);
//   return View::make('emdesignation.add')->with("contents", $models)->with("counts", $count);
// });

// Route::POST('emdesignation/add', function(){
//   $keyword = Str::lower(Input::get('auto'));
//   $models = AccountInfo::where('firstname', "=", $keyword)->orderby('word')->take(10)->skip(0)->get();
//   $count = count($models);
//   return View::make('emdesignation.add')->with("contents", $models)->with("counts", $count);
// });

// Route::any('getdata', function(){
//   $term = Str::lower(Request::get('term'));
//   $data = DB::table("accountinfo")->distinct()->select('firstname')->where('firstname','LIKE', $term. '%')->groupBy('firstname')->take(10)->get();
//   foreach ($data as $v) {
//     $return_array[] =  array('value' => $v->firstname );
//     # code...
//   }
//   return Response::json($return_array);
// });
/////////////////////////////////////////////////
// Route::resource('accounts', 'AccountInfoController') ;
