<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerReply extends Model
{
    use HasFactory;

    protected $fillable = ['reply', 'owner_id', 'review_id'];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function review()
    {
        return $this->belongsTo(Review::class);
    }
}
