@extends('app')
@section('content')
<form action="/registers" method="POST">
    @csrf
    <div class="mb-3">
        <label for=""> Name <span class="text-danger"></span></label>
        <input type="text" name="name" class="form-control" value="{{ old('name')}}">
    </div>
    @error('name')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
    <div class="mb-3">
        <label for=""> Username <span class="text-danger">*</span></label>
        <input type="text" name="username" class="form-control" value="{{ old('username')}}">
    </div>
    @error('username')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <label for=""> Email <span class="text-danger">*</span></label>
        <input type="email" name="email" class="form-control">
    </div>
    @error('email')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <label for=""> Password <span class="text-danger">*</span></label>
        <input type="password" name="password" class="form-control" >
    </div>
    @error('password')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <label for=""> Password confirm <span class="text-danger">*</span></label>
        <input type="password" name="password_confirmation" class="form-control" >
    </div>
    @error('password_confirmation')
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror

    <div class="mb-3">
        <button class="btn btn-primary">Register</button>
        <a type="button" class="btn btn-danger" href="{{ route('login')}}">Login</a>
    </div>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    
    
    
    

    
    
    
    
    
