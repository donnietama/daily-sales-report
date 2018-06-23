<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    // fillable inputs
    protected $fillable = [
        'product_code', 'product_name', 'ingredients', 'quantity',
    ];

    // join recipe with product
    public function product()
    {
        return $this->hasOne(Product::class, 'product_code', 'product_code');
    }
}
