@extends('template')
@section('judul')

<h2>REGISTER</h2>

@endsection

@section('isiweb')
<form enctype="multipart/form-data" method="post" action="{{Url('/process_register')}}">


<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" />
 
 @foreach($errors->all() as$x)
 {{$x}} <br/>
 @endforeach
 
<div class="form-group">
	<label>{{Lang::get('register.label_email')}}</label>
	<input autofocus placeholder="Email..." name="a" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("a")}}
	</span>  
	</div>
	
	
	
	<div class="form-group">
	<label>Full Name</label>
	<input placeholder="Name..." name="b" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("b")}}
	 </span>
	</div>
	
	<div class="form-group">
	<label>{{Lang::get('register.label_password')}}</label>
	<input placeholder="Password..." name="c" type="password" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("c")}}
	 </span>
	</div>
	
	<div class="form-group">
	<label>Confirmation Password</label>
	<input  placeholder="Confirmation Password..." name="c_confirmation" type="password" class="form-control"/>
	</div>
	
	

	
	

	
	
	
	
	<!-- btn danger -->
	<!-- btn info -->
	<!-- btn success -->
	<!-- btn info -->
	<button type="submit" class= "btn btn-info">Submit</button>
	
	
</form>
@endsection