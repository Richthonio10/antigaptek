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
	
	<tr> 
	
		<td>{{ $data->email}} </td> 
		<td>{{ $data->name}} </td> 
		<td> {{ $data->phone}} </td>
<td>
		
		 <img style='width:150px;height:150px;'src="pict/{{$data->picture}}"/> 
		
		</td>
				
		<td> 
		{{$data->rating}}
 
  

		
		</td>
		
		
		<td> {{ $data->created_at}} </td>
		<td> {{ date("d-M-Y", strtotime($data->created_at))}} </td>
		
	
	</tr>
	
	</tbody>
	</table>