@extends('layout')
@section('judul')


    <h2>LOGIN FORM </h2>
@endsection

@section('isiweb')
    <form enctype="multipart/form-data" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Name</label>
            <input name="name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Password </label>
            <input name="password" type="password" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Login</button>
        @if(!empty($errors->first()))
            <div style="text-align: center; color: red;">
                {{ $errors->first() }}
            </div>
        @endif
        <a href="{{ url('register') }} ">Belum Punya Akun? Daftar Disini</a>
    </form>

@endsection