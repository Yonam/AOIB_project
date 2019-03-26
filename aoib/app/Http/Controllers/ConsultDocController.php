<?php

namespace App\Http\Controllers;
use  App\Enfant;
use Illuminate\Http\Request;

class ConsultDocController extends Controller
{
    public function listEnfant(Request $req){
    	if (auth()->guest()){
    		return redirect('/signin')->withErrors(
    			['email' => 'Vous devez être connecté pur voir cette page']);
    	}
    }
      //Needed

    public function showConsultDoc(){
        // if (auth()->guest()){
        //     return redirect('/signin')->withErrors(
        //         ['email' => 'Vous devez être connecté pur voir cette page']);
        // }
    	$AllEnfants = Enfant::all();
    	return view('GestDocuments.ConsultDoc', compact('AllEnfants'));

    }

 /*==============================================================*/
/* Route: LISTEENFANT_JSON                                 */
/*==============================================================*/
public function listEnfantJson(Request $req){
	$allEnfant1 = Enfant::all();


	echo json_encode(array('datas' => $allEnfant1));

}

}
