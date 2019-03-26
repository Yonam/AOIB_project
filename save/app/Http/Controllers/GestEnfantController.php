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

		$fillable=['NOMENF','MATRICULE','PRENOMENF','DATENAISS','LIEUNAISS','TYPEFORMATION','ETATENF','STATUEENF','PHOTOPASS',
				'NOMPERE','DATEDECESPERE','CAUSEDECESPERE','NOMMERE','ETATMERE','DATEDECESMERE','CAUSEDECESMERE','LIEUDECESPERE',
				'NOMTUTEUR','CONTACTTUTEUR','NBREFRERE','NBRESOEUR','TYPEFORMATION','IDUSERSCAN','IDUSERVALIDER','ACTENAISS',
				'ACTEDECESPERE','NBRFRERETRAVAIL','ADRESSEENF','GAINFAMILLE','LANGUEENF'];

	}


	public function AddEnfantForm(){
		session_start();
		$idenfant=$_SESSION['IDENFANT'];
		enfant::whereIdenfant($idenfant)->update(
				['NOM' => $nom, 'SEXE' => $sexe, 'ADRESSE' => $address, 'EMAIL' => $email, 'CONFIGURER' => 1]
        return redirect()->route('groupe.index');
        
   		return view('GestEnregistrement.addEnfant');

	}
   
}
