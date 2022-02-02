@extends('layouts.app')
@section('content')
{{$no = 1}}
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
                        <h3 class="card-title" style="font-family: cursive;">Order History</h3>
                     </div>
                     <!-- /.card-header -->
                     <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped table-hover" style="text-align: center; font-family: cursive; font-size: 18px;">
                           <thead>
                              <tr class="table-info">
                                 <th>No.</th>
                                 <th>Order ID</th>
                                 <th>Name</th>
                                 <th>Total Price</th>
                                 <th>Order Details</th>
                              </tr>
                           </thead>
                           @foreach($order as $order)
                           <tbody>
                              <td>{{$no++}}</td>
                              <td>{{$order->order_id}}</td>
                              <?php
                              $user = Illuminate\Support\Facades\Auth::user()->name;
                              ?>
                              <td>{{$user}}</td>
                              <td>{{$order->total}}</td>
                              <td><a href="{{ route('showorderdetail',$order->order_id) }}"><button class="btn btn-danger">Show Detail</button></a></td>
                              <!-- <td><button class="btn btn-danger delete" data-id="{{$order->order_id}}">Remove</button></td> -->
                           </tbody>
                           @endforeach
                           <tfoot>
                              <tr class="table-info">
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
                                 <th></th>
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
   // ---------------------------------------Delete-----------------------------
   $(document).on('click', '.delete', function() {
      swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
         })
         .then((willDelete) => {
            if (willDelete) {
               var delet = $(this).data('id');
               var url = '{{route("deleteorderhistory", ":queryId")}}';
               url = url.replace(':queryId', delet);
               $.ajax({
                  url: url,
                  type: "POST",
                  data: {
                     id: delet,
                     _token: '{{ csrf_token() }}'
                  },
                  dataType: "json",
                  success: function(data) {
                     window.location.reload();
                  }
               });
               swal("Poof! Your imaginary file has been deleted!", {
                  icon: "success",
               });
            } else {
               swal("Your imaginary file is safe!");
            }
         });
   });
</script>
@endpush