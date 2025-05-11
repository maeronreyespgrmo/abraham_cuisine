<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    protected $casts = [
        'schedule' => 'datetime',
        'food_order'=> 'array',
    ];
    
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'contact',
        'email',
        'address',
        'table',
        'schedule',
        'pax',
        'status',
        'food_order',
        'payment_method',
        'town_code',
        'province_code',
        'barangay_code',
    ];
    
}
