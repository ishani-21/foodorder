@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.category.update',$data->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="restaurants_id">Restaurant</label>
                
                    <select id="restaurants_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('restaurants_id') is-invalid @enderror" name="restaurants_id" value="{{ old('restaurants_id') }}">
                        <option class="dropdown-item" value="0">select one restaurants_id</option>
                    @foreach($restaurant as $restaurant)
                        <option class="dropdown-item" value="{{ $restaurant->id }}"{{ $restaurant->id == $data->restaurants_id ? 'selected' : '' }}>{{ $restaurant->name }}</option>
                    @endforeach 
                    </select>
            </div>
            @error('restaurants_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', isset($data->name) ? $data->name : '') }}" name="name" id="name" placeholder="name">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>File upload</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="Image">
                @error('image')
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