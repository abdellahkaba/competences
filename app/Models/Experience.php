<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'fonction','entreprise','date_debut','date_fin','pays','statut', 'categorie','compentence','user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class) ;
    }
}
