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

Route::get('/', function () {
    return view('test');
});

Route::get('/dash', function () {
    return view('test');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
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

Route::get('states/{country}', 'UserController@states');
Route::get('cities/{state}', 'UserController@cities');
Route::get('cat/', 'CategoryController@category');
Route::get('sub/{id}', 'CategoryController@subcategory');

