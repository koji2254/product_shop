<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
        'product_id',
        'product_title',
        'sku_code',
        'user_id',
        'qty'	 
    ];
}
