@extends('layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        @if ($message = Session::get('success'))  
        <div class="alert alert-success alert-block">  
            <button type="button" class="close" data-dismiss="alert">?</button>   
                <strong>{{ $message }}</strong>  
        </div>  
        @endif  
        
        @if ($message = Session::get('error'))  
        <div class="alert alert-danger alert-block">  
            <button type="button" class="close" data-dismiss="alert">?</button>   
                <strong>{{ $message }}</strong>  
        </div>  
        @endif  
        
        @if ($message = Session::get('warning'))  
        <div class="alert alert-warning alert-block">  
            <button type="button" class="close" data-dismiss="alert">?</button>   
            <strong>{{ $message }}</strong>  
        </div>  
        @endif  
        
        @if ($message = Session::get('info'))  
        <div class="alert alert-info alert-block">  
            <button type="button" class="close" data-dismiss="alert">?</button>   
            <strong>{{ $message }}</strong>  
        </div>  
        @endif  
        
        @if ($errors->any())  
        <div class="alert alert-danger">  
            <button type="button" class="close" data-dismiss="alert">?</button>   
            Please check the form below for errors  
        </div>  
        @endif  
      <div class="card">
          <div class="card-body">
              <div class="form-group">
                  <label><strong>Status :</strong></label>
                  <select id='status' class="form-control filter-name" style="width: 200px">
                      <option value="">--Select Status--</option>
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                  </select>
              </div>
          </div>
      </div>
        <div class="table-responsive">
        {!! $dataTable->table(['class' => 'table-striped table-hover'])!!}
        </div>
        <center><a href="{{route('admin.main')}}" ><button type="button" class="btn btn-outline-dark">DashBoard</button></a></center>
    </div>
@endsection
@push('js')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    
<script>
    $("#restaurant-table").on('preXhr.dt', function(e, settings, data) {
        data.type = $("#status").val();
    });
    $('.filter-name').on('change', function(e) {
        window.LaravelDataTables["restaurant-table"].draw()
        e.preventDefault();
    });
    // $(document).on('click','.status',function(){
    //     alert('asd');
    // })
</script>
{!! $dataTable->scripts() !!}

@endpush
