<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Formation extends Model
{
    use HasFactory;

    protected $fillable = [
        'specialite','ecole','niveau','mention','date_debut','date_fin','equivalence','pays','ville'
    ];

    public function users()
    {
        return $this->belongsTo(User::class) ;
    }
}
