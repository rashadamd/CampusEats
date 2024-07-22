<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $primaryKey = 'orderitemid';

    protected $fillable = [
        'orderid', 'menuid', 'qty', 'price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderid');
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menuid');
    }
}
