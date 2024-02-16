<?php

namespace App\Models;

use App\Models\User;
use App\Models\Chercheur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class emploi extends Model
{
    use HasFactory;

    protected $fillable = [
            'id_entreprise',
            'titre',
            'description',
            'competence',
            'type_contrat',
            'emplacement',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class,'id_entreprise');
    }
}
