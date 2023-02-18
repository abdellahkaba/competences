<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coordonnee extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_bureau','phone_domicile','fax','adresse_postal','adresse_geographique','user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class) ;
    }
}
