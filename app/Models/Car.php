<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'images',
        'brand_name',
        'price_per_day',
        'stock',
    ];

    public function reservation() {
        return $this->hasMany(Reservations::class);
    }
}
