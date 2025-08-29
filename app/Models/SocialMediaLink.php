<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMediaLink extends Model
{
    protected $table = 'social_media_links';
    protected $fillable = ['platform_name', 'platform_url', 'platform_icon', 'status'];
    public $timestamps = true;
    
    protected $casts = [
        'status' => 'boolean',
    ];

    // Accessors to maintain backward compatibility
    public function getNameAttribute()
    {
        return $this->platform_name;
    }

    public function getUrlAttribute()
    {
        return $this->platform_url;
    }

    public function getIconAttribute()
    {
        return $this->platform_icon;
    }
}
