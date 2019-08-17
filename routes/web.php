<?php

use \Torann\GeoIP\GeoIP;
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

/*Route::get('/', function () {
    return view('test');
});*/

Route::get('/dash', function () {
    return view('test');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource('/users', 'UserController')->middleware('auth');
Route::resource('/roles', 'PermissionController')->middleware('role:admin|super');

Route::get('/ip', function () {

    $ip = Request::ip();
    //dd( geoip($ip = '35.168.118.22'));
    echo geoip()->getClientIP() . '<br>';
    echo $ip . '<br>';
    //dd( geoip()->getService()) ;
    dd( geoip()->getLocation($ip));
    //dd( Request);
    dd( geoip($ip));
    //return Request();
});

Route::get('states/{country}', 'UserController@states')->middleware('auth');
Route::get('cities/{state}', 'UserController@cities')->middleware('auth');
Route::get('cat/', 'CategoryController@category')->middleware('auth');
Route::get('cat/incomes', 'CategoryController@incomes')->middleware('auth');
Route::get('sub/{id}', 'CategoryController@subcategory')->middleware('auth');
Route::post('record/', 'CategoryController@record')->middleware('auth');
Route::post('record/income', 'RecordsController@incomes')->middleware('auth');
Route::post('record/expense', 'RecordsController@expenses')->middleware('auth');
Route::delete('record/expense/', 'RecordsController@destroy')->middleware('auth');
Route::resource('record/info', 'Prduct_recordController')->middleware('auth');
