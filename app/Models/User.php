<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'firstName',
        'lastName',
        'phoneNumber',
        'email',
        'password',
        'city',
        'role',
        'google_id',
        'facebook_id'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'phoneNumber' => 'integer',
        'email_verified_at' => 'datetime',
    ];

    // Relationship: One user (realtor) can have many properties
    public function properties()
    {
        return $this->hasMany(Property::class, 'realtorId');  
    }

    public function avatar()
    {
        return $this->hasOne(Image::class, 'userId'); 
    }
}
