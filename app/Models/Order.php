<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'orderid';

    protected $fillable = [
        'userid', 'menuid', 'quantity', 'amount', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menuid');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'orderid');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class, 'orderid');
    }
}
