<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'imageType',
        'image',  // file path
    ];

    const IMAGE_TYPES = ['avatar', 'photos', 'illustration'];

    // relationship with Property
    public function property()
    {
        return $this->belongsTo(Property::class, 'thepropertyId');
    }

    // relationship with BlogArticle
    public function blogArticle()
    {
        return $this->belongsTo(BlogArticle::class, 'theblogId');  // FK
    }

    // relationship with User (for avatar)
    public function user()
    {
        return $this->belongsTo(User::class, 'posterId');  // Changed from userId to posterId
    }

    public function isIllustration()
    {
        return $this->imageType === 'illustration';  // FK
    }

    public function isAvatar()
    {
        return $this->imageType === 'avatar';  // FK
    }

    public function getImageUrlAttribute()
    {
        return asset('img/blogs/' . $this->image);  // Append the stored image filename
    }
    
}    
