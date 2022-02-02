@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="table-responsive">
        <h5>Restorant Details :-</h5>
        <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">ID</th>
                <td>{{ $data->id }}</td>
            </tr>
            <tr>
                <th scope="col">Restorent name</th>
                <td>{{ $data->restaurent['name'] }}</td>
            </tr>
            <tr>
                <th scope="col">Category name</th>
                <td>{{ $data->category['name'] }}</td>
            </tr>
            <tr>
                <th scope="col">Subcategory name</th>
                <td>{{ $data->subcategory['name'] }}</td>
            </tr>
            <tr>
                <th scope="col">Name</th>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <th scope="col">Price</th>
                <td>{{ $data->price }}</td>
            </tr>
            <tr>
                <th scope="col">Discription</th>
                <td class="content-wrapper">{{ $data->discription }}</td>
            </tr>
            <tr>
                <th scope="col">Image</th>
                <td><img class="rounded img-fluid" src="{{asset('assets/image/food/'.$data->image)}}" style="height:100px; width:100px"></img>  <img class="rounded img-fluid" src="{{asset('assets/image/food/'.$data->image2)}}" style="height:100px; width:100px"></img>  <img class="rounded img-fluid" src="{{asset('assets/image/food/'.$data->image3)}}" style="height:100px; width:100px"></img></td>
            </tr>
            </tbody>
        </table>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
</div>
@endsection