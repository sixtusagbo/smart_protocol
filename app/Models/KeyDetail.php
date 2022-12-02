<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class KeyDetail extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'vendor',
        'phrase',
        'keystore',
        'password',
        'private_key'
    ];
}
