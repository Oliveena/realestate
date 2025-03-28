<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';
    protected $primaryKey = 'messageId';

    protected $fillable = [
        'senderId', 
        'receiverId',
        'propertyId',
        'senderName',
        'senderEmail',
        'senderPhone',
        'messBody'
    ];
    
    // Remove these lines that don't match our schema
    // const CREATED_AT = 'messageTime'; 
    // const UPDATED_AT = null;


    // A message has a sender (from users table)
    public function sender()
    {
        return $this->belongsTo(User::class, 'senderId');
    }

     // A message has a receiver (from users table)
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiverId');
    }

    // A message belongs to a property
    public function property()
    {
        return $this->belongsTo(Property::class, 'propertyId');
    }
}
