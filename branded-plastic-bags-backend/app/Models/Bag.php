<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price_per_unit',
    ];

    protected $casts = [
        'price_per_unit' => 'decimal:2',
    ];
}
