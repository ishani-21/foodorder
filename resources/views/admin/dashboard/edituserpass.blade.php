
@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.user.update',$user->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="newpassword">New Password</label>
                <input type="password" class="form-control @error('newpassword') is-invalid @enderror" name="newpassword" id="newpassword" value="{{ old('newpassword', isset($data->newpassword) ? $data->newpassword : '') }}" placeholder="New Password">
                @error('newpassword')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" class="form-control @error('confirmpassword') is-invalid @enderror" name="confirmpassword" id="confirmpassword" value="{{ old('confirmpassword', isset($data->confirmpassword) ? $data->confirmpassword : '') }}" placeholder="Confirm Password">
                @error('confirmpassword')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                {{ __('Submit') }}
            </button>
        </form>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection