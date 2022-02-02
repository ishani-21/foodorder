
@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.subcategory.update',$data->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="categorys_id">categorys_id</label>
                
                    <select id="categorys_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('categorys_id') is-invalid @enderror" name="categorys_id" value="{{ old('categorys_id') }}">
                        <option class="dropdown-item" value="0">select one categorys_id</option>
                    @foreach($category as $category)
                        <option class="dropdown-item" value="{{ $category->id }}"{{ $category->id == $data->categorys_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach 
                    </select>
            </div>
            @error('categorys_id')
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