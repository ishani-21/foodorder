@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h5>Restorant Details :-</h5>
        <table class="table">
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
                <td>{{ $data->category['name'] }}</td>
            </tr>
            <tr>
                <th scope="col">Name</th>
                <td>{{ $data->name }}</td>
            </tr>
            <tr>
                <th scope="col">Image</th>
                <td><img src="{{asset('assets/image/subcategory/'.$data->image)}}"></img></td>
            </tr>
            </tbody>
        </table>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection