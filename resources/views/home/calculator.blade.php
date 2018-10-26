@extends('template')
@section('judul')

<h2>CALCULATOR</h2>

@endsection

@section('isiweb')

<form method="post" action="{{Url('/result_calc')}}">



<input type="hidden" name="_token" 
 value="{{ csrf_token()}}" />
<div class="form-group">
	<label>Angka1</label>
	<input autofocus  placeholder="Input first Number" name="a1" type="number" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("a1")}}
	</span>
	
	</div>
	
	<div class="form-group">
	
	
	<label>Calculation Method</label>
	<select placeholder="Select Calculate option" name="cal" type="text" class="form-control">
	<option value= "+">Add</option> 
	<option value= "-">Substract</option> 
	<option value= "*">Multiple</option>
	<option value= "/">Divide</option>
		
	</select>
	<span style="color:red;font-style:italic">{{$errors->first("cal")}}
	 </span>

	</div>
	
	
	<div class="form-group">
	<label>Angka2</label>
	<input  placeholder="Input Second Number" name="a2" type="number" class="form-control"/>
	<span style="color:red;font-style:italic">{{$errors->first("a2")}}
	 </span>
	</div>
	
	<button type="submit" class= "btn btn-info">Calculate</button>
	
	
	</form>
	@endsection
	
	
	
	
	