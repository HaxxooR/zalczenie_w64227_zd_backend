<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    use HasFactory;
    protected $fillable = [
        'id',
        'product_name',
        'product_description',
        'product_price',
        'product_category',
        'product_status',
        'short_description',
        'long_description',
];
}
