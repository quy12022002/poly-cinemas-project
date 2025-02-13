<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatShowtime extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_id',
        'showtime_id',
        'user_id',
        'status',
        'price',
        'hold_expires_at',
    ];
    public function showtime()
    {
        return $this->belongsTo(Showtime::class);
    }

}
