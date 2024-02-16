<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Admin;
use App\Models\Emploi;
use App\Models\Langue;
use App\Models\Chercheur;
use App\Models\Education;
use App\Models\Competence;
use App\Models\Entreprise;
use App\Models\Experience;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function chercheur()
    {
        return $this->hasOne(Chercheur::class,'id_user');
    }

    public function entreprise()
    {
        return $this->hasOne(Entreprise::class,'id_user');
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
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
    public function emploi()
    {
        return $this->hasMany(Emploi::class,'id_entreprise');
    }
}
