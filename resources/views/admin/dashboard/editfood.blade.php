@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" method="POST" enctype="multipart/form-data" action="{{route('admin.food.update',$data->id)}}">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="restaurants_id">Restaurant</label>

                <select id="restaurants_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('restaurants_id') is-invalid @enderror" name="restaurants_id" value="{{ old('restaurants_id') }}">
                    <option class="dropdown-item" value="0">select one restaurants_id</option>
                    @foreach($restaurants as $restaurants)
                    <option class="dropdown-item" value="{{ $restaurants->id }}" {{ $restaurants->id == $data->restaurants_id ? 'selected' : '' }}>{{ $restaurants->name }}</option>
                    @endforeach
                </select>
                @error('restaurants_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="categorys_id">Category</label>
                <select id="categorys_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('categorys_id') is-invalid @enderror" name="categorys_id" value="{{ old('categorys_id') }}">
                    <option class="dropdown-item" value="0">select one categorys_id</option>
                    @foreach($categorys as $categorys)
                    <option class="dropdown-item" value="{{ $categorys->id }}" {{ $categorys->id == $data->categorys_id ? 'selected' : '' }}>{{ $categorys->name }}</option>
                    @endforeach
                </select>
                @error('categorys_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="subcategorys_id">Category</label>
                <select id="subcategorys_id" class="btn btn-gradient-primary mr-2 dropdown-toggle form-control @error('subcategorys_id') is-invalid @enderror" name="subcategorys_id" value="{{ old('subcategorys_id') }}">
                    <option class="dropdown-item" value="0">select one subcategorys_id</option>
                    @foreach($subcategorys as $subcategorys)
                    <option class="dropdown-item" value="{{ $subcategorys->id }}" {{ $subcategorys->id == $data->subcategorys_id ? 'selected' : '' }}>{{ $subcategorys->name }}</option>
                    @endforeach
                </select>
                @error('subcategorys_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>



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
                <label for="price">price</label>
                <input type="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', isset($data->price) ? $data->price : '') }}" name="price" id="price" placeholder="price">
                @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="discription">discription</label>
                <input type="discription" class="form-control @error('discription') is-invalid @enderror" value="{{ old('discription', isset($data->discription) ? $data->discription : '') }}" name="discription" id="discription" placeholder="discription">
                @error('discription')
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
            $('#restaurants_id').on('change', function() {
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
                        $('#categorys_id').html('<option class="dropdown-item" value="">Select Sub Category</option>');
                        $.each(result, function(key, value) {
                            console.log(value);
                            $("#categorys_id").append('<option class="dropdown-item" value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            })
            $('#categorys_id').on('change', function() {
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
                        $('#subcategorys_id').html('<option class="dropdown-item" value="">Select Sub Category</option>');
                        $.each(result, function(key, value) {
                            $("#subcategorys_id").append('<option class="dropdown-item" value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            })
        });
    </script>
    @endpush