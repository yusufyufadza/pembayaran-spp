<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $primaryKey = 'nisn';

    protected $table = 'students';

    protected $fillable = [
    'nisn',
    'nis',
    'name',
    'address',
    'phone_number',
];
}
