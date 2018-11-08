<?php

use Illuminate\Http\Request;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CardController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api'], function ($router) {
    Route::group(['prefix' => 'auth'], function ($router) {
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
        Route::post('register', 'MyRegisterController@store');
    });
    Route::group(['middleware' => ['auth']], function ($router) {
        Route::post('cards', 'CardController@create');
        Route::put('cards/{card}', 'CardController@update');
        Route::get('cards', 'CardController@all');
        Route::get('cards/{card}', 'CardController@one');
        Route::delete('cards/{card}', 'CardController@delete');
    });
 });