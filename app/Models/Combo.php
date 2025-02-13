<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'img_thumbnail',
        'price',
        'price_sale',
        'description',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function comboFood()
    {
        return $this->hasMany(ComboFood::class);
    }
    public function ticketCombo()
    {
        return $this->hasMany(TicketCombo::class);
    }
    public function food()
    {
        return $this->belongsToMany(Food::class, 'combo_food')->withPivot('quantity');
    }
}
