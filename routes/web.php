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
    return view('welcome');
});

Auth::routes();


Route::resources([
    'index'=>'IndexController'
]);


Route::resources([
    'about'=>'AboutController'
]);


Route::resources([
    'portfolio'=>'PortfolioController'
]);

Route::resources([
    'contact'=>'ContactController'
]);
Route::get('/home', 'HomeController@index')->name('home');




Route::get('{path}',"HomeController@index")->where( 'path', '([A-z 0-9]+)?' );
