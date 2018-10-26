@extends('template') 

@section('judul')

<p>WELCOME TO MY WEBSITE </p>

@endsection 

@section('isiweb') 

<html>
<head>

  <script>
    $(document).ready(function(){
      $('.slider').bxSlider();
    });
  </script>

  
   
</head>
<body>

  <div class="bxslider">
    <div><img src="{{ URL::to('/images/indo.jpg' ) }}"/></div>
    <div><img src="{{ URL::to('/images/bale.jpg' ) }}"/></div>
	    <div><img src="{{ URL::to('/images/aff2018.jpg' ) }}"/></div>
  </div>
  
  
  

<h2> Top Thread </h2>






<table class= "table table-borderd table-hover table-striped "> 
<thead> 

<tr>

<td align="center">No</td>
<td align = "center">Topic</td> 
<td align = "center">Action</td> 
<td align = "center">Rating</td> 
<td align = "center">Posted At</td> 
 

</tr> 

</thead>

<tbody>

@foreach($threads as $m)

<tr> 


<td> {{ $loop->iteration}} </td> 
<td>  <a href="{{ Url('/reply_thread')}}/{{ $m->id}}" class="btn-btn-primary"> {{ $m->judul}} </td> 
<td>  
				<a href="{{ Url('/reply_thread')}}/{{ $m->id}}" class="btn-btn-primary"> 
		<span class= "fa fa-pencil">
		</span> 
		Reply Post
		</td> 
		
		
		<td>   <select name="f" class="example2">
  <option @if ($m->rating==1) selected @endif value="1">1</option>
  <option @if ($m->rating==2) selected @endif  value="2">2</option>
  <option @if ($m->rating==3) selected @endif  value="3">3</option>
  <option @if ($m->rating==4) selected @endif  value="4">4</option>
  <option @if ($m->rating==5) selected @endif  value="5">5</option>
  
</select>
		 </td> 
		
		<td> {{ $m->created_at}} </td> 
		
		
		@endforeach
		
		
		
		
		</tbody>
		
		</table>
		
		{{$threads->render()}}
		
		
			 





  



</body>

<script>
$('.bxslider').bxSlider({
  auto: true,
  autoControls: true,
  stopAutoOnClick: true,
  pager: true,
  slideWidth: 600
});

</script>
</html>


<p>TOP SALES </p> 

@endsection

