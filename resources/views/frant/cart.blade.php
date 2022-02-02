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
                                 <th>Delete</th>
                              </tr>
                           </thead>
                           <tbody>
                              {{$no=1}}
                              @foreach($carts as $cart)
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
                                 <td>
                                    <div class="qty mt-5 cart-content">
                                       <span class="minus bg-dark">-</span>
                                       <input type="number" class="count" id="{{$cart->id}}" name="qty" value="{{$cart->quantity}}">

                                       <span class="plus bg-dark">+</span>
                                    </div>
                                 </td>
                                 <td>
                                    <label class="total">{{$cart->total}}</label>
                                 </td>
                                 <td>
                                    <form method="post" action="{{route('cart.destroy', $cart->id)}}">
                                       @csrf
                                       @method('delete')
                                       <button class="btn btn-danger">Remove</button>
                                    </form>
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
                                 <th><button class="btn btn-danger order">Order Now <i class="fa fa-angle-double-right"></i> <i class="fa fa-angle-double-right"></i> </button></th>
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

@push('js')

<script>
   $(document).ready(function() {
      $('.count').prop('disabled', true);
      $('.total').prop('disabled', true);

      $(document).on('click', '.plus', function() {
         parent = $(this).parents('.parent_tr');
         console.log(parent);

         count_val = parseInt(parent.find('.count').val());
         parent.find('.count').val(parseInt(count_val + 1));
         var val = parseInt(count_val + 1);
         // alert(val);

         a = $(this).parents('.parent_tr');
         var id = parseInt(a.find('.number').val());
         // alert(id);
         var a = "route('cart.update/'+ id)";
         $.ajax({
            url: 'cart/' + id,
            type: "put",
            data: {
               quantity: val,
               id: id,
               _token: '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(data) {
               count_val = parseInt(parent.find('.total').html(data.total_price));
               $('.all_total').html(data.sum);
               // console.log(data.count);
            }
         })
      });

      $(document).on('click', '.minus', function(e) {
         e.preventDefault();
         parent = $(this).parents('.parent_tr');
         count_val = parseInt(parent.find('.count').val());
         parent.find('.count').val(parseInt(count_val - 1));
         var val = parseInt(count_val - 1);

         if (val == 0) {
            a = $(this).parents('.parent_tr');
            var id = parseInt(a.find('.count').val(1));
            val = 1;
         }

         a = $(this).parents('.parent_tr');
         var id = parseInt(a.find('.number').val());
         // alert(id);
         var a = "route('cart.update/'+ id)";
         $.ajax({
            url: 'cart/' + id,
            type: "put",
            data: {
               quantity: val,
               id: id,
               _token: '{{ csrf_token() }}'
            },
            dataType: 'json',
            success: function(data) {
               count_val = parseInt(parent.find('.total').html(data.total_price));
               $('.all_total').html(data.sum);
            }
         })

      });

      $(document).on('click', '.order', function() {
         var total_ammount = $(".all_total").html();
         var id = "{{Auth::user()->id}}";
         var slug = "{{Auth::user()->name}}";
         swal({
               title: "Are you sure to order all items ?",
               icon: "warning",
               buttons: true,
               dangerMode: true,
            })
            .then((willDelete) => {
               if (willDelete) {
                  $.ajax({
                     url: "{{route('order.store')}}",
                     type: "POST",
                     data: {
                        slug: slug,
                        total_ammount: total_ammount,
                        id: id,
                        _token: '{{ csrf_token() }}'
                     },
                     dataType: 'json',
                     success: function(data) {
                        console.log(data);
                        if (data == 0) {
                           swal("Warning!", "Please add Atleast One Iteam in cart!", "error")
                        } else {
                           swal("Good job!", "Your Order is success!", "success")
                           window.location.href = "paymentpage";
                        }
                     }
                  });
               } else {
                  swal("your order is cancel........oppsssss 🤭🤔", " ");
               }
            });
      });
   });
</script>
@endpush