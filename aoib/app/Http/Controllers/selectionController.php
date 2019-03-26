<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enfant;
use App\EnfantIm;
class selectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfant=Enfant::Enregistrer()->get();
        return view('GestSelection.selectionEnfant')->withEnfant($enfant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('GestSelection.consulterSelection');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nbr=request('recherche');
        $enfant=Enfant::Enregistrer()->take($nbr)->get();
        return view('GestSelection.selectionEnfant')->withEnfant($enfant);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        session_start();
        $IDS=$_SESSION['IDS'];
        $iduser=$_SESSION['IDUSER'];
        $i=1;
        foreach($IDS as $ID):

            enfant::whereIdenfant($IDS[$i])->update(['STATUEENF' => 2]);
            $enfant=enfant::whereIdenfant($IDS[$i])->get();
            /**foreach($enfant as $enf):
                $nom=$enf->NOMENF;
                $prenom=$enf->PRENOMENF;
                $datenaissenf=$enf->DATENAISS;
                $lieunaiss=$enf->LIEUNAISS;
                $sexe=$enf->SEXE;
                $nationalite=$enf->NATIONALITE;
                $formation=$enf->TYPEFORMATION;
                $nompere=$enf->NOMPERE;
                $datedecpere =$enf->DATEDECESPERE;
                $causedecpere =$enf->CAUSEDECESPERE;
                $nommere =$enf->NOMMERE;
                $causedecmere =$enf->CAUSEDECESMERE;
                $etatmere =$enf->ETATMERE;
                $datedecmere =$enf->DATEDECESMERE;
                $lieudecmere =$enf->LIEUDECESMERE;
                $nomtut =$enf->NOMTUTEUR;
                $contacttut =$enf->CONTACTTUTEUR;
                $nbrsoeur =$enf->NBRESOEUR;
                $nbrfrere =$enf->NBREFRERE;
                $nbrfreretaf =$enf->NBRFRERETRAVAIL;
                $adresseenf =$enf->ADRESSEENF;
                $gainfami =$enf->GAINFAMILLE;
                $lang =$enf->LANGUEENF;
                $idenfant=$IDS[$i];
            enfantIm::create(['NOMENFIM'=>$nom , 'PRENOMENFIM'=>$prenom, 'NATIONALITEIM'=>$nationalite, 'DATENAISSIM'=>$datenaissenf,'SEXEIM'=>$sexe,
                            'LIEUNAISSIM'=>$lieunaiss, 'TYPEFORMATIONIM'=>$formation, 'NOMPEREIM'=>$nompere,
                            'DATEDECESPEREIM'=>$datedecpere, 'CAUSEDECESPEREIM'=>$causedecpere, 'NOMMEREIM'=>$nommere,
                            'ETATMEREIM'=>$etatmere, 'DATEDECESMEREIM'=>$datedecmere, 'CAUSEDECESMEREIM'=>$causedecmere,
                            'LIEUDECESPEREIM'=>$lieudecmere, 'NOMTUTEURIM'=>$nomtut,'CONTACTTUTEURIM'=>$contacttut,
                            'NBREFREREIM'=>$nbrfrere, 'NBRESOEURIM'=>$nbrsoeur,
                            'NBRFRERETRAVAILIM'=>$nbrfreretaf, 'ADRESSEENFIM'=>$adresseenf,'GAINFAMILLEIM'=>$gainfami,
                            'LANGUEENFIM'=>$lang,'IDUSERVALIDERTRADUCTION'=>$iduser,'IDENFANT'=>$idenfant]);
            endforeach;
            */
            $i=$i+1;
        endforeach;
        return redirect()->route('selectionEnfant.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
