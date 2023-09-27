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
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <legend class="text-semibold">Enter user information</legend>

            <div class="form-group">
                <label>Enter your name:</label>
                <input type="text"  value="{{ old('name') }}" name="name" class="form-control" placeholder="your name">
            </div>

            <div class="form-group">
                <label>Enter your Email:</label>
                <input type="text" value="{{ old('email') }}" name="email" class="form-control" placeholder="your email">
            </div>

            <div class="form-group">
                <label>Enter your password:</label>
                <input type="password" value="{{ old('password') }}" name="password" class="form-control" placeholder="Your strong password">
            </div>

            <div class="form-group">
                <label>Repeat password:</label>
                <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" class="form-control" placeholder="Repeat password">
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
            </div>
            
        </form>

        
    </div>
</div>
@endsection