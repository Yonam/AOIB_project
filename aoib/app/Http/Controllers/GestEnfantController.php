<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enfant;

class GestEnfantController extends Controller
{
	public function showAddEnfantForm(){
			// if(auth()->guest()){
   // 			return redirect('/signin')->withErrors(
   // 				['email'=>'Vous devez être connecté pour voir cette page']
   // 			);
   // 		}  else

   		return view('GestEnregistrement.addEnfant');
	}

	public function AddEnfantForm(){
        dd('salu');
   		return view('GestEnregistrement.addEnfant');

	}
   
}
