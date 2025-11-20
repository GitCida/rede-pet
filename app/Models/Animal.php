<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $primaryKey = 'animal_id';
    protected $fillable = [
        'name',
        'age',
        'size',
        'gender',
    ];
}
