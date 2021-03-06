<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

//only logged in people can view this
Route::group(['middleware' => ['auth']], function () {


Route::resource('qrcodes', 'QrcodeController');

Route::resource('transactions', 'TransactionController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');
});
