<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteBanner extends Model
{
    protected $table = 'website_banners';
    protected $fillable = ['title', 'subtitle', 'image', 'mediaType', 'page', 'status'];
}
