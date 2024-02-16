<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
       public function index(){
        if(Auth::id()){
            $user=auth()->user()->role ;
            $userId=auth()->id();
            
            if($user == 'chercheur'){
                if(DB::table('chercheurs')->where('id_user', $userId)->count()>0){
                return redirect()->Route('userDash');              
            }else{
                return redirect()->Route('registerCan');
                }
            }elseif($user == 'entreprise'){ 
                if(DB::table('entreprises')->where('id_user', $userId)->count()>0){
                    return redirect()->Route('companyDash');  
            }else{
                return redirect()->Route('registerEntr');
            }  
            }else{
                return redirect()->Route('adminDash');  
            }
    
        }
       }
}
