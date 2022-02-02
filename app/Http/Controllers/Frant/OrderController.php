<?php

namespace App\Http\Controllers\Frant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Food;
use App\Models\Orderdetail;
use App\Models\Restaurant;
use App\Models\User;
use App\DataTables\OrderDataTable;
use Illuminate\Support\Facades\Auth;
use App\Contracts\OrderContract;
use App\Models\PaymentCustomer;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct(OrderContract $Order)
    {
        $this->Order = $Order;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderDataTable $OrderDataTable)
    {
        return $OrderDataTable->render('admin.dashboard.listorder');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cart = $this->Order->store($request->all());
        return $cart->delete();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = $this->Order->show($id);
        $data = $order[0];
        $orderdetail = $order[1];
        $user = $order[2];
        
        return View('admin.dashboard.showorder',compact('data','orderdetail','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd("edit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd("update");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd("destroy");
    }

    public function showOrder()
    {
        $user = Auth::user()->id;
        $order = Order::where('user_id', $user)->get();
        $user = User::where('id', $user)->get();
        return view('frant.order_history', compact('order','user'));
    }
    
    public function showOrderDetail($id)
    {      
        $order = Order::where('order_id', $id)->get()->first();
        $orderdetail = Orderdetail::where('order_id', $order->id)->get();
        $customer = PaymentCustomer::where('user_id', Auth::user()->id)->select('transaction_id')->get()->first();
        return view('frant.orderhistorydetail', compact('order','orderdetail','customer'));    
    }

    public function deleteOrderHistory($id)
    {
        $data = Order::where('order_id', $id)->get()->first();
        $data->delete();
        return $data;
    }
}