<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogArticle extends Model
{

    protected $table = 'blogarticles';

    // explaining to Eloquent that the PK is not 'id'
    protected $primaryKey = 'blogId';

    protected $fillable = [
        'title',
        'body',
        'blogAuthorId', // FK
        'illustration',
    ];

    public $timestamps = true;

    // Relationship: A blog article is associated with one author (User)
    public function author()
    {
        return $this->belongsTo(User::class, 'blogAuthorId');  //FK
    }

    public function images()
    {
        return $this->hasOne(Image::class, 'theblogId'); // FK
    }

    // Relationship: A blog article can have many comments
    public function comments()
    {
        return $this->hasMany(Comment::class, 'articleId');  // FK
    }


}
