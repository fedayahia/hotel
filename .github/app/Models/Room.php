<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id', 'name', 'description', 'price', 'total_rooms', 'amenities', 'size', 'total_beds', 'total_bathrooms', 'total_balconies', 'total_guests', 'featured_photo'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    public function photos()
    {
        return $this->hasMany(RoomPhoto::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(Amenity::class);
    }
}
