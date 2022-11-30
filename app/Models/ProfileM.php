<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileM extends Model
{
    protected $table = 'profile';

    protected $fillable = [
        'kd_profile',
        'nama_profile'
    ];

    protected $hidden;
}
