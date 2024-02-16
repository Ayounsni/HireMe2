<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Emploi;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $id=auth()->id();
            $user=User::find($id);
            $offres = Emploi::where('id_entreprise', $id)->get();
        return view('company/dash',compact('user','offres'));
    }
}
