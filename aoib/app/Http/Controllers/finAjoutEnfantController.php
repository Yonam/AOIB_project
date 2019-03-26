<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enfant;

class finAjoutEnfantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enfant=Enfant::EnregistrementPartiel()->get();
        return view('GestEnregistrement.enregistrementFinal')->withEnfant($enfant);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enfant=Enfant::whereIdenfant($id)->get();

        return view('GestEnregistrement.enregistrementFinalunique')->withEnfant($enfant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        session_start();
        $iduser=$_SESSION['IDUSER'];
        $dateenf=request('dateenf');
        $nationalite=request('nationalite');
        $etatmere=request('etatmere');
        $lieuenf=request('lieuenf');
        $formenf=request('formenf');
        $causedecpere=request('causedecpere');
        $sexe=request('sexe');
        $datedecpere=request('datedecespere');
        $nommere=request('nommere');
        $datedecmere=request('datedecmere');
        $causedecmere=request('causedecmere');
        $lieudecpere=request('lieudecpere');
        $lieudecmere=request('lieudecmere');
        $nomtut=request('nomtut');
        $contacttut=request('contacttut');
        $nbrfrere=request('nbrfrere');
        $nbrsoeur=request('nbrsoeur');
        $nbrfreretaf=request('nbrfreretaf');
        $adresseenf=request('adresseenf');
        $langue=request('langue');
        $gain=request('gain');
        enfant::whereIdenfant($id)->update(
            ['DATENAISS' => $dateenf, 'LIEUNAISS' => $lieuenf, 'NATIONALITE' => $nationalite,'TYPEFORMATION' => $formenf, 'STATUEENF' => 1,'CAUSEDECESPERE' => $causedecpere,
                'SEXE' => $sexe, 'DATEDECESPERE' => $datedecpere, 'NOMMERE' => $nommere,'ETATMERE' => $etatmere,'DATEDECESMERE' => $datedecmere, 'CAUSEDECESMERE' => $causedecmere,
                'LIEUDECESPERE' => $lieudecpere,'LIEUDECESMERE' => $lieudecmere, 'NOMTUTEUR' => $nomtut, 'CONTACTTUTEUR' => $contacttut,'NBREFRERE' => $nbrfrere, 'NBRESOEUR' => $nbrsoeur,
                'IDUSERVALIDER' => $iduser, 'NBRFRERETRAVAIL' => $nbrfreretaf, 'ADRESSEENF' => $adresseenf,'LANGUEENF' => $langue, 'GAINFAMILLE' => $gain]);

        return redirect()->route('finAjoutEnfant.index');
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
