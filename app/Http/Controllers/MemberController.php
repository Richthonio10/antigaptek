<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lang;
use Hash;
use App\member;
use App\about;
use Mail;
use Auth;
use Session;
use PDF;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
class MemberController extends Controller
{
	

	function index() 
	{
		// maksudnya ini list member
		// buat nampilin semua data 
		//$datanya= Member::all();
		
		
		// kalau simplepaginate cuma previous sama next yang ditampiln
		$datanya= Member::Paginate(3);
		//buat nampilin perhalaman
		
		
		
		return view('member.index',['members'=>$datanya]); 
	
		
	}
	
	function proses_edit(Request $r)
	{ 
	
	
	
		$id= $r->input("id");
		$y= $r->input("b");
		$w= $r->input("d");
		$d= $r->file("e");
      	$m = Member::find($id);
		
		// simpan filenya

		//$d->move("pict",$d->getClientOriginalName());
	
		if($d!=NULL)
		{
		$namafile = $m->picture;
		$d->move("pict",$namafile);
		}

		
		//$namafile = uniqid(). "_" .$d->
		//getClientOriginalName();
		
	
		//simpan ke database menggunakan model
		
		$m->name= $y;
		$m->phone= $w;
		if( $d !=NULL)
		{
				$m->picture=$namafile;
		}
		
		$m->save();
		
	
		
		Session::flash("status","Edit Success"); 
		Session::flash("tipe","success"); 
		
		return redirect('/Member');
	
	}
	
	function pdf_tiap($id)
	{
		
		$membernya= Member::find($id);
		$pdf= PDF::loadView('member.pdfm', ['data'=>$membernya]); //file baru 
		return $pdf->download('data_member.pdf'); //nama filenya
		
			
	}
	
	function excel()
	{
		 return Excel::download(new UsersExport, 'users.xlsx');
	}
	
	function csv()
	{
$Members = Member::get(); // All users
$csvExporter = new \Laracsv\Export();
$csvExporter->build($Members, ['email', 'name','phone'])->download();
	}

	
	
	
	
	function edit($id) 
	{
			$membernya = Member::find($id);
			
			return view('member.edit', ['m'=>$membernya]);
	}
	
	
	function hapus(Request $r)
	{
		$idnya = $r->input("id");
		
		$membernya=Member::find($idnya);
		$membernya-> delete();
		return redirect()->back();
	

	
		 
	}
	
	function pdf_member() 
	{
		$data= Member::all();
		$pdf= PDF::loadView('member.pdf', ['data'=>$data]); //file baru 
		return $pdf->download('data_member.pdf'); //nama filenya
		
		
	}
	

	
	
	
	
    //
}
