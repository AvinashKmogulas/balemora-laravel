<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    protected $fillable = [
        'contact_type',
        'contact',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];
}
