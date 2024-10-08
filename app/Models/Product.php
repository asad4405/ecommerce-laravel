<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    function inventory()
    {
        return $this->hasMany(Inventory::class, 'product_id');
    }
}
