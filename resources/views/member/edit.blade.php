@extends('template')
@section('judul')

<h2>Edit</h2>

@endsection

@section('isiweb')
<form enctype="multipart/form-data" method="post" action="{{Url('/process_edit')}}">

<input type="hidden" name="id" value= "{{ $m->id }} "/>

<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" />
 
 @foreach($errors->all() as$x)
 {{$x}} <br/>
 @endforeach
 
	
	
	
	<div class="form-group">
	<label>Full Name</label>
	<input value="{{ $m->name }} " name="b" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("b")}}
	 </span>
	</div>
	

	
	<div class="form-group">
	<label>Phone</label>
	<input value= "{{ $m->phone }}"  placeholder="Phone.." name="d" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("d")}}
	</span>
	</div>
	
	<div class="form-group">
	<label>Photo</label>
	<input placeholder="Put your Profile Picture" name="e" class="form-control" type="file" accept ="image/*"/>
	<span style="color:red;font-style:italic">{{$errors->first("e")}}
	</span>
	</div>
	

	
	
	<!-- btn danger -->
	<!-- btn info -->
	<!-- btn success -->
	<!-- btn info -->
	<button type="submit" class= "btn btn-info">Submit</button>
	
	
</form>
@endsection