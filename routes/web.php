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
})->middleware('auth');
Route::get('/getCode', 'VerifyController@getCode')->name('getCode');
Route::get('/verify', 'VerifyController@index')->name('verify');
Route::post('/verify', 'VerifyController@verify')->name('verify');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ap/admin', 'AdminPagesController@dashboard')->name('admin.panel')->middleware('auth');

