<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', 'APILoginController@login');
Route::post('reqistration','userController@reqistration');
Route::middleware('jwt.auth')->get('users', function () {
    return response()->json(auth('api')->user());
});
Route::middleware('jwt.auth')->get('test',function(){
    return 'Okay';
});
 

Route::get('citys', 'userController@citys')->auth();
