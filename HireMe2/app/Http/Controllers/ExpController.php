<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExpController extends Controller
{
    public function create(){
        return view('profile.exp');
        
    }
    public function store(Request $request)
{
    // Récupérer les valeurs des champs nom[], prenom[], et date[] depuis la requête
    $entreprises = $request->input('entreprise');
    $postes = $request->input('poste');
    $dateds = $request->input('dated');
    $datefs = $request->input('datef');
    $id=auth()->id();

    $request->validate([
        'entreprise.*' => 'required|string|max:255',
        'poste.*' => 'required|string|max:255',
        'dated.*' => 'required|date',
        'datef.*' => 'required|date',
    ]);

    // Insérer les données dans la table User
    foreach ($entreprises as $index => $entreprise) {
        Experience::create([
            'entreprise'=>$entreprise,
            'id_cherch'=>$id,
            'poste'=> $postes[$index],
            'date_debut'=> $dateds[$index],
            'date_fin'=> $datefs[$index],
        ]);
    }

    // Rediriger ou retourner une réponse, par exemple :
    return redirect()->route('userDash');
}

    public function destroy(Experience $experience){
        $experience->delete();
        return redirect()->route('userDash')->with('success', 'Experience suprimmer.');
    }
}
