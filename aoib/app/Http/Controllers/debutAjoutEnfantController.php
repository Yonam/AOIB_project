<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enfant;

class debutAjoutEnfantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('GestEnregistrement.addEnfant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acteNaisse='documentsEnfants/document/'.request('acteNaisse');
        $acteDecesPere='documentsEnfants/document/'.request('acteDecesPere');
        $photo='documentsEnfants/photo/'.request('photo');
        $nomEnfant=request('nomEnfant');
        $prenomEnfant=request('prenomEnfant');
        $nomPere=request('nomPere');
        session_start();
        $iduser=$_SESSION['IDUSER'];

       Enfant::create(['NOMENF'=>$nomEnfant,'PRENOMENF'=>$prenomEnfant,'NOMPERE'=>$nomPere,'ACTENAISS'=>$acteNaisse,'ACTEDECESPERE'=>$acteDecesPere,'PHOTOPASS'=>$photo,'IDUSERSCAN'=>$iduser,'STATUEENF'=>0]);

        return redirect()->route('ajoutEnfant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
