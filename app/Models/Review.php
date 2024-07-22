<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $primaryKey = 'reviewid';

    protected $fillable = [
        'userid', 'restid', 'rating', 'comment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class, 'restid');
    }
}
