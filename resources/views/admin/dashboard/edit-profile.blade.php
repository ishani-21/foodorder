@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <form method="POST" enctype="multipart/form-data" action="{{route('admin.updateprofile')}}" >
            @csrf
            <div class="form-group">

            <label for="name">Name</label>
                <!-- <input type="text" id="email" class="form-control input-sm chat-input" placeholder="Email"/> -->
                <input id="name" type="text" class="form-control input-sm chat-input @error('name') is-invalid @enderror" name="name" value="{{ Auth::guard('admin')->user()->name }}" placeholder="name" autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
            <label for="mobile">Mobile</label>
                <!-- <input type="text" id="usermobile" class="form-control input-sm chat-input" placeholder="mobile"/> -->
                <input id="mobile" type="mobile" class="form-control input-sm chat-input @error('mobile') is-invalid @enderror" name="mobile" value="{{ Auth::guard('admin')->user()->mobile }}" placeholder="mobile" autocomplete="mobile">

                    @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
            <label for="email">Email</label>
                <!-- <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Password"/> -->
                <input id="email" type="email" class="form-control input-sm chat-input @error('email') is-invalid @enderror" name="email" value="{{ Auth::guard('admin')->user()->email }}" placeholder="email" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
            <label for="address">address</label>
                <!-- <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Password"/> -->
                <input id="address" type="text" class="form-control input-sm chat-input @error('address') is-invalid @enderror" name="address" value="{{ Auth::guard('admin')->user()->address }}" placeholder="address" autocomplete="address">

                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
            <label for="image">image</label>
                <!-- <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Password"/> -->
                <input id="image" type="file" class="form-control input-sm chat-input @error('image') is-invalid @enderror" name="image" placeholder="image" autocomplete="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="wrapper">
                <span class="group-btn">
                    <!-- <a href="#" class="btn btn-danger btn-md">login <i class="fa fa-sign-in"></i></a> -->
                    <button type="submit" class="btn btn-danger btn-md">Update</button>
                </span>
            </div>
        </form>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection