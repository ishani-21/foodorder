@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h5>Order Details :-</h5>
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
                    <td class="id">{{ $data->id }}</td>
                </tr>
                <tr>
                    <th scope="col">order_id</th>
                    <td>{{ $data->order_id}}</td>
                </tr>
                @foreach($user as $user)
                <tr>
                    <th scope="col">user Name</th>
                    <td>{{ $user->name}}</td>
                </tr>
                @endforeach
                <tr>
                    <th scope="col">Total Price</th>
                    <td><b>{{ $data->total}}</b></td>
                </tr>
            </tbody>
        </table>
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">restaurants_id</th>
                <th scope="col">food_id</th>
                <th scope="col">price</th>
                <th scope="col">quantity</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orderdetail as $orderdetail)
            <tr class="parent_tr">
                <td>{{ $orderdetail->id }}</td>
                <?php
                $name = App\Models\Restaurant::where('id', $orderdetail->restaurants_id)->select('name')->get();
                ?>
                @foreach($name as $name)
                    <td>{{ $name->name }}</td>
                @endforeach
                <?php
                $food = App\Models\Food::where('id', $orderdetail->food_id)->select('name','price')->get();
                ?>
                @foreach($food as $food)
                    <td>{{ $food->name }}</td>
                    <td>{{ $food->price }}</td>
                @endforeach
                <td>{{ $orderdetail->quantity }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <center><a ><button type="button" class="btn btn-outline-danger delivery"><i class="mdi mdi-truck-delivery"></i>  Delivery  <i class="mdi mdi-truck-delivery"></i></button></a></center><br>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection