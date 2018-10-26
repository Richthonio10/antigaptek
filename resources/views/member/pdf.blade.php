<table class= "table table-borderd table-hover table-striped "> 

<thead>

<tr> 
    <td align ="center" > No</td>
	<td align="center"  >Email</td> 
	<td align= "center" >Name</td> 
	<td align ="center" >PhoneNumber</td> 
	<td align ="center" >Picture Member </td>
	<td align = "center">Rating</td> 
	<td align = "center">Created At1</td>
	<td align = "center">Created At2</td>
	

	</tr> 
	
	</thead> 
	
	<tbody>
	
	
 @foreach($data as $m) 
	<tr> 
	
		<td>{{ $loop->iteration}}</td>
		<td>{{ $m->email}} </td> 
		<td>{{ $m->name}} </td> 
		<td> {{ $m->phone}} </td>
<td>
		
		 <img style='width:150px;height:150px;'src="pict/{{$m->picture}}"/> 
		
		</td>
				
		<td> 
		{{$m->rating}}
 
  

		<!--{{$m->rating}} -->
		</td>
		
		
		<td> {{ $m->created_at}} </td>
		<td> {{ date("d-M-Y", strtotime($m->created_at))}} </td>
		
	
	</tr>
	@endforeach
	
	</tbody>
	</table>