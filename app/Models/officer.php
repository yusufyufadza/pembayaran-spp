<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class officer extends Authenticatable
{
    use HasFactory;

     protected $table = 'officers';
    protected $fillable = [
        'name_officer',
        'username',
        'password',
    ];
}
