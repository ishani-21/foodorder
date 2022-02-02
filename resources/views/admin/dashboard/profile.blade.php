@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h5>Profile Details :-</h5>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="col">Name</th>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <th scope="col">Mobile</th>
                <td>{{ Auth::user()->mobile }}</td>
            </tr>
            <tr>
                <th scope="col">Email</th>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <th scope="col">Address</th>
                <td>{{ Auth::user()->address }}</td>
            </tr>
            <tr>
                <th scope="col">Image</th>
                <td><img src="{{asset('assets/image/admin/'.Auth::user()->image)}}"></img></td>
            </tr>
            </tbody>
        </table>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a>
        <a href="{{route('admin.editprofile')}}" ><button type="button" class="btn btn-outline-dark">Edit Profile</button></a></center>
    </div>
@endsection