<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListeEnfantController extends Controller
{
    public function showListeEnfant(){
    	// 	if(auth()->guest()){
   		// 	return redirect('/signin')->withErrors(
   		// 		['email'=>'Vous devez être connecté pour voir cette page']
   		// 	);
   		// }

   		return view('GestEnregistrement.listeEnfant');

    }
}
