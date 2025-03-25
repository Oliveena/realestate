<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
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
}
