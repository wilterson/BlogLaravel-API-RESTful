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
    return view('blog');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){

	Route::resource('posts', 'PostsController', ['except' => 'show']);

	Route::resource('users', 'UsersController', ['except' => 'show']);
});

$this->get('/logout', 'Auth\LoginController@logout');