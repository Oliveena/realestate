<?php
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
}
