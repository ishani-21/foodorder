<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_customer_id',
        'balance_transaction',
        'amount',
        'currency',
        'source',
        'description',
    ];
}
