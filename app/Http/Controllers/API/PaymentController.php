<?php

namespace App\Http\Controllers\API;

use App\Contracts\PaymentContract;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(PaymentContract $Payment)
    {
        $this->Payment = $Payment;
    }
    
    public function paymentPage(Request $request)
    {
        $data = $this->Payment->paymentPage($request->all());
        return response()->json([
            'message' => 'Payment successfully!!!',
            'data' => $data
        ]);

        // $stripe = new \Stripe\StripeClient(
        //     env('STRIPE_SECRET')
        // );

        // $token = $stripe->tokens->create([
        //     'card' => [
        //         'number' => $request->card_number,
        //         'cvc' => $request->cvv,
        //         'exp_year' => 2023,
        //         'exp_month' => '3',
        //     ],
        // ]);
        
        // $create = $stripe->customers->create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ]);

        // $charges = $stripe->charges->create([
        //     "amount" => 100 * 100,
        //     "currency" => "INR",
        //     "source" => $token->id,
        //     "description" => "Test payment from expert ishani 2"
        // ]);


    }
}
