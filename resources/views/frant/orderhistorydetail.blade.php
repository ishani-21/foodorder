@extends('layouts.app')
@section('content')
{{ $no = 1 }}
<div class="wrapper">
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
      <!-- Content Header (Page header) -->

      <!-- Main content -->
      <section class="content">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <!-- /.card -->
                  @if (Session::has('error'))
                  <div class="alert alert-danger text-center">
                     <a href="{{route('cart.index')}}" class="close" data-dismiss="alert" aria-label="close">×</a>
                     <p>{{ Session::get('error') }}</p>
                  </div>
                  @endif
                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title" style="font-family: cursive;">Orderble Cart</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-hover" style="text-align: center; font-family: cursive; font-size: 18px;">
                           <thead>
                              <tr class="table-info">
                                 <th>No</th>
                                 <th>Order ID</th>
                                 <th>Total</th>
                                 <!-- <th>Transaction ID</th> -->
                              </tr>
                           </thead>

                           <tbody>
                              <td>1</td>
                              <td>{{$order->order_id}}</td>
                              <td>Rs. {{$order->total}}</td>
                              <!-- <td>{{$customer->transaction_id}}</td> -->
                           </tbody>

                        </table>
                        <table id="example1" class="table table-bordered table-striped table-hover" style="text-align: center; font-family: cursive; font-size: 18px;">
                           <thead>
                              <tr class="table-info">
                                 <th>No.</th>
                                 <!-- <th>order_id</th> -->
                                 <th>Restaurants Name</th>
                                 <th>Image</th>
                                 <th>Food Name</th>
                                 <th>Price</th>
                                 <th>Total Price</th>
                                 <th>quantity</th>
                              </tr>
                           </thead>
                           @foreach($orderdetail as $orderdetail)
                           <tbody>
                              <tr>
                                 <td>{{$no++}}</td>
                                 <?php
                                    $name = App\Models\Restaurant::where('id', $orderdetail->restaurants_id)->select('name')->get();
                                 ?>
                                 @foreach($name as $name)
                                    <td>{{ $name->name }}</td>
                                 @endforeach
                                 <?php
                                    $food = App\Models\Food::where('id', $orderdetail->food_id)->select('name', 'price','image')->get();
                                    // dd($food);
                                 ?>
                                 @foreach($food as $food)
                                 <td><img src="{{asset('assets/image/food/'.$food->image)}}" height="50px"></td>
                                    <td>{{ $food->name }}</td>
                                    <td>{{ $food->price }}</td>
                                 @endforeach
                                 <td>{{ $food->price * $orderdetail->quantity }}</td>
                                 <td>{{$orderdetail->quantity}}</td>
                              </tr>
                           </tbody>
                           @endforeach
                           <tfoot>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th>Total :</th>
                              <th>Rs. {{$order->total}}</th>
                           </tfoot>
                        </table>
                     </div>
                     <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
               </div>
               <!-- /.col -->
            </div>
            <!-- /.row -->
         </div>
         <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->
@endsection