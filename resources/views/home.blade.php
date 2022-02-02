@extends('layouts.app')
@section('content')
<div class="menu">
    <div class="container">
        <div class="menu-top">
            <div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                <h3>Restaurant</h3>
                <label><i class="glyphicon glyphicon-menu-up"></i></label>
                <span>There are many Restaurant</span>
            </div>
            <div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                @foreach($rest_desc as $des)
                <p>{{$des->restaurant_discription}}</p>
                @endforeach
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="parent_rest">
            @include('frant.rest')
        </div>       
    </div>
</div>
<!-- <center><button class="btn btn-outline-secondary waves-effect"><font size="5px" style="font-family: cursive;" class="readmore">Read More</font></button></center> -->
   
</div>
@endsection
@push('js')
    <script>    
        $("body").on('click','.js_readmore',function(e){
            e.preventDefault();
            t = $(this);
            nexturl = t.attr('next_url');
            $.ajax({
                url: nexturl,
                type: "get", 
                success: function(data){
                    t.remove();
                    console.log(data);
                    $( ".rest" ).last().after(data);
                }
            });
        });
    </script>
@endpush