<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|---------§-----------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');


$api = app('Dingo\Api\Routing\Router');

$api->version(['v1','v2'], function ($api) {
    $api->get('/t1',function (){
      return 'abc';
    });
    $api->get('/tc','\App\Http\Controllers\Admin\HomeController@home');
});
$api->version(['v2','v1'], function ($api) {
    $api->get('t3',function (){
        return "t3";
    });
});