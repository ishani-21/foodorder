<html>
<title>Register Form</title>

<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
   <link rel="stylesheet" href="{{ asset('saller-assets/app-assets/css/register.css') }}">
</head>

<body>
   <!-- Latest compiled and minified CSS -->
   <div class="to-animate">
      <div id="form">
         <div class="container">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-md-8 col-md-offset-2">
               <div id="userform">
                  <ul class="nav nav-tabs nav-justified" role="tablist">
                     <li class="active"><a href="#signup" role="tab" data-toggle="tab">Individual</a></li>
                     <li><a href="#login" role="tab" data-toggle="tab">Business</a></li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane fade active in" id="signup">
                        <h2 class="text-uppercase text-center"> Sign Up </h2>
                        <form method="post" action="{{ route('seller.individual_register') }}" id="register">
                           @csrf
                           <div class="row">
                              <div class="col-xs-12 col-sm-6">
                                 <!-- First Name -->
                                 <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" class="form-control @error('fname') is-invalid @enderror" id="fname" name="fname" value="{{ old('fname') }}">
                                    @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <p class="help-block text-danger"></p>
                                 </div>
                              </div>
                              <!-- Last Name -->
                              <div class="col-xs-12 col-sm-6">
                                 <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control @error('lname') is-invalid @enderror" id="lname" name="lname" value="{{ old('lname') }}">
                                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <p class="help-block text-danger"></p>
                                 </div>
                              </div>
                           </div>
                           <!-- Email -->
                           <div class="form-group">
                              <label> Your Email</label>
                              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                              @error('email')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              <p class="help-block text-danger"></p>
                           </div>
                           <!-- Mobile -->
                           <div class="form-group">
                              <label>Your Phone</label>
                              <input type="tel" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile" value="{{ old('mobile') }}">
                              @error('mobile')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              <p class="help-block text-danger"></p>
                           </div>
                           <!-- Password -->
                           <div class="form-group">
                              <label> Password</label>
                              <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              <p class="help-block text-danger"></p>
                           </div>
                           <!-- Confirmed Password -->
                           <div class="form-group">
                              <label>Confirmed Password</label>
                              <input type="password" class="form-control @error('confirmed_password') is-invalid @enderror" id="confirmed_password" name="confirmed_password" value="{{ old('confirmed_password') }}">
                              @error('confirmed_password')
                              <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                              <p class="help-block text-danger"></p>
                           </div>
                           <div class="mrgn-30-top">
                              <button type="submit" class="btn btn-larger btn-block" id="sign">
                                 Sign up
                              </button>
                           </div>
                        </form>
                     </div>
                     <div class="tab-pane fade in" id="login">
                        <h2 class="text-uppercase text-center"> Sign Up for Free</h2>
                        <form id="login" method="post"  action="{{ route('seller.business_register') }}">
                        @csrf
                        @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                        @endif
                        @if(Session::get('fail'))
                        <div class="alert alert-success">
                            {{Session::get('fail')}}
                        </div>
                        @endif
                        <div class="form-group">
                           <label>Business Name<span class="req">*</span> </label>
                           <input type="texts" class="form-control" id="business_name"  name="business_name" data-validation-required-message="Please enter your name" autocomplete="off">
                           <p class="help-block text-danger"></p>
                           @error('business_name')
                           <span class="text-danger" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Email<span class="req">*</span> </label>
                           <input type="email" class="form-control" id="email" name="email" data-validation-required-message="Please enter your email address" autocomplete="off">
                           <p class="help-block text-danger"></p>
                           @error('email')
                           <span class="text-danger" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Mobile No<span class="req">*</span> </label>
                           <input type="number" class="form-control" id="mobile" name="mobile" data-validation-required-message="Please enter your mobiloe no" autocomplete="off">
                           <p class="help-block text-danger"></p>
                           @error('mobile')
                           <span class="text-danger" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Website<span class="req">*</span> </label>
                           <input type="text" class="form-control" id="website" name="website" data-validation-required-message="Please enter your website url" autocomplete="off">
                           <p class="help-block text-danger"></p>
                           @error('website')
                           <span class="text-danger" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Register Number<span class="req">*</span> </label>
                           <input type="text" class="form-control" id="register_number" name="register_number" data-validation-required-message="Please enter your register number" autocomplete="off">
                           <p class="help-block text-danger"></p>
                           @error('register_number')
                           <span class="text-danger" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Password<span class="req">*</span> </label>
                           <input type="password" class="form-control" id="password" name="password" data-validation-required-message="Please enter your mobiloe no" autocomplete="off">
                           <p class="help-block text-danger"></p>
                           @error('password')
                           <span class="text-danger" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="form-group">
                           <label>Confirm Password<span class="req">*</span> </label>
                           <input type="password" class="form-control" id="cpassword" name="cpassword" data-validation-required-message="Please enter your mobiloe no" autocomplete="off">
                           <p class="help-block text-danger"></p>
                           @error('cpassword')
                           <span class="text-danger" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                        <div class="mrgn-30-top">
                           <button type="submit" class="btn btn-larger btn-block">
                           Sign Up
                           </button>
                        </div>
                     </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.container -->
   </div>
</body>

<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script>

$(document).ready(function() {
      $('#register').validate({
         rules: {
            fname: {
               required: true,
            },
            lname: {
               required: true,
            },
            email: {
               required: true,
            },
            mobile: {
               required: true,
            },
            password: {
               required: true,
               minlength: 8
            },
            confirmed_password: {
               required: true,
               equalTo: "#password"
            }
         },
         errorElement: 'span',
         messages: {
            fname: 'Please Enter Your First Name',
            lname: 'Please Enter Your Last Name',
            email: 'Please Enter Your Email Address',
            email: 'Please Enter Your Mobile Number',
            password: {
               required: 'Please Enter Your Password.',
               minlength: 'Please Enter at least 8 characters.'
            },
            confirmed_password: {
               required: 'Please Enter Confirmation.',
               equalTo: 'Please Enter Confirm Password Same as a Password.'
            }
         },
      });
   });
   $('#form').find('input, textarea').on('keyup blur focus', function(e) {

      var $this = $(this),
         label = $this.prev('label');

      if (e.type === 'keyup') {
         if ($this.val() === '') {
            label.removeClass('active highlight');
         } else {
            label.addClass('active highlight');
         }
      } else if (e.type === 'blur') {
         if ($this.val() === '') {
            label.removeClass('active highlight');
         } else {
            label.removeClass('highlight');
         }
      } else if (e.type === 'focus') {

         if ($this.val() === '') {
            label.removeClass('highlight');
         } else if ($this.val() !== '') {
            label.addClass('highlight');
         }
      }

   });

   $('.tab a').on('click', function(e) {

      e.preventDefault();

      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');

      target = $(this).attr('href');

      $('.tab-content > div').not(target).hide();

      $(target).fadeIn(800);

   });


   $('select').change(function() {
      var animtype = $('select').val();

      $('.to-animate').addClass('animated ' + animtype);
      $('.to-animate').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
         function() {
            $('.to-animate').removeClass('animated ' + animtype);
         });
   });

   
</script>
<<<<<<< HEAD

</html>
=======
</html>
>>>>>>> c3ab43c44d9254310f048672c491d30c4d6e82b2
