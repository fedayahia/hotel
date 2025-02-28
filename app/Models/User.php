<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'password', 'phone_number', 'profile_pic', 'role_id'];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hotels()
    {
        return $this->hasMany(Hotel::class, 'owner_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function ownerReplies()
    {
        return $this->hasMany(OwnerReply::class, 'owner_id');
    }
}

