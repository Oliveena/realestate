<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'firstName',
        'lastName',
        'email',
        'password',
        'phoneNumber',
        'city',
        'role',
        'avatar', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Check if the user is a realtor.
     */
    public function isRealtor()
    {
        return $this->role === 'realtor';
    }

    /**
     * A user can have many blog articles (for realtors).
     */
    public function blogArticles()
    {
        return $this->hasMany(BlogArticle::class);
    }

    /**
     * A user has one avatar image.
     */
    public function avatar()
    {
        return $this->hasOne(Image::class, 'userId');
    }

    /**
     * A user can have many comments.
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
