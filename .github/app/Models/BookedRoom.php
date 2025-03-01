<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedRoom extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id', 'room_id', 'booking_date'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
