<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    use HasFactory;
    protected $fillable = [
        'diplom',
        'id_cherch',
        'etablissement',
        'date_debut',
        'date_fin',
    ];
    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
