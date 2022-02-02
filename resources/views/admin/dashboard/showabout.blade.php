@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.about_us.update',$about->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="5" cols="50" type="text" class=" word-wrap form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description....">{{ $about->discription }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label>File upload</label><br>
                <img src="{{asset('assets/image/about/'.$about->image1)}}" width="90px" height="90px"></img>
                <input type="file" class="form-control @error('image1') is-invalid @enderror" name="image1" id="image1" placeholder="Image1">
                @error('image1')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label>File upload</label><br>
                <img src="{{asset('assets/image/about/'.$about->image2)}}" width="90px" height="90px"></img>
                <input type="file" class="form-control @error('image2') is-invalid @enderror" name="image2" id="image2" placeholder="Image2">
                @error('image2')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label>File upload</label><br>
                <img src="{{asset('assets/image/about/'.$about->image3)}}" width="90px" height="90px"></img>
                <input type="file" class="form-control @error('image3') is-invalid @enderror" name="image3" id="image3" placeholder="Image3">
                @error('image3')
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