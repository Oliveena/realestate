<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{

        // explaining to Eloquent that the PK is not 'id'
        protected $primaryKey = 'blogId';

    protected $fillable = [
        'title',
        'body',
        'blogAuthorId', // FK
        'illustration', // TODO: make not null
    ];

    // Relationship: A blog article is associated with one author (User)
    public function author()
    {
        return $this->belongsTo(User::class, 'blogAuthorId');  //FK
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'blogId'); // FK
    }
}
