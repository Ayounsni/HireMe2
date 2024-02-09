<?php

namespace App\Models;

use App\Models\Chercheur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class emploi extends Model
{
    use HasFactory;
    
    public function chercheur()
    {
        return $this->belongsToMany(Chercheur::class);
    }
}
