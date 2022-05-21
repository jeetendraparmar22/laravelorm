<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillble = [
        'user_id',
        'address',
        'phone_no'
    ];
    
    /* relation with user */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
