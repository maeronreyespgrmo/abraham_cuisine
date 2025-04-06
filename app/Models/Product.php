<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Product extends Model
{
    //
    protected $fillable = [
        'name',
        'description',
        'product_type',
        'price',
        'pax',
        'image_name',
    ];
    protected $table = 'tbl_products'; 
}
