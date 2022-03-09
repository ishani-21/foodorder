<?php

namespace App\Http\Controllers\Frant;

use App\Contracts\PaymentContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{
    public function __construct(PaymentContract $Payment)
    {
        $this->Payment = $Payment;
    }
    public function paymentPage(Request $request)
    {
        $data = $this->Payment->paymentPage($request->all());
        Session::flash("success", "Payment successfully!!! ");
        return redirect()->route('showorder',compact('data'));
        // print_r($request->all()); die();
        // $stripe = new \Stripe\StripeClient(
        //     env('STRIPE_SECRET')
        // );

        // // ----------------------- customer create-----------------------------
        // $email = PaymentCustomer::where('email', $request->email)->select('email')->first();
        // $name = PaymentCustomer::where('name', $request->card_name)->select('name')->first();
        // if (!$email & !$name) {
        //     $create = $stripe->customers->create([
        //         'name' => $request->card_name,
        //         'email' => $request->email,
        //     ]);
        //     $id = $create->id;
        //     PaymentCustomer::create([
        //         'user_id' => Auth::user()->id,
        //         'transaction_id' => $id,
        //         'name' => $request->card_name,
        //         'email' => $request->email,
        //         'card_number' => $request->card_number,
        //         'cvv' => $request->cvv,
        //     ]);
        //     // --------------------------------- Update ---------------------------
        // } else {
        //     $emails = $stripe->customers->all(['email' => $request['email']]);
        //     if ($request['email'] === $emails->data[0]['email']) {
        //         $stripe->customers->update(
        //             $emails->data[0]['id'],
        //             [
        //                 'name' => $request['card_name'],
        //             ]
        //         );
        //         $update_customer = PaymentCustomer::where('email', $request['email'])->get()->first();
        //         $updateRow = [
        //             'name' => $request['card_name'],
        //         ];
        //         $update_customer->update($updateRow);
        //     }
        // }

        // // ----------------------- customer charges -----------------------------
        // $order = Order::all()->last();
        // $charges = $stripe->charges->create([
        //     "amount" => $order->total * 100,
        //     "currency" => "INR",
        //     "source" => $request->stripeToken,
        //     "description" => "Test payment from expert ishani 2"
        // ]);
        // $b_transaction = $charges['balance_transaction'];
        // $id = PaymentCustomer::where('name', $request->card_name)->select('id')->first();
        // Payment::create([
        //     'payment_customer_id' => $id->id,
        //     'balance_transaction' => $b_transaction,
        //     'amount' => $order->total,
        //     'currency' => 'INR',
        //     'source' => $request->stripeToken,
        //     'description' => 'Test payment from expert ishani 2'
        // ]);

        
    }
}
