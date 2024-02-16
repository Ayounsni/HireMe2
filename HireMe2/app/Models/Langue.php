<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Langue extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'id_cherch',
        'niveau',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
