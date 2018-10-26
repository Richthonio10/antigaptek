<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lang;
use Hash;
use App\Member;
use App\About;
use Mail;
use Auth;
use Session;
use PDF;
use App\Alamat;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;


class ContactController extends Controller
{
	function contact ($id)
	{
		$data= Member::find($id);
		return view('contact.add_contact', ['data'=>$data]);
	}
	
	
	function prosescontact ( Request $r)
	{
		$id= $r->input("id");
		$m = $r->input("j");


		$n = new Alamat;
		$n->member_id=$id;
		$n->alamat=$m;
		$n->save();
		
		return redirect('/Member');
		
		
	}
	
	function view_contact($id)
	{
		$member= Member::find($id);
	    return view('contact.list', ['data' =>$member]);
	}
	
    //
}
