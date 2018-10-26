@extends('template')
@section('judul')


<h2>Add New Forum</h2>

@endsection

@section('isiweb')
<form enctype="multipart/form-data" method="post" action="{{Url('/proses_add_thread')}}">

<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" />
 
  <div class="form-group">
	<label>Judul</label>
	<input autofocus placeholder="Put the title...." name="m" type="text" class="form-control"/>
	<span style="color:red;font-style:italic">
	</span>  
	</div>
	
	<div>
	<label>Isi </label>
	<textarea name="n" id="editor" placeholder="What's On Your Mind....">
   &lt;p&gt;Put Your Content In here.&lt;/p&gt
</textarea>

</div>


		<button type="submit" class= "btn btn-info">Submit</button>
		
		
		</form>
		
@endsection

	