<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultDoc extends Controller
{
    //
	
	

	    public function showChildDataPage(){
    	$childData = Enfant::where('STATUEENF', '0')
    				  ->orWhere('STATUEENF', '1')
    				  ->orWhere('STATUEENF', '2')
    				  ->get();

    	return view('GestDocuments.ConsultDoc', compact('childData'));

    }


    	//Needed





}
