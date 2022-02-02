
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title', 'Cookery A Food Category Flat Bootstrap Responsive Website Template | Menu :: w3layouts')</title>
<link href="{{asset('frant/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('frant/assets/js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="{{asset('frant/assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='frant/assets///fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='frant/assets///fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="{{asset('frant/assets/css/styles.css')}}" rel="stylesheet">
<!-- animation-effect -->
<link href="{{asset('frant/assets/css/animate.min.css')}}" rel="stylesheet"> 
<script src="{{asset('frant/assets/js/wow.min.js')}}"></script>

<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
@include('frant.header')
<!--content-->
	@yield('content')
<!--footer-->
	@include('frant.footer')
	<!--//footer-->

</body>
</html>