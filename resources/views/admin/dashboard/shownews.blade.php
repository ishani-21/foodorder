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
                <th scope="col">Name</th>
                <td>{{ $data->title }}</td>
            </tr>
            <tr>
                <th scope="col">Description</th>
                <td>{{ $data->description }}</td>
            </tr>
            <tr>
                <th scope="col">Image 1</th>
                <td><img src="{{asset('assets/image/news/'.$data->image1)}}"></img></td>
            </tr>
            </tbody>
        </table>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection