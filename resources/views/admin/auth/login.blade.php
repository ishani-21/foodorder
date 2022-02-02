<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
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

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style type="text/css">
    body {
    background-image:url({{asset('frant/assets/images/WBC_7095.jpg')}});
    background-position:center;
    background-size:cover;

    -webkit-font-smoothing: antialiased;
    font: normal 14px Roboto,arial,sans-serif;
    font-family: ancing Script', cursive!important;
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
    font-size: 20px!important;
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
    width: 400px;
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
            <div class="col-md-offset-3 col-md-6 text-center">
                <div class="form-login">
                <h3>Secure Login</h3>
                
                <div class="form-group">
                <a href="{{route('admin.linkedin')}}" class="btn btn-md btn-danger"><i class="fab fa-google"></i> Login vai Google</a>
            </div>
                <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                    <div class="form-group">
                        <!-- <input type="text" id="email" class="form-control input-sm chat-input" placeholder="Email"/> -->
                        <input id="email" type="email" class="form-control input-sm chat-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">
                        <!-- <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Password"/> -->
                        <input id="password" type="password" class="form-control input-sm chat-input @error('password') is-invalid @enderror" name="password" placeholder="Password" autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="wrapper">
                        <span class="group-btn">
                            <!-- <a href="#" class="btn btn-danger btn-md">login <i class="fa fa-sign-in"></i></a> -->
                            <button type="submit" class="btn btn-danger btn-md">
                                {{ __('Login') }}
                            </button>
                        </span>
                    </div>
                </form>
                    <h3 class="text-center">Don't have an account? <a href="register_website.php">Sign Up</a>.</h3>
                    <h3 class="text-center">Forgot password? <a href="forget.php">Click here</a>.</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>