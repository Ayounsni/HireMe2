<?php

namespace App\Http\Controllers;

use App\Models\Chercheur;
use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function create(){
        return view('auth/registerCandidat');
    }
    public function store(Request $request){
        $id=auth()->id();

        $request->validate([
            'nom'=> 'required|min:3',
            'prenom'=> 'required|min:3',
            'tel'=> 'required|numeric',
            'adresse'=> 'required|min:5',
            'post'=> 'required|min:3',
            'about'=> 'required|min:30',
        ]);
        if($request->hasfile('image')){
            $img=$request->file('image')->store('img','public');
        }else{
            $img=NULL;
        }

        Chercheur::create([
            'id_user'=>$id,
            'nom'=> $request->nom,
            'prenom'=> $request->prenom,
            'telephone'=> $request->tel,
            'adresse'=> $request->adresse,
            'poste'=> $request->post,
            'photo'=>$img,
            'about'=> $request->about,
        ]);
        return redirect()->Route('userDash'); 
    }
}
