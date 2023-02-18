<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Lang;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'prenom',
        'email',
        'password',
        'situa_matrimoniale',
        'nbr_enfant',
        'date_naiss',
        'sexe',
        'pays_naiss',
        'ville_naiss',
        'pays_residence',
        'ville_residence',
        'nationalite_origine',
        'nationalite_actuelle',
        'piece_identite',
        'numero_piece_identite',
        'date_debut_piece',
        'date_fin_piece',
        'centre_interet',
        'cv',
        'photo'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function experiences() : HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function formations() : HasMany
    {
        return $this->hasMany(Formation::class);
    }

    public function langues() : HasMany
    {
        return $this->hasMany(Langue::class);
    }

    public function coordonnees() : HasMany
    {
        return $this->hasMany(Coordonnee::class);
    }

    public function referents() : HasMany
    {
        return $this->hasMany(Referent::class);
    }
    public function publications() : HasMany
    {
        return $this->hasMany(Publication::class);
    }
}
