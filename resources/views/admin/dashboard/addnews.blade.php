@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.news.store')}}">
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input type="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" name="title" id="title" placeholder="Title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea rows="5" cols="50" type="text" class=" word-wrap form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="Description....">{{ old('description') }}</textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label>File upload</label>
                <input type="file" class="form-control @error('image1') is-invalid @enderror" name="image1" id="image1" placeholder="Image1">
                @error('image1')
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