<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/**
 * Public API routes
 */
Route::group(['middleware' => [\App\Http\Middleware\AddHeaders::class]], function () {
    Route::post('/login', 'Api\AuthController@login')->name('login');
});

/**
 * Auth required API routes
 */
Route::group(['namespace' => 'Api', 'middleware' => ['auth:api', \App\Http\Middleware\AddHeaders::class], 'as' => 'api.'], function () {
    Route::post('/logout', 'AuthController@logout')->name('logout');

    Route::get('/user', function (Request $request) {
       return $request->user();
    });
});
