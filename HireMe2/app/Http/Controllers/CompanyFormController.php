<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyFormController extends Controller
{
    public function create(){
        return view('auth/registerEntreprise');
    }
}
