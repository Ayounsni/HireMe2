<?php

namespace App\Models;

use App\Models\User;
use App\Models\Emploi;
use App\Models\Langue;
use App\Models\Education;
use App\Models\Competence;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chercheur extends Model
{
    use HasFactory;
    public function emploi()
    {
        return $this->belongsToMany(Emploi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function langue()
    {
        return $this->hasMany(Langue::class);
    }
    public function experience()
    {
        return $this->hasMany(Experience::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }
    public function competence()
    {
        return $this->hasMany(Competence::class);
    }
}
