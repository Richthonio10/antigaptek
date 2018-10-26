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
    echo "Welcome";
	
});

//http://localhost:8000/home

Route::get('/home', function() 
{
	echo "Homepage";
});

Route::get('/about',function()
{
	echo " Name: Hady";
	echo " DOB :18-03-1998";
	
});
// http:localhost:8000/produk/samsung
// http:localhost:8000/produk/asus
// http:localhost:8000/produk/lenovo
Route::get('/produk/samsung',function()
{
	echo "produk samsung galaxy s9 series";
});

Route::get('/produk/{merk}', function($merk)
{
	echo "Product $merk";
});

Route::get('/produk/{merk}/{tipe}', function($merk,$tipe)
	{
		echo " product $tipe dengan brand $merk";
	});
	
//http:localhost:8000/calculator

Route::get('/calculator/{opr}/{cal1}/{cal2}',function($opr,$cal1,$cal2)	
	{
		
		if($opr=="add")
		{
		echo $cal1+ $cal2;
		}
		
		else if($opr=="substract")
		{
			echo $cal1-$cal2;
		}
		else if($opr=="multiple")
		{
			echo $cal1*$cal2;
		}
		
		else if ($opr=="divided")
		{
			echo $cal1/$cal2;
		}
		
	});
	


