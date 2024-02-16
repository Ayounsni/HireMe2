<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Langue;
use App\Models\Chercheur;
use App\Models\Education;
use App\Models\Competence;
use App\Models\Experience;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $id=auth()->id();
            $user=User::find($id);
            $experiences = Experience::where('id_cherch', $id)->get();
            $educations = Education::where('id_cherch', $id)->get();
            $langues = Langue::where('id_cherch', $id)->get();
            $competences = Competence::where('id_cherch', $id)->get();
        return view('profile/dash',compact('user', 'experiences','educations','langues','competences'));
    }
}
