<?php

// TODO: add FKs to 'images' table

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
        return $this->belongsTo(Property::class, 'propertyId');
    }

    // relationship with BlogArticle
    public function blogArticle()
    {
        return $this->belongsTo(BlogArticle::class, 'theblogId');  //FK
    }

    // relationship with User (for avatar)
    public function user()
    {
        return $this->belongsTo(User::class, 'userId');  //FK
    }

    public function isIllustration()
    {
        return $this->imageType === 'illustration';  //FK
    }

    public function getImageUrlAttribute()
    {
        return asset('storage/' . $this->image);  
    }
}
