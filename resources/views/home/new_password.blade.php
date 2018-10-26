@extends('template')
@section('judul')

<h2> Login </h2>

@endsection

@section('isiweb')

<form enctype="multipart/form-data" method="post" action="{{Url('/process_reset')}}">

<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" /> 

<input type="hidden" name="reset" 
value="{{$reset}}"/> 



 
 
<div class="form-group">


	<div class="form-group">
	<label>{{Lang::get('register.label_password')}}</label>
	<input placeholder="Password..." name="c" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("c")}}
	 </span>
	</div>
	
	<div class="form-group">
	<label>Confirmation Password</label>
	<input  placeholder="Confirmation Password..." name="c_confirmation" type="text" class="form-control"/>
	</div>
	
		
	
	<button type="submit" class= "btn btn-info">Submit</button>
</form>	
@endsection