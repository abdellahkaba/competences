<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Langue extends Model
{
    use HasFactory;

    protected $fillable = [
        'langue','niveau_ecriture','niveau_lecture','niveau_comprehension','user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class) ;
    }
}
