<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adopter extends Model
{
    protected $primaryKey = 'adopter_id';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
    ];
}
