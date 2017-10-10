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

Route::get('/', 'BlogController@getIndex');
Route::get('login', 'BlogController@getLogin');
Route::post('login', 'BlogController@postLogin');

Route::get('logout', 'BlogController@logout');

Route::get('/post/{slug}', 'BlogController@getPost');
Route::prefix('admin')->group(function () {

    Route::group(['middleware' => ['admin.auth'],'namespace'=>'Admin'], function () {

    	Route::get('/', 'AdminController@getDashboard');
    	Route::get('dashboard','AdminController@getDashboard');
    	Route::resource('post', 'PostController');

    });
});