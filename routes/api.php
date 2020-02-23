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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources(['contact' => 'API\ContactController']);

Route::apiResources(['messages' => 'API\MessagesController']);

Route::apiResources(['work' => 'API\WorkController']);

Route::apiResources(['users' => 'API\UsersController']);

Route::apiResources(['dashboard' => 'API\DashboardController']);

Route::get('profile', 'API\UsersController@profile');

Route::get('findUser', 'API\UsersController@search');

Route::put('profile', 'API\UsersController@updateProfile');
