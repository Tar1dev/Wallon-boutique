<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function carts()
    {
        return $this->belongsToMany(Cart::class)
            ->withPivot('quantity')
            ->withTimestamps();
    }
}
