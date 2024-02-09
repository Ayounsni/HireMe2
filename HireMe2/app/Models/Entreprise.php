<?php

namespace App\Models;

use App\Models\User;
use App\Models\Emploi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function emplois()
    {
        return $this->hasMany(Emploi::class);
    }
}
