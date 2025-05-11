<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodOrder extends Model
{
    //
    protected $fillable = [
        'reservation_id',
        'name',
        'preparation_time',
    ];
       
    protected $table = 'tbl_food_orders';
}
