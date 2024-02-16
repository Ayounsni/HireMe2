<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducController extends Controller
{
    public function create(){
        return view('profile.educ');
        
    }
    public function store(Request $request)
{
    // Récupérer les valeurs des champs nom[], prenom[], et date[] depuis la requête
    $diplomes = $request->input('diplome');
    $ecoles = $request->input('ecole');
    $dateds = $request->input('dated');
    $datefs = $request->input('datef');
    $id=auth()->id();

    $request->validate([
        'diplome.*' => 'required|string|max:255',
        'ecole.*' => 'required|string|max:255',
        'dated.*' => 'required|date',
        'datef.*' => 'required|date',
    ]);

    // Insérer les données dans la table User
    foreach ($diplomes as $index => $diplome) {
        Education::create([
            'diplom'=>$diplome,
            'id_cherch'=>$id,
            'etablissement'=> $ecoles[$index],
            'date_debut'=> $dateds[$index],
            'date_fin'=> $datefs[$index],
        ]);
    }

    // Rediriger ou retourner une réponse, par exemple :
    return redirect()->route('userDash');
}

    public function destroy(Education $education){
        $education->delete();
        return redirect()->route('userDash')->with('success', 'Education suprimmer.');
    }
}
