@extends('layouts.app')
@section('content')
<div class="menu">
		<div class="container">
			<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Sub Menu</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>There are many variations</span>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					@foreach($subcate_desc as $des)
	                	<p>{{$des->submenu_discription}}</p>
	                @endforeach
				</div>
				<div class="clearfix"> </div>
			</div>
			@foreach($subcategory as $iteam)
            <div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                <div class="col-md-4 menu-bottom1">
                    <div class="btm-right">
                        <a href="{{route('food',$iteam->slug)}}">
                        	<img src="{{asset('assets/image/subcategory/'.$iteam->image)}}" height="310px" alt="">
                            <div class="captn">
                                <h4>{{ $iteam->name }}</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach 
			</div>
		</div>
	</div>
@endsection