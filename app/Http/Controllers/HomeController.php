<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Lang;
use Hash;
use App\member;
use App\about;
use App\forum;
use Mail;
use Auth;
use Session;
use App\thread;
use App\reply;
class HomeController extends Controller
{
    function index()
	{
		return view('home.index');
	}
	
	function home()
	{
		$datanya= Thread::Paginate(3);
		$rata = Reply::avg('rating');  	
		
			
	 return view('home.home',['threads'=>$datanya],['threads'=>$rata]); 
		
	}
	
	function about() 
	{
		return view('home.about');
	}
	
	function produk($brand)
	{
		return view('home.produk', ['br'=> $brand]);
	}
	
	function reg()
	{
		return view('home.register');
	}
	
	function newpass($reset)
	{
		
		$membernya= Member::where("password","=",$reset)->first();
		

		return view('home.new_password',['reset'=>$reset] );
		
	}
	
	
	function abo()
	{
		return view('home.aboutus');
	}
	
	function login() 
	{
		return view('home.login');
	}
	
	function logout()
	{
		
		Auth::logout(); 
		return redirect('/login');
	}
	
	function forget()
	{
		return view ('home.forget');
	}
	
	// function process_forget(Request $r) 
	// {
		// Validator::	make($r->all(), 
		// [
		 // 'a'=>'required|email',
		// ],
		
		// [
			// 'a.required'=>'Must be filled',
		// ]
		
		// ) ->validate();
		
	// $x= $r->input("a");
		
	// $m = Member::where("email","=",$x)->first();  	
	
	// $m->email=$x;
	// $m->kode_reset = uniqid();
	// $m->save();
		
		// Mail::send('home.isiforget',['aa'=>$x,'bb'=>$m->kode_reset],function($m1)use($x) 
		// {
			// $m1->subject("Forget Password"); 
			// $m1->to($x); 
			
		// });
		
	
	 // return redirect()->back();
		

			 
	// }
	
	
	// function process_reset(Request $o) 
	// {
		// Validator:: make($o->all(), 
		// [
		 // 'c'=>'required|confirmed',
		 
		// ],
		
		// [
			// 'c.required'=>'New Password Must be filled', 
			
		// ]
		// )-> validate();
		
		
		// $c= $o->input("c");
		// $d= $o->input("reset");
		// $membernya= Member::where("kode_reset","=", $d)->first();
		
		
		// if($membernya !=null) 
		// {
			// $membernya->password=Hash::make($o);
			// $membernya->save();
			
			
		// }
		// //2. kaulau ketemu update status member tersebut jadi 1
		// //redirect login
		
	// return redirect('/login');
		
		

		
		
	// }
	
	
	
		function proses_ajax_login(request $r)
	{
	//x1 dan y1 dari kodingan ajax
	$a= $r->input("x1");
	$c= $r->input("y1");
	
	
	if(Auth::attempt(["email"=>$a,"password"=>$c,"status"=>1]))
	{
		//kalau sukses 
		echo "1";
		
	}		
	
	else{
		
		//kalau gagal
		
		echo "0";
	}	
		
	}
	
	
	function prosesl(Request $r)
	{
		Validator::make($r->all(),
	[	'a'=>'required|email',	
		'c'=>'required',
		
	
	],
		
	[
	
	  'a.required'=>'Must be filled', 
	  'a.email'=>Lang::get('register.label_erroremail'),
	  'c.required'=>'Password must be filled', 
	  
	
		
	]
	)->validate();
	
	$a= $r->input("a");
	$c= $r->input("c");
	
	
	if(Auth::attempt(["email"=>$a,"password"=>$c]))
	{
		return redirect("/home");
	}		
	
	else{
		
		// buat masukin sweet alert dari template.blade.php ,status=session
		Session::flash("status","Invalid Email/Password");
		Session::flash("tipe","error"); 
		
		return redirect("/login");
	}	
	
	
		
	}
	
	
	
	
	
	
	// function pro($kode)
	// {
		// //1, cari data member yang kodenya sesuai dengan $kode_aktivasi
		
		// $membernya= Member::where("kode_aktivasi","=", $kode)->first();
		// // dimana kalau ketemu member kode aktivasinya sesuai sama yang mau diaktivin
		
		// if($membernya !=null) 
		// {
			// $membernya->status=1;
			// $membernya->save();
		// }
		// //2. kaulau ketemu update status member tersebut jadi 1
		// //redirect login
		
	// return redirect("/home");
		
	// }
	
	
	
	
	
	function reb(request $s) 
	{
		
		$x= $s->input("a");
		$y= $s->input("b");
		$z= $s->input("c");
		
		$n = new About;
		$n->name= $x; 
		$n->subject= $y;
		$n->message= $z; 
		
		$n->save();
		
		return redirect('/home');
		
	}
	
	
	function prosesReg(Request $r)
	{ 
	Validator::make($r->all(),
	[	'a'=>'required|email|max:50|min:10|unique:members,email',
		'b'=>'required|max:50|min:2',
		'c'=>'required||min:8|confirmed',

	
	],
		
	[
	
	  'a.required'=>'Must be filled', 
	  'a.email'=>Lang::get('register.label_erroremail'),
	  'a.unique'=>'Email has been registered',
	  'a.max'=> 'maximum 50 character',
	  'a.min'=> 'minimum 10 character',
	  'b.required'=>'Name must be filled', 
	  'b.max' => 'Maximum name  50 character',
	  'b.min' => 'Minimium name 2 character',
	  'c.required'=>'Password must be filled', 
	  'c.min' => 'Minimium name 8 character',

	
		
	]
	)->validate();
	
	
		$x= $r->input("a");
		$y= $r->input("b");
		$z= $r->input("c");
		
		// simpan filenya

		//$d->move("pict",$d->getClientOriginalName());
	
		
		
		//$namafile = uniqid(). "_" .$d->
		//getClientOriginalName();
		
		//kirim sms
		
		//simpan ke database menggunakan model
		$m = new Forum;
		$m->email= $x;
		$m->nama= $y;
		$m->password= Hash::make($z);
		$m->save();
		
		
		//send email
		
		//use $x karena fungsidalam fungsi
	
		
		Session::flash("status", "Thank You for registered in this website, Check Out your email for actvation process"); 
		Session::flash("tipe","success"); 
		
		return redirect('/login');
	
	}

	function cal()
	{	
		return view('home.calculator');
		
	}
	
	function add_thread()
	{
		return view('home.add_thread');
	}
	
	function view_thread()
	{
		$datanya= Thread::Paginate(3);
		$rata = Reply::avg('rating');  	
		
			
		  return view('home.view_thread',['threads'=>$datanya],['threads'=>$rata]); 
	}
	
	function reply_thread($id)
	{
		$data= Thread::find($id);
		$datanya= Reply::Paginate(3);
		return view('home.reply_thread', ['data'=>$data],['replies'=>$datanya]);
	}
	
	function proses_reply_thread( Request $r) 
	{
			$id= $r->input("id");
			$m = $r->input("o");
			$x= $r->input("f");
			
			$n = new Reply;
			$n->thread_id=$id;
			$n->isi=$m;
			$n->rating=$x;
			$n->save();
			return redirect('/view_thread');
				
	}
	
	
	function proses_add_thread ( Request $r)
	{
		Validator::make($r->all(),
	[	'm'=>'required',
		'n'=>'required',
	

	
	],
		
	[
	
	  'm.required'=>' Judul Must be filled', 
	
	 
	  'n.required'=>'Isi  must be filled', 
	
	
		
	]
	)->validate();
	
		$x= $r->input("m");
		$y= $r->input("n");
	
	  $m = new Thread ;
		$m->judul =$x;
		$m->isi= $y;
		$m->save();
		
		
			
		Session::flash("status", "Thank You for adding thread  in this website, Check Out your thread in view thread "); 
		Session::flash("tipe","success"); 
		
		return redirect('/home');
		
		
	}
	
	function res( Request $h)
	{
		Validator::make($h->all(),
		
		['a1'=>'required|integer',
         'cal'=>'required',
		 'a2'=>'required|integer',
		], 
		
	    ['a1.required'=>'Input 1 must be filled',
		 'a1.integer'=>'Input 1 Must be numeric',
		 'cal.required'=>'Method Must be filled',
		 'a2.required'=>'Input 2 must be filled',
		 'a2.required'=>'Input 2 must be numeric',
		 
		]
		)->validate();
		
		
		$a= $h->input("a1");
		$b= $h->input("cal");
		$c= $h->input("a2");
		
		if($b=='+')
		{
		 $hasil=$a+$c;
		}
		
		else if($b=='-')
		{
			$hasil=$a-$c;
		}
		
		else if($b=='*') 
		{
			$hasil=$a*$c;
		}
		
		else if($b=='/')
		{
			$hasil==$a/$b;
		}
		
		

		
		echo " Result of Calculation $a $b $c =$hasil";
	}
	

	
	
	
	
	
	
	
	
}
