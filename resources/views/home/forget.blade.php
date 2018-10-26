@extends('template')
@section('judul')

<h2> Reset Password </h2>

@endsection

@section('isiweb')

<form enctype="multipart/form-data" method="post" action="{{Url('/process_forget')}}">


<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" /> 
 
 <p> We can help you reset your password using your email address to linked your account </p> 

<div class="form-group">
	<label>{{Lang::get('register.label_email')}}</label>
	<input autofocus placeholder="Email..." name="a" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("a")}}
	</span>  
	</div>

	<button type="submit" class= "btn btn-info">Submit</button>
</form>	
@endsection