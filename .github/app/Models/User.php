<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

  
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'status','photo'
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function orderDetails()
    {
        return $this->hasManyThrough(OrderDetail::class, Order::class);
    }
}
