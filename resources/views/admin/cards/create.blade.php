@extends('admin.layouts.layout')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="panel panel-flat">
    <div class="panel-body">
        <form action="{{ route('cards.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <legend class="text-semibold">Enter card information</legend>
            <div class="form-group">
                <label>Enter your cover:</label>
                <input type="file"  value="{{ old('cover') }}" name="cover" class="form-control" placeholder="your name">
            </div>

            <div class="form-group">
                <label>Enter your avatar:</label>
                <input type="file" value="{{ old('avatar') }}" name="avatar" class="form-control" placeholder="your email">
            </div>

            <div class="form-group">
                <label>Enter your location:</label>
                <input type="text" value="{{ old('location') }}" name="location" class="form-control" placeholder="Repeat password">
            </div>

            <div class="form-group">
                <label>Enter your description:</label>
                <textarea rows="5" name="location" cols="5" class="form-control" placeholder="Enter your message here">{{ old('description') }}</textarea>
            </div>

            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
            </div>
            
        </form>

        
    </div>
</div>
@endsection