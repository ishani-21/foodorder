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
                    <th scope="col">Payment Customer Id</th>
                    <td>{{ $data->payment_customer_id }}</td>
                </tr>
                <tr>
                    <th scope="col">Amount</th>
                    <td>{{ $data->amount }}</td>
                </tr>
                <tr>
                    <th scope="col">Currency</th>
                    <td>{{ $data->currency }}</td>
                </tr>
                <tr>
                    <th scope="col">Source</th>
                    <td>{{ $data->source }}</td>
                </tr>
                <tr>
                    <th scope="col">Description</th>
                    <td>{{ $data->description }}</td>
                </tr>
                
            </tbody>
        </table>
        <center><a href="{{route('admin.main')}}"><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
    @endsection