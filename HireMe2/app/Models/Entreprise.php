<?php

namespace App\Models;

use App\Models\User;
use App\Models\Emploi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'nom_entreprise',
        'slogan',
        'industrie',
        'description',
        'logo', 
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class,'id_user');
    }


}
