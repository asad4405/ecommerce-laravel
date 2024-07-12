<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer_one extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'price',
        'discount_price',
        'image',
        'date',
    ];
}