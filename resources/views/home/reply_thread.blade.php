@extends('template')
@section('judul')

<h2>Reply Thread  </h2>



@endsection

@section('isiweb')


</table> 


<form enctype="multipart/form-data" method="post" action="{{Url('/proses_reply_thread')}}">


<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" />
 
 <input type="hidden" name="id" value= "{{ $data->id }} "/>
 
 
 <table class= "table table-bordered"> 

<thead> 
<tr> 

<th> Judul </th>
<th>  Isi  </th>
</tr> 

</thead> 

<tbody>



<td>{{$data->judul}} </td> 
<td> {{$data->isi}} </td> 






</tbody> 
</table> 


<div> 
<h2> Reply View </h2> 
</div>

<table class= "table table-bordered"> 

<thead> 

<tr> 
<td align="center" > No </td> 
<td align ="center"> Isi </td> 
<td align ="center"> Posted At</td>
<td align ="center"> Rated Thread</td>  
</tr> 

</thead> 

<tbody> 

@foreach($data->replies as $b)

<td>{{$loop->iteration}} </td> 
<td>{{$b->isi}} </td> 
<td> {{ $b->created_at}} </td>
		<td> 
  <select name="f" class="example2">
  <option @if ($b->rating==1) selected @endif value="1">1</option>
  <option @if ($b->rating==2) selected @endif  value="2">2</option>
  <option @if ($b->rating==3) selected @endif  value="3">3</option>
  <option @if ($b->rating==4) selected @endif  value="4">4</option>
  <option @if ($b->rating==5) selected @endif  value="5">5</option>
  
</select>
		
		</td> 
</tr> 

@endforeach
</tbody>

</table>

{{$replies->render()}}




	<div>
	<label>Isi </label>
	</div>
 	<div> 
	<textarea rows="10" cols="90" name="o" placeholder="What's in your mind...">
  
</textarea>

</div>


<div> 
<label> Rate This Thread </label> 

  <select name="f" class="example">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  
</select>

</div> 



		<button type="submit" class= "btn btn-info">Submit</button>
		
		
		</form>




@endsection