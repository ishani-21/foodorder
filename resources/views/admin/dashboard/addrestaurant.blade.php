@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <form method="POST" enctype="multipart/form-data" action="{{ route('admin.restaurant.store') }}">
        @csrf
        <!-- <div class="form-login"> -->
        <div class="form-group">
        <label for="name">name</label>
            <input id="name" type="text" class="form-control input-sm chat-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
        <label for="mobile">mobile</label>
            <input id="mobile" type="text" class="form-control input-sm chat-input @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile" autocomplete="mobile" autofocus>

            @error('mobile')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input id="email" type="email" class="form-control input-sm chat-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="address">address</label>
            <input id="address" type="text" class="form-control input-sm chat-input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address" autocomplete="address" autofocus>

            @error('address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>


        <div class="form-group">
            <label for="image">image</label>
            <input id="image" type="file" class="form-control input-sm chat-input @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" placeholder="image" autocomplete="image" autofocus>

            @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">password</label>
            <input id="password" type="password" class="form-control input-sm chat-input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="password" autofocus>

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span> 
            @enderror
        </div>
        <div class="form-group">
            <label for="cpassword">confirm password</label>
            <input id="cpassword" value="{{ old('cpassword') }}" type="password" class="form-control input-sm chat-input @error('cpassword') is-invalid @enderror" name="cpassword" placeholder="Confirm Password">

            @error('cpassword')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span> 
            @enderror
        </div>
        <button type="submit" class="btn btn-primary submit">
            {{ __('Register') }}
        </button>
        <!-- </div> -->
    </form>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection