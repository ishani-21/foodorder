<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
   <!-- Cookery -->
   <!-- Scripts -->

   <title>@yield('title', 'Cookery')</title>
   <!-- <link rel="icon" type="image/png" href="{{asset('admin/assets/assets/img/favicon.png')}}"> -->
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}"></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
   <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}" />

   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   <!-- ---------------------------------------------------------------------------------------------------- -->
   <link href="{{asset('frant/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
   <!-- --------------------------------------Model--------------------------------------- -->
   <!-- <link rel="stylesheet" href="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css')}}"> -->
   <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js')}}"></script>
   <script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <!-- <script src="{{asset('frant/assets/js/jquery.min.js')}}"></script> -->
   <!-- Custom Theme files -->
   <!--theme-style-->
   <link href="{{asset('frant/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
   <!--//theme-style-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
   <script type="application/x-javascript">
      addEventListener("load", function() {
         setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
         window.scrollTo(0, 1);
      }
   </script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!---->
   <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
   <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
   <!-- <link href="{{asset('frant/assets/css/styles.css')}}" rel="stylesheet"> -->
   <!-- animation-effect -->
   <link href="{{asset('frant/assets/css/animate.min.css')}}" rel="stylesheet">
   <script src="{{asset('frant/assets/js/wow.min.js')}}"></script>
   <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
   <script>
      new WOW().init();
   </script>
</head>

<body>
   <div id="app">
      @include('frant.header')
      <main class="py-4">
         @yield('content')
      </main>
   </div>
   @include('frant.footer')
   <script>
      $(document).ready(function() {
         $('#edit_modal').validate({
            rules: {
               mobile: {
                  required: true,
               },
               name: {
                  required: true,
               },
               email: {
                  required: true,
                  email: true,
               },
               address: {
                  required: true,
               }
            },
            messages: {
               mobile: 'Please Enter Your Mobile Number',
               name: 'Please Enter Your Name',
               email: {
                  required: "Please enter a email address",
                  email: "Please enter a vaild email address"
               },
               address: 'Please Enter Your Address',
            },
            highlight: function(element, errorClass, validClass) {
               $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
               $(element).addClass("is-valid").removeClass("is-invalid");
            },
         });

         $('.buy').click(function() {
            $("#reset").click();
            $('input').removeClass('is-invalid');
            $('.error').html('');
            $('#exampleModalCenter').modal('show');
         });

         $('.reload').click(function() {
            location.reload();
         });
         $('.close').click(function() {
            location.reload();
         });
      });
   </script>
   @stack('js')

</body>

</html>