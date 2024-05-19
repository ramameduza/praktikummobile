<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
use HasFactory;
protected $fillable = [
    'sku',
    'product_category',
    'product_name',
    'product_detail',
    'product_brand',
    'product_price',
    'fileimages',
    'status',
    'deleted',
    'slug',
];
}