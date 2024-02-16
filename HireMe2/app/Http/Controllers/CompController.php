<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use Illuminate\Http\Request;

class CompController extends Controller
{
    public function create(){
        return view('profile.comp');
        
    }
    public function store(Request $request)
{
    $competences = $request->input('competence');
    $id=auth()->id();

    $request->validate([
        'competence.*' => 'required|string|max:255|unique:competences,nom',


    ]);

    // Insérer les données dans la table User
    foreach ($competences as $competence) {
        Competence::create([
            'nom'=>$competence,
            'id_cherch'=>$id,
        ]);
    }
    return redirect()->route('userDash');
}

    public function destroy(Competence $competence){
        $competence->delete();
        return redirect()->route('userDash')->with('success', 'Competence suprimmer.');
    }
}
