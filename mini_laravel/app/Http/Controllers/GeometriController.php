<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeometriController extends Controller
{
    function geom($geo,$ang1,$ang2) 
	{
		if($geo=="segitiga")
		{
		  echo ($ang1*$ang2)/2;
		}
		
		else if($geo=="persegi")

		{
			echo $ang1*$ang2;
		}			
		
	}
}
