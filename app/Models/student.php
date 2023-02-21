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
        'email',
        'address',
        'phone_number',
        'id_class',
    ];

    public function classModel(){
        return $this->belongsTo(classModel::class, 'id_class');
    }
}
