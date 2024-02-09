<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
       public function index(){
        if(Auth::id()){
            $user=auth()->user()->role ;
            
            if($user == 'chercheur'){
                return redirect()->Route('registerCan');;
            }else{   
                return redirect()->Route('registerEntr');

            }
    
        }
       }
}
