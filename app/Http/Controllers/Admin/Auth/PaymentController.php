<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\PaymentDatatable;
use App\DataTables\PaymentCustomerDatatable;
use App\Models\Payment;
use App\Models\PaymentCustomer;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PaymentDatatable $PaymentDatatable)
    {
        return $PaymentDatatable->render('admin.dashboard.listpayment');
    }

    public function indexCustomers(PaymentCustomerDatatable $PaymentCustomerDatatable)
    {
        return $PaymentCustomerDatatable->render('admin.dashboard.listpaymentcustomer');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Payment::find($id);
        return view('admin.dashboard.showpayment', compact('data'));
    }
    
    public function shpwPaymentCustomer($id)
    {
        $data = PaymentCustomer::find($id);
        return view('admin.dashboard.showpaymentcustomer', compact('data'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Payment::find($id);
        $data->delete();
        return $data;
    }

    public function destroyPaymentCustomer($id)
    {
        $data = PaymentCustomer::find($id);
        $data->delete();
        return $data;
    }
}
