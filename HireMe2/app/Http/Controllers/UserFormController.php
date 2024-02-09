<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function create(){
        return view('auth/registerCandidat');
    }
}
