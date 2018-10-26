@extends('template')
@section('judul')

<h2> Login </h2>

@endsection

@section('isiweb')

<form enctype="multipart/form-data" method="post" action="{{Url('/process_login')}}">


<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" /> 

<div class="form-group">
	<label>{{Lang::get('register.label_email')}}</label>
	<input autofocus placeholder="Email..." name="a" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("a")}}
	</span>  
	</div>
	
	<div class="form-group">
	<label>{{Lang::get('register.label_password')}}</label>
	<input id="password" placeholder="Password..." name="c" type="password" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("c")}}
	 </span>
	</div>
	
	 
	 
	
	
	
	
	
	
<div class= "form-group">
 <a href="{{Url('/forget')}}">Forget Password? 
 </a> 
 <span style="color:red;font-style:bold"> 
 </span>
</div>
	
	
	<button type="submit" class= "btn btn-info">Submit</button>
</form>	
@endsection