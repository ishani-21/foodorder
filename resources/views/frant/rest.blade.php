@foreach($data as $iteam)
    <div class="menu-bottom animated wow fadeInUp rest" data-wow-duration="1000ms" data-wow-delay="500ms" >
        <div class="col-md-4 menu-bottom1" rest_id="{{$iteam->id}}">
            <div class="btm-right">
                <a href="{{route('menu',$iteam->slug)}}">   
                    <img src="{{ asset('assets/image/restaurant/'.$iteam->image)}}" height="310px" class="clearfix"> 
                    <div class="captn">
                        <h4>{{ $iteam->name }}</h4>
                    </div>
                </a>
            </div>
        </div>
    </div> 
@endforeach
<center><button class="btn btn-outline-secondary waves-effect js_readmore" next_url="{{$data->nextPageUrl()}}"><font size="5px" style="font-family: cursive;" class="readmore">Read More</font></button></center>