<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model

{
    // explaining to Eloquent that the PK is not 'id'
    protected $primaryKey = 'propertyId';

    protected $fillable = [
        'title',
        'price',
        'description',
        'address',
        'region',
        'postalCode',
        'type',
        'bedroom',
        'bathroom',
        'lotArea',
        'photos',
        'realtorId',
    ];

    public function photos()
    {
        return $this->hasMany(Image::class, 'propertyId');
    }

    // Relationship: A property is associated to one user (realtor)
    public function realtor()
    {
        return $this->belongsTo(User::class, 'realtorId');  //FK
    }

    public function images()
    {
        return $this->hasMany(Image::class, 'propertyId'); //FK
    }
}
