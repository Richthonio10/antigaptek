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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/handphone', 'VideoController@viewHandphone');
Route::get('/komputer', 'VideoController@viewKomputer');
Route::get('/other', 'VideoController@viewOther');
Route::get('/search', 'VideoController@search');

// Another Page
Route::get('/creators', 'MyController@creators');
Route::get('/developers', 'MyController@developers');
Route::get('/history', 'MyController@history');

// Manage Guest
Route::group(['middleware' => ['guest']], function(){
    // Manage Login
    Route::get('/login', function(){
        return view('login');
    });
    Route::post('/login', 'Auth\LoginController@login');

    // Manage Register
    Route::get('/register', function(){
        return view('register');
    });
    Route::post('/register', 'Auth\RegisterController@register');
});

// Manage User
Route::group(['middleware' => ['auth']], function() {
    // Manage Video
    Route::group(['prefix' => '/video'], function() {
        Route::get('/add', 'VideoController@view');
        Route::post('/add', 'VideoController@add');
    });

    Route::get('/logout', 'Auth\LoginController@logout');
});