@extends('layouts.app')
@section('content')
<style type="text/css">
   .single_pakeg_one {
      background:url("{{asset('assets/image/food/'.$main_side_food->image)}}") left center no-repeat;
      /*padding:30px;*/
      padding: 104px;
      padding-left: 1px;
      padding-right: 256px;
      overflow: hidden;
      margin-top: 55px;
   }

   .single_pakeg_text {
      background: #fff;
      padding: 46px;
      text-align: left;
      width: 617px;
   }

   .single_pakeg_text ul li {
      /*background: url("{{asset('assets/image/food/'.$main_side_food->image)}}") no-repeat left center;*/

      padding: 15px 0px 15px 60px;
      margin-top: 20px;

   }

   .portfolio .portfolio_content .head_title h3 {
      color: #000000;
   }

   .portfolio .portfolio_content .head_title h4 {
      color: #000000;
   }

   .head_title {
      padding-top: 139px;
      padding-bottom: 50px;
   }

   .ourPakeg .main_pakeg_content .head_title h3 {
      color: #fff;

   }

   .ourPakeg .main_pakeg_content .head_title h4 {
      color: #fff;
      font-family: 'Pacifico', cursive;
      font-size: 1.875rem;
   }

   .ourPakeg {
      background:url("{{asset('frant/assets/images/newsbg.jpg')}}") no-repeat center top scroll;
      opacity: 0.2px;
      -moz-background-size: cover;
      -webkit-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      width: 100%;
      overflow: hidden;
      padding-bottom: 120px;
   }

   .asd {
      font-size: 20px;
      font-family: cursive;
      /*margin-top: 0;*/
      /*margin-bottom: 1rem;*/
   }

   /*-------------------------------------*/
   * {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      box-sizing: border-box;
   }

   .box {
      background: url("{{asset('frant/assets/images/newsbg.jpg')}}") no-repeat center top scroll;
      max-height: 100vw;
      overflow: hidden;
   }

   /*.box:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 70vh;
	background: rgba(0, 0, 0, 0.1);
	}*/
   section {
      display: flex;
      justify-content: center;
      align-items: center;
      max-height: 100vw;
      transform-style: preserve-3d;
      /*perspective: 1000px;*/
   }

   .box {
      position: relative;
      width: 100%;
      transform-style: preserve-3d;
      animation: textEntry 6s linear infinite;
   }

   @keyframes textEntry {

      0%,
      5% {
         transform: translateZ(1500px);
      }

      15%,
      95% {
         transform: translateZ(0px);
      }

      100% {
         transform: translateZ(1500px);
      }
   }

   .textBox {
      position: relative;
      width: 100%;
      height: 400px;
      transform-style: preserve-3d;
      animation: animate 11s linear infinite;
      animation-delay: 0.75s;
   }

   @keyframes animate {
      0% {
         transform: rotateY(360deg);
      }

      100% {
         transform: rotateY(0deg);
      }
   }

   .textBox .text {
      position: absolute;
      top: 50%;
      left: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
      backface-visibility: hidden;
   }

   .textBox .text:nth-child(1) {
      transform: translate(-50%, -50%);
   }

   .textBox .text:nth-child(2) {
      transform: translate(-50%, -50%) rotateY(180deg);
   }

   .textBox .text h2 {
      font-size: 16vw;
      color: #fff;
      user-select: none;
   }

   .shadow {
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 100%;
      height: 50px;
      background: radial-gradient(rgba(0, 0, 0, 0.2), transparent, transparent);
      filter: blur(5px);
      animation: animateShadow 1s linear infinite;
      animation-delay: 0.75s;
   }

   @keyframes animateShadow {

      0%,
      100% {
         transform: translateX(-50%) scale(1);
      }

      50% {
         transform: translateX(-50%) scale(0.2);
      }
   }

   /*--------------------------------*/
   .add-cart-large {
      border: 3px solid #000;
      font-size: 17px;
      background: #fff;
      text-transform: uppercase;
      font-weight: 700;
      padding: 10px;
      font-family: "Open Sans", sans-serif;
      width: 246px;
      margin-top: 38px;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -ms-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
   }

   .add-cart-large:hover {
      color: #FF0000;
      border-color: #FF0000;
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -ms-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
      cursor: pointer;
   }

   /*-------------------------------------*/

   div.floating-cart {
      position: absolute;
      top: 0;
      left: 0;
      width: 315px;
      height: 480px;
      background: #fff;
      z-index: 200;
      overflow: hidden;
      box-shadow: 0px 5px 31px -1px rgba(0, 0, 0, 0.15);
      display: none;
   }

   div.floating-cart .stats-container {
      display: none;
   }

   div.floating-cart .product-front {
      width: 100%;
      top: 0;
      left: 0;
   }

   div.floating-cart.moveToCart {
      left: 75px !important;
      top: 55px !important;
      width: 47px;
      height: 47px;
      -webkit-transition: all 800ms ease-in-out;
      -moz-transition: all 800ms ease-in-out;
      -ms-transition: all 800ms ease-in-out;
      -o-transition: all 800ms ease-in-out;
      transition: all 800ms ease-in-out;
   }

   body.MakeFloatingCart div.floating-cart.moveToCart {
      left: 90px !important;
      top: 140px !important;
      width: 21px;
      height: 22px;
      box-shadow: 0px 5px 31px -1px rgba(0, 0, 0, 0);
      -webkit-transition: all 200ms ease-out;
      -moz-transition: all 200ms ease-out;
      -ms-transition: all 200ms ease-out;
      -o-transition: all 200ms ease-out;
      transition: all 200ms ease-out;
   }

   body.MakeFloatingCart div.cart-icon-top {
      z-index: 30;
   }

   body.MakeFloatingCart div.cart-icon-bottom {
      z-index: 300;
   }

   .floating-image-large {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
   }

</style>
<div class="menu">
   <div class="container">
      <section id="abouts" class="abouts">
         <div class="container">
            <div class="row">
               <div class="abouts_content">
                  <div class="col-md-6">
                     <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                        <img src="{{asset('assets/image/food/'.$main_side_food->image)}}" height="200px" alt="">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="single_abouts_text wow slideInRight" data-wow-duration="3s">
                        <h1 style="font-family: cursive;">{{$restaurant_address->name}}</h1>
                        <h2 style="font-family: cursive;"><b>Addres : </b>{{$restaurant_address->address}}</h2>
                        <h3 style="font-family: cursive;"><b>Food : </b>{{$main_side_food->name}}</h3>
                        <h3 style="font-family: cursive;"><b>Price : </b>{{$main_side_food->price}} ₹</h3>
                        <!-- <h3 style="font-family: cursive;"><b>Add Quentity in cart : </b>0</h3> -->
                        <button id="cart" class="add-cart-large">Add To Cart</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div>
         <h6>&nbsp</h6>
         <h6>&nbsp</h6>
      </div>
      <!-- -------------------------------------------------------------------------------------------------------------- -->
      <section id="ourPakeg" class="ourPakeg">
         <div class="container">
            <div class="main_pakeg_content">
               <div class="row">
                  <div class="head_title text-center">
                     <h4></h4>
                     <h3></h3>
                  </div>

                  <div class="single_pakeg_one text-right wow rotateInDownRight">
                     <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                        <div class="single_pakeg_text">
                           <div class="pakeg_title">
                              <h1 style="font-family: cursive;">Description</h1>
                              <h2 class="name" value="{{$main_side_food->name}}" style="font-family: cursive;">{{$main_side_food->name}}</h2>
                           </div>
                           <div class="asd">
                              {{$main_side_food->discription}}
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div>
         <h6>&nbsp</h6>
         <h6>&nbsp</h6>
      </div>
      <!-- ------------------------------------------------------------------------------------------------------- -->
      <section>
         <div class="box">
            <div title="{{$main_side_food->name}}" class="textBox">

               <div class="text">
                  <h2><img src="{{asset('assets/image/food/'.$main_side_food->image2)}}" style="height:500px;" alt="Avatar"></h2>
               </div>
               <div class="text">
                  <h2><img src="{{asset('assets/image/food/'.$main_side_food->image3)}}" style="height:500px;" alt="Avatar"></h2>
               </div>

               <div class="shadow"></div>
            </div>
      </section>
   </div>
   @endsection
   @push('js')

   <script>
      $(document).ready(function() {
         $('#cart').click(function() {
            var name = "{{ $main_side_food->name }}";
            console.log(name);
            var name = $('.name').val();
            $.ajax({
               url: "{{route('cart.store')}}",
               type: "post",
               data: {
                  name: '{{ $main_side_food->name }}',
                  _token: '{{ csrf_token() }}'
               },
               dataType: 'json',
               success: function(data) {
                  // console.log(data);
                  swal("Good job!", "Successfully Add To Cart!", "success")
                  // window.location.href="cart";
                  $('.badge').html(data.count);
               }
            });
         });
      });
   </script>

   @endpush