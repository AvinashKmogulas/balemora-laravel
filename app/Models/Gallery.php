<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['id', 'property', 'image', 'title', 'description', 'created_at', 'updated_at'];
}
