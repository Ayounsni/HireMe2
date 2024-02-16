<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Langue;
use App\Models\Education;
use App\Models\Competence;
use App\Models\Experience;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class InvoiceController extends Controller
{
    public function generate(Request $request){
        $id=auth()->id();
            $user=User::find($id);
            $experiences = Experience::where('id_cherch', $id)->get();
            $educations = Education::where('id_cherch', $id)->get();
            $langues = Langue::where('id_cherch', $id)->get();
            $competences = Competence::where('id_cherch', $id)->get();
            $pdf = Pdf::loadView('profile/cv',compact('user', 'experiences','educations','langues','competences'));
        return $pdf->download('cv.pdf');
    }
}
