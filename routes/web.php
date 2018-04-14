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
    return view('auth.login');
});

//post request on login
Route::post('login','Auth\LoginController@checkLogin');
Route::get('logout','Auth\LoginController@logout');

Auth::routes(['home']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view/{id}', 'AddressbookController@show')->name('show');
Route::get('/addressbook', 'HomeController@addressbook')->name('addressbook');
Route::resource('addressbook','AddressbookController');
