<?php
    $record = App\Models\User::get()->first();
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
    <title>OTP Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                <h3>Verify Otp</h3>
                <form method="POST" action="{{route('verify_otp')}}">
                        @csrf
                    <div class="form-group">
                        <input type="hidden" class="form-control input-sm chat-input @error('id') is-invalid @enderror" name="id" value="{{$record->id}}">
                        <input id="otp" type="text" class="form-control input-sm chat-input @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" placeholder="Enter OTP" autocomplete="otp" autofocus>
                        @if ($message = Session::get('error'))
                                <strong style="color: red;">{{ $message }}</strong>
                            @endif
                        @error('otp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="wrapper">
                        <span class="group-btn">
                            <!-- <a href="#" class="btn btn-danger btn-md">login <i class="fa fa-sign-in"></i></a> -->
                            <button type="submit" class="btn btn-danger btn-md">
                                    {{ __('Submit') }}
                            </button>
                            <!-- <button type="submit">submit</button> -->
                        </span>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>