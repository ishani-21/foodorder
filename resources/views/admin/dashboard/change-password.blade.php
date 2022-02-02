@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form method="POST" action="{{ route('admin.changepassword') }}">
            @csrf
            <div class="form-group">
            <label for="currentpassword">Name</label>
                <!-- <input type="text" id="email" class="form-control input-sm chat-input" placeholder="Email"/> -->
                <input id="currentpassword" type="password" class="form-control input-sm chat-input @error('currentpassword') is-invalid @enderror" name="currentpassword" value="{{ old('currentpassword') }}" placeholder="currentpassword" autocomplete="currentpassword" autofocus>

                    @error('currentpassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
            <label for="password">password</label>
                <!-- <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Password"/> -->
                <input id="password" type="password" class="form-control input-sm chat-input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="form-group">
            <label for="confirmpassword">confirmpassword</label>
                <!-- <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Password"/> -->
                <input id="confirmpassword" type="password" class="form-control input-sm chat-input @error('confirmpassword') is-invalid @enderror" name="confirmpassword" value="{{ old('confirmpassword') }}" placeholder="confirmpassword" autocomplete="confirmpassword">

                    @error('confirmpassword')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="wrapper">
                <span class="group-btn">
                    <!-- <a href="#" class="btn btn-danger btn-md">login <i class="fa fa-sign-in"></i></a> -->
                    <button type="submit" class="btn btn-danger btn-md">Login</button>
                </span>
            </div>
        </form>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection