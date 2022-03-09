<?php

namespace App\Repositories;

use App\Contracts\PaymentContract;
use Illuminate\Support\Facades\Session;
use App\Models\PaymentCustomer;
use App\Models\Order;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;

class PaymentRepository implements PaymentContract
{ 
   public function paymentPage(array $array)
   {
      // print_r($array['email']);die();
      $stripe = new \Stripe\StripeClient(
         env('STRIPE_SECRET')
      );

      $token = $stripe->tokens->create([
         'card' => [
            'number' => $array['card_number'],
            'cvc' => $array['cvv'],
            'exp_year' => 2023,
            'exp_month' => '3',
         ],
      ]);
      // ----------------------- customer create-----------------------------
      $email = PaymentCustomer::where('email', $array['email'])->select('email')->first();
      $name = PaymentCustomer::where('name', $array['card_name'])->select('name')->first();

      if (!$email || !$name) {
         $create = $stripe->customers->create([
            'name' => $array['card_name'],
            'email' => $array['email'],
         ]);
         $id = $create->id; // Customer Stripe Id
         // ----------------------- customer card -----------------------------
         $card = $stripe->customers->createSource(
            $id,
            ['source' => $token->id]
         );
         PaymentCustomer::create([
            'user_id' => Auth::user()->id,
            'transaction_id' => $id,
            'name' => $array['card_name'],
            'email' => $array['email'],
            'card_number' => $array['card_number'],
            'cvv' => $array['cvv'],
         ]);
         // --------------------------------- Update ---------------------------
      } else {
         // dd(2);
         $emails = $stripe->customers->all(['email' => $array['email']]);
         if ($array['email'] === $emails->data[0]['email']) {
            $stripe->customers->update(
               $emails->data[0]['id'],
               [
                  'name' => $array['card_name'],
               ]
            );
            $update_customer = PaymentCustomer::where('email', $array['email'])->get()->first();
            $updateRow = [
               'name' => $array['card_name'],
            ];
            $update_customer->update($updateRow);
         }
      }

      // ----------------------- customer charges -----------------------------
      $order = Order::all()->last();
      $charges = $stripe->charges->create([
         "amount" => $order->total * 100,
         "currency" => "INR",
         "source" => $token->id,
         "description" => "Test payment from expert ishani 2"
      ]);
      $b_transaction = $charges['balance_transaction'];
      $id = PaymentCustomer::where('name', $array['card_name'])->select('id')->first();
      Payment::create([
         'payment_customer_id' => $id->id,
         'balance_transaction' => $b_transaction,
         'amount' => $order->total,
         'currency' => 'INR',
         'source' => $token->id,
         'description' => 'Test payment from expert ishani 2'
      ]);

      return $charges;
   }
}
