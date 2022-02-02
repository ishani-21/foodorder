<?php

namespace App\Repositories;

use App\Contracts\CartContract;
use App\Models\Cart;
use App\Models\Food;
use App\Models\OrderHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartRepository implements CartContract
{
   public function index()
   {
      $user = auth()->user()->name;
      $carts = Cart::where('slug', '=', $user)->get();
      $cart = Cart::where('slug', '=', $user)->select('price')->get();
      $price = Cart::where('slug', '=', $user)->pluck('total');
      $sum = collect($price)->sum();
      return [$carts, $sum];
   }

   public function store(array $array)
   {
      $foods = Food::where('name', $array['name'])->get();
      foreach ($foods as $food) {
         $restro = $food->restaurants_id;
         $name = $food->name;
         $image = $food->image;
         $price = $food->price;

         $user = auth()->user()->name;
         $slug = $food->slug;
      }

      $foo = Food::where('name', $array['name'])->get()->first();
      $datas = Cart::where('name', $foo->name)->get()->first();
      // dd($datas->quantity);
      if (empty($datas)) {
         $cart = new Cart;
         $cart->restaurants_id = $restro;
         $cart->name = $name;
         $cart->image = $image;
         $cart->price = $price;
         $cart->quantity = 1;
         $cart->total = $price;
         $cart->slug = $user;
         $cart->save();

         $history = new OrderHistory;
         $history->user_id = Auth::user()->id;
         $history->order_id = "null";
         $history->restaurants_id = $restro;
         $history->name = $name;
         $history->image = $image;
         $history->price = $price;
         $history->quantity = "1";
         $history->total = $price;
         $history->slug = $user;
         $history->save();
      } else if ($datas) {
         $id = $datas->id;
         $a = Cart::find($id);
         $t = $a->total + $datas->price;
         $a->quantity = $datas->quantity + 1;
         $a->total = $t;
         $a->save();
         
         $orderid = OrderHistory::where('name', $foo->name)->where('order_id', 'null')->get()->first();
         $id = $orderid->id;
         $data = OrderHistory::find($id);
         $data->quantity = $orderid->quantity + 1;
         $data->total = $t;
         $data->save();
         
      }

      $count = Cart::where('slug', '=', $user)->count();
      return $count;
   }

   public function update(array $array, $id)
   {
      $data = Cart::find($id);
      $data->quantity = $array['quantity'];
      $total_price = $data->quantity * $data->price;
      $data->total = $total_price;
      $data->save();
      $user = auth()->user()->name;
      $price = Cart::where('slug', $user)->pluck('total');
      $sum = collect($price)->sum();
      return [$total_price, $sum];
   }

   public function destroy($id)
   {
      $cart = Cart::find($id);
      $data = OrderHistory::where('order_id', 'null')->where('name', $cart->name)->get()->first();
      $data->delete();
      $cart->delete();
      return "successfully Deleted";
   }
}
