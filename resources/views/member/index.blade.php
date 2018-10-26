@extends('template')
@section('judul')

<h2> List Member </h2>

@endsection

@section('isiweb')


<a href="{{Url('/pdf_member')}}" class= "btn btn-success">  
<span class= "fa-fa-download"> 
</span> 

Download as Pdf

</a>

<a href="{{Url('/excel_member')}}" class= "btn btn-success"> 
<span class = " fa fa-download"> 
</span> 

Download as Excel
</a>


<a href="{{Url('/csv_member')}}" class= "btn btn-success"> 
<span class = " fa fa-download"> 
</span> 

Download as csv
</a>

<!--<style> 
table {
	table-layout:fixed;
	word-wrap:break-word;
	
}

</style>
-->

<table class= "table table-bordered table-hover table-striped "> 
<thead> 

<tr> 
    <td align ="center" > No</td>
	<!--<td align ="center" > Salary<td> -->
	<td align="center"  >Email</td> 
	<td align= "center" >Name</td> 
	<td align ="center" >PhoneNumber</td> 
	<td align ="center" >Picture Member </td>
	<td align = "center">Rating</td> 
	<td align = "center">Skill</td>
	<td align = "center">Created At1</td>
	<td align = "center">Created At2</td>
	<td align = "center">Action</td>
 
	</tr> 
	
	</thead> 
	
	<tbody> 
	
	<?php
	$skill = ["Messi", "Ronaldo", "Bale", "Neymar"];
	
	
	?>
	@foreach($members as $m) 
	
	<tr> 
	
		<td>{{ $loop->iteration}}</td>
		<!--<td>Rp {{number_format(10000000)}}</td> -->
		<td>{{ $m->email}} </td> 
		<td>{{ $m->name}} </td> 
		<td> {{ $m->phone}} </td>
			<td> 
			<a href="{{Url('pict')}}/{{$m->picture}}" data-lightbox="bebas" >
		 <img style= 'width:150px;height:150px;'src="{{Url('pict')}}/{{$m->picture}}"/> 
		
		</a>
		</td>
				
		<td> 
  <select name="f" class="example2">
  <option @if ($m->rating==1) selected @endif value="1">1</option>
  <option @if ($m->rating==2) selected @endif  value="2">2</option>
  <option @if ($m->rating==3) selected @endif  value="3">3</option>
  <option @if ($m->rating==4) selected @endif  value="4">4</option>
  <option @if ($m->rating==5) selected @endif  value="5">5</option>
  
</select>
		<!--{{$m->rating}} -->
		</td>
		
		
			<td>
		<ul> 
		@foreach($skill as $s) 
		<li> {{ $s }} </li>
		
		@endforeach
		
		</ul>
		
		
		 </td>
		 
		 
	
		
		 
		 
		 
		
		<td> {{ $m->created_at}} </td>
		<td> {{ date("d-M-Y", strtotime($m->created_at))}} </td>
		


	
		 
		 
		 <td>
		 
				<a href="{{ Url('/edit_member')}}/{{ $m->id}}" class="btn-btn-primary"> 
		<span class= "fa fa-pencil">
		</span> 
		Edit
		
		</a>
		 
		 <!-- jika yang lagi login tidak sama dengan id yang saya cetak     -->
			@if(Auth::user()->id != $m->id)
			@if(Auth::user()->role =='admin')
		 <form method="post" action="{{Url('/proses_delete_member')}}">
		  <input type="hidden" name="_token" 
		  value="{{csrf_token() }}"/>
		  
	
		  
		 <button onclick="return confirm('Are you sure to delete? ');" type="submit" class="btn btn-danger"> <span class="fa fa-trash"></span> Delete </button> 
		 <input type="hidden" name="id"
		 value= "{{$m->id}}"/>
		 
		 
		 
		 
	</form>
	
	@endif
	@endif
	    	
		<a href="{{Url('/pdf_tiap')}}/{{ $m->id}}" class= "btn btn-success">
		<span class= "fa fa-download"> 
		</span>
		Download
		</a>
		
	
	
	<a href="{{Url('/add_contact')}}/{{ $m->id}}" class= "btn btn-success">
		<span class= "fa fa-download"> 
		</span>
		Add Contact 
		</a>		
		
		
		
			<a href="{{Url('/view_contact')}}/{{ $m->id}}" class= "btn btn-success">
		<span class= "fa fa-download"> 
		</span>
		View Contact
		</a>
			
	
	
	

	
		</td>
	</tr>
	

	@endforeach
	</tbody> 
	
	</table> 
	
	{{$members->render()}}
	
	 

@endsection