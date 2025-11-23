<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $primaryKey = 'vaccine_id';
    protected $fillable = [
        'name',
        'description',
        'producer',
    ];
}
