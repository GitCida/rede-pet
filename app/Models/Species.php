<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;

class Species extends Model
{
    public function animals() {
        return $this->hasMany(Animal::class, 'species_id', 'species_id');
    }

    protected $primaryKey = 'species_id';
    protected $fillable = [
        'name',
    ];
}
