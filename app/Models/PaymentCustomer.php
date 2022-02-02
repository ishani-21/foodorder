<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentCustomer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user_id',
        'transaction_id',
        'name',
        'email',
        'card_number',
        'cvv',
    ];

    public function payment()
    {
        return $this->hasOne(Payment::class,'payment_customer_id','id');
    }  
}
