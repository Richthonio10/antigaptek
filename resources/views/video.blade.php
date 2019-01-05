@extends('layout')
@section('judul')
    <h2>ADD NEW VIDEO</h2>
@endsection

@section('isiweb')
    <form enctype="multipart/form-data" method="POST" action="{{ url('/video/add') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Title</label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Category</label>
            <select name="category" class="form-control">
                <option value="Handphone">Handphone</option>
                <option value="Komputer">Komputer</option>
                <option value="Other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label>Link</label>
            <input name="link" type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-info">Add Video</button>
        @if(!empty($errors->first()))
            <div style="text-align: center; color: red;">
                {{ $errors->first() }}
            </div>
        @endif
    </form>

@endsection