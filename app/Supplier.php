<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Supplier extends Model
{
    protected $guarded = [];
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
