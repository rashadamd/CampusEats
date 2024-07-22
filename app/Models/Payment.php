<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $primaryKey = 'paymentid';

    protected $fillable = [
        'orderid', 'paymethod', 'paystatus', 'amount', 'date',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderid');
    }
}
