<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $primaryKey = 'restid';

    protected $fillable = [
        'image', 'name', 'address', 'mobile_no', 'email', 'username', 'password',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'restid');
    }

    public function orders()
    {
        return $this->hasMany(Order::class, 'restid');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'restid');
    }
}
