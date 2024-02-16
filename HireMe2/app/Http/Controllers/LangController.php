<?php

namespace App\Http\Controllers;

use App\Models\Langue;
use Illuminate\Http\Request;

class LangController extends Controller
{
    public function create(){
        return view('profile.lang');
        
    }
    public function store(Request $request)
{
    // Récupérer les valeurs des champs nom[], prenom[], et date[] depuis la requête
    $langues = $request->input('langue');
    $niveaus = $request->input('niveau');
    $id=auth()->id();

    $request->validate([
        'langue.*' => 'required|string|max:255|unique:langues,nom',
        'niveau.*' => 'required|string|max:255',

    ]);

    // Insérer les données dans la table User
    foreach ($langues as $index => $langue) {
        Langue::create([
            'nom'=>$langue,
            'id_cherch'=>$id,
            'niveau'=> $niveaus[$index],

        ]);
    }
    return redirect()->route('userDash');
}

    public function destroy(Langue $langue){
        $langue->delete();
        return redirect()->route('userDash')->with('success', 'Langue suprimmer.');
    }
}
