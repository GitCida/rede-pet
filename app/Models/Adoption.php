<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adoption extends Model
{
    protected $primaryKey = 'adoption_id';
    protected $fillable = [
        'reason',
        'observations',
        'status',
    ];
}
