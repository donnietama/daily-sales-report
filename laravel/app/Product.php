<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // join product with recipe
    public function recipe()
    {
        return $this->hasMany(Recipe::class, 'product_code', 'product_code');
    }
}
