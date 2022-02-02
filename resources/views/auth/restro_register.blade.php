<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords"
          content="unique login form,leamug login form,boostrap login form,responsive login form,free css html login form,download login form">
    <meta name="author" content="leamug">
    <title>Login Form</title>
    <link href="css/style.css" rel="stylesheet" id="style">
    <!-- Bootstrap core Library -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <!-- Font Awesome-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css">
    body {
    background-image:url('frant/assets/images/WBC_7095.jpg');
    background-position:center;
    background-size:cover;

    -webkit-font-smoothing: antialiased;
    font: normal 14px Roboto,arial,sans-serif;
    font-family: cursive!important;
    }
    img{
    opacity: 0.5;
    }
    .container {
    padding: 110px;
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #ffffff!important;
    opacity: 1; /* Firefox */
    font-size:18px!important;
    }
    .form-login {
    background-color: rgba(0,0,0,0.80);
    padding-top: 15px;
    padding-bottom: 30px;
    padding-left: 30px;
    padding-right: 30px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:white;
    box-shadow: 0 20px 20px rgba(0,0,0,.5);
    }
    .form-control{
    background:transparent!important;
    color:white!important;
    font-size: 18px!important;
    }
    h1{
    color:white!important;
    }
    h4 { 
    border:0 solid #fff; 
    border-bottom-width:1px;
    padding-bottom:10px;
    text-align: center;
    }

    .form-control {
    border-radius: 10px;
    height: 30px;
    width: 550px;
    }
    .image{
        height: 45px;
    }
    .text-white{
    color: white!important;
    }
    .wrapper {
    text-align: center;
    }
    .footer p{
    font-size: 18px;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-8 text-center">
                <div class="form-login">
                <h2>Register</h2>
                <form method="POST" action="{{ route('restaurant.store') }}" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="form-login"> -->
                        <div class="form-group">
                            <input id="name" type="text" class="form-control input-sm chat-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Restaurant Name" autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="mobile" type="text" class="form-control input-sm chat-input @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" placeholder="Mobile" autocomplete="mobile" autofocus style="font-size: 10px;">

                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="email" type="text" class="form-control input-sm chat-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="address" type="text" class="form-control input-sm chat-input @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address" autocomplete="address" autofocus>

                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="image" type="file" class="form-control image  input-sm chat-input @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" placeholder="Restaurant image/Logo" autocomplete="image" autofocus>

                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input id="password" type="password" class="form-control input-sm chat-input @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Password" autocomplete="password" autofocus>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control input-sm chat-input" name="password_confirmation" placeholder="Confirm Password" autocomplete="new-password">
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-5 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <!-- </div> -->
                </form>
                    <h3 class="text-center">You have an account? <a href="login">Login</a>.</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>