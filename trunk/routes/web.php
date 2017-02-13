<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'auth', 'namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@home']);

    //user
    Route::get('/user/users', ['as' => 'users', 'uses' => 'UserController@userList']);
    Route::get('/user/addUser', ['as' => 'addUser', 'uses' => 'UserController@addUser']);
    Route::get('/user/getUsers', ['as' => 'getUsers', 'uses' => 'UserController@getUsers']);


    Route::get('user/profile', function () {
        // Uses Auth Middleware
        return "aaa";
    });





});