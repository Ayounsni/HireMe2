<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class CompanyFormController extends Controller
{
    public function create(){
        return view('auth/registerEntreprise');
    }
    public function store(Request $request){
        $id=auth()->id();

        $request->validate([
            'nom'=> 'required|min:3',
            'slogan'=> 'required|min:3',
            'industrie'=> 'required|min:3',
            'description'=> 'required|min:20',
        ]);
        if($request->hasfile('logo')){
            $img=$request->file('logo')->store('img','public');
        }else{
            $img=NULL;
        }

        Entreprise::create([
            'id_user'=>$id,
            'nom_entreprise'=> $request->nom,
            'slogan'=> $request->slogan,
            'industrie'=> $request->industrie,
            'description'=> $request->description,
            'logo'=>$img, 
        ]);
        return redirect()->Route('companyDash'); 
    }
}
