<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'offer_name',
        'offer_description', 
        'offer_image',
        'terms',
        'properties',
        'status',
        'start_date',
        'end_date',
        'discount_percentage'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'discount_percentage' => 'decimal:2'
    ];
}
