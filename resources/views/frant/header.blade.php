<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="header head">
   <div class="container">
      <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
         <h1><a href="{{route('home')}}">
               <p style="font-size: 50px;"><img src="{{asset('/assets/image/logo/logo.png')}}" title="Home" width="250px" height="80px" alt=""></p>
            </a></h1>
      </div>
      @if(Auth::user()->name)
      <div class="nav-icon">
         <!-- --------------------------------------------------setting button--------------------------- -->
         <button type="button" class="btn btn-info btn-lg" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-cogs" title="Change Password/Logout" aria-hidden="true"></i>
         </button>
         <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
				    {{ Auth::user()->name }}
				</button> -->
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('change_password')}}">
               {{ __('Change Password') }}
            </a>
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
				                     document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
            </form>
         </div>
         <!-- -------------------------------------------------------------------------------------------------------- -->
         <!-- ---------------------------------------------------Profile Button---------------------------------------- -->
         <button type="button" class="btn btn-info btn-lg" title="View Profile" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-address-book"></i>
         </button>

         <!-- Modal -->
         <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
               <!-- Modal content-->
               <div class="modal-content">
                  <div class="modal-header">
                     <center>
                        <h1 class="modal-title" style="color: #810541; font: bold; font-family: cursive;">-> Profile</h1>
                     </center>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>

                  </div>
                  <div class="modal-body">
                     <table class="table table-striped table-bordered text-center">
                        <tr class="table-primary">
                           <td><b>Mobile</b></td>
                           <td>{{ Auth::user()->mobile }}</td>
                        </tr>
                        <tr class="table-secondary">
                           <td><b>Name</b></td>
                           <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr class="table-success">
                           <td><b>Email</b></td>
                           <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr class="table-danger">
                           <td><b>Address</b></td>
                           <td>{{ Auth::user()->address }}</td>
                        </tr>
                     </table>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- ------------------------------------------------------------------------------------ -->
         <!-- -----------------------------------------Edit Model---------------------------------------- -->
         <!-- Button trigger modal -->
         <button type="button" title="Edit Profile" class="btn btn-info btn-lg buy">
            <i class="fa fa-edit"></i>
         </button>
         <!-- Modal -->
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h1 class="text-center">
                        <h1 class="modal-title" style="color: #2B1B17; font: bold; font-family: cursive;">-> Edit Profile</h1>
                     </h1>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body edit">
                     <div class="container">
                        <div class="row">
                           <div class="col-md-6">
                              <form method="POST" action="{{route('edit-user')}}" id="edit_modal">
                                 @csrf
                                 <div>
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                 </div>
                                 <div class="form-group">

                                    <input id="mobile" type="text" class="form-control input-sm chat-input @error('mobile') is-invalid @enderror" name="mobile" value="{{Auth::user()->mobile}}" style="color: #000000; font-size: 18px; font-family: cursive;" placeholder="Mobile" autocomplete="mobile" autofocus>

                                    @error('mobile')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>
                                 <div class="form-group">
                                    <input id="name" type="text" class="form-control input-sm chat-input @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name}}" style="color: #000000; font-size: 18px; font-family: cursive;" placeholder="name" autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>

                                 <div class="form-group">
                                    <input id="email" type="text" class="form-control input-sm chat-input @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" style="color: #000000; font-size: 18px; font-family: cursive;" placeholder="email" autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>

                                 <div class="form-group">
                                    <input id="address" type="text" class="form-control input-sm chat-input @error('address') is-invalid @enderror" name="address" value="{{ Auth::user()->address }}" style="color: #000000; font-size: 18px; font-family: cursive;" placeholder="Address" autocomplete="address" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                 </div>

                                 <div class="form-group row mb-0">
                                    <div class="col-md-5 offset-md-4">
                                       <button type="submit" class="btn btn-primary" style="font-size: 18px; font-family: cursive;">
                                          {{ __('Update') }}
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary reload" data-dismiss="modal">Close</button>
                  </div>
               </div>
            </div>
         </div>
         <!-- --------------------------------------------------------------------------------- -->
         <!-- ------------------------------------Cart Button---------------------------------- -->
         <?php
         $user = Illuminate\Support\Facades\Auth::user()->name;
         $count = App\Models\Cart::where('slug', '=', $user)->count();
         ?>
         <a href="{{route('cart.index')}}"><button class="btn btn-info btn-lg"><i class="fa fa-shopping-cart cart" title="Cart" aria-hidden="true"></i> <span class="badge badge-light">{{ $count }}</span></button></a>
         <!-- ---------------------------------------Order History---------------------------------- -->
         <a href="{{route('showorder')}}"><button title="Order History" class="btn btn-info btn-lg"><i class="fa fa-history" aria-hidden="true"></i></button></a>
         <!-- --------------------------------------------------------------------------------- -->
         <p style="color: white; font-size: 18px;">Welcome {{ Auth::user()->name }} </p>

      </div>
   </div>
   <!--                   </div>

                        </div>
			</div> -->
   @else

   <div class="nav-icon">
      <a href="#" class="navicon"></a>
      <div class="toggle">
         <ul class="toggle-menu">
            <li><a href="index.html">Home</a></li>
            <li><a class="active" href="menu.html">Menu</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="typo.html">Codes</a></li>
            <li><a href="events.html">Events</a></li>
            <li><a href="contact.html">Contact</a></li>
         </ul>
      </div>
      <script>
         $('.navicon').on('click', function(e) {
            e.preventDefault();
            $(this).toggleClass('navicon--active');
            $('.toggle').toggleClass('toggle--active');
         });
      </script>
   </div>
   @endif
   <div class="clearfix"></div>
</div>
</div>