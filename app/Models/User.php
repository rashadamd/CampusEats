<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'userid';

    protected $fillable = [
        'image', 'name', 'address', 'mobile_no', 'email', 'username', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];


    public function orders()
    {
        return $this->hasMany(Order::class, 'userid');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'userid');
    }
}
