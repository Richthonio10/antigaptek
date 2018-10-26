@extends('template') 

@section('judul')

<p>View Contact</p>

@endsection 

@section('isiweb') 

<?php?

?>

<table class= "table table-bordered"> 

<thead> 
<tr>

<th>Alamat </th>
</tr>

</thead>

<tbody> 

<!-- data dari controller,alamats dari member.php yang public function alamats -->
@foreach ($data->alamats as $a)
<tr> 

<td>{{ $a->alamat}}</td>
</tr>

@endforeach()

<tr> 

</tr>

</tbody>
</table>  





@endsection

