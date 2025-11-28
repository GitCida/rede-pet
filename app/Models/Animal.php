<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Species;

class Animal extends Model
{
    public function species() {
        return $this->belongsTo(Species::class, 'species_id', 'species_id');
    }

    protected $primaryKey = 'animal_id';
    protected $fillable = [
        'name',
        'age',
        'size',
        'gender',
        'species_id',
    ];
}
