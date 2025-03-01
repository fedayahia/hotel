<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id', 'order_no', 'transaction_id', 'payment_method', 'card_last_digit', 'paid_amount', 'booking_date', 'status', 'final_price'
    ];

    public function user()
    {
        return $this->belongsTo(user::class);
    }

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function bookingRooms()
    {
        return $this->hasMany(BookingRoom::class);
    }
}
