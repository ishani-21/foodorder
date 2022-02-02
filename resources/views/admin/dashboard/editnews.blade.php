@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <form method="POST" enctype="multipart/form-data" action="{{route('admin.news.update',$data->id)}}" >
            @csrf
            @method('put')
            <div class="form-group">
            <div class="form-group">
            <label for="title">title</label>
                <!-- <input type="text" id="email" class="form-control input-sm chat-input" placeholder="Email"/> -->
                <input id="title" type="text" class="form-control input-sm chat-input @error('title') is-invalid @enderror" name="title" value="{{ old('title', isset($data->title) ? $data->title : '') }}" placeholder="title" autocomplete="title" autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="form-group">
            <label for="description">description</label>
                <!-- <input type="text" id="userdescription" class="form-control input-sm chat-input" placeholder="description"/> -->
                <input id="description" type="description" class="form-control input-sm chat-input @error('description') is-invalid @enderror" name="description" value="{{ old('description', isset($data->description) ? $data->description : '') }}" placeholder="description" autocomplete="description">

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>


            <div class="form-group">
            <label for="image1">image</label>
                <!-- <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Password"/> -->
                <input id="image1" type="file" class="form-control input-sm chat-input @error('image1') is-invalid @enderror" name="image1" placeholder="image1" autocomplete="image1">

                    @error('image1')
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