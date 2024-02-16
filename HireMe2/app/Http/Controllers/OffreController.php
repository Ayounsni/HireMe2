<?php

namespace App\Http\Controllers;

use App\Models\Emploi;
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function create(){
        return view('company/ajoutOffre');
    }
    public function store(Request $request){
        $id=auth()->id();

        $request->validate([
            'titre'=> 'required|min:3',
            'type'=> 'required|min:3',
            'emplacement'=> 'required|min:5',
            'competence'=> 'required|min:3|regex:/^[^\/\s\-.]+$/',
            'description'=> 'required|min:20',
        ],[
            'competence.regex'=>'Veuillez entrez des virgules entre les compétences ',
            ]);


        Emploi::create([
            'id_entreprise'=>$id,
            'titre'=> $request->titre,
            'description'=> $request->description,
            'competence'=> $request->competence,
            'type_contrat'=> $request->type,
            'emplacement'=> $request->emplacement,
        ]);
        return redirect()->Route('companyDash'); 
    }
    public function destroy(Emploi $offre){
        $offre->delete();
        return redirect()->route('companyDash')->with('success', 'Offre suprimmer');
    }
    public function edit(Emploi $offre){
        return view('company/editOffre',compact('offre'));
    }
}
