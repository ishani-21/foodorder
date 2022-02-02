@extends('layouts.app')
@section('content')
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
                  @if (Session::has('success'))
                  <div class="alert alert-success text-center">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                     <p>{{ Session::get('success') }}</p>
                  </div>
                  @endif
                  <div class="card">
                     <div class="card-header">
                        <h3 class="card-title" style="font-family: cursive;">Orderble History</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-hover" style="text-align: center; font-family: cursive; font-size: 25px;">
                           <thead>
                              <tr class="table-info">
                                 <th>No.</th>
                                 <th>Restaurant Name</th>
                                 <th>Name</th>
                                 <th>Image</th>
                                 <th>Price</th>
                                 <th>Quantity</th>
                                 <th>Total</th>
                              </tr>
                           </thead>
                           <tbody>
                              {{$no = 1}}
                              @foreach($data as $cart)
                              <tr class="parent_tr">

                                 <td>{{$no++}}</td>
                                 <?php
                                 $restaurant = $cart->restaurants_id;
                                 $name = App\Models\Restaurant::where('id', '=', $restaurant)->get();
                                 ?>
                                 @foreach($name as $name)
                                 <td>{{$name->name}}</td>
                                 @endforeach
                                 <input type="hidden" class="number" name="id" value="{{$cart->id}}">
                                 <td>{{$cart->name}}</td>
                                 <td><img src="{{asset('assets/image/food/'.$cart->image)}}" height="50px"></td>
                                 <td>{{$cart->price}}</td>
                                 <td>{{$cart->quantity}}
                                    <!-- <div class="qty mt-5 cart-content">
                                       <span class="minus bg-dark">-</span>
                                       <input type="number" class="count" id="{{$cart->id}}" name="qty" value="{{$cart->quantity}}">
                                       <span class="plus bg-dark">+</span>
                                    </div> -->
                                 </td>
                                 <td>
                                    <label class="total">{{$cart->total}}</label>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                           <tfoot>
                              <tr class="table-info">
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th>Total Amount :</th>
                                 <th><label class="all_total">{{$sum}}</label></th>
                                 <!-- <th><button class="btn btn-danger order">Order Now <i class="fa fa-angle-double-right"></i> <i class="fa fa-angle-double-right"></i> </button></th> -->
                                 <!-- <th><button class="btn btn-danger"><a href="#">Order Now</a> <i class="fa fa-angle-double-right"></i> <i class="fa fa-angle-double-right"></i> </button></th> -->
                              </tr>
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