@extends('template')
@section('judul')

<h2>Add Contact</h2>

@endsection

@section('isiweb')
<form enctype="multipart/form-data" method="post" action="{{Url('/process_add_contact')}}">


<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" />
 
<input type="hidden" name="id" value= "{{ $data->id }} "/>

 	
 
 <h3> Email: {{$data->email}}  </h3>
 
 
 
 <div class="form-group">
	<label>Address</label>
	<input autofocus placeholder="Input Your Address" name="j" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">
	</span>  
	</div>

	
	
	
	

	
	
	
	
	
	<!-- btn danger -->
	<!-- btn info -->
	<!-- btn success -->
	<!-- btn info -->
	<button type="submit" class= "btn btn-info">Submit</button>
	
	
</form>
@endsection