<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = [
        'senderId', 
        'receiverId', 
        'messTitle', 
        'messBody', 
        'messageTime', 
        'attachedFiles'
    ];

    const CREATED_AT = 'messageTime'; 
    const UPDATED_AT = null; 


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
}
