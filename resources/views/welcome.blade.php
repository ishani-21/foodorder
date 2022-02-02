<!DOCTYPE html>
<html>

<head>
   <title>Cookery A Food Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
   <script type="application/x-javascript">
      addEventListener("load", function() {
         setTimeout(hideURLbar, 0);
      }, false);

      function hideURLbar() {
         window.scrollTo(0, 1);
      }
   </script>
   <!---->
   <link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
   <link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
   <!-- start-smoth-scrolling -->
   <script type="text/javascript" src="frant/assets/js/move-top.js"></script>
   <script type="text/javascript" src="frant/assets/js/easing.js"></script>
   <script type="text/javascript">
      jQuery(document).ready(function($) {
         $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
               scrollTop: $(this.hash).offset().top
            }, 1000);
         });
      });
   </script>
   <!-- start-smoth-scrolling -->
   <link href="{{asset('frant/assets/css/styles.css')}}" rel="stylesheet">
   <link rel="{{asset('frant/assets/stylesheet')}}" type="text/css" href="frant/assets/css/component.css" />
   <!-- animation-effect -->
   <link href="{{asset('frant/assets/css/animate.min.css')}}" rel="stylesheet">
   <script src="{{asset('frant/assets/js/wow.min.js')}}"></script>
   <script>
      new WOW().init();
   </script>
</head>
<style type="text/css">
   .hover-fold .front {
      background: url("{{asset('assets/image/about/'.$about->image1)}}") top;
      height: 100%;
      /*has to be 100% of .top */
      width: 100%;
   }

   .hover-fold .back {
      background: #005238;
      height: 100%;
      /*has to be 100% of .top */
      padding: 0 40px;
      -moz-transform: rotateX(180deg);
      -ms-transform: rotateX(180deg);
      -webkit-transform: rotateX(180deg);
      transform: rotateX(180deg);
      width: 100%;
   }

   .hover-fold .back p {
      margin: 0;
      color: #fff;
      font-size: 1.15em;
      line-height: 2em;
   }

   .hover-fold .bottom {
      background: url("{{asset('assets/image/about/'.$about->image1)}}") bottom;
      height: 50%;
      position: absolute;
      top: 50%;
      width: 100%;
      z-index: 0;
   }

   .hover-fold .front1 {
      background: url("{{asset('assets/image/about/'.$about->image2)}}") top;
   }

   .hover-fold .bottom1 {
      background: url("{{asset('assets/image/about/'.$about->image2)}}") bottom;
   }

   .hover-fold .front2 {
      background: url("{{asset('assets/image/about/'.$about->image3)}}") top;
   }

   .hover-fold .bottom2 {
      background: url("{{asset('assets/image/about/'.$about->image3)}}") bottom;
   }
</style>

<body>
   <div class="header">
      <div class="container">
         <div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
            <h1><a href="index.html"><span>C</span><img src="frant/assets/images/oo.png" alt=""><img src="frant/assets/images/oo.png" alt="">kery</a></h1>
         </div>
         <div class="nav-icon">
            <a href="#" class="navicon"></a>
            <div class="toggle">
               <ul class="toggle-menu">
                  <li><a href="{{route('register')}}" style="font-size: 16px; font-family: cursive;">Register</a></li>
                  <li><a href="{{route('login')}}" style="font-size: 16px; font-family: cursive;">Login</a></li>

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
         <div class="clearfix"></div>
      </div>
      <!-- start search-->
      <div class="banner">
         <p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">Sed ut perspiciatis unde omnis iste natus.</p>
         <label></label>
         <h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">Hello And Welcome To Food</h4>
         <a class="scroll down" href="#content-down"><img src="frant/assets/images/down.png" alt=""></a>
      </div>
   </div>
   <!--content-->
   <div class="content" id="content-down">
      <div class="content-top-top">
         <div class="container">
            <div class="content-top">
               <div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <h3>About</h3>
                  <label><i class="glyphicon glyphicon-menu-up"></i></label>
                  <span>There are many variations</span>
               </div>
               <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <p>{{$about->discription}}</p>
               </div>
               <div class="clearfix"> </div>
            </div>
            <div class="content-mid">

               <div class="col-md-4 food-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <div class=" hover-fold">
                     <h4>FOOD</h4>
                     <div class="top">
                        <div class="front face"></div>
                        <div class="back face">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                     </div>
                     <div class="bottom"></div>
                  </div>
               </div>
               <div class="col-md-4 food-grid animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <div class=" hover-fold">
                     <h4>FOOD</h4>
                     <div class="top">
                        <div class="front face front1"></div>
                        <div class="back face">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                     </div>
                     <div class="bottom bottom1"></div>
                  </div>
               </div>
               <div class="col-md-4 food-grid animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <div class=" hover-fold">
                     <h4>FOOD</h4>
                     <div class="top">
                        <div class="front face front2"></div>
                        <div class="back face">
                           <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                        </div>
                     </div>
                     <div class="bottom bottom2"></div>
                  </div>
               </div>
               <div class="clearfix"></div>
            </div>
         </div>
      </div>
      <!--services-->
      <div class="services">
         <div class="container">
            <div class="services-top">
               <div class="col-md-8 services-right animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <p>There are many different types of food and beverage service types or procedures, but the major category of the food service is 1) Plate Service, 2) Cart Service, 3) Plater Service, 4) Buffet Service and 5) Family style service.</p>

                  <p>Below is the list of different type of food and beverage service followed by hotel, resorts, restaurants, fast food establishments etc.</p>
               </div>
               <div class="col-md-4 services-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <h3>Services</h3>
                  <label><i class="glyphicon glyphicon-menu-up"></i></label>
                  <span>There are many variations</span>
               </div>
               <div class="clearfix"> </div>
            </div>
            <div class="service-top">

               <div class="col-md-8 service-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <div class=" service-bottom1">
                     @foreach($service as $services)
                     <div class=" ser-bottom">
                        <img src="{{asset('assets/image/service/'.$services->image1)}}" class="img-responsive" alt="">
                     </div>
                     <div class="ser-top ">
                        <h5>{{$services->name;}}</h5>
                        <p style="font-size: 16px;">{{$services->description;}}</p>
                     </div>
                     @endforeach
                     <div class="clearfix"> </div>
                  </div>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>
      <!--//services-->
      <!--news-->
      <div class="content-top-top">
         <div class="container">
            <div class="content-top">
               <div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <h3>News</h3>
                  <label><i class="glyphicon glyphicon-menu-up"></i></label>
                  <span>There are many variations</span>
               </div>
               <div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
                  <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>
               </div>
               <div class="clearfix"> </div>
            </div>
            <div class="news-bottom">
               @foreach($news as $news)
               <div class="news-bot">
                  <div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                     <a href="single.html">
                        <div class="content-item" style="background: url('{{('assets/image/news/'.$news->image1)}}')" no-repeat;>

                           <div class="overlay"></div>
                           <div class=" news-bottom2">
                              <ul class="grid-news">
                                 <li><span><i class="glyphicon glyphicon-calendar"> </i>08.09.2014</span><b>/</b></li>
                                 <li><span><i class="glyphicon glyphicon-comment"> </i>5 Comment</span><b>/</b></li>
                                 <li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
                              </ul>
                              <p>{{$news->title}}</p>
                           </div>
                        </div>
                     </a>
                  </div>
                  @endforeach
                  <div class="clearfix"> </div>
               </div>
            </div>
         </div>
      </div>
      <!--//news-->
   </div>
   <!--footer-->
   <div class="footer">
      <div class="container">
         <div class="footer-head">
            <div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
               <ul class=" in">
                  <li><a href="{{route('home')}}">Home</a></li>
                  <li><a href="{{route('cart.index')}}">Cart</a></li>
                  <li><a href="https://www.blogger.com/go/signin" target=" ">Blog</a></li>
                  <li><a href="events.html">Events</a></li>
                  <li><a href="contact.html">Contact</a></li>
               </ul>
               <span>There are many variations of passages</span>
            </div>
            <div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
               <h2>Follow Us</h2>
               <label><i class="glyphicon glyphicon-menu-up"></i></label>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
               <ul class="social-ic">
                  <li><a href="https://in.pinterest.com/" target=" "><i></i></a></li>
                  <li><a href="https://www.google.com/" target=" "><i class="ic"></i></a></li>
                  <li><a href="https://www.instagram.com/?hl=en" target=" "><i class="ic1"></i></a></li>
                  <li><a href="https://www.youtube.com/" target=" "><i class="ic2"></i></a></li>
                  <li><a href="https://www.facebook.com/" target=" "><i class="ic3"></i></a></li>
               </ul>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
   </div>
   <!--//footer-->
</body>

</html>