<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $primaryKey = 'commentId';  // PK

    protected $fillable = [
        'commentAuthorId',  // FK to User 
        'commentBody',      
        'commentTime',      
        'articleId',        // FK to BlogArticle 
    ];

    // Relationship: A comment is authored by one user
    public function author()
    {
        return $this->belongsTo(User::class, 'commentAuthorId');  // FK
    }

    // Relationship: A comment belongs to one blog article
    public function article()
    {
        return $this->belongsTo(BlogArticle::class, 'articleId');  // FK
    }
}
