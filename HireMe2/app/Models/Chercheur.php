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
    protected $fillable = [
        'id_user',
        'nom',
        'prenom',
        'telephone',
        'adresse',
        'poste',
        'photo',
        'about',
    ];
    public function emploi()
    {
        return $this->belongsToMany(Emploi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }
  

}
