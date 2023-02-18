<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Referent extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_complet','phone_fixe','phone_mobile','adresse_email', 'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class) ;
    }
}
