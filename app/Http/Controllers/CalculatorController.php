<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    function calc($cal,$ang1,$ang2)
	{
		if($cal=="sum")
		{
		  $hasil = $ang1+$ang2; 
		  return view ('cal1',['jen'=>'+','a1'=>$ang1,'a2'=>$ang2,'has'=>$hasil]);
		}
		
		else if($cal=="divide") 
		{
		 $hasil= $ang1/$ang2; 
			return view ('cal1',['jen'=>'/','a1'=>$ang1,'a2'=>$ang2,'has'=>$hasil]);
			
		}
		
		else if($cal=="multiple")
		{
		  $hasil=$ang1*$ang2; 
			return view ('cal1',['jen'=>'*','a1'=>$ang1,'a2'=>$ang2,'has'=>$hasil]);
		}
		
		else if($cal=="substract")
		{
		 $hasil=$ang1-$ang2; 
			return view ('cal1',['jen'=>'-'],['a1'=>$ang1],['a2'=>$ang2,'has'=>$hasil]);
		}
		
	}
}
