<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Adoption;
class Adopter extends Model
{
    public function adoptions()
    {
        return $this->hasMany(Adoption::class, 'adopter_id', 'adopter_id');
    } 

    protected $primaryKey = 'adopter_id';
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'address',
    ];
}
