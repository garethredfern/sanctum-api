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

Route::post('/auth/login', 'API\Auth\LoginController');

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/auth/logout', 'API\Auth\LogoutController');
    Route::get('/users/{user}', 'API\UserController@show');
});
