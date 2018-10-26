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

Route::get('/', ['uses'=>'HomeController@index']);

//http://localhost:8000/


Route::get('/home', ['uses'=>'HomeController@home']);

//http://localhost:8000/home
	
Route:: get('/about', ['uses' =>'HomeController@about']);


Route:: get('/produk/{brand}',['uses' =>'HomeController@produk']);

Route:: get('/{geo}/{ang1}/{ang2}',['uses' =>'GeometriController@geom']);

Route:: get('/calculator/{cal}/{ang1}/{ang2}',['uses' =>'CalculatorController@calc']);



