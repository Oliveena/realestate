<?php
<<<<<<< HEAD
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'password',
        'city',
        'role',
        'avatar'
    ];

    // Relationship: One user (realtor) can have many properties
    public function properties()
    {
        return $this->hasMany(Property::class, 'realtorId');  
    }

    public function avatar()
    {
        return $this->hasOne(Image::class, 'userId'); 
=======

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
>>>>>>> 2e5eb90de0a4395c1a40c44558093b1e0e202cb9
    }
}
