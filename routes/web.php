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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('/admin', 'AdminController@index')->name('admin');

// App Routes
Route::group([
    'namespace'  => 'App',
    'middleware' => 'web',
    'as'         => 'app.'
],function () {
    Route::get('/', 'AppController@index')->name('home');
});