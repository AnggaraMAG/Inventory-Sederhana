<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Supplier;

class Product extends Model
{
    protected $guarded = [];
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
