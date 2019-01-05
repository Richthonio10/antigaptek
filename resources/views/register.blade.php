@extends('layout')
@section('judul')

    <h2> REGISTER FORM</h2>

@endsection


@section('isiweb')
    <form enctype="multipart/form-data" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label> Name</label>
            <input   name="name" type="text" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input  name="password" type="password" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Re-type Password</label>
            <input name="password_confirmation" type="password" class="form-control"/>
        </div>
        <div class="form-group">
            <label> Photo </label>
            <input name="photo" type="file" class="profile/*" class="form-control"/>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if(!empty($errors->first()))
        <div style="text-align: center; color: red;">
            {{ $errors->first() }}
        </div>
    @endif
@endsection