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

Route::get('/list', ['uses' => 'MemberController@lists']);

//login

Route::post('/process_edit',['uses' =>'MemberController@proses_edit'])->middleware(['auth']); 

Route::get('/pdf_tiap/{id}',['uses'=>'MemberController@pdf_tiap'])->middleware(['auth']);

Route::get('/pdf_member',['uses' =>'MemberController@pdf_member'])->middleware(['auth']);

Route::get('/Member', ['uses' => 'MemberController@index'])->middleware(['auth']); 






Route::get('/add_thread', ['uses' => 'HomeController@add_thread'])->middleware(['auth']); 

Route::post('/proses_add_thread', ['uses' => 'HomeController@proses_add_thread'])->middleware(['auth']);

Route::get('/view_thread', ['uses' => 'HomeController@view_thread'])->middleware(['auth']); 

Route::get('/reply_thread/{id}', ['uses' => 'HomeController@reply_thread'])->middleware(['auth']); 

Route::post('/proses_reply_thread', ['uses' => 'HomeController@proses_reply_thread'])->middleware(['auth']);





Route::get('excel_member',['uses'=> 'MemberController@excel'])->middleware(['auth']);

Route::get('/edit_member/{id}',['uses'=>'MemberController@edit'])->middleware(['auth']);

Route::get('/csv_member', ['uses' => 'MemberController@csv'])->middleware(['auth']); 

Route::post('/proses_delete_member', ['uses' => 'MemberController@hapus'])->middleware(['auth']);  

Route::post('/proses_ajax_login', ['uses' => 'HomeController@proses_ajax_login'])->middleware(['guest']);  
	
Route:: get('/about', ['uses' =>'HomeController@about']);

Route:: post('/process_register', ['uses'=>'HomeController@prosesReg']);

Route:: get('/produk/{brand}',['uses' =>'HomeController@produk']);

Route:: get('/{geo}/{ang1}/{ang2}',['uses' =>'GeometriController@geom']);

Route:: get('/calculator/{cal}/{ang1}/{ang2}',['uses' =>'CalculatorController@calc']);

Route:: get('/register',['uses'=>'HomeController@reg'])->middleware(['guest']);

Route:: get('/calculator',['uses'=>'HomeController@cal']);

Route:: get('/aboutus',['uses'=>'HomeController@abo']);

//Route:: get('/proses_aktivasi/{kode}',['uses' =>'HomeController@pro'])->middleware(['guest']);

Route:: get('/login', ['uses'=>'HomeController@login'])->middleware(['guest'])->name('login');

Route:: get('/logout',['uses' =>'HomeController@logout']);

Route:: post('/process_aboutus',['uses'=>'HomeController@reb']);

Route:: post('/result_calc',['uses'=>'HomeController@res']);

Route:: post('/process_forget',['uses'=>'HomeController@process_forget']);
 
Route::get('/forget',['uses'=>'HomeController@forget']);  

Route::get('/new_password/{reset}',['uses'=>'HomeController@newpass']);

Route::post('/process_reset',['uses'=>'HomeController@process_reset']);

Route:: post('/process_login',['uses'=>'HomeController@prosesl'])->middleware(['guest']);

Route:: get('/add_contact/{id}',['uses'=>'ContactController@contact'])->middleware(['auth']);

Route:: post('/process_add_contact',['uses'=>'ContactController@prosescontact'])->middleware(['auth']);


Route:: get('/view_contact/{id}',['uses'=>'ContactController@view_contact'])->middleware(['auth']);

