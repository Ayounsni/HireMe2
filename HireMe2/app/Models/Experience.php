<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = [
        'entreprise',
        'id_cherch',
        'poste',
        'date_debut',
        'date_fin',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
