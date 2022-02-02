<?php

namespace App\Repositories;

use App\Contracts\OrderContract;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Food;
use App\Models\OrderHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Orderdetail;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class OrderRepository implements OrderContract
{
    public function store(array $array)
    {
        $order_id = rand(1000, 9999);
        $order = new Order;
        $order->order_id = $order_id;
        $order->user_id = $array['id'];
        $order->total = $array['total_ammount'];
        if ($order->save()) {
            $data = Cart::where('slug', $array['slug'])->get();
            foreach ($data as $cart) {
                $a = Order::latest()->first()->id;
                $orderdetail = new Orderdetail;
                $orderdetail->order_id = $a;
                $name = $cart->name;
                $food = Food::where('name', $name)->select('id')->get();
                foreach ($food as $food) {
                    $orderdetail->food_id = $food->id;
                }
                $orderdetail->quantity = $cart->quantity;
                $orderdetail->restaurants_id = $cart->restaurants_id;
                $orderdetail->save();
            }
            $cart = Cart::where('slug', $array['slug']);
            // ------------------------------------------------------------------------
            $all = DB::table('orders')->latest()->first();
            $id = $all->id;
            $a = OrderHistory::where('order_id', 'null')->select('id', 'order_id')->get();

            foreach ($a as $a) {
                $asd = OrderHistory::find($a->id);
                $asd->order_id = $id;
                $asd->save();
            }
            return $cart;
        } else {
            return "Data not inserted successfully";
        }
        Session::flash("error", "Please add atlease one item !!");
    }

    public function show($id)
    {
        $data = Order::find($id);
        $user = User::where('id', $data->user_id)->get();
        $orderdetail = Orderdetail::where('order_id', $id)->get();
        return [$data, $orderdetail, $user];
    }
}
