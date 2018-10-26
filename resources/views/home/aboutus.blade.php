@extends('template') 

@section('judul')

<p>ABOUT US </p>

@endsection 

@section('isiweb') 

<form enctype="multipart/form-data" method="post" action="{{Url('/process_aboutus')}}">


<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" />
 
 @foreach($errors->all() as$x)
 {{$x}} <br/>
 @endforeach
 
<div class="form-group">
	<label>Name</label>
	<input autofocus placeholder="Name..." name="a" type="text" class="form-control"/>
	</div>
	
	
	
	<div class="form-group">
	<label>Subject</label>
	<input placeholder="Subject..." name="b" type="text" class="form-control"/>

	</div>
	
	<div class="form-group">
	<label>Message</label>
	<input placeholder="Message..." name="c" type="text" class="form-control"/>

	</div>
	

	<!-- btn danger -->
	<!-- btn info -->
	<!-- btn success -->
	<!-- btn info -->
	<button type="submit" class= "btn btn-info">Submit</button>
	
	
</form>

@endsection