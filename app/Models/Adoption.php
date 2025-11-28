<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Animal;
use App\Models\Adopter;

class Adoption extends Model
{
    public function animals()
    {
        return $this->belongsTo(Animal::class, 'animal_id', 'animal_id');
    }

    public function adopters()
    {
        return $this->belongsTo(Adopter::class, 'adopter_id', 'adopter_id');
    }

    protected $primaryKey = 'adoption_id';
    protected $fillable = [
        'adopter_id',
        'animal_id',
        'reason',
        'observations',
        'status',
    ];
}
