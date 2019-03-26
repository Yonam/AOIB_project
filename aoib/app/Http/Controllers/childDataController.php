<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Enfant;

class childDataController extends Controller
{
    //
     public function showChildDataPage(Request $req){
    	// if (auth()->guest()){
    	// 	return redirect('/signin')->withErrors(
    	// 		['email' => 'Vous devez être connecté pur voir cette page']);
    	// }

    	$childData = Enfant::where('STATUEENF','2')
    				  ->orWhere('STATUEENF', '3')
    				  ->get();

    	return view('GestDocuments.childData', compact('childData'));

    }

    public function chercheInfoEnfantById($idEnfant){
        $idEnf = $idEnfant; 

        //Recuperation information en fonction de l'id
        $recupInfoEnfant = $this->rechercheInfoEnfant()->where('STATUEENF', $idEnf);

        echo json_encode(array(
            'datas'=>$recupInfoEnfant

        ));
    }
    

          //*******************REQUIRE************************//

    public function rechercheInfoEnfant(){
        $allEnfant = Enfant::all();
        return $allEnfant;
    }


	   //  public function showChildDataPage(){
    // 	$childData = Enfant::where('STATUEENF', '0')
    // 				  ->orWhere('STATUEENF', '1')
    // 				  ->orWhere('STATUEENF', '2')
    // 				  ->get();

    // 	return view('GestDocuments.childData', compact('childData'));

    // }



}
