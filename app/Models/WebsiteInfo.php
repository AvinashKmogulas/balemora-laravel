<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteInfo extends Model
{
    protected $table = 'website_infos';
    protected $fillable = ['website_name', 'website_logo', 'website_white_logo', 'website_favicon', 'apple_touch_icon'];
}
