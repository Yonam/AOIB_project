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
        $pseudo1=request('pseudo1');

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
        dd($id);
        //"Nom","langue","formation","datenaiss","Adresseenf","nompere","datedecespere","casedecespere","nommere","causedecesmere","nbrfrere","nbrfreretf","nbrsoeur","gain","nomtuteur","contacttuteur";

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
