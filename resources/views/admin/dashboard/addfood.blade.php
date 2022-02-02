@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.food.store')}}">
            @csrf
            <div class="form-group">
                <label for="restaurant_id">Restaurant</label>

                <select id="restaurant_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('restaurant_id') is-invalid @enderror" name="restaurant_id" value="{{ old('restaurant_id') }}">
                    <option class="dropdown-item" value="0">select one restaurant_id</option>
                    @foreach($restaurant as $restaurant)
                    <a href="{{ route('admin.food.show',$restaurant->id) }}">
                        <option class="dropdown-item" value="{{ $restaurant->id }}" {{ $restaurant->id == old('restaurant_id') ? 'selected' : '' }}>{{ $restaurant->name }}</option>
                    </a>
                    @endforeach
                </select>
            </div>
            @error('restaurant_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="form-group">
                <label for="category_id">Category</label>
                <select id="category_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('category_id') is-invalid @enderror" name="category_id" value="{{ old('category_id') }}">
                    <option class="dropdown-item" value="0">select one category_id</option>
                </select>
            </div>
            @error('category_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="form-group">
                <label for="subcategory_id">Category</label>
                <select id="subcategory_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('subcategory_id') is-invalid @enderror" name="subcategory_id" value="{{ old('subcategory_id') }}">
                    <option class="dropdown-item" value="0">select one subcategory_id</option>
                </select>
            </div>
            @error('subcategory_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" id="name" placeholder="name">
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="price">price</label>
                <input type="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" name="price" id="price" placeholder="price">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="discription">discription</label>
                <input type="discription" class="form-control @error('discription') is-invalid @enderror" value="{{ old('discription') }}" name="discription" id="discription" placeholder="discription">
                @error('discription')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label>image 1</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image" placeholder="Image">
                @error('image')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>image 2</label>
                <input type="file" class="form-control @error('image2') is-invalid @enderror" name="image2" id="image2" placeholder="Image2">
                @error('image2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label>image 3</label>
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
        <center><a href="{{route('admin.main')}}"><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
    @endsection
    @push('js')
    <script>
        $(document).ready(function() {
            $("#category_id").html('');
            $("#subcategory_id").html('');
            $('#restaurant_id').on('change', function() {
                var restaurants_id = this.value;
                $.ajax({
                    url: "{{ route('admin.editrestaurant') }}",
                    type: "POST",
                    data: {
                        restaurants_id: restaurants_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        // console.log(result['name']);
                        $('#category_id').html('<option class="dropdown-item" value="">Select Sub Category</option>');
                        $.each(result, function(key, value) {
                            console.log(value);
                            $("#category_id").append('<option class="dropdown-item" value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            })
            $('#category_id').on('change', function() { 
                var categorys_id = this.value;
                console.log(categorys_id);
                $.ajax({
                    url: "{{ route('admin.editcategory') }}",
                    type: "POST",
                    data: {
                        categorys_id: categorys_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {
                        // console.log(result['name']);
                        $('#subcategory_id').html('<option class="dropdown-item" value="">Select Sub Category</option>');
                        $.each(result, function(key, value) {
                            $("#subcategory_id").append('<option class="dropdown-item" value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            })
        });
    </script>
    @endpush